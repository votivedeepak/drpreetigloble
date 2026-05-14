<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* deep code */

//Clear Cache facade value:
Route::get('/clear', function () {
$exitCode = Artisan::call('view:clear', []);   
	  return '<h1>cache cleared</h1>';
});
Route::get('/config-cache', function() {
	$exitCode = Artisan::call('config:cache');
	$exitCode = Artisan::call('config:clear');
	  return '<h1>config cache cleared</h1>';

});
Route::get('/view-clear', function() {
	$exitCode = Artisan::call('view:clear');
	return '<h1>View cache cleared</h1>';
});
/* end code */

Route::get('/', 'HomeController@index');

Route::get('pages/public-self-disclosure', 'HomeController@public_self_disclosure');
Route::get('pages/about', 'HomeController@about_self_disclosure');
Route::get('pages/NAAC', 'HomeController@NAAC');

Route::get('pages/BOG', 'HomeController@BOG');
Route::get('pages/BOM', 'HomeController@BOM');
Route::get('pages/Academic-Council', 'HomeController@Academic_Council');
Route::get('pages/Finance-Committee', 'HomeController@Finance_Committee');
Route::get('pages/icc', 'HomeController@icc');

Route::get('pages/Programme-Offered', 'HomeController@Programme_Offered');
Route::get('pages/academic-calendar', 'HomeController@academic_calendar');
Route::get('pages/ordinances-academics', 'HomeController@ordinances_academics');
Route::get('pages/IQAC-Compositions', 'HomeController@IQAC_Compositions');
Route::get('pages/library', 'HomeController@library');

Route::get('pages/Short-Term-Courses', 'HomeController@Short_Term_Courses');

Route::get('pages/research-overview', 'HomeController@research_overview');


Route::get('pages/Alumni-Connect', 'HomeController@Alumni_Connect');
Route::get('pages/albums', 'HomeController@albums');
Route::get('pages/contact', 'HomeController@sdcontact');

Route::get('pages/SportsFacilities', 'HomeController@SportsFacilities');
//Route::get('pages/news', 'HomeController@news');
Route::get('pages/hostel', 'HomeController@hostel');
Route::get('pages/transportation', 'HomeController@transportation');
Route::get('pages/placement', 'HomeController@placement');
Route::get('pages/OBC_Committee', 'HomeController@OBC_Committee');
Route::get('pages/SC_ST_Committee', 'HomeController@SC_ST_Committee');
Route::get('pages/scholarship', 'HomeController@scholarship');
Route::get('pages/Anti-Ragging', 'HomeController@Anti_Ragging');
Route::get('pages/Anti-Ragging-Policy', 'HomeController@Anti_Ragging_Policy');
Route::get('pages/Anti-Ragging-Committee', 'HomeController@Anti_Ragging_Committee');


Route::get('pages/rti', 'HomeController@rti');
Route::get('pages/news/type/Announcements', 'HomeController@Announcements');
Route::get('pages/news/type/Newsletter', 'HomeController@Newsletter');
Route::get('pages/news/type/Events', 'HomeController@Events');
Route::get('pages/awards-achievements', 'HomeController@awards_achievements');
Route::get('pages/careers', 'HomeController@careers');

//Route::get('pages/albums', 'HomeController@albums');

Route::get('global/about', 'HomeController@about');
Route::get('global/contact', 'HomeController@contact');
Route::get('global/online-fees', 'HomeController@online_fees');
Route::get('global/academics', 'HomeController@academics');
Route::get('global/admission', 'HomeController@admission');
Route::get('global/admission-online', 'HomeController@admission_online');
Route::any('global/admissiononline', 'HomeController@admission_onlinepost');
Route::get('global/enquiry-now', 'HomeController@enquiry_now');
Route::any('global/admissiononlinehome', 'HomeController@admission_onlinepost_home');

Route::get('global/Current-opening', 'HomeController@current_opening');
Route::get('global/career-applyonline', 'HomeController@career_applyonline');
Route::post('global/careerapplyonline', 'HomeController@career_applyonlinepost');
Route::get('global/campuslife', 'HomeController@campuslife');
Route::get('global/history', 'HomeController@history');
Route::get('global/layout', 'HomeController@layout');
Route::get('global/our-vision', 'HomeController@our_vision');
Route::get('global/our-mission', 'HomeController@our_mission');
Route::get('global/campuslife-video', 'HomeController@campuslife_video');
Route::get('global/dpgu', 'HomeController@dpgu');
Route::get('global/Message', 'HomeController@Message');


Route::get('global/Engineering', 'HomeController@Engineering');
Route::get('global/Paramedical-Science', 'HomeController@Paramedical_Science');
Route::get('global/Pharmacy', 'HomeController@Pharmacy');
Route::get('global/General-Science', 'HomeController@General_Science');
Route::get('global/Management', 'HomeController@Management');
Route::get('global/Forensic-Science', 'HomeController@Forensic_Science');
Route::get('global/Commerce', 'HomeController@Commerce');
Route::get('global/Physical-Education', 'HomeController@Physical_Education');
Route::get('global/Nursing', 'HomeController@Nursing');
Route::get('global/Computer-Application', 'HomeController@Computer_Application');
 Route::get('global/LAW', 'HomeController@LAW');
