<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User, Hash; 
use Illuminate\Support\Facades\Auth; 
use  DB;
//use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;
use Session;
use Helper;
use Mail; 
use URL;


class UserController extends Controller 
{
public $successStatus = true;
public $failureStatus = false;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 

    public function signin($id=null,$tab=null,$tabid=null){
     
    //   public function signin(){
    Session::put('tab', $tab);
    Session::put('pagename', $id);
  //  Session::put('tabid', $tabid);

      $person = Session::get('pagename');
      $person1 = Session::get('tab');
    //  $person2 = Session::get('tabid');
    // dd($person2);

        return view('auth/signin');
    }
	
	public function verify(){

        return view('auth/verifynumber');
    }
	
	public function signup(){
        $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_id', 'DESC')->get();
		$data['degreelist'] = DB::table('tbl_unvercity')->orderBy('unvercity_degree', 'asc')->get();
	    $data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get();
        return view('auth/signup')->with($data);
    }

    public function dashboard(){
		if(!empty(Auth::user()->id)){
        $data['userdata'] = DB::table('users')->where('id',Auth::user()->id)->first();  
        $undid = $data['userdata']->unversity;

        $data['detaildegree'] = DB::table('tbl_unvercity')->where('tbl_unvercity.unvercity_name',$undid)
	                       ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
	                       ->first();
                        
        return view('dashboard')->with($data);
		}else {
		 return redirect('login');	
		}
    }
	
	public function user_save(Request $request) 
    {   
        
        /* $validator = Validator::make($request->all(), [ 
            'f_name'  => 'required',
            'l_name'  => 'required',
          
            'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->where(function ($query) {
                        return $query->where('status','=', 1);
                    }),
                ],
           
           
            'pass'  => [
                'required', 
                // 'min:8', 
                // 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/'
                
           ],
          
        ],
        [   
            'f_name.required'       =>"First name is required",
            'l_name.required'        =>"last name is required",
            'email.email'               =>"Please enter vailid email id",
            'email.unique'              =>"Email id already exists",          
            'password.required'         => "Password is required",
            // 'password.min'              => "Please password 8 digits or character",
            // 'password.regex'            => "Password should be contain one capital latter, numbar and special character",
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message)
            {   
            return redirect('signup')->with('error',$message); 
			           
            }
        } */
		
		 $messages = array(                                
				   'email.required'=>'Please enter vailid email id',
				  // 'mnuber.required'=>'Please enter vailid Numero',
                      );
                   $rules = array(                  
				   'email' => 'required|email|unique:users,email',
				  // 'mnuber' => 'required|unique:users,mobileno',	
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }		
		else {
        $forminput  = $request->all();		
	
           //  $digits                 = 6;
           //  $forminput['otp']                    = rand(pow(10, $digits-1), pow(10, $digits)-1);
             
            //$forminput              = $request->all();
            $user                   = new User; 
            $user->first_name         = $request->f_name;
            $user->last_name         = $request->l_name;
            $user->name         = $request->f_name;
            $user->password         = Hash::make($request->pass);
            $user->status      = '0';
            $user->user_role     = 2;           
            $user->email            = $request->email;
            $user->scope   = $request->scope;
			$user->birth_date   = $request->birth_date;
           // $user->vrfn_code =  $forminput['otp'];
           $user->save();
          //  print_r($user);die;
              $user=encrypt($request->email."`^|^|`".$request->password);

            Mail::send('emails.mail_send', ["user" => $user], function ($message) use ($request) {

                $message->from('info@votivetech.in', 'register');

                $message->to($request->email);

                $message->subject('Registration Successfully');
            });
           
          // return view('varify');
           return redirect("signup")->with('success','Acceda al email que le hemos enviado para completar el registro.');

			//$user->address   = $forminput['autocomplete'];
			//$user->email   = $forminput['email'];
			//$user->unversity   = $forminput['univercity'];
			//$user->univedegree   = $forminput['univedegree'];
           // $user->created_at       = Date('Y-m-d H:i:s');
			//$user->vrfn_code = $forminput['otp'];
           
		//     if(!empty($user->save())){
		// 	$sDestination = '34'.$forminput['email'].'';
		//     //$sMessage = 'hello bb new';
		//     $sSenderId = 'Alejo';
		//     $sMessage = "G-".$forminput['otp']." es tu código de verificación de Unisos.";
		//     Helper::sendSms($sDestination,$sMessage,$sSenderId);	
				
		// 	//Auth::loginUsingId($user->id);	
        //    // return redirect('signup')->with('success','Login Successfully!'); 
		// 	 return redirect("verify/$user->id")->with('success','Message Send Successfully , Check Message on your Email!'); 
            
		// 	   }else {
		// 		   return redirect('signup')->with('error','error to register'); 
        //            return redirect("verify/$user->id")->with('success','Message Send Successfully , Check Message on your Mobile!'); 
		// 	   }
		}
    
    }

