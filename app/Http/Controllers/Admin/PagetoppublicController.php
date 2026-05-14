<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Session,Hash, DB;
use Illuminate\Support\Facades\Validator;
use App\InstituteModel;


class PagetoppublicController extends Controller
{
   /* scope */
    function pagetoppm(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_topp';
			 $data['title']= "Add Page Top Public";  
			 $data['toppdata'] = '';			
		     return view('Admin.pagetoppublic.add_topp')->with($data);
			 break;			 
			 
			  case 'topp_save':			  
			     $messages = array(
				   'm_title.required'=>'You cant leave field empty',
				   'm_subtitle.required'=>'You cant leave field empty',
                      );
                   $rules = array(                  
				    'm_title' => 'required',
				    'm_subtitle' => 'required',
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_toppublicmain')
                  ->where('tp_id', $request->input('s_idd'))
                   ->update(['t_heading' => $request->input('m_title'),'t_subheading' => $request->input('m_subtitle')]);	   
	                   if($update){
	                   return redirect('admin/topp_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/topp_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_toppublicmain')->insertGetId(
                    array('t_heading' => $request->input('m_title'),'t_subheading' => $request->input('m_subtitle')));
				
	            if($pid){
	               return redirect('admin/topp_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/topp_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'edittopp':	
			    $data['title']= "Edit Page Top Public";  
                $data['toppdata'] = DB::table('tbl_toppublicmain')->where('tp_id',$request->segment(3))->first();	
                return view('Admin.pagetoppublic.add_topp')->with($data);
                break; 
				
							
			case 'deletetopp';
				    DB::table('tbl_toppublicmain')->where('tp_id',$request->segment(3))->delete();
	                return redirect('admin/topp_list')->with('success','Data delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Page Top Public List";  
		       $data['toppmainlist'] = DB::table('tbl_toppublicmain')->orderBy('tp_id', 'asc')->get();     

		       return view('Admin.pagetoppublic.topp_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	}

    public function status_scope(Request $request){
        $id = $request->id; 
        $status = $request->status; 
		if($status == 0){
            $institution_status= 1;
         }
        else{
            $institution_status= 0;
         }
      $result= DB::table('tbl_scope') ->where('sp_id', $id) ->update(['sp_status' => $institution_status]);
        if($result){
		// Session::flash('success', 'Data is deleted successfully.');
            echo json_encode(array('status'=>1, 'msg'=>'Institution Status Updated Successfully'));
        }else{
        //  Session::flash('error', 'Data is deleted successfully.');
            echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));
        }
    }	
	/* scope */

    
    /* scope */
    function subpagetoppm(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_toppsub';
			 $data['title']= "Add Sub Top Public";  
			 $data['subtoppdata'] = '';
			 $data['topplist'] = DB::table('tbl_toppublicmain')->orderBy('tp_id', 'DESC')->get();    
		     return view('Admin.pagetoppublic.add_subtopp')->with($data);
			 break;			 
			 
			  case 'toppsub_save':			  
			     $messages = array(                                
				   'tpm_id.required'=>'You cant leave field empty',
				   'm_title.required'=>'You cant leave  field empty',
				   'm_subtitle.required'=>'You cant leave  field empty',
                      );
                   $rules = array(                  
				   'tpm_id' => 'required',
                   'm_title' => 'required',
                   'm_subtitle' => 'required',				   
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_toppublicmainsub')
                  ->where('tpsub_id', $request->input('s_idd'))
                   ->update(['tpmain_id' => $request->input('tpm_id'),
				           'tps_heading' => $request->input('m_title'),
						   'tps_subheading' => $request->input('m_subtitle')]);	   
	                   if($update){
	                   return redirect('admin/toppsub_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/toppsub_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_toppublicmainsub')->insertGetId(
                    array('tpmain_id' => $request->input('tpm_id'),
				           'tps_heading' => $request->input('m_title'),
						   'tps_subheading' => $request->input('m_subtitle')));
				
	            if($pid){
	               return redirect('admin/toppsub_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/toppsub_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'edittoppsub':	
			    $data['title']= "Edit Sub Top Public"; 
				$data['topplist'] = DB::table('tbl_toppublicmain')->orderBy('tp_id', 'DESC')->get();  
                $data['subtoppdata'] = DB::table('tbl_toppublicmainsub')->where('tpsub_id',$request->segment(3))->first();	
                return view('Admin.pagetoppublic.add_subtopp')->with($data);
                break; 
				
							
			case 'deletetoppsub';
				    DB::table('tbl_toppublicmainsub')->where('tpsub_id',$request->segment(3))->delete();
	                return redirect('admin/toppsub_list')->with('success','Data delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Page Sub Top Public List";  
		       $data['subtoplist'] = DB::table('tbl_toppublicmainsub')
			                           ->join('tbl_toppublicmain', 'tbl_toppublicmainsub.tpmain_id', '=', 'tbl_toppublicmain.tp_id')
			   ->orderBy('tbl_toppublicmainsub.tpsub_id', 'DESC')->get();     

		       return view('Admin.pagetoppublic.subtopp_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	}

    public function status_subscope(Request $request){
        $id = $request->id; 
        $status = $request->status; 
		if($status == 0){
            $institution_status= 1;
         }
        else{
            $institution_status= 0;
         }
      $result= DB::table('tbl_scope') ->where('sp_id', $id) ->update(['sp_status' => $institution_status]);
        if($result){
		// Session::flash('success', 'Data is deleted successfully.');
            echo json_encode(array('status'=>1, 'msg'=>'Institution Status Updated Successfully'));
        }else{
        //  Session::flash('error', 'Data is deleted successfully.');
            echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));
        }
    }	
	/* scope */	
	
    function userlist(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {
			 $data['title']= "User List";  
		       $data['userlist'] = DB::table('users')->where('user_role',2)->orderBy('id', 'DESC')->get();     

		       return view('Admin.user_list')->with($data);	
			}else{
				return redirect('admin');		
			}
	}

    
	/*  Find University Flat  */
   /*  Find University Flat  */
    function pageunversflatm(Request $request)
	{		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_uflat';
			 $data['title']= "Add Page University Flat";  
			 $data['uflatdata'] = '';			
		     return view('Admin.pageunversitflat.add_uflat')->with($data);
			 break;			 
			 
			  case 'uflat_save':			  
			     $messages = array(
				   'description.required'=>'You cant leave field empty',				  
                      );
                   $rules = array(                  
				    'description' => 'required',				  
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_universityflatpage')
                  ->where('un_pid', $request->input('s_idd'))
                   ->update(['description' => $request->input('description')]);	   
	                   if($update){
	                   return redirect('admin/uflat_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/uflat_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_universityflatpage')->insertGetId(
                    array('description' => $request->input('description')));
				
	            if($pid){
	               return redirect('admin/uflat_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/uflat_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'edituflat':	
			    $data['title']= "Edit Page University Flat";  
                $data['uflatdata'] = DB::table('tbl_universityflatpage')->where('un_pid',$request->segment(3))->first();	
                return view('Admin.pageunversitflat.add_uflat')->with($data);
                break; 
				
							
			case 'deleteuflat';
				    DB::table('tbl_universityflatpage')->where('un_pid',$request->segment(3))->delete();
	                return redirect('admin/uflat_list')->with('success','Data delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Page University Flat List";  
		       $data['toppmainlist'] = DB::table('tbl_universityflatpage')->orderBy('un_pid', 'asc')->get();     

		       return view('Admin.pageunversitflat.uflat_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	}
	
	
	
   function subpageunversflatm(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_tournaments';
			 $data['title']= "Add  Tournaments";  
			 $data['subuflatdata'] = '';			
		     return view('Admin.pageunversitflat.add_subuflat')->with($data);
			 break;			 
			 
			  case 'subuflat_save':			  
			     $messages = array(                                
				   'description.required'=>'You cant leave field empty',				
                      );
                   $rules = array(                  
				   'description' => 'required',                			   
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_tournamentspage')
                  ->where('un_pid', $request->input('s_idd'))
                   ->update(['description' => $request->input('description')]);	   
	                   if($update){
	                   return redirect('admin/tournaments_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/tournaments_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_tournamentspage')->insertGetId(
                    array('description' => $request->input('description')));
				
	            if($pid){
	               return redirect('admin/tournaments_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/tournaments_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'edittournaments':	
			    $data['title']= "Edit Tournaments page"; 			
                $data['subuflatdata'] = DB::table('tbl_tournamentspage')->where('un_pid',$request->segment(3))->first();	
                return view('Admin.pageunversitflat.add_subuflat')->with($data);
                break; 
				
							
			case 'deletetournaments';
				    DB::table('tbl_tournamentspage')->where('un_pid',$request->segment(3))->delete();
	                return redirect('admin/tournaments_list')->with('success','Data delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Page Tournaments List";         
               $data['subtoplist'] = DB::table('tbl_tournamentspage')->orderBy('un_pid', 'asc')->get(); 
		       return view('Admin.pageunversitflat.subuflat_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	  }
	
	/*Find University Flat  */

	
}

