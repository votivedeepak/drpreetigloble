<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Validator, DB;
use App\User;
use Illuminate\Validation\Rule;
use Twilio\Rest\Client;
use Session;

class UniversityController extends Controller
{
  
  		
	public function index(Request $request)
    {
      $data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get(); 
      $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'asc')->get();
	  $data['subscopelist'] = DB::table('tbl_subscope')->orderBy('subs_name', 'asc')->get();
      $data['statelist'] = DB::table('states')->orderBy('name', 'asc')->get();
      $data['unvercitydatalist'] = DB::table('tbl_unvercity')
	                              ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
								   ->join('states', 'tbl_unvercity.unvercity_state', '=', 'states.id')
	                              ->orderBy('unrs_id', 'desc')->paginate(18); 

		//Session::put('unc_name', $data['unvercitylist']);
								   //->orderBy('unrs_id', 'desc')->get(); 
   
	  if(!empty(Auth::user()->id)){
	  $uid =  Auth::user()->id; 	  
	  $data['unvercitydatalistfav'] = DB::table('tbl_unvercity_fav')
	                              ->join('tbl_unvercity', 'tbl_unvercity_fav.uvs_id', '=', 'tbl_unvercity.unrs_id')	
                                   ->where('tbl_unvercity_fav.usr_id',$uid)	
								   ->where('tbl_unvercity_fav.fav_status',1)	
	                               ->orderBy('tbl_unvercity_fav.unfav_id', 'desc')->get(); 	 							  
	  }else {
		  $data['unvercitydatalistfav']=""; 
	  }						  
	  return view('univercity')->with($data);
    }
	
	public function univercityinfo(Request $request)
    {  
		//dd($request->all());
    $id=base64_decode($request->id); 

	$data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get(); 
    $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'asc')->get();
	$data['subscopelist'] = DB::table('tbl_subscope')->orderBy('subs_name', 'asc')->get();
    $data['statelist'] = DB::table('states')->orderBy('name', 'asc')->get();
	$data['unvercitydetail'] = DB::table('tbl_unvercity')
	                              ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
								   ->join('states', 'tbl_unvercity.unvercity_state', '=', 'states.id')
	                              ->where('unrs_id',$id)->first(); 
								 // dd($data['unvercitydetail']);
	return view('univercityinfo')->with($data);
    }

	public function univercitydetail(Request $request,$id)
    {  

   $id=base64_decode($id); 

	$data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get(); 
    $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'asc')->get();
	$data['subscopelist'] = DB::table('tbl_subscope')->orderBy('subs_name', 'asc')->get();
    $data['statelist'] = DB::table('states')->orderBy('name', 'asc')->get();
	$data['unvercitydetail'] = DB::table('tbl_unvercity')
	                              ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
								   ->join('states', 'tbl_unvercity.unvercity_state', '=', 'states.id')
	                              ->where('unrs_id',$id)->first(); 
								  
	return view('univercitydetails')->with($data);
    }

	public function univercitydetail_data(Request $request, $id)
    {  
    $id=base64_decode($id); 

	$data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get(); 
    $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'asc')->get();
	$data['subscopelist'] = DB::table('tbl_subscope')->orderBy('subs_name', 'asc')->get();
    $data['statelist'] = DB::table('states')->orderBy('name', 'asc')->get();
	$data['unvercitydetail'] = DB::table('tbl_unvercity')
	                              ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
								   ->join('states', 'tbl_unvercity.unvercity_state', '=', 'states.id')
	                              ->where('unrs_id',$id)->first(); 
								 // dd($data['unvercitydetail']);
	return view('univercity_data')->with($data);
    }
	
    public function searchunversity(Request $request){
       $keywordde = $request->keywordde; 	
	   $university = $request->university;
	   $location = $request->location;
	   $scope = $request->scope;
	   $subscope = $request->subscope;
	   $type = $request->type;
	   $untype = $request->uutype;
       $html="";
	   $htm2="";
   
      
    $query = DB::table('tbl_unvercity');
	       // $query->select("'tbl_unvercity.*','tbl_unvercitylist.*','states.*'");
            $query->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id');
			$query->join('states', 'tbl_unvercity.unvercity_state', '=', 'states.id');
			$query->select('tbl_unvercity.*','tbl_unvercitylist.*','states.*');
			
	   if(!empty($keywordde)){
		   $query->where('tbl_unvercity.unvercity_degree', 'LIKE', "%{$keywordde}%"); 
           //$query->where('tbl_unvercity.unvercity_degree',$keywordde);        
           } 

       if(!empty($university)){          
           $query->where('tbl_unvercity.unvercity_name', $university);        
           } 
		   
       if(!empty($location)){          
           $query->where('tbl_unvercity.unvercity_state', $location);        
           }
		   
       if(!empty($scope)){          
           $query->where('tbl_unvercity.unvercity_scope', $scope);        
           } 
		   
 	   if(!empty($subscope)){          
           $query->where('tbl_unvercity.unvercity_subscope', $subscope);        
           } 
       
       if(!empty($untype)){          
           $query->where('tbl_unvercity.unvercity_type', $untype);        
           } 	   
		   
	    if(!empty($type)){ 
           if($type=="alphabatic"){
			$query->orderBy('tbl_unvercity.unvercity_degree', 'ASC');  
		   }	
		   if($type=="cutofmark"){
			$query->orderBy('tbl_unvercity.cutofmark', 'DESC');  
		   }                
           } 		   
	
	$searchdata=  $query->orderBy('tbl_unvercity.unrs_id', 'desc')->paginate(18); 
	
	//$searchdata= $query->get(); 
	
	foreach ($searchdata as $unrlist) {

		$cid=base64_encode($unrlist->unrs_id);

	
		$html.='<tr>
				  <th scope="row">
				    <div class="info">';
					if(!empty(Auth::user()->id)) {
							$favr = DB::table('tbl_unvercity_fav')->where('usr_id',Auth::user()->id)->where('uvs_id',$unrlist->unrs_id)->first();
						
							if($favr){
								if($favr->fav_status==1){
								$fav = 1;	
								}
								else {
								$fav = 0;	
								}
							}else {
								$fav = 0;
							}
							
					$html.='<a href="javascript:void(0)" onclick="favunersity('.$unrlist->unrs_id.')">'; 
					if($fav==1) { 
					$html.='<i class="fa fa-heart" aria-hidden="true" id="hard'.$unrlist->unrs_id.'" style="margin-right: 5px;"></i>';
					} else {
					$html.='<i class="fa fa-heart-o" aria-hidden="true" id="hard'.$unrlist->unrs_id.'" style="margin-right: 5px;"></i>'; 
					}
					$html.='</a>';
					} else {
				//	$html.='<a href="'.url('login').'/'.$cid.'" ><i class="fa fa-heart-o" aria-hidden="true" ></i></a>';
					$html.='<a href="'.url('login').'/'.$cid.'" ><i class="fa fa-heart-o" aria-hidden="true" ></i></a>';
					}					
					$html.='<a href="'.url('infodetail').'/'.$cid.'">Info</a></div>
				      </th>
				      <td>'.$unrlist->unvercity_degree.'</td>
				      <td>'.$unrlist->us_name.'</td>
				      <td>'.$unrlist->name.'</td>
				      <td>'.$unrlist->cutofmark.'</td>
				    </tr>';		
	         }
	 $htm2.='<div class="pagination">
                        '.$searchdata->links().'
	                     </div></tr>';
     echo json_encode(
           array("message1" => $html,
          "message2" =>$htm2,
              )
          ); 
	   
	  }
	
	public function selctsubcategory(Request $request)
    {
     $id = $request->input('id'); 
     $data['subscope']=DB::table("tbl_subscope")->where('scope_id',$id)->get();
    foreach ($data['subscope'] as $plist){							  
	echo $data =   '<option value="'.$plist->subs_id.'">'.$plist->subs_name.'</option>';
    }   
    }
	
	public function favunersityuser(Request $request)
	{
		
	  $un_id = $request->input('un_id'); 
      $uid =  Auth::user()->id; 
	   $viewjob = DB::table('tbl_unvercity_fav')->where('usr_id', $uid)->where('uvs_id',$un_id)->first();
       if($viewjob){       
	   $status = $viewjob->fav_status;	
		if($status==0){
			$st = 1;
		}
		if($status==1){
			$st = 0;
		} 
	     }
         if($viewjob){	
		 $st1="";
		   $carejob =  DB::table('tbl_unvercity_fav')
              ->where('usr_id', $uid)
			   ->where('uvs_id', $un_id)
              ->update(['fav_status' =>$st]);	
		     if($carejob){
				 if($st==1){
					$st1 =  1;
				 }else {
					$st1 = 2; 
				 }
				 
			 }
		 $data['unvercitydatalistfav'] = DB::table('tbl_unvercity_fav')
	                              ->join('tbl_unvercity', 'tbl_unvercity_fav.uvs_id', '=', 'tbl_unvercity.unrs_id')	
                                   ->where('tbl_unvercity_fav.usr_id',$uid)	
								   ->where('tbl_unvercity_fav.fav_status',1)	
	                               ->orderBy('tbl_unvercity_fav.unfav_id', 'desc')->get(); 	 	
		 $html="";
		 foreach ($data['unvercitydatalistfav'] as $unrlists) {
	     $cid=base64_encode($unrlists->unrs_id);	
		 $html.='<tr>
                  <th scope="row">
                    <div class="info"><a href="'.url('/infodetail').'/'.$cid.'">Info</a></div>
                    </th>
                    <td>'.$unrlists->unvercity_degree.'</td>';
					 $unss = DB::table('tbl_unvercitylist')->where('unc_id',$unrlists->unvercity_name)->first(); 
					 $html.='<td>'.$unss->us_name.'</td>
                   </tr>';
		 }
		  echo json_encode(
           array("message1" => $html,
            "message2" =>$st1,			   
              )
          ); 
	   }
	   else {		
		$carejob = DB::table('tbl_unvercity_fav')->insertGetId(
              array('usr_id' => $uid,
		         'uvs_id' =>  $un_id,                             				 
		         'fav_status' => 1,          			
	           ));
			//return 1;
		 $data['unvercitydatalistfav'] = DB::table('tbl_unvercity_fav')
	                              ->join('tbl_unvercity', 'tbl_unvercity_fav.uvs_id', '=', 'tbl_unvercity.unrs_id')	
                                   ->where('tbl_unvercity_fav.usr_id',$uid)	
								   ->where('tbl_unvercity_fav.fav_status',1)	
	                               ->orderBy('tbl_unvercity_fav.unfav_id', 'desc')->get(); 	 	
		 $html="";
		 foreach ($data['unvercitydatalistfav'] as $unrlists) {
	     $cid=base64_encode($unrlists->unrs_id);	
		 $html.='<tr>
                  <th scope="row">
                    <div class="info"><a href="'.url('/infodetail').'/'.$cid.'">Info</a></div>
                    </th>
                    <td>'.$unrlists->unvercity_degree.'</td>';
					 $unss = DB::table('tbl_unvercitylist')->where('unc_id',$unrlists->unvercity_name)->first(); 
					 $html.='<td>'.$unss->us_name.'</td>
                   </tr>';
		 }
		  echo json_encode(
           array("message1" => $html,
             "message2" =>1,		   
              )
          ); 	
	   }	 
	}
	
	
	public function coneixfuturscompanys(Request $request)
    { 
	$data['toplistlist'] = DB::table('tbl_toppublicmain')->orderBy('tp_id', 'asc')->get();		
	return view('coneixfuturscompanys')->with($data);
	
    }
	
	public function  universityflat(Request $request)
    { 
	$data['flatdata'] = DB::table('tbl_universityflatpage')->first();		
	return view('universityflat')->with($data);	
    }
    
	public function tournaments(Request $request)
    { 
	$data['flatdata'] = DB::table('tbl_tournamentspage')->first();		
	return view('tournaments')->with($data);	
    }
  
  

}