    public function verifyVendorEmail(Request $request)
	{
 
		try {
			$user=decrypt($request->user);
			$credentials=explode("`^|^|`",$user);
            $user_data = DB::table('users')->where("email", $credentials[0])->where('user_role', '=', 2)
            ->where('status', '=', 0)->first();

            $login_status = 1;
			$checkIfRegister=User::where("email",$credentials[0])->exists();
			if ($checkIfRegister) {
				DB::table('users')
                ->where('id', $user_data->id)
                ->update([
                    'login_verifys' => $login_status
                ]);
			}
		} 
		catch (DecryptException $e) {
			return $e;	
		}
		//session(['credentials' => ["email" => $credentials[0],"password" => $credentials[1]]]);
        return redirect("login")->with('success','Bienvenido! Registro completado.');
	}
	
	public function verifycode(Request $request){
       
    $userid = $request->input('uderid');
    $code = $request->input('code');
	
    $data['usersdata']  = DB::table('users')->where('id', $userid)->where('vrfn_code', $code)->get();
    $datauser = count($data['usersdata']);
    if($datauser!=0){
    DB::table('users')
             ->where('id',$userid)
             ->update(['vrfn_no'=>1,'vrfn_code'=>null]);  

       Auth::loginUsingId($userid);	
        return redirect('login')->with('success','Otp verification Successfully!'); 
       }
       else {

      return redirect("verify/$userid")->with('error', 'Please Enter correct code.');
       }
	}
	