Route::get('global/Home-Science', 'HomeController@Home_Science');
Route::get('global/Arts', 'HomeController@Arts');
Route::get('global/Social-Work', 'HomeController@Social_Work');
Route::get('global/Agriculture', 'HomeController@Agriculture');
Route::get('global/Library-Science', 'HomeController@Library_Science');
Route::get('global/Communication', 'HomeController@Communication');
Route::get('global/Education', 'HomeController@Education');
Route::get('global/fine-Arts', 'HomeController@fine_Arts');
Route::get('global/Embryology', 'HomeController@Embryology');
Route::get('global/Online_Program', 'HomeController@Online_Program');

Route::get('confix-companys', 'HomeController@confixcompanys');
Route::get('coneixfuture', 'HomeController@coneixfuture');
Route::post('coneixfuturepost', 'HomeController@coneixfuturepost');

Route::get('trobapis', 'HomeController@trobapis');
Route::get('festes-tornejos', 'HomeController@festestornejos');
Route::get('profile', 'UserController@profile');
Route::get('userinfo', 'HomeController@userinfo'); 


Route::get('login/{cid?}/{tab?}/{tabid?}', 'UserController@signin');
//Route::get('login/{cid?}/{tabid?}', 'UserController@signin');
// Route::get('login', 'UserController@signin');

Route::get('signup', 'UserController@signup');
Route::get('verifyVendorEmail/{user}', 'UserController@verifyVendorEmail');
Route::get('univercity', 'UniversityController@index');
Route::get('infodetail/{id}', 'UniversityController@univercityinfo');
Route::get('infodetails/{NDE5}', 'UniversityController@univercitydetail');
 Route::get('infodetailss/{NDE5}', 'UniversityController@univercitydetail_data');

Route::get('coneixfuturscompanys', 'UniversityController@coneixfuturscompanys');
Route::get('find-university-flat', 'UniversityController@universityflat');
Route::post('searchunversity', 'UniversityController@searchunversity');
Route::post('selesucat', 'UniversityController@selctsubcategory');
Route::post('favunersityuser', 'UniversityController@favunersityuser');
Route::get('parties-tournaments', 'UniversityController@tournaments');

Route::post('user_save', 'UserController@user_save');
Route::post('login', 'UserController@login');
Route::get('user/profile', 'UserController@profile');
Route::get('user/dashboard', 'UserController@dashboard');
Route::post('user_update', 'UserController@user_update');
Route::get('logout', 'UserController@logout');
Route::post('forgotpass', 'UserController@forgotpass');
Route::get('/password/reset/', 'UserController@resetpass');
Route::get('/resetpass/{id}', 'UserController@resetpasss');
Route::post('/password/updateforgot', 'UserController@updateforgot');
Route::post('updateprofile', 'UserController@updateprofile');
Route::post('selectdegree', 'UserController@selectdegree');
Route::get('universitydegree', 'UserController@degreenfo'); 
Route::post('user/userimage', 'UserController@saveimage');
Route::get('/verify/{id}', 'UserController@verify');
Route::post('/verifycode', 'UserController@verifycode');

/*Admin Url Route*/
Route::get('admin/','Admin\AdminController@login');
route::post('admin/adminlogin','Admin\AdminController@adminlogin');
Route::match(['get', 'post'], 'admin/dashboard','Admin\AdminController@dashboard');
Route::post('admin/ajaxdashboard','Admin\AdminController@ajaxdashboard');

/* forgotpassword */
Route::get('admin/forgotpwd','Admin\AdminController@forgotpassword');
Route::post('admin/forgot','Admin\AdminController@forgotpass');
Route::get('admin/resetpass/{id}','Admin\AdminController@resetpass');
Route::post('admin/updatepass','Admin\AdminController@updatepassword');
/* forgotpassword */
Route::get('/admin/', function () {
    $data['title']= "Login";
    return view('Admin.Sign-In')->with($data);

});
route::get('admin/logout','Admin\AdminController@logout');




/* institiute crud*/
route::get('admin/university_list','Admin\InstitutionController@institutionm');
route::get('admin/add_university','Admin\InstitutionController@institutionm');
// route::get('admin/aa_data','Admin\InstitutionController@institutionm');
route::post('admin/institute_save','Admin\InstitutionController@institutionm');
route::get('admin/edituniversity/{id}','Admin\InstitutionController@institutionm');
route::get('admin/viewuniversity/{id}','Admin\InstitutionController@institutionm');
route::get('admin/deleteuniversity/{id}','Admin\InstitutionController@institutionm');

route::post('status_institute','Admin\InstitutionController@status_institute');

