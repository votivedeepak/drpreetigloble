<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth; 
use Validator, DB;
use App\User;
use App\Career;
use Illuminate\Validation\Rule;
use Twilio\Rest\Client;
use Session;
use Mail;

class HomeController extends Controller
{
  
  public function index(Request $request)
    {   

	return view('home');

    }

    /* New pages */

    public function public_self_disclosure(Request $request){

    return view('pages/public_self_disclosure');

    }

        public function about_self_disclosure(Request $request){

    return view('pages/about');

    }

    public function NAAC(Request $request){

    return view('pages/naac');

    }

        public function BOG(Request $request){

    return view('pages/bog');

    }

        public function BOM(Request $request){

    return view('pages/bom');

    }

        public function Academic_Council(Request $request){

    return view('pages/academic_council');

    }

        public function Finance_Committee(Request $request){

    return view('pages/finance_committee');

    }

        public function icc(Request $request){

    return view('pages/icc');

    }

            public function Programme_Offered(Request $request){

    return view('pages/Programme_Offered');

    }

            public function academic_calendar(Request $request){

    return view('pages/academic_calendar');

    }

                public function ordinances_academics(Request $request){

    return view('pages/ordinances_academics');

    }

            public function IQAC_Compositions(Request $request){

    return view('pages/IQAC_Compositions');

    }

            public function library(Request $request){

    return view('pages/library');

    }


  public function research_overview(Request $request){

    return view('pages/research_overview');

    }


    public function Alumni_Connect(Request $request){

    return view('pages/Alumni_Connect');

    }

    public function albums(Request $request){

    return view('pages/albums');

    }

    public function sdcontact(Request $request){

    return view('pages/contact');

    }
    

      public function SportsFacilities(Request $request){

    return view('pages/SportsFacilities');

    }


    public function Short_Term_Courses(Request $request){

    return view('pages/Short_Term_Courses');

    }


      /*  public function news(Request $request){

    return view('pages/student_life');

    } */

        public function hostel(Request $request){

    return view('pages/hostel');

    }

        public function transportation(Request $request){

    return view('pages/transportation');

    }

        public function placement(Request $request){

    return view('pages/placement');

    }

        public function OBC_Committee(Request $request){

    return view('pages/OBC_Committee');

    }

            public function SC_ST_Committee(Request $request){

    return view('pages/SC_ST_Committee');

    }

        public function scholarship(Request $request){

    return view('pages/scholarship');

    }

        public function Anti_Ragging(Request $request){

    return view('pages/Anti_Ragging');

    }

    public function Anti_Ragging_Policy(Request $request){

    return view('pages/Anti_Ragging_Policy');

    }

 public function Anti_Ragging_Committee(Request $request){

    return view('pages/Anti_Ragging_Committee');

    }

    public function rti(Request $request){

    return view('pages/rti');

    }

            public function Announcements(Request $request){

    return view('pages/student_life');

    }

            public function Newsletter(Request $request){

    return view('pages/student_life');

    }

            public function Events(Request $request){

    return view('pages/student_life');

    }

            public function awards_achievements(Request $request){

    return view('pages/student_life');

    }

            public function careers(Request $request){

    return view('pages/student_life');

    }



   /* Close new pages */

    public function about(Request $request){

    return view('global/about');

    }

 public function enquiry_now(Request $request){

    return view('global/enquiry');

    }

    public function contact(Request $request){

    return view('global/contact');

    }

    public function online_fees(Request $request){

    return view('global/payment');

    }

    public function academics(Request $request){

    return view('global/academics');

    }
	
     public function admission_online(Request $request){

    return view('global/admission-online');

    }
    
    public function admission_onlinepost(Request $request)
    {
       // echo "hdfgg";die;

        //  $this->validate(request(), [
        //     'name' => 'required|string|regex:(^[a-zA-Z]+$)',
        //     'email' => 'required|unique:users',
        //     'father_name' => 'required',
        //     'number' => 'required|digits:10',
            
        // ]);


        if($request->email){

        $enquirytype = $request->gridRadios;

        $emp = new User;

        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->father_name = $request->father_name;
        $emp->number = $request->number;
        $emp->user_type = $enquirytype;
        $emp->dob = $request->dob;
         $emp->gender = $request->gender;
         $emp->watsapp_number = $request->watsapp_number;
         $emp->course_type = $request->course_type;
         $emp->degree = $request->degree;
         $emp->address = $request->address;
         $emp->remark = $request->remark;
       // dd($emp);
        $emp->save();

        $abc= $emp->id;

        $dd=  DB::table('users')->where('id', '=', $emp->id)->first();

        $emp=encrypt($request->email);

        Mail::send('emails.mail_send', ["dd" => $dd], function ($message) use ($request) {

        $message->from('info@drpreetiglobaluniversity.com','Admission Enquiry');

                $message->to('dpguadmission@gmail.com'); 

                $message->bcc('deepanshu.suhane@gmail.com'); 

                $message->subject('Registration Successfully'.'<'.$request->email.'>');
            });

        }    
    
        return view("global/admission-online");

    }