	public function login(Request $request){ 
       
		 $person = Session::get('pagename');
         $person1 = Session::get('tab');
       //  $person2 = Session::get('tabid');

        $validator = Validator::make($request->all(), [ 
            //'email' => 'required|email',
            'email' => 'required', 
            'password' => 'required', 
        ],
        [
            'email.required' => "Email is required",
            'password.required' =>  "Password is required",
        ]
        );
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message)
            {   
               return redirect('login')->with('error',$message);        
            }
        }
        $email = $request->email;
        $user = DB::table('users')               			
                ->where('user_role', '=', 2)
				 ->where('status', '=', 0)
                ->where(function($query) use ($email){
                    $query->where('email', $email);
                })           
                ->first();
             // $user_id =  Auth::loginUsingId($user->id);
             // dd($user_id->id);

        if(!empty($user)){
            $credentials = array(
                        'email'         => $user->email,
                        'password'      => $request->password                       
                    );          
            if (Auth::attempt($credentials)){  

                if(!empty($person) && $person1 != 'tab'){

                    return redirect('univercity'); 
                }
                else{
                    
                    if(!empty($person) && !empty($person1)){
                      
                     return redirect("infodetail/$person");
                     }
                    
               $users =Auth::loginUsingId($user->id);
               
               $detaildegree = DB::table('tbl_unvercity')->where('tbl_unvercity.unvercity_name',$users->id)
               ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
               ->first();
              
                if(!empty($users->unversity)){
                    return redirect('universitydegree')->with('success','Login Successfully!'); 
                }else{
               $user_id = $users->id;

               $login_status = 1;
               $today = date("Y-m-d");

               DB::table('users')->where('id', '=' ,$user_id)->update(['login_status'=>$login_status, 'created_at'=>$today, 'address' => $users->address]);
    
            // return redirect('universitydegree')->with('success','Login Successfully!'); 

             return redirect('coneixfuture')->with('success','Login Successfully!'); 
			   }
            }

           // } 
            }else {
				   return redirect('login')->with('error','error to signin');  
			   }
    }
	else {
		return redirect('login')->with('error','your account blocked by admin.');  
	}

	}
	public function user_update(Request $request) 
    { 
      $name = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profile_img');         
                $imagePath = $destinationPath. '/'.  $name;
                $image->move($destinationPath, $name);
            }
            else {
                $name=$request->oldimage;
            } 
		 //$name=$request->oldimage;	
	  //echo $name;
	 $update =  DB::table('users')
             ->where('id',Auth::user()->id)
             ->update(['first_name'=>$request->f_name, 'last_name'=>$request->l_name,'scope'=>$request->scope,'instagram'=>$request->instagram,'profile_pic'=>$name,'address'=>$request->address]); 
			 if($update) {
			  return redirect('user/dashboard')->with('success','update Successfully!'); 
			   }else {
				   return redirect('user/dashboard')->with('success','update Successfully!');  
			   } 
	}
	
	public function resetpass(Request $request)
    {
		//echo 'hello'; die;
         //$data['user_id']= $id;
         //$data['title']= 'Reset Password';
             return view('auth/reset');
    } 
	
	public function forgotpass(Request $request)
    {
        $email = $request->email;
		//$email = 'votivephp.nehaojha@gmail.com';
        $pass_token = rand(100000, 999999); 

        //echo $pass_token  = str_random(6); die;   
         
        $sql =DB::table('users')->where('email', $email)->update(['vrfn_code' =>$pass_token]); 
       
        if($sql){      
           
            $data['usersdata']  = DB::table('users')->where('email', $email)->where('vrfn_code', $pass_token)->get();
        $id =   $data['usersdata'][0]->id;

        $searchArray = array("{user_email}");  

        $replaceArray = array($email);
        
        //$url = '{url(admin/forgot)}';
		
		$address = $email; 
		$subject = 'Forgot Password';
        $message = "<h3>Hello Dear,</h3>          
            <p>Please use this code <h4><b>".$pass_token."</b></h4></p>
        <p>Click on the button below the reset your password.</p>
        <a href='".url('resetpass/'.base64_encode($id).'')."'>Click Here</a>";
		
         Helper::sendMail($address,$subject,$message);     
			
            return redirect('password/reset')->with('success', 'Email sent successfully.');
        }
        else {
          
         return redirect('password/reset')->with('success', 'Please enter vaild  mail-id.');
      
        }
    }
	
	public function resetpasss($id)
    {
         $data['user_id']= $id;
         $data['title']= 'Reset Password';
             return view('auth.resetforgot', ['data'=>$data]);
    } 
	
	public function updateforgot(Request $request)
    {
    $token = base64_decode($request->input('token'));
    $token_id = $request->input('token_id');
    $password = $request->input('password');
    $password_confirmation = Hash::make($request->input('password_confirmation'));

    if($request->input('password')!= $request->input('password_confirmation')){
    return redirect('resetpass/'.$request->input('token').'')->with('warning', 'Password confirmation does not match password!');
    }else {
    $data['usersdata']  = DB::table('users')->where('id', $token)->where('vrfn_code', $token_id)->get();
    $datauser = count($data['usersdata']);
    if($datauser!=0){
    DB::table('users')
             ->where('id',$token)
             ->update(['vrfn_code'=>null, 'password'=> $password_confirmation]);  

       return redirect('resetpass/'.$request->input('token').'')->with('success', 'Password Update successfully.');
       }
       else {

      return redirect('resetpass/'.$request->input('token').'')->with('warning', 'Please Enter correct code.');
       }
    }   
    }
	

	public function profile(Request $request)
    {
	if(!empty(Auth::user()->id)){
	$data['degreelist'] = DB::table('tbl_unvercity')->orderBy('unvercity_degree', 'asc')->get();
	$data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get();
	$data['userdata'] = DB::table('users')->where('id',Auth::user()->id)->first(); 
	return view('profile')->with($data);
	}else {
		 return redirect('login');	
		}
    }
	
	public function selectdegree(Request $request)
    {
    $id = $request->input('id'); 
     $data['degreeun']=DB::table("tbl_unvercity")->where('unvercity_name',$id)->orderBy('unvercity_degree', 'asc')->get();
    foreach ($data['degreeun'] as $plist){							  
	echo $data =   '<option value="'.$plist->unrs_id.'">'.$plist->unvercity_degree.'</option>';
    }   
    }
		
	public function updateprofile(Request $request) 
    { 
	$name = '';
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profile_img');         
                $imagePath = $destinationPath. '/'.  $name;
                $image->move($destinationPath, $name);
            }
            else {
                $name=$request->oldimage;
            }
	 // echo $name;
	 $update =  DB::table('users')
             ->where('id',Auth::user()->id)
             ->update(['s_name'=>$request->name, 'address'=>$request->autocomplete,'mobileno'=>$request->mnuber,'instagram'=>$request->instagram,'unversity'=>$request->univercity,'univedegree'=>$request->univedegree,'profile_pic'=>$name ]); 
			 if($update) {
			  return redirect('universitydegree')->with('success','update Successfully!'); 
			   }else {
				   return redirect('universitydegree')->with('error','error to update');  
			   } 
	}
	
	public function saveimage(Request $request){
		//echo 'hello'; die;
		/* $image_parts = explode(";base64,", $request->image);
		$name = '';
            if ($request->hasFile($request->image)) {
                $image = $request->file($image_parts[1]);
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/profile_img');         
                $imagePath = $destinationPath. '/'.  $name;
                $image->move($destinationPath, $name);
            }
            else {
                $name=$request->oldimage;
            } */
			
		//echo $name; die; */
		$folderPath = public_path('/uploads/profile_img/');  

        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $file = $folderPath . uniqid() . '.png';

        $hhh =  file_put_contents($file, $image_base64); 
		
		$hh1 = explode('/' , $file);
		$image_base641 = end($hh1);  
		$update =  DB::table('users')
             ->where('id',Auth::user()->id)
             ->update(['profile_pic'=>$image_base641]); 
           			 
		return  $hh1;	
	}
	
	
	public function degreenfo(Request $request)
    { 
       // print_r($request->all());die;
	if(!empty(Auth::user()->id)){
	$data['userdata'] = DB::table('users')->where('id',Auth::user()->id)->first();
	$undid = $data['userdata']->unversity;
	
	$data['detaildegree'] = DB::table('tbl_unvercity')->where('tbl_unvercity.unvercity_name',$undid)
	                       ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
	                       ->first();
                           
	 $data['userlistc'] = DB::table('users')->where('unversity',$undid)->where('id', Auth::user()->id)->get();	
     					   
	 $data['userlist'] = DB::table('users')->where('unversity',$undid)->where('id', '!=' , Auth::user()->id)->get();					   
    //echo 	$data['userdata']->univedegree; die;
	return view('userinfo')->with($data);
	}else {
		 return redirect('login');	
		}
    }
	
	public function logout(Request $request){	

        $users =Auth::id();
      
        $login_status = 0;


        DB::table('users')->where('id', '=' ,$users)->update(['login_status'=>$login_status]);

        Auth::logout();

        $person2 = Session::get('tabid');

        $request->session()->forget('tabid');
 
        return redirect('/');
    }

   

}