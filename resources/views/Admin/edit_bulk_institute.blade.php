<!DOCTYPE html>
<html>
@include('Admin.layouts.head')
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   @include('Admin.layouts.nav')
    <!-- #Top Bar -->
  @include('Admin.layouts.sidebar')
  <section class="content">
        <div class="container-fluid">
            
                <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                          
                        <div class="body">
                            <form id="form_validation" action="{{ url('EditInstitute') }}" enctype="multipart/form-data" method="POST">
                              @csrf

                              <h3>{{$data['title']}}</h3>
                              @foreach($data['institute'] as $value)
                            <div class="editinst">
                            <div class="header">
                            <h2><b>{{$value[0]->institution_name}}</b></h2>
                            </div>

                              <input type="hidden" name="institutions_id[]" value="{{$value[0]->institutions_id}}">
                                                          
                             <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="institution_name[]" value="{{$value[0]->institution_name}}" placeholder="Institute Name" id="institution_name" required>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <input type="text" class="form-control" name="institution_link[]" value="{{$value[0]->institution_link}}" placeholder="Institute Link" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <img src="{{ url('public') }}/images/institute/{{$value[0]->institution_logo}}" width="200" height="200" >
                                            <input type="file" class="form-control" name="institute_logo[]" multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                           <img src="{{ url('public') }}/images/banner/{{$value[0]->institution_banner}}" width="200" height="200" >
                                          
                                             <input type="file" class="form-control" name="institute_banner[]" value="{{ $value[0]->institution_banner }}" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                             

                            <div class="row clearfix">
                                  <div class="col-sm-6">         
                                     <label class="form-label">Street</label>
                                         <input type="text" class="form-control" name="institution_address[]" value="{{ $value[0]->institution_address}}">                                     
                                </div>

                               

                                <div class="col-sm-6">                                     
                                     <label class="form-label">City</label>
                                         <input type="text" class="form-control" name="institute_city[]" value="{{ $value[0]->institute_city}}">                                       
                                   
                                </div>


                                
                            </div>
							
                                <div class="row clearfix">
								  <div class="col-sm-6">                                     
                                   <label class="form-label">State</label>
                                    <select class="form-control" id="institute_state" name="institute_state[]" required="">
                                        <option value="">Select State</option>
                                         @foreach($data['state']  as $statename)
                                       <option value="{{$statename->name}}" <?php if($value[0]->institute_state==$statename->name){ echo "selected";} ?>>{{$statename->name}}</option>
                                       @endforeach                             
                                    </select>
                                      
                                </div>
								
                                 <div class="col-sm-6">                                     
                                     <label class="form-label">Zip/Post Code</label>
                                         <input type="text" class="form-control" name="institute_postcode[]" value="{{ $value[0]->institute_postcode}}" >
                                                                   
                                </div>

                              </div>
							  
							   <div class="row clearfix">
								   <div class="col-sm-6">
								     <a href="javascript: void(0)" class="btn btn-primary waves-effect" onclick="showdata(1)">General Information</a>
								   </div>
								    <div class="col-sm-6">
									   <a href="javascript: void(0)" class="btn btn-primary waves-effect" onclick="showdata(2)">Degree Data </a>
								   </div>
							    </div> 
							  
                            <div class="row clearfix"  id="genral">
                                <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <textarea type="text" name="description[]" class="form-control" rows="3" required="">{!! strip_tags($value[0]->description) !!}</textarea>
                                           
                                            
                                        </div>
                                     </div>
                                  </div>
                                   <!--  <div class="col-sm-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                          <textarea type="text" name="institution_address[]" class="form-control" rows="3" required="">{!! $value[0]->institution_address !!}</textarea>
                                           
                                            <label class="form-label">Address</label>
                                        </div>
                                     </div>
                                  </div> -->
                            </div>
							
							 <div class="row clearfix" id="degree" style="display:none;">
								   <div class="col-sm-6">
								    <div class="form-group"> 
                                    <label class="form-label">Labour Results</label>
                                    <div class="form-line">
									 <img src="{{ url('public') }}/images/degreedata/{{$value[0]->institution_degree_labour}}" width="200" height="200" >
                                       <input type="file" class="form-control" name="degree_labour"> 
                                        <input type="hidden" class="form-control" name="degree_labour_old" value="{{$value[0]->institution_degree_labour}}">   
                                    </div>
                                   </div>
								   </div>
								   
								   
								    <div class="col-sm-6">
									<div class="form-group"> 
                                    <label class="form-label">Satisfaction</label>
                                    <div class="form-line">
									   <img src="{{ url('public') }}/images/degreedata/{{$value[0]->institution_degree_satisfaction}}" width="200" height="200" >
                                       <input type="file" class="form-control" name="degree_satisfaction">	
									   <input type="hidden" class="form-control" name="degree_satisfaction_old" value="{{$value[0]->institution_degree_satisfaction}}">   
                                    </div>
                                   </div>
								   </div>
								   
								    <div class="col-sm-6">
								    <div class="form-group"> 
                                    <label class="form-label">Access And Registration</label>
                                    <div class="form-line">
									  <img src="{{ url('public') }}/images/degreedata/{{$value[0]->institution_degree_access}}" width="200" height="200" >
                                       <input type="file" class="form-control" name="degree_access">
                                        <input type="hidden" class="form-control" name="degree_access_old" value="{{$value[0]->institution_degree_access}}"> 									   
                                      
                                    </div>
                                   </div>
								   </div>
								   
								   
								    <div class="col-sm-6">
									<div class="form-group"> 
                                    <label class="form-label">Academic Results</label>
                                    <div class="form-line">
									  <img src="{{ url('public') }}/images/degreedata/{{$value[0]->institution_degree_academicrs}}" width="200" height="200" >
                                       <input type="file" class="form-control" name="degree_academicrs">
                                      <input type="hidden" class="form-control" name="degree_academicrs_old" value="{{$value[0]->institution_degree_academicrs}}"> 										   
                                       
                                    </div>
                                   </div>
								   </div>
								   
							    </div>

                          </div>

                              @endforeach
                           <input type="submit" value="Submit" name="submit" class="btn btn-primary waves-effect">
                            </form>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>
@include('Admin.layouts.footer')

<script>
 function showdata(id){
     if(id==1){
	 $("#genral").css("display", "block");
	 $("#degree").css("display", "none");
	 }
	 else {
	   $("#degree").css("display", "block");		 
	  $("#genral").css("display", "none");
	  
	 }
}
</script>