<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Session,Hash, DB;
use Illuminate\Cookie\CookieJar;
use Cookie, Input;




class AdminController extends Controller
{
   public function login()
        {
		$data['title']= "Login";
        return view('Admin.Sign-In', ['data'=>$data]);
        }



    public function adminlogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
		 $user = DB::table('users')               			
                ->where('UserRoll', '=', 1)              
                ->where(function($query) use ($email){
                    $query->where('email', $email);
                })           
                ->first();
		if( $user){
        if (Auth::attempt(['email' => $email, 'password' => $password] )){

             return redirect('/admin/dashboard')->with('success', 'Login successfully.');

        }}
        else
        {
		return redirect('/admin')->with('warning', 'Invalid user id and password.');
        }

     }

     public function logout(Request $request) {
      Auth::logout();
      return redirect('admin/');
    }

    public function dashboard(Request $request){

      $today = date("Y-m-d");
     
        $data['users_ipaddress']=DB::table('user_view')->whereDate('created_at',$today)->count('ip_address');
        
         $data['user_login_data']=DB::table('users')->where('user_role', '=', 2)->where("login_status",1)->first();
      
         $data['user_view']=DB::table('users')->whereDate('created_at',$today)->where('user_role', '=', 2)->where("login_status",1)->get();

        //  if(count($data['user_view'])>0){

        //  foreach($data['user_view'] as $value){
        //   $data['userss'] =$value->name;
        //  }
       
        // }else{
        //   $data['userss']='';
        // }

        $data['usercount'] = count($data['user_view']);
      
        if(!is_null($data['user_login_data'])){
          if(!session()->has($data['user_login_data']->user_role."_view")){
            $data['user_login_data']->views= $data['user_login_data']->views+1;
            DB::table('users')
                ->where('id', $data['user_login_data']->id)
                ->update([
                    'views' => $data['user_login_data']->views+1
                ]);
          
              session([$data['user_login_data']->user_role."_view"=> 'true']);
          }
        }
        
        $data['title']= "Dashboard";     
       
        if(empty(Auth::user()->user_role)
        ||  Auth::user()->user_role == 2){
          return redirect('/admin/');
        }else{
          return view('Admin.dashboard')->with($data);
        }
        // return view('Admin.dashboard')->with($data);
    }

    public function ajaxdashboard(Request $request){
     
        $searchpro = $request->all();
        $startdate = $searchpro['data']['startdate']; 
       $enddate = $searchpro['data']['enddate']; 
       
       $data['user_view']=DB::table('users')->where('user_role', '=', 2)->where("login_status",1)->get();
      
       foreach($data['user_view'] as $items){
       
       $final_date = DB::table('users')->whereBetween('created_at',[$startdate,$enddate])->where('id',$items->id)->get();
       
         if(!empty($final_date)){
      
         $data['users_ipaddress'] = DB::table('user_view')->whereBetween('created_at',[$startdate,$enddate])->count('ip_address');
 
         $data['user_view']=DB::table('users')->whereBetween('created_at',[$startdate,$enddate])->where('user_role', '=', 2)->where("login_status",1)->get();
  
         $data['usercount'] = count($data['user_view']);
         }

       }
    
           $data['title']= "Dashboard";
           return view('Admin.ajaxdashboard')->with($data);
  }
   
     public function course(){ 
    	$data= "Add Institution";
    	return view('Admin.add_institution', ['data'=> $data]); 	

    }

     public function profile(){
        $data['title']= "View Profile";
        return view('Admin.admin_profile', ['data'=> $data]);
     }

      public function adminupdate(Request $request){
        $id = $request->user_id;
        $name = $request->name;

        $email = $request->email;

        $updated_at = datetime();

        $Result =DB::table('users')->where('id', $id) ->update(['name' => $name, 'email'=> $email, 'updated_at' =>$updated_at]);


        if($Result){
          $msg="User Updated Successfully";
          return redirect('/admin/profile/1')->with('success', $msg);
        }else{
          $error="Oop's Something went wrong.";
          return redirect('/admin/profile/1')->with('error', $error);
        }

    }

   public function change_password(Request $request)
    {

    $user_id = $request->user_id;
    if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
         return redirect('/admin/profile'.'/'.$user_id)->with("danger","Your current password does not matches with the password you provided. Please try again.");
       }

      elseif(strcmp($request->get('confirm_password'), $request->get('password')) == 0){
		  //Current password and new password are same
           if(strcmp($request->get('oldpassword'), $request->get('password')) == 0){         
          return redirect('/admin/profile'.'/'.$user_id)->with("danger","New password cannot be same as your current password. Please choose a different password.");
        }
        else
        {
        $user = Auth::user();
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect()->back()->with("success","Password changed successfully."); 
        }           
       }
       else
		   {
        return redirect('/admin/profile'.'/'.$user_id)->with("danger","Confirm and new password must be same . Please try again.");
       }
}

  /* Forgot Password  */
  public function forgotpassword()
        {
         $data['title']= "Forgot Password";
         return view('Admin.forgot-password', ['data'=>$data]);
        }
    
  public function forgotpass(Request $request)
       {
    $email = $request->email;
    $pass_token = rand(1000, 9999); 

    //echo $pass_token  = str_random(6); die;   
     
    $sql =DB::table('users')->where('email', $email)->update(['pass_token' =>$pass_token]); 
    if($sql){      
        $data['usersdata']  = DB::table('users')->where('email', $email)->where('pass_token', $pass_token)->get();
    $id =   $data['usersdata'][0]->id;

    $searchArray = array("{user_email}");  

        $replaceArray = array($email);
    
    $url = '{url(admin/forgot)}';
    
        $email_content = "<h3>Hello Dear,</h3>
        Admin<br>
        <p>Please use this code <h4><b>".$pass_token."</b></h4></p>
    <p>Click on the button below the change your password.</p>
    <a href='".url('admin/resetpass/'.$id.'')."'>Click Here</a>";
    
    //print_r($email_content); die;
    
        $content = str_replace($searchArray, $replaceArray, $email_content);
        $data = [
            'name'      => 'Admin',
            'email'     => $email,
            'subject'   => "Forgot Password",
            'content'   => $content,
        ];
        send_mail($data); 
        return redirect('admin')->with('success', 'Email sent successfully.');
    }
    else {
     return redirect('admin/forgotpwd')->with('warning', 'Please enter vaild  mail-id.');
  
    }
    }


  public function resetpass($id)
        {
         $data['user_id']= $id;
     $data['title']= 'Reset Password';
         return view('Admin.reset-password', ['data'=>$data]);
        } 

 public function updatepassword(Request $request)
{
  
$user_id = $request->input('user_id');
$token_id = $request->input('token_id');
$new_pass = Hash::make($request->input('new_pass'));

if($request->input('new_pass')!= $request->input('crtm_pass')){
return redirect('admin/resetpass/'.$user_id.'')->with('warning', 'Password confirmation does not match password!');
}else {
$data['usersdata']  = DB::table('users')->where('id', $user_id)->where('pass_token', $token_id)->get();
$datauser = count($data['usersdata']);
if($datauser!=0){
DB::table('users')
         ->where('id',$user_id)
         ->update(['pass_token'=>0, 'password'=>$new_pass]);  

   return redirect('admin')->with('success', 'Password Update successfully.');
   }
   else {

  return redirect('admin/resetpass/'.$user_id.'')->with('warning', 'Please Enter correct code.');
   }
}   
}    
  /* Forgot Password  */


}

