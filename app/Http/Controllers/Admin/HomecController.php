<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Session,Hash, DB;
use Illuminate\Support\Facades\Validator;
use App\InstituteModel;


class HomecController extends Controller
{
 
   /* hometornejos section */
   function hometornejosm(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_htournaments';
			 $data['title']= "Add Home Page Tournaments";  
			 $data['tournamentsdata'] = '';			
		     return view('Admin.home.add_tornejoss')->with($data);
			 break;			 
			 
			  case 'htournaments_save':	
            if(empty($request->input('s_idd'))){			  
			     $messages = array(                                
				   'title.required'=>'You cant leave field empty',
                   't_image.required'=>'You cant leave field empty',
                   'description.required'=>'You cant leave field empty',				   
                      );
                   $rules = array(                  
				   'title' => 'required',
                   't_image' => 'required',
                   'description' => 'required',  				   
                   );
				 }else {
				$messages = array(                                
				   'title.required'=>'You cant leave field empty',                  
                   'description.required'=>'You cant leave field empty',				   
                      );
                   $rules = array(                  
				   'title' => 'required',                  
                   'description' => 'required',  				   
                   ); 
				 }			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                 }else{
						 
				  if($request->input('s_idd')!=''){				
                    if($request->hasFile('t_image'))
                       {
	                  $simage = DB::table('tbl_hometornejos')->where('ht_id', $request->input('s_idd'))->first();	
	                  $image_path =  public_path('/images/home/'.$simage->t_image.'');
                        if (file_exists($image_path)) {		
		                @unlink($image_path);
                       }   
                     $image = $request->file('t_image');
                     $t_image = time().'.'.$image->getClientOriginalExtension();
                     $destinationPath = public_path('/images/home/');
                     $image->move($destinationPath, $t_image);
                     //echo'<pre>';var_dump($image);die;
                    }
                   else
	               {
                    $t_image =   $request->input('t_image_old'); 
                   }
				  $update =  DB::table('tbl_hometornejos')
                  ->where('ht_id', $request->input('s_idd'))
                   ->update(['title' => $request->input('title'),'t_image' =>$t_image,'description' => $request->input('description')]);	   
	                   if($update){
	                   return redirect('admin/hometournaments_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/hometournaments_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              	 if ($request->hasFile('t_image'))
                  {
                   $image = $request->file('t_image');
                    $t_image = time().'.'.$image->getClientOriginalExtension();
                     $destinationPath = public_path('/images/home/');
                    $image->move($destinationPath, $t_image);
                       //echo'<pre>';var_dump($image);die;
                    }
                  else
	                {
                    $t_image = 'no_image.png';
                  }
      	
		        $pid = DB::table('tbl_hometornejos')->insertGetId(
                    array('title' => $request->input('title'),'t_image' =>$t_image,'description' => $request->input('description')));
				
	            if($pid){
	               return redirect('admin/hometournaments_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/hometournaments_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'edithtournaments':	
			    $data['title']= "Edit  Home Tournaments Section"; 			
                $data['tournamentsdata'] = DB::table('tbl_hometornejos')->where('ht_id',$request->segment(3))->first();	
                return view('Admin.home.add_tornejoss')->with($data);
                break; 
				
							
			case 'deletehtournaments';
			          $simage = DB::table('tbl_hometornejos')->where('ht_id',$request->segment(3))->first();	
	                  $image_path =  public_path('/images/home/'.$simage->t_image.'');
                        if (file_exists($image_path)) {		
		                @unlink($image_path);
                       }   
				    DB::table('tbl_hometornejos')->where('ht_id',$request->segment(3))->delete();
	                return redirect('admin/hometournaments_list')->with('success','Data delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Home Tournaments Section List";         
               $data['subtoplist'] = DB::table('tbl_hometornejos')->orderBy('ht_id', 'asc')->get(); 
		       return view('Admin.home.tornejoss_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	  }
	
	/*Find University Flat  */
	
	/* University category */
    function universitycm(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_unccat';
			 $data['title']= "Add University Category";  
			 $data['uncdata'] = '';			
		     return view('Admin.home.add_uncate')->with($data);
			 break;			 
			 
			  case 'univer_save':			  
			     $messages = array(                                
				   'unc_name.required'=>'You cant leave scope field empty',
				   'us_name.required'=>'You cant leave scope field empty',
                      );
                   $rules = array(                  
				   'unc_name' => 'required',
                   'us_name' => 'required',				   
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_unvercitylist')
                  ->where('unc_id', $request->input('s_idd'))
                   ->update(['unc_name' => $request->input('unc_name'),'us_name' => $request->input('us_name')]);	   
	                   if($update){
	                   return redirect('admin/ucategory_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/ucategory_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_unvercitylist')->insertGetId(
                    array('unc_name' => $request->input('unc_name'),'us_name' => $request->input('us_name')));
				
	            if($pid){
	               return redirect('admin/ucategory_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/ucategory_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'editunccat':	
			    $data['title']= "Edit University Category";  
                $data['uncdata'] = DB::table('tbl_unvercitylist')->where('unc_id',$request->segment(3))->first();	
                return view('Admin.home.add_uncate')->with($data);
                break; 
				
							
			case 'deleteunccat';
				    DB::table('tbl_unvercitylist')->where('unc_id',$request->segment(3))->delete();
	                return redirect('admin/ucategory_list')->with('success','Essay Plan delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "University Category List";  
		       $data['unclistlist'] = DB::table('tbl_unvercitylist')->orderBy('unc_id', 'DESC')->get();     

		       return view('Admin.home.unc_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	}

	// public function universitytab(Request $request){

	// 	if(!empty(Auth::user()->name))
    //         {		
	// 	switch($request->segment(2)){
	// 		case 'add_tabdetails';
	// 		$data['title']= "Add University Tab Details"; 
	// 		 $data['unvercitylist']= DB::select("SELECT * FROM `tbl_unvercitylist`");
	// 	     return view('Admin.home.add_tabdetails')->with($data);
	// 		 break;	
			
	// 		 case 'add_tabdetails';
	// 		 $data['title']= "Add University Tab Details";  
	// 		 $data['uncdata'] = '';			
	// 	     return view('Admin.home.add_tabdetails')->with($data);
	// 		 break;			 
			 
	// 		  case 'add_tabdetails':			  
	// 		     $messages = array(                                
	// 			   'tab_name.required'=>'You cant leave scope field empty',
				  
    //                   );
    //                $rules = array(                  
	// 			   'tab_name' => 'required',
                 			   
    //                );
				 			  
    //              $validator = Validator::make($request->all(),$rules,$messages);
    //              if ($validator->fails())
    //                {
    //                return redirect()->back()->withErrors($validator->errors());
    //                  }else{
						
	// 			  if($request->input('s_idd')!=''){				
                
	// 			  $update =  DB::table('tbl_tabdetails')
    //               ->where('id', $request->input('s_idd'))
    //                ->update(['tab_name' => $request->input('tab_name')]);	   
	//                    if($update){
	//                    return redirect('admin/utab_list')->with('success','Data update successfully!');
    //                    }else{
	//                    return redirect('admin/utab_list')->with('error','Error To update!');
   	//                    }					
	// 			}else{         				
              		
	// 	        $pid = DB::table('tbl_tabdetails')->insertGetId(
    //                 array('tab_name' => $request->input('tab_name'),'unc_id' => $request->input('unc_id'),'description' => $request->input('description')));
	// 			dd($pid);
	//             if($pid){
	//                return redirect('admin/utab_list')->with('success','Data Added successfully!');
    //             }else{
	//             return redirect('admin/utab_list')->with('error','Error To Add!');
   	//             }
	//             }  
	// 			}
			 
    //             break;  			 
			
	// 		   case 'editunccat':	
	// 		    $data['title']= "Edit University Tab Details";  
    //             $data['uncdata'] = DB::table('tbl_tabdetails')->where('id',$request->segment(3))->first();	
    //             return view('Admin.home.add_tabdetails')->with($data);
    //             break; 
				
							
	// 		case 'deleteunccat';
	// 			    DB::table('tbl_tabdetails')->where('id',$request->segment(3))->delete();
	//                 return redirect('admin/utab_list')->with('success','Essay Plan delete successfully!');
	// 				break;	
			 
			 
	// 		 default:
	// 		   $data['title']= "Tab Details List";  
	// 	       $data['unclistlist'] = DB::table('tbl_tabdetails')->orderBy('id', 'DESC')->get();     

	// 	       return view('Admin.utab_list')->with($data);
	// 		   break; 
		
			
	// 		}
	// 		}
	// 		else{
	// 			return redirect('admin');		
	// 		}
		
	// }

    public function status_unccat(Request $request){
        $id = $request->id; 
        $status = $request->status; 
		if($status == 0){
            $institution_status= 1;
         }
        else{
            $institution_status= 0;
         }
      $result= DB::table('tbl_unvercitylist') ->where('unc_id', $id) ->update(['sp_status' => $institution_status]);
        if($result){
		// Session::flash('success', 'Data is deleted successfully.');
            echo json_encode(array('status'=>1, 'msg'=>'Status Updated Successfully'));
        }else{
        //  Session::flash('error', 'Data is deleted successfully.');
            echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));
        }
    }	
	/* University category */

	public function universitytab(Request $request){
		$data['title']= "Add University Details"; 
		$data['unclistlist'] = DB::table('tbl_tabdetails')->get(); 
		$data['unclistlist'] = DB::table('tbl_tabdetails')
	                              ->join('tbl_unvercitylist', 'tbl_tabdetails.unc_id', '=', 'tbl_unvercitylist.unc_id')
								  ->select('*')
	                              ->get(); 	
								//  dd($data['unclistlist'] );
		return view('Admin.utab_list')->with($data);
	}

	public function add_tabdetails(Request $request){
		$data['univercity']= DB::table('tbl_unvercitylist')->get();
		
		$data['title']= "Add University Category"; 
      
		 return view('Admin.home.add_tabdetails')->with($data);
	}
	public function univer_save(Request $request){
		$data['title']= "Add University Tab Details"; 
		//$data['univercity']= DB::table('tbl_unvercitylist')->get();

		DB::table('tbl_tabdetails')->insert(
			array(
				  'unc_id'     =>   $request->unc_id , 
				   'tab_name'   =>   $request->tab_name,
				   'description'   =>   $request->description
			   )
	   );
	  // return view('Admin.home.add_tabdetails')->with($data);
	  return redirect('admin/utab_list')->with('success','Add successfully!');
	}
}

