<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth,Session,Hash, DB;
use Illuminate\Support\Facades\Validator;
use App\InstituteModel;


class UniversitydegreeController extends Controller
{
   /* School */
    function degreem(Request $request)
	{
		
	if(!empty(Auth::user()->name))
            {		
		switch($request->segment(2)){
			
			 case 'add_degree';
			 $data['title']= "Add Degree";  
			 $data['degreedata'] = '';
		     return view('Admin.degree.add_degree')->with($data);
			 break;			 
			 
			  case 'degree_save':			  
			     $messages = array(
                   'degree_name.required'=>'You cant leave  field empty',                  
				   'degree_amount.required'=>'You cant leave amount field empty',
                      );
                   $rules = array(
                   'degree_name' => 'required',
				   'degree_amount' => 'required|numeric',				 
                   );
				 			  
                 $validator = Validator::make($request->all(),$rules,$messages);
                 if ($validator->fails())
                   {
                   return redirect()->back()->withErrors($validator->errors());
                     }else{
						 
				  if($request->input('s_idd')!=''){				
                
				  $update =  DB::table('tbl_degree')
                  ->where('dgr_id', $request->input('s_idd'))
                   ->update(['dgr_name' => $request->input('degree_name'),
					'dgr_amount' => $request->input('degree_amount')]);	   
	                   if($update){
	                   return redirect('admin/degree_list')->with('success','Data update successfully!');
                       }else{
	                   return redirect('admin/degree_list')->with('error','Error To update!');
   	                   }					
				}else{         				
              		
		        $pid = DB::table('tbl_degree')->insertGetId(
                    array('dgr_name' => $request->input('degree_name'),
					'dgr_amount' => $request->input('degree_amount')));
				
	            if($pid){
	               return redirect('admin/degree_list')->with('success','Data Added successfully!');
                }else{
	            return redirect('admin/degree_list')->with('error','Error To Add!');
   	            }
	            }  
				}
			 
                break;  			 
			
			   case 'editdegree':	
			    $data['title']= "Edit Degree";  
                $data['degreedata'] = DB::table('tbl_degree')->where('dgr_id',$request->segment(3))->first();	
                return view('admin.degree.add_degree')->with($data);
                break; 
				
			case 'status_degree';
				  $id = $request->input('id');
				   $status = $request->input('status'); 
                   if($status == 0){
                     $institution_status= 1;
                     }
                    else{    
                     $institution_status= 0;
					 }
                  $result= DB::table('tbl_degree') ->where('dgr_id', $id) ->update(['degree_status' => $institution_status]);
                    if($result){
				// Session::flash('success', 'Data is deleted successfully.');
                     echo json_encode(array('status'=>1, 'msg'=>'Status Updated Successfully'));
                  }else{
                   //  Session::flash('error', 'Data is deleted successfully.');
                     echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));
                   }
				break;	
				
			case 'deletesessayplan';
				    DB::table('essay_perpage_amount')->where('epa_id',$request->segment(3))->delete();
	                return redirect('admin/degree_list')->with('success','Essay Plan delete successfully!');
					break;	
			 
			 
			 default:
			    $data['title']= "Degree List";  
		       $data['degreelist'] = DB::table('tbl_degree')->orderBy('dgr_id', 'DESC')->get();     

		       return view('Admin.degree.degree_list')->with($data);
			   break; 
		
			
			}
			}
			else{
				return redirect('admin');		
			}			
	}

     public function status_degree(Request $request){

        $id = $request->id;        

        $status = $request->status;    

         if($status == 0){

            $institution_status= 1;

         }

        else{

            $institution_status= 0;

         }

      $result= DB::table('tbl_degree') ->where('dgr_id', $id) ->update(['degree_status' => $institution_status]);

        if($result){    

         // Session::flash('success', 'Data is deleted successfully.');

            echo json_encode(array('status'=>1, 'msg'=>'Institution Status Updated Successfully'));

        }else{

        //  Session::flash('error', 'Data is deleted successfully.');

            echo json_encode(array('status'=>0, 'msg'=>'Something went wrong!'));

        }

    }	
	/* School */ 
}

