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
                        <div class="header">
                            <h2>{{ $title }}</h2>
                      
                        </div>
                        <div class="body">
                            <form id="form_validation" action="{{ url('admin/institute_save') }}" enctype="multipart/form-data" method="POST">
                              @csrf
                             <input type="hidden" name="s_idd" id="s_idd" value="{{isset($universitydata->unrs_id)?$universitydata->unrs_id:''}}">   
                           

                        <div class="row clearfix">
						   <div class="col-sm-6 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                        <input type="text" class="form-control" name="unvercity_degree" id="unvercity_degree" value="{{isset($universitydata->unvercity_degree)?$universitydata->unvercity_degree:''}}">                                      
                                        <label class="form-label">Name of the degree</label>
                                        @if($errors->has("unvercity_degree"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('unvercity_degree')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>
								
							 <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                       <!-- <label class="form-label">University Name</label> -->
										<select class="form-control" id="institute_name" name="institute_name">
                                        <option value="">Select University</option>
                                         @foreach($unvercitylist  as $ulist)
                                         <option value="{{ $ulist->unc_id }}" <?php if(!empty($universitydata->unvercity_name)) { if($universitydata->unvercity_name==$ulist->unc_id) { echo 'selected'; }} ?>> {{ $ulist->unc_name }}</option>
                                       @endforeach                             
                                    </select>
										
                                        @if($errors->has("institute_name"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_name')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>
							</div>	
                             <div class="row clearfix">
                                <div class="col-sm-6 ">
                                	<div class="form-group"> 
                                    <label class="form-label">Logo</label>
                                    <div class="form-line">                                      
                                   
                                         <?php  if(!empty($universitydata->unvercity_logo)){ ?>
										   <img src="{{ url('public') }}/images/institute/{{$universitydata->unvercity_logo}}" width="200" height="200" >
										 <?php } ?>	
										  <input type="file" class="form-control" name="institute_logo"> 
										 <input type="hidden" class="form-control" name="institute_logo_old" value="{{isset($universitydata->unvercity_logo)?$universitydata->unvercity_logo:''}}">  
                                         @if($errors->has("institute_logo"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_logo')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
                                </div>
                                <div class="col-sm-6 ">
                                	<div class="form-group"> 
                                    <label class="form-label">Image</label>
                                    <div class="form-line">    
									 <?php  if(!empty($universitydata->unvercity_banner)){ ?>
										   <img src="{{ url('public') }}/images/banner/{{$universitydata->unvercity_banner}}" width="200" height="200" >
										 <?php } ?>	
                                       <input type="file" class="form-control" name="institute_banner"> 
							           <input type="hidden" class="form-control" name="institute_banner_old" value="{{isset($universitydata->unvercity_banner)?$universitydata->unvercity_banner:''}}">  

                                          @if($errors->has("institute_banner"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_banner')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
                                </div>
                            </div>
                                                       
                            <div class="row clearfix">

                         <div class="col-sm-6">
                                <div class="form-group form-float"> 
                                <div class="form-line"> 
                                     <select class="form-control" id="institute_state" name="institute_state">
                                        <option value="">Select Location</option>
                                         @foreach($state  as $staten)
                                         <option value="{{$staten->id}}" <?php if(!empty($universitydata->unvercity_state)) { if($universitydata->unvercity_state==$staten->id) { echo 'selected'; }} ?>> {{$staten->name	}}</option>
                                       @endforeach                             
                                    </select>
                                   
                                     @if($errors->has("institute_state"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_state')}}</strong>
                                        </span>
                                     @endif
                                </div>
                             </div>
                          </div>   
							

                                <div class="col-sm-6">
                                <div class="form-group form-float"> 
                                <div class="form-line"> 
								    <input type="text" class="form-control" name="unvercity_cutofmark" id="unvercity_cutofmark" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                     <label class="form-label">Cut Of Mark</label>
                                     <!-- <select class="form-control" id="unvercity_cutofmark" name="unvercity_cutofmark">
                                        <option value="">Select Cut Of Mark</option>
										<?php for ($i = 0; $i <= 14; $i++) { ?>                                       
                                         <option value="{{ $i }}" <?php if(!empty($universitydata->cutofmark)) { if($universitydata->cutofmark==$i) { echo 'selected'; }} ?>> {{ $i }}</option>
										<?php } ?>                           
                                    </select> -->
                                   
                                     @if($errors->has("institute_state"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_state')}}</strong>
                                        </span>
                                     @endif
                                </div>
                             </div>
                          </div>                                
                          </div>
							
							
                             <div class="row clearfix">
								   <div class="col-sm-6">
                                 	<div class="form-group form-float forBtmBrdr">                                 
                                    <!-- <label class="form-label">State</label> -->
                                    <select class="form-control" id="unvercity_scope" name="unvercity_scope" onchange="selectcat(this.value)">
                                        <option value="">Select Scope</option>
                                         @foreach($scope  as $scopen)
                                       <option value="{{$scopen->sp_id}}" <?php if(!empty($universitydata->unvercity_scope)) { if($universitydata->unvercity_scope==$scopen->sp_id) { echo 'selected'; }} ?>>{{$scopen->sp_name	}}</option>
                                       @endforeach                             
                                    </select>
                                   
                                     @if($errors->has("unvercity_scope"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('unvercity_scope')}}</strong>
                                        </span>
                                     @endif
                                </div>
                             </div>
								
								
                               <div class="col-sm-6"> 
                                 	<div class="form-group form-float">
                                 	<div class="form-line">                              
                                     <select class="form-control" id="unvercity_subscope" name="unvercity_subscope">
                                        <option value="">Select Sub Scope</option>
                                        <?php if(!empty($universitydata)){?>
                                             @foreach($subscope  as $sbcopen)
                                       <option value="{{$sbcopen->subs_id}}" <?php if(!empty($universitydata->unvercity_subscope)) { if($universitydata->unvercity_subscope==$sbcopen->subs_id) { echo 'selected'; }} ?>>{{$sbcopen->subs_name	}}</option>
                                       @endforeach   										
										<?php } ?>										
                                    </select>
                                   
                                     @if($errors->has("unvercity_subscope"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('unvercity_subscope')}}</strong>
                                        </span>
                                     @endif
                                    </div>
                                </div>
                                </div>

                            </div>
							
							 <div class="row clearfix">
							    <div class="col-sm-12"> 
                                 	<div class="form-group form-float">
                                 	<div class="form-line">                              
                                     <select class="form-control" id="unvercity_type" name="unvercity_type">
                                        <option value="">Select  University Type </option>                                      
                                       <option value="public" <?php if(!empty($universitydata->unvercity_type)) { if($universitydata->unvercity_type=="public") { echo 'selected'; }} ?>>Public</option>
                                  	   <option value="private" <?php if(!empty($universitydata->unvercity_type)) { if($universitydata->unvercity_type=="private") { echo 'selected'; }} ?>>Private</option>
					
                                    </select>
                                   
                                     @if($errors->has("unvercity_type"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('unvercity_type')}}</strong>
                                        </span>
                                     @endif
                                    </div>
                                </div>
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
							
                               <div class="form-group form-float" id="genral">
                                    <div class="form-line">                                      
                                        <textarea name="description" cols="30" rows="4" class="form-control no-resize">{{isset($universitydata->description)?$universitydata->description:''}}</textarea>                                       
                                         @if($errors->has("description"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('description')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
								
								 <div class="row clearfix" id="degree" style="display:none;">
								 <div class="col-sm-6">
								    <div class="form-group"> 
                                    <label class="form-label">Employment indicators</label>
									    <br>
										
									    <div class="form-line"> 
									    <input type="text" class="form-control" name="ttile_gross" id="ttile_gross" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Gross monthly income</label>
										 @if($errors->has("ttile_gross"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('ttile_gross')}}</strong>
                                        </span>
                                        @endif
									    </div>						
										
										
									    <div class="form-line">
										
									    <input type="text" class="form-control" name="employment_1" id="employment_1" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("employment_1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employment_1')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="employmentimg1">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("employmentimg1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employmentimg1')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									    <div class="form-line"> 
									    <input type="text" class="form-control" name="employment_2" id="employment_2" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("employment_2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employment_2')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="employmentimg2">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("employmentimg2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employmentimg2')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									   <div class="form-line"> 
									    <input type="text" class="form-control" name="employment_3" id="employment_3" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										  @if($errors->has("employment_3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employment_3')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="employmentimg3">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("employmentimg3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employmentimg3')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									 <div class="form-line"> 
									    <input type="text" class="form-control" name="employment_4" id="employment_4" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("employment_4"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employment_4')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="employmentimg4">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("employmentimg4"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('employmentimg4')}}</strong>
                                        </span>
                                        @endif
                                        </div>
																	 
                                   
									</div>
									
                                   </div>
							
								   
								   
								   <div class="col-sm-6">
									<div class="form-group"> 
                                    <label class="form-label">Satisfaction</label>
									    <br>
										
									    <div class="form-line"> 
									    <input type="text" class="form-control" name="ttile_gross" id="ttile_gross" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Gross monthly income</label>
										 @if($errors->has("ttile_gross"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('ttile_gross')}}</strong>
                                        </span>
                                        @endif
									    </div>						
										
										
									    <div class="form-line">
										
									    <input type="text" class="form-control" name="satisfaction_1" id="satisfaction_1" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("satisfaction_1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_1')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction1">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction1')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									    <div class="form-line"> 
									    <input type="text" class="form-control" name="satisfaction_2" id="satisfaction_2" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("satisfaction_2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_2')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction2">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction2')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									   <div class="form-line"> 
									    <input type="text" class="form-control" name="satisfaction_3" id="satisfaction_3" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										  @if($errors->has("satisfaction_3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_3')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction3">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction3')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									 <div class="form-line"> 
									    <input type="text" class="form-control" name="satisfaction_4" id="satisfaction_4" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("satisfaction_4"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_4')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction4">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction4"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction4')}}</strong>
                                        </span>
                                        @endif
                                        </div>
																	 
                                   
									</div>
								   </div>
								   
								  <div class="col-sm-6">
								   <div class="form-group"> 
                                    <label class="form-label">Admission and enrollment</label>
									    <br>
										
									    <div class="form-line"> 
									    <input type="text" class="form-control" name="ttile_gross" id="ttile_gross" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Gross monthly income</label>
										 @if($errors->has("ttile_gross"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('ttile_gross')}}</strong>
                                        </span>
                                        @endif
									    </div>						
										
										
									    <div class="form-line">
										
									    <input type="text" class="form-control" name="satisfaction_1" id="satisfaction_1" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("satisfaction_1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_1')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction1">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction1')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									    <div class="form-line"> 
									    <input type="text" class="form-control" name="satisfaction_2" id="satisfaction_2" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("satisfaction_2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_2')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction2">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction2')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									   <div class="form-line"> 
									    <input type="text" class="form-control" name="satisfaction_3" id="satisfaction_3" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										  @if($errors->has("satisfaction_3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_3')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction3">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction3')}}</strong>
                                        </span>
                                        @endif
                                        </div>
									
									
									 <div class="form-line"> 
									    <input type="text" class="form-control" name="satisfaction_4" id="satisfaction_4" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}">                                      
                                        <label class="form-label">Title</label>
										 @if($errors->has("satisfaction_4"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction_4')}}</strong>
                                        </span>
                                        @endif
									    </div>
										
									    <div class="form-line">                                       
                                        <input type="file" class="form-control" name="satisfaction4">
                                         <input type="hidden" class="form-control" name="degree_labour_old" value="{{isset($universitydata->institution_degree_labour)?$universitydata->institution_degree_labour:''}}">
                                          @if($errors->has("satisfaction4"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('satisfaction4')}}</strong>
                                        </span>
                                        @endif
                                        </div>
																	 
                                   
									</div>
								  </div>
								   
								   
								   <div class="col-sm-6">
									<div class="form-group"> 
                                    <label class="form-label">Academic Results</label>
                                    <div class="form-line"> 
										 <?php  if(!empty($universitydata->institution_degree_academicrs)){ ?>
										   <img src="{{ url('public') }}/images/degreedata/{{$universitydata->institution_degree_academicrs}}" width="200" height="200" >
										 <?php } ?>	
                                        <input type="file" class="form-control" name="degree_academicrs">
			                            <input type="hidden" class="form-control" name="degree_academicrs_old" value="{{isset($universitydata->institution_degree_academicrs)?$universitydata->institution_degree_academicrs:''}}">

                                         @if($errors->has("institute_banner"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_banner')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
								   </div>								   
							    </div>
								
                              <!--   <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div> -->
                             
                                <input type="submit" value=" @if(empty($universitydata)) Add @else Update @endif " name="submit" class="btn btn-primary waves-effect">
                             
                                <!-- <button class="btn btn-primary waves-effect" name="submit" type="submit">SUBMIT</button> -->
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
<script>
 function selectcat(id)
	  {
		//alert(id);
		$.ajax({
		  headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 	
		url: "{{ url('/') }}"+'/admin/selesucat',
        type: "POST",
        data:{'id':id},
        success: function(returncat){ 
         //alert(returncat);
		  $("#unvercity_subscope").html(returncat);
		}
		 });
	  }
</script>