    public function admission_onlinepost_home(Request $request)
    {

        if($request->email){

        $enquirytype = $request->gridRadios;

        $emp = new User;

        $emp->name = $request->name;
        $emp->email = $request->email;
        $emp->father_name = $request->father_name;
        $emp->number = $request->number;
        $emp->user_type = $enquirytype;
        $emp->dob = $request->dob;
         $emp->gender = $request->gender;
         $emp->watsapp_number = $request->watsapp_number;
         $emp->course_type = $request->course_type;
         $emp->degree = $request->degree;
         $emp->address = $request->address;
         $emp->remark = $request->remark;
       // dd($emp);
        $emp->save();

        $abc= $emp->id;

        $dd=  DB::table('users')->where('id', '=', $emp->id)->first();

        $emp=encrypt($request->email);

        Mail::send('emails.mail_send', ["dd" => $dd], function ($message) use ($request) {

        $message->from('info@drpreetiglobaluniversity.com','Admission Enquiry');

                $message->to('dpguadmission@gmail.com'); 

                $message->bcc('deepanshu.suhane@gmail.com'); 

                $message->subject('Registration Successfully'.'<'.$request->email.'>');
            });

        }  
  
    
        return redirect("/");

    }


     public function admission(Request $request){

    return view('global/admission');

    }

     public function current_opening(Request $request){

    return view('global/current-opening');

    }

    public function career_applyonline(Request $request){

    return view('global/career-applyonline');

    }

    public function career_applyonlinepost(Request $request){  

        $request->validate([
            "phone" => "required|numeric|digits:10",          
            "file" => "required",
              
        ]); 

        if($request->email){
        $careerdata = new Career;

        $careerdata->post_name = $request->postname;
        $careerdata->first_name = $request->fname;
        $careerdata->last_name = $request->lname;
        $careerdata->qualification = $request->qualification;
        $careerdata->date = $request->date;
        $careerdata->gender = $request->gender;
        $careerdata->experience = $request->experience;
        $careerdata->degree = $request->degree;
        $careerdata->current_company = $request->ccompany;
        $careerdata->address = $request->address;
        $careerdata->phone = $request->phone;
        $careerdata->email = $request->email;
        $careerdata->phone = $request->phone;
        
        $name = " " ;
        if ($request->hasFile('file')) {
            $file = $request->file('file'); 
            $name = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('upload/resume');    
            $imagePath = $destinationPath. '/'.  $name;
            $file->move($destinationPath, $name);
        }
        $careerdata->file = $name;
       
        $careerdata->save();

        $dd=  DB::table('career')->where('id', '=', $careerdata->id)->first();

        $emp=encrypt($request->email);

        $emailpdf = asset('public/upload/resume').'/'. $dd->file;

        Mail::send('emails.career_mail_send', ["dd" => $dd], function ($message) use ($request,$emailpdf) {

        $message->from('info@drpreetiglobaluniversity.com','Career Form');

                $message->to('dpguindia@gmail.com'); 
                //$message->to('votivedeepak.php@gmail.com'); 
                // $message->to('votivephp.harshita@gmail.com'); 
                $message->bcc('deepanshu.suhane@gmail.com');                
                $message->subject('Submited Successfully');
                $message->attach($emailpdf);
        });

        }

        return view('global/career-applyonline');
    
    }

    public function campuslife(Request $request){

    return view('global/Campuslife');

    }

    public function history(Request $request){

    return view('global/history');

    }
    public function layout(Request $request){

    return view('global/layout');

    }
    public function our_vision(Request $request){

    return view('global/our_vision');

    }
    public function our_mission(Request $request){

    return view('global/our_mission');

    }

