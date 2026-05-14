<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Session,Hash, DB;
use Illuminate\Support\Facades\Validator;
use App\InstituteModel;


class InstitutionController extends Controller
{
	
	public function selctsubcategory(Request $request)
    {
    $id = $request->input('id'); 
     $data['subscope']=DB::table("tbl_subscope")->where('scope_id',$id)->get();
    foreach ($data['subscope'] as $plist){							  
	echo $data =   '<option value="'.$plist->subs_id.'">'.$plist->subs_name.'</option>';
    }   
    }

    /* unvercity */
    function institutionm(Request $request)
	{
    //echo $request->segment(2); die;		
	if(!empty(Auth::user()->name))
            {       
		switch($request->segment(2)){
		
   	    	case 'add_university';
			 $data['universitydata'] = '';
			 $data['title']= "Add University";  
			 $data['state']= DB::select("SELECT * FROM `states`");
			 $data['unvercitylist']= DB::select("SELECT * FROM `tbl_unvercitylist`");
			 $data['scope']= DB::select("SELECT * FROM `tbl_scope`");
			 $data['subscope']= DB::select("SELECT * FROM `tbl_subscope`");
		     return view('Admin.add_institution')->with($data);
			 break;			 
			 
			  case 'institute_save':
			   
			    if(empty($request->input('s_idd'))){
			     $messages = array(
                   'whatapplink.required'=>'You cant leave empty',
				   'institute_name.required'=>'You cant leave empty',
                   'unvercity_degree.required'=>'You cant leave empty',
				   'unvercity_cutofmark.required'=>'You cant leave empty',
				   'institute_logo.required'=>'You cant leave empty',
				   'institute_banner.required'=>'You cant leave empty',                  
				   'unvercity_scope.required'=>'You cant leave empty',
				   'institute_state.required'=>'You cant leave empty',
				   'unvercity_subscope.required'=>'You cant leave empty',
				   'description.required'=>'You cant leave empty',
				   'unvercity_type.required'=>'You cant leave empty',
				   
                      );
                   $rules = array(
                    'institute_name' => 'required',
					'whatapplink' => 'required',
                    'unvercity_degree' => 'required',
					'unvercity_cutofmark' => 'required|between:0,99.99',
                    'institute_logo' => 'required',
                    'institute_banner' => 'required',                   
                    'unvercity_scope' => 'required',
                    'institute_state' => 'required',
                    'unvercity_subscope' => 'required',
                    'description' => 'required',
					'unvercity_type' => 'required',
                    );					
				}else {
					
				 $messages = array(
                   'institute_name.required'=>'You cant leave empty',
				    'whatapplink.required'=>'You cant leave empty',
                   'unvercity_degree.required'=>'You cant leave empty',                  
				   'unvercity_scope.required'=>'You cant leave empty',
				   'institute_state.required'=>'You cant leave empty',
				   'unvercity_subscope.required'=>'You cant leave empty',
				   'unvercity_cutofmark.required'=>'You cant leave empty',
				   'description.required'=>'You cant leave empty',
				   'unvercity_type.required'=>'You cant leave empty',
                      );
                   $rules = array(
                    'institute_name' => 'required',
					'whatapplink' => 'required',
                    'unvercity_degree' => 'required',                 
                    'unvercity_scope' => 'required',
                    'institute_state' => 'required',
					'unvercity_subscope' => 'required',
                    'unvercity_cutofmark' => 'required|between:0,99.99',
                    'description' => 'required',
					'unvercity_type' => 'required',
                    );	
				}
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){	
      if($request->hasFile('institute_logo'))
      {
	  $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	
	                $image_path =  public_path('/images/institute/'.$simage->unvercity_logo.'');
                    if (file_exists($image_path)) {		
		              @unlink($image_path);
                     }   
      $image = $request->file('institute_logo');
      $institute_logo = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images/institute/');
      $image->move($destinationPath, $institute_logo);
      //echo'<pre>';var_dump($image);die;
       }
       else
	   {
       $institute_logo =   $request->input('institute_logo_old'); 
       }
      
      if($request->hasFile('institute_banner'))
      {
	  $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	
	                $image_path = public_path('/images/banner/'.$simage->unvercity_banner.'');
                    if (file_exists($image_path)) {		
		              @unlink($image_path);
                     }   	  
      $image = $request->file('institute_banner');
      $institute_banner = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images/banner/');
      $image->move($destinationPath, $institute_banner);
      //echo'<pre>';var_dump($image);die;
       }
       else
	   {
       $institute_banner = $request->input('institute_banner_old'); 
       }	  
                
	  if($request->hasFile('degree_labour'))
      {
	  $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	
	                $image_path =   public_path('/images/degreedata/'.$simage->institution_degree_labour.'');
                    if (file_exists($image_path)) {		
		              @unlink($image_path);
                     }    
      $image = $request->file('degree_labour');
      $degree_labour = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_labour);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $degree_labour = $request->input('degree_labour_old'); 
       }
	   
	  if($request->hasFile('degree_satisfaction'))
      {
	  $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	  
	                $image_path = public_path('/images/degreedata/'.$simage->institution_degree_satisfaction.'');	  
                    if (file_exists($image_path)) {		
		              @unlink($image_path);
                     }    	  
      $image = $request->file('degree_satisfaction');
      $degree_satisfaction = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_satisfaction);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $degree_satisfaction =  $request->input('degree_satisfaction_old');
       }
	   
	  if($request->hasFile('degree_access'))
      {
	   $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	  
	                $image_path =  public_path('/images/degreedata/'.$simage->institution_degree_access.'');
                    if (file_exists($image_path)) {		
		              @unlink($image_path);
                     }  	  
      $image = $request->file('degree_access');
      $degree_access = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_access);
      //echo'<pre>';var_dump($image);die;
       }
       else
	   {
       $degree_access =  $request->input('degree_access_old');
       }
	   
	   
	  if($request->hasFile('degree_academicrs'))
      {
	  $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	
	              $image_path =  public_path('/images/degreedata/'.$simage->institution_degree_academicrs.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                     }			 
      $image = $request->file('degree_academicrs');
      $degree_academicrs = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_academicrs);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $degree_academicrs = $request->input('degree_academicrs_old');
       }   		

       if($request->hasFile('Ponderacions_image'))
       {
        $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	
        $image_path =  public_path('/images/banner/'.$simage->Ponderacions_image.'');
          if (file_exists($image_path)) {                  			
            @unlink($image_path);
           }	
       $image = $request->file('Ponderacions_image');
       $Ponderacions_image  = $image->getClientOriginalName();
       $destinationPath = public_path('/images/banner/');
       $image->move($destinationPath, $Ponderacions_image);
       //echo'<pre>';var_dump($image);die;
        }
        else
         {
        $Ponderacions_image = $request->input('Ponderacions_image');
        } 
 
 
        if($request->hasFile('distribution_image'))
        {
            $simage = DB::table('tbl_unvercity')->where('unrs_id', $request->input('s_idd'))->first();	
            $image_path =  public_path('/images/banner/'.$simage->distribution_image.'');
              if (file_exists($image_path)) {                  			
                @unlink($image_path);
               }
        $image = $request->file('distribution_image');
        $distribution_image  = $image->getClientOriginalName();
        $destinationPath = public_path('/images/banner/');
        $image->move($destinationPath, $distribution_image);
        //echo'<pre>';var_dump($image);die;
         }
         else
          {
         $distribution_image = $request->input('distribution_image');
         }  

       //  echo strip_tags($request->input('address')); die;

       $titleds = array();
       $titleds1 = array();

      $titleds = $request->input('title');

      foreach($titleds as $value){

       if(!empty($value))  {

       $titleds1[] = $value;   

       } 

      }
				  
         $distributions= json_encode($request->input('distribution') , JSON_FORCE_OBJECT);
          $sub_titles = json_encode($request->input('sub_title') , JSON_FORCE_OBJECT);
         $titles = json_encode($titleds1 , JSON_FORCE_OBJECT);

        
				  $update =  DB::table('tbl_unvercity')
                  ->where('unrs_id', $request->input('s_idd'))
                   ->update(['unvercity_name' => $request->input('institute_name'),
					   'unvercity_logo' => $institute_logo,
					   'unvercity_banner' =>  $institute_banner,
					    'whatapplink' => $request->input('whatapplink'),
					   'unvercity_state' => $request->input('institute_state'),
					   'unvercity_degree' => $request->input('unvercity_degree'),
					   'unvercity_type' => $request->input('unvercity_type'),
                       'cutofmark' => $request->input('unvercity_cutofmark'),					   
					   'description' => $request->input('description'),
                       'assignatura' => $request->input('assignatura'),
					   'description' => $request->input('description'),
					   'Objectius' => $request->input('Objectius'),
                       'podre' => $request->input('podre'),
                        'credits' => strip_tags($request->input('address')),
                       'address' => $request->input('address'),
                       'Ponderacions_image' => $Ponderacions_image,
                        'distribution_image' => $distribution_image,
                        'distribution' => $distributions,
                        'title' => $titles,
                         'sub_title' => $sub_titles,
                        'sub_unvercity_degree' => $request->input('sub_unvercity_degree'),
                        'univercity_url' => $request->input('univercity_url'),
                        'contact1' => $request->input('contact1'),
                        'contact2' => $request->input('contact2'),
					   'contact3' => $request->input('contact3'),
					   'unvercity_scope' => $request->input('unvercity_scope'),
					   'unvercity_subscope' => $request->input('unvercity_subscope'),
					   'institution_degree_labour' => $degree_labour,
					   'institution_degree_satisfaction' => $degree_satisfaction,
					   'institution_degree_access' => $degree_access,
					   'institution_degree_academicrs' => $degree_academicrs]);	   
	                   if($update){
	                   return redirect('admin/university_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/university_list')->with('error','Error To update!');
   	                   }					
				}else{

                 
	  if ($request->hasFile('institute_logo'))
      {
      $image = $request->file('institute_logo');
      $institute_logo = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images/institute/');
      $image->move($destinationPath, $institute_logo);
      //echo'<pre>';var_dump($image);die;
       }
       else
	   {
       $institute_logo = '';
       }
      
      if ($request->hasFile('institute_banner'))
      {
      $image = $request->file('institute_banner');
      $institute_banner = time().'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('/images/banner/');
      $image->move($destinationPath, $institute_banner);
      //echo'<pre>';var_dump($image);die;
       }
       else
	   {
       $institute_banner = '';
       }	  
                
	  if($request->hasFile('degree_labour'))
      {
      $image = $request->file('degree_labour');
      $degree_labour = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_labour);
      //echo'<pre>';var_dump($image);die;
       }
       else
	   {
       $degree_labour = '';
       }
	   
	  if($request->hasFile('degree_satisfaction'))
      {
      $image = $request->file('degree_satisfaction');
      $degree_satisfaction = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_satisfaction);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $degree_satisfaction = '';
       }
	   
	  if($request->hasFile('degree_access'))
      {
      $image = $request->file('degree_access');
      $degree_access = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_access);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $degree_access = '';
       }
	   
	  if($request->hasFile('degree_academicrs'))
      {
      $image = $request->file('degree_academicrs');
      $degree_academicrs  = $image->getClientOriginalName();
      $destinationPath = public_path('/images/degreedata/');
      $image->move($destinationPath, $degree_academicrs);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $degree_academicrs = '';
       } 
       
       if($request->hasFile('Ponderacions_image'))
      {
      $image = $request->file('Ponderacions_image');
      $Ponderacions_image  = $image->getClientOriginalName();
      $destinationPath = public_path('/images/banner/');
      $image->move($destinationPath, $Ponderacions_image);
      //echo'<pre>';var_dump($image);die;
       }
       else
	    {
       $Ponderacions_image = '';
       } 


       if($request->hasFile('distribution_image'))
       {
       $image = $request->file('distribution_image');
       $distribution_image  = $image->getClientOriginalName();
       $destinationPath = public_path('/images/banner/');
       $image->move($destinationPath, $distribution_image);
       //echo'<pre>';var_dump($image);die;
        }
        else
         {
        $distribution_image = '';
        }   
         $distributions= json_encode($request->input('distribution') , JSON_FORCE_OBJECT);

         $titleds = array();
         $titleds1 = array();

        $titleds = $request->input('title');

        foreach($titleds as $value){

         if(!empty($value))  {

         $titleds1[] = $value;   

         } 

        }

         $titles = json_encode($titleds1 , JSON_FORCE_OBJECT);
          $sub_titles = json_encode($request->input('sub_title') , JSON_FORCE_OBJECT);
	     $unvercityadd = DB::table('tbl_unvercity')->insertGetId(
                    array('unvercity_name' => $request->input('institute_name'),
					   'unvercity_logo' => $institute_logo,
					   'unvercity_banner' =>  $institute_banner,
					    'whatapplink' => $request->input('whatapplink'),
					   'unvercity_state' => $request->input('institute_state'),
					   'unvercity_degree' => $request->input('unvercity_degree'),
                       'sub_unvercity_degree' => $request->input('sub_unvercity_degree'),
					   'unvercity_type' => $request->input('unvercity_type'),
					   'cutofmark' => $request->input('unvercity_cutofmark'),
					   'assignatura' => $request->input('assignatura'),
					   'description' => $request->input('description'),
					   'Objectius' => $request->input('Objectius'),
                       'podre' => $request->input('podre'),
                        'credits' => strip_tags($request->input('address')),
                       'address' => $request->input('address'),
                       'Ponderacions_image' => $Ponderacions_image,
                        'distribution_image' => $distribution_image,
                        'distribution' => $distributions,
                        'title' => $titles,
                         'sub_title' => $sub_titles,
                         'univercity_url' => $request->input('univercity_url'),
                        'contact1' => $request->input('contact1'),
                        'contact2' => $request->input('contact2'),
					   'contact3' => $request->input('contact3'),
					   'unvercity_scope' => $request->input('unvercity_scope'),
					   'unvercity_subscope' => $request->input('unvercity_subscope'),
					   'institution_degree_labour' => $degree_labour,
					   'institution_degree_satisfaction' => $degree_satisfaction,
					   'institution_degree_access' => $degree_access,
					   'institution_degree_academicrs' => $degree_academicrs));
                      // print_r($request->input('contact1'));die;
	            if($unvercityadd){
	               return redirect('admin/university_list')->with('success','Data add successfully!');
                }else{
	            return redirect('admin/university_list')->with('error','Error To Add!');
   	            }
	            }  }
			 
                break;  			 
			
			case 'edituniversity':
			    $data['title']= "Edit University";  
			    $data['state']= DB::select("SELECT * FROM `states`");
				$data['scope']= DB::select("SELECT * FROM `tbl_scope`");
				$data['subscope']= DB::select("SELECT * FROM `tbl_subscope`");
				$data['unvercitylist']= DB::select("SELECT * FROM `tbl_unvercitylist`");
                $data['universitydata'] = DB::table('tbl_unvercity')->where('unrs_id',$request->segment(3))->first();	
                return view('Admin.add_institution')->with($data);
                break; 
				
			case 'viewuniversity':
			    $data['title']= "View University";  
			    $data['state']= DB::select("SELECT * FROM `states`");
				$data['scope']= DB::select("SELECT * FROM `tbl_scope`");
				$data['subscope']= DB::select("SELECT * FROM `tbl_subscope`");
				$data['unvercitylist']= DB::select("SELECT * FROM `tbl_unvercitylist`");
                $data['universitydata'] = DB::table('tbl_unvercity')->where('unrs_id',$request->segment(3))->first();	
                return view('Admin.view_institution')->with($data);
                break; 
				
			case 'deleteuniversity';
			      $simage = DB::table('tbl_unvercity')->where('unrs_id',$request->segment(3))->first();	
	               $image_path =  public_path('/images/degreedata/'.$simage->institution_degree_academicrs.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                     }
					$image_path =  public_path('/images/degreedata/'.$simage->institution_degree_labour.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                     }
					$image_path =  public_path('/images/degreedata/'.$simage->institution_degree_satisfaction.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                     }
					 
				   $image_path =  public_path('/images/degreedata/'.$simage->institution_degree_access.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                     }
					 
					$image_path =  public_path('/images/institute/'.$simage->unvercity_logo.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                    } 
					 
                   $image_path =  public_path('/images/banner/'.$simage->unvercity_banner.'');
                    if (file_exists($image_path)) {                  			
		              @unlink($image_path);
                     }
					 
				    DB::table('tbl_unvercity')->where('unrs_id',$request->segment(3))->delete();
	                return redirect('admin/university_list')->with('success','Data delete successfully!');
					break;	
			 
			 
			 default:			
		      $data['unvercity'] =DB::table('tbl_unvercity')
			                       ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
			                       ->get();      
              $data['title']= "University";
              return view('Admin.institution_list')->with($data);  
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	}	
	
	/* unvercity */ 
    
	public function institutedelete(Request $request){
     $id = $request->id; 
      $result= DB::table('tbl_institution') ->where('institutions_id', $id) ->update(['institution_deleted' => 0]);
        if($result){ 
         // Session::flash('success', 'Data is deleted successfully.');
            echo json_encode(array('status'=>1, 'msg'=>'Institution Deleted Successfully'));

        }else{
        //  Session::flash('error', 'Data is deleted successfully.');
            echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));

        }

    }



     public function status_institute(Request $request){
        $id = $request->id;
        $status = $request->status; 
         if($status == 0){
            $institution_status= 1;
         }
        else{
            $institution_status= 0;
         }

      $result= DB::table('tbl_unvercity') ->where('unrs_id', $id) ->update(['unvercity_status' => $institution_status]);
        if($result){ 

         // Session::flash('success', 'Data is deleted successfully.');

            echo json_encode(array('status'=>1, 'msg'=>'Institution Status Updated Successfully'));

        }else{
        //  Session::flash('error', 'Data is deleted successfully.');
            echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));

        }

    }


    public function institute_export(){
      $filename = "Institute_" . date('Y-m-d') . ".csv";
      $delimiter = ","; 
      $f = fopen('php://memory', 'w'); 
      $fields = array('Institute ID', 'Institute Type', 'Institute Name', 'Assessment Level', 'Institution Logo', 'Institution Banner', 'Institute State', 'Institution link' , 'Street Address', 'Description', 'Institution Status', 'Institute City', 'Institute Postcode', 'Added Date', 'Last Update');
      fputcsv($f, $fields, $delimiter);
      $data['result'] = DB::table('tbl_institution')->select('*')->get(); 
      if(count($data['result']) > 0){ 
      foreach ($data['result'] as $data){
        $lineData = array($data->institutions_id, $data->institution_type, $data->institution_name, $data->assessment_level, $data->institution_logo, $data->institution_banner, $data->institute_state, $data->institution_link, $data->institution_address, strip_tags($data->description), $data->institution_status, $data->institute_city, $data->institute_postcode, $data->created_at, $data->updated_at); 
        fputcsv($f, $lineData, $delimiter);
      }
      } 

    fseek($f, 0); 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    fpassthru($f);  

    }


}