Route::post('admin/selesucat', 'Admin\InstitutionController@selctsubcategory');
route::get('admin/degree_list','Admin\UniversitydegreeController@degreem');
route::get('admin/add_degree','Admin\UniversitydegreeController@degreem');
route::post('admin/degree_save','Admin\UniversitydegreeController@degreem');
route::get('admin/editdegree/{id}','Admin\UniversitydegreeController@degreem');
route::post('status_degree','Admin\UniversitydegreeController@status_degree');


route::get('admin/scope_list','Admin\UniversityscopeController@scopem');
route::get('admin/add_scope','Admin\UniversityscopeController@scopem');
route::post('admin/scope_save','Admin\UniversityscopeController@scopem');
route::get('admin/editscope/{id}','Admin\UniversityscopeController@scopem');
route::get('admin/deletescope/{id}','Admin\UniversityscopeController@scopem');
route::post('status_scope','Admin\UniversityscopeController@status_scope');

route::get('admin/subscope_list','Admin\UniversityscopeController@subscopem');
route::get('admin/add_subscope','Admin\UniversityscopeController@subscopem');
route::post('admin/subscope_save','Admin\UniversityscopeController@subscopem');
route::get('admin/editsubscope/{id}','Admin\UniversityscopeController@subscopem');
route::get('admin/deletesubscope/{id}','Admin\UniversityscopeController@subscopem');
route::post('status_subscope','Admin\UniversityscopeController@status_subscope');

route::get('admin/userlist','Admin\UniversityscopeController@userlist');
route::get('admin/viewuser/{id}','Admin\UniversityscopeController@uversityuserlist');
route::get('admin/viewuserdegree/{id}','Admin\UniversityscopeController@uversityuserlistdegr');
route::get('admin/deleteuser/{id}/delete/{idd}','Admin\UniversityscopeController@deleteuser');
route::post('status_user','Admin\UniversityscopeController@status_user');

route::get('admin/topp_list','Admin\PagetoppublicController@pagetoppm');
route::get('admin/add_topp','Admin\PagetoppublicController@pagetoppm');
route::post('admin/topp_save','Admin\PagetoppublicController@pagetoppm');
route::get('admin/edittopp/{id}','Admin\PagetoppublicController@pagetoppm');
route::get('admin/deletetopp/{id}','Admin\PagetoppublicController@pagetoppm');

route::get('admin/toppsub_list','Admin\PagetoppublicController@subpagetoppm');
route::get('admin/add_toppsub','Admin\PagetoppublicController@subpagetoppm');
route::post('admin/toppsub_save','Admin\PagetoppublicController@subpagetoppm');
route::get('admin/edittoppsub/{id}','Admin\PagetoppublicController@subpagetoppm');
route::get('admin/deletetoppsub/{id}','Admin\PagetoppublicController@subpagetoppm');

route::get('admin/uflat_list','Admin\PagetoppublicController@pageunversflatm');
route::get('admin/add_uflat','Admin\PagetoppublicController@pageunversflatm');
route::post('admin/uflat_save','Admin\PagetoppublicController@pageunversflatm');
route::get('admin/edituflat/{id}','Admin\PagetoppublicController@pageunversflatm');
route::get('admin/deleteuflat/{id}','Admin\PagetoppublicController@pageunversflatm');


route::get('admin/tournaments_list','Admin\PagetoppublicController@subpageunversflatm');
route::get('admin/add_tournaments','Admin\PagetoppublicController@subpageunversflatm');
route::post('admin/subuflat_save','Admin\PagetoppublicController@subpageunversflatm');
route::get('admin/edittournaments/{id}','Admin\PagetoppublicController@subpageunversflatm');
route::get('admin/deletetournaments/{id}','Admin\PagetoppublicController@subpageunversflatm');

route::get('admin/hometournaments_list','Admin\HomecController@hometornejosm');
route::get('admin/add_htournaments','Admin\HomecController@hometornejosm');
route::post('admin/htournaments_save','Admin\HomecController@hometornejosm');
route::get('admin/edithtournaments/{id}','Admin\HomecController@hometornejosm');
route::get('admin/deletehtournaments/{id}','Admin\HomecController@hometornejosm');

route::get('admin/ucategory_list','Admin\HomecController@universitycm');
route::get('admin/add_unccat','Admin\HomecController@universitycm');
route::post('admin/univer_save','Admin\HomecController@universitycm');
route::get('admin/editunccat/{id}','Admin\HomecController@universitycm');
route::get('admin/deleteunccat/{id}','Admin\HomecController@universitycm');
route::post('status_unccat','Admin\HomecController@status_unccat');


route::get('admin/utab_list','Admin\HomecController@universitytab');
route::get('admin/add_tabdetails','Admin\HomecController@add_tabdetails');
route::POST('admin/univer_save','Admin\HomecController@univer_save');

route::get('admin/tab_save','Admin\HomecController@universitytab');


/* Course crud*/