     public function Message(Request $request){

    return view('global/Message');

    }
    public function campuslife_video(Request $request){

    return view('global/Campuslife-video');

    }
    public function dpgu(Request $request){

    return view('global/why-dpgu');

    }

    public function Engineering(Request $request){

    return view('global/Engineering');

    }
    public function Paramedical_Science(Request $request){

    return view('global/Paramedical-Science');

    }
    public function General_Science(Request $request){

    return view('global/General_Science');

    }
    public function Management(Request $request){

    return view('global/Management');

    }
    
     public function Online_Program(Request $request){

    return view('global/MBA_details');

    }
    public function Forensic_Science(Request $request){

    return view('global/Forensic_Science');

    }
    public function Commerce(Request $request){

    return view('global/Commerce');

    }
    public function Physical_Education(Request $request){

    return view('global/Physical_Education');

    }
    public function Nursing(Request $request){

    return view('global/Nursing');

    }
    public function Computer_Application(Request $request){

    return view('global/Computer_Application');

    }
    public function Home_Science(Request $request){

    return view('global/Home_Science');

    }
    public function Social_Work(Request $request){

    return view('global/Social_Work');

    }
    public function Agriculture(Request $request){

    return view('global/Agriculture');

    }
    public function Library_Science(Request $request){

    return view('global/Library_Science');

    }
    public function Communication(Request $request){

    return view('global/Communication');

    }
    public function LAW(Request $request){

    return view('global/LAW');

    }
    public function Pharmacy(Request $request){

    return view('global/Pharmacy');

    }
    public function Arts(Request $request){

    return view('global/Arts');

    }
    public function Education(Request $request){

    return view('global/Education');

    }

     public function fine_Arts(Request $request){

    return view('global/fine_Arts');

    }

    public function Embryology(Request $request){

    return view('global/Embryology');

    } 


		
	public function univercity(Request $request)
    {
      $data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get(); 
      $data['scopelist'] = DB::table('tbl_scope')->orderBy('sp_name', 'asc')->get();
	  $data['subscopelist'] = DB::table('tbl_subscope')->orderBy('subs_name', 'asc')->get();
      $data['statelist'] = DB::table('states')->orderBy('name', 'asc')->get();
      $data['unvercitydatalist'] = DB::table('tbl_unvercity')
	                              ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
								   ->join('states', 'tbl_unvercity.unvercity_state', '=', 'states.id')
	                              ->orderBy('unrs_id', 'desc')->get(); 	 
								  
	  return view('univercity')->with($data);
    }
	
	public function confixcompanys(Request $request)
    {      
	 if(!empty(Auth::user()->id)){
	 $uid =  Auth::user()->id;
     $data['userdata'] = DB::table('users')->where('id', $uid)->first();
	 }
	 else {
		 $data['userdata']=""; 
	 }

	return view('confixcompanys')->with($data);
    }

    public function coneixfuture(Request $request){

        $uid =  Auth::user()->id;
        $data['userdata'] = DB::table('users')->where('id', $uid)->first();
        $undid = $data['userdata']->unversity;
        $data['address'] = $data['userdata']->address;

        $data['detaildegree'] = DB::table('tbl_unvercity')->where('tbl_unvercity.unvercity_name',$undid)
        ->join('tbl_unvercitylist', 'tbl_unvercity.unvercity_name', '=', 'tbl_unvercitylist.unc_id')
        ->first();
       // dd($data['detaildegree']);

        $data['degreelist'] = DB::table('tbl_unvercity')->orderBy('unvercity_degree', 'asc')->get();
	    $data['unvercitylist'] = DB::table('tbl_unvercitylist')->orderBy('unc_name', 'asc')->get();

        return view('coneixcompany')->with($data);

    }

    public function coneixfuturepost(Request $request){

       $id = Auth::user()->id;
    //    $data['userdata'] = DB::table('users')->where('id', $uid)->first();
    //    if($data['userdata']){
    //          return redirect('universitydegree');
    //       }

       DB::table('users')
                ->where('id', $id)
                ->update([
                    'unversity' => $request->univercity,
                    'univedegree' => $request->univedegree,
                    'address' => $request->autocomplete
                ]);

        return redirect('universitydegree');
      
    }
	
	public function trobapis(Request $request)
    {      
	return view('trobapis');
    }
	public function festestornejos(Request $request)
    {      
	return view('festestornejos');
    }
	
	public function userinfo(Request $request)
    {      
	return view('userinfo');
    }
	
	
	
}
