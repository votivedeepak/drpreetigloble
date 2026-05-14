<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Session,Hash, DB;
use Illuminate\Support\Facades\Validator;
use App\InstituteModel;


class UniversityscopeController extends Controller
{
   /* scope */
    function scopem(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_scope';
			 $data['title']= "Add Scope";  
			 $data['scopedata'] = '';			
		     return view('Admin.scope.add_scope')->with($data);
			 break;			 
			 
			  case 'scope_save':			  
			     $messages = array(                                
				   'scope_name.required'=>'You cant leave scope field empty',
                      );
                   $rules = array(                  
				   'scope_name' => 'required',				 
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_scope')
                  ->where('sp_id', $request->input('s_idd'))
                   ->update(['sp_name' => $request->input('scope_name')]);	   
	                   if($update){
	                   return redirect('admin/scope_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/scope_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_scope')->insertGetId(
                    array('sp_name' => $request->input('scope_name')));
				
	            if($pid){
	               return redirect('admin/scope_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/scope_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'editscope':	
			    $data['title']= "Edit Scope";  
                $data['scopedata'] = DB::table('tbl_scope')->where('sp_id',$request->segment(3))->first();	
                return view('Admin.scope.add_scope')->with($data);
                break; 
				
							
			case 'deletescope';
				    DB::table('tbl_scope')->where('sp_id',$request->segment(3))->delete();
	                return redirect('admin/scope_list')->with('success','Essay Plan delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Scope List";  
		       $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_id', 'DESC')->get();     

		       return view('Admin.scope.scope_list')->with($data);
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
    function subscopem(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_subscope';
			 $data['title']= "Add Subscope";  
			 $data['subscopedata'] = '';
			 $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'DESC')->get();    
		     return view('Admin.scope.add_subscope')->with($data);
			 break;			 
			 
			  case 'subscope_save':			  
			     $messages = array(                                
				   'subscope_name.required'=>'You cant leave scope field empty',
				   'scp_id.required'=>'You cant leave Sub Scope field empty',
                      );
                   $rules = array(                  
				   'subscope_name' => 'required',
                   'scp_id' => 'required',				   
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_subscope')
                  ->where('subs_id', $request->input('s_idd'))
                   ->update(['scope_id' => $request->input('scp_id'),
				           'subs_name' => $request->input('subscope_name')]);	   
	                   if($update){
	                   return redirect('admin/subscope_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/subscope_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_subscope')->insertGetId(
                    array('scope_id' => $request->input('scp_id'),
					'subs_name' => $request->input('subscope_name')));
				
	            if($pid){
	               return redirect('admin/subscope_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/subscope_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'editsubscope':	
			    $data['title']= "Edit Subscope"; 
				$data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'DESC')->get();  
                $data['subscopedata'] = DB::table('tbl_subscope')->where('subs_id',$request->segment(3))->first();	
                return view('Admin.scope.add_subscope')->with($data);
                break; 
				
							
			case 'deletesubscope';
				    DB::table('tbl_subscope')->where('subs_id',$request->segment(3))->delete();
	                return redirect('admin/subscope_list')->with('success','Essay Plan delete successfully!');
					break;	
			 
			 
			 default:
			   $data['title']= "Subscope List";  
		       $data['subscopelist'] = DB::table('tbl_subscope')
			                           ->join('tbl_scope', 'tbl_subscope.scope_id', '=', 'tbl_scope.sp_id')
			   ->orderBy('tbl_subscope.subs_id', 'DESC')->get();     

		       return view('Admin.scope.subscope_list')->with($data);
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
		       $data['userlist'] = DB::table('users')->where('user_role',2)
			                        ->leftJoin('tbl_unvercity', 'users.univedegree', '=', 'tbl_unvercity.unrs_id')
									->leftJoin('tbl_unvercitylist', 'users.unversity', '=', 'tbl_unvercitylist.unc_id')
			   ->orderBy('users.id', 'DESC')->get();     

		       return view('Admin.user_list')->with($data);	
			}else{
				return redirect('admin');		
			}
	}
    
	function uversityuserlist(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {
			  $data['title']= "View User"; 
			 $data['userlist'] = DB::table('users')->where('unversity',$request->id)->where('user_role',2)
			                         ->join('tbl_unvercity', 'users.univedegree', '=', 'tbl_unvercity.unrs_id')
									->join('tbl_unvercitylist', 'users.unversity', '=', 'tbl_unvercitylist.unc_id')
			                       ->get();	    

		       return view('Admin.unversityuser_list')->with($data);	
			}else{
				return redirect('admin');		
			}
	}
	
	function uversityuserlistdegr(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {
			  $data['title']= "View User"; 
			 $data['userlist'] = DB::table('users')->where('univedegree',$request->id)->where('user_role',2)
			                         ->join('tbl_unvercity', 'users.univedegree', '=', 'tbl_unvercity.unrs_id')
									->join('tbl_unvercitylist', 'users.unversity', '=', 'tbl_unvercitylist.unc_id')
			                       ->get();	    

		       return view('Admin.unversityuser_list')->with($data);	
			}else{
				return redirect('admin');		
			}
	}
	
	
	function deleteuser(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {
			 DB::table('users')->where('id',$request->segment(3))->delete();
	            return redirect("admin/viewuser/".$request->segment(5)."")->with('success','User Delete delete successfully!');
				
				
			}else{
				return redirect('admin');		
			}
	}
	
	public function status_user(Request $request){
        $id = $request->id;
        $status = $request->status; 
         if($status == 0){
            $institution_status= 1;
         }
        else{
            $institution_status= 0;
         }

      $result= DB::table('users') ->where('id', $id) ->update(['status' => $institution_status]);
        if($result){ 

         // Session::flash('success', 'Data is deleted successfully.');

            echo json_encode(array('status'=>1, 'msg'=>'Status Update Successfully'));

        }else{
        //  Session::flash('error', 'Data is deleted successfully.');
            echo json_encode(array('status'=>0, 'msg'=>'User UnBlock Successfully!'));

        }

    }
	
	
}

