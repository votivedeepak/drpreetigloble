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
                                        <input type="text" class="form-control" name="institute_name" id="institute_name" value="{{isset($universitydata->unvercity_degree)?$universitydata->unvercity_degree:''}}" readonly>                                      
                                        <label class="form-label">Name of the degree</label>
                                        @if($errors->has("institute_name"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_name')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>
                        

						   <div class="col-sm-6 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                      <select class="form-control" id="institute_name" name="institute_name" readonly>
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
							           <input type="hidden" class="form-control" name="institute_banner_old" value="{{isset($universitydata->unvercity_banner)?$universitydata->unvercity_banner:''}}" readonly>  

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
                                     <select class="form-control" id="institute_state" name="institute_state" readonly>
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
                                   <input type="text" class="form-control" name="unvercity_cutofmark" id="unvercity_cutofmark" value="{{isset($universitydata->cutofmark)?$universitydata->cutofmark:''}}" readonly>                                      
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
                                    <select class="form-control" id="unvercity_scope" name="unvercity_scope" readonly>
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
                                     <select class="form-control" id="unvercity_subscope" name="unvercity_subscope" readonly>
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
                                        <textarea name="description" cols="30" rows="4" class="form-control no-resize" readonly>{{isset($universitydata->description)?$universitydata->description:''}}</textarea>                                       
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
                                    <label class="form-label">Labour Results</label>
                                    <div class="form-line">
                                       	 <?php  if(!empty($universitydata->institution_degree_labour)){ ?>
										   <img src="{{ url('public') }}/images/degreedata/{{$universitydata->institution_degree_labour}}" width="200" height="200" >
										 <?php } ?>	
                                     
                                          @if($errors->has("institute_banner"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_banner')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
								  </div>
								   
								   
								   <div class="col-sm-6">
									<div class="form-group"> 
                                    <label class="form-label">Satisfaction</label>
                                    <div class="form-line">
                                   	 <?php  if(!empty($universitydata->institution_degree_satisfaction)){ ?>
										   <img src="{{ url('public') }}/images/degreedata/{{$universitydata->institution_degree_satisfaction}}" width="200" height="200" >
										 <?php } ?>	
                                      
                                        @if($errors->has("institute_banner"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_banner')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
								   </div>
								   
								  <div class="col-sm-6">
								    <div class="form-group"> 
                                    <label class="form-label">Access And Registration</label>
                                    <div class="form-line">
                                      	 <?php  if(!empty($universitydata->institution_degree_access)){ ?>
										   <img src="{{ url('public') }}/images/degreedata/{{$universitydata->institution_degree_access}}" width="200" height="200" >
										 <?php } ?>	
                                                                            
                                          @if($errors->has("institute_banner"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_banner')}}</strong>
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
                                   			                        

                                         @if($errors->has("institute_banner"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('institute_banner')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
								   </div>
								   
							    </div>
                                <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">            
                                    <label class="form-label text-panel-name">Presentaciò de l'assignatura</label>  <br>                           
                                        <textarea name="assignatura" cols="100" rows="30" class="form-control ckeditor" required>{{isset($universitydata->assignatura)?$universitydata->assignatura:''}}</textarea>                             
                                         @if($errors->has("assignatura"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('assignatura')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    </div>
                                    </div>

                                    <div class="col-sm-12 ">
                                <div class="form-group form-float">
                                    <div class="form-line">         
                                    <label class="form-label text-panel-name">Objectius de l’estudi</label><br>                              
                                    <textarea name="Objectius" cols="100" rows="30" class="form-control ckeditor" required>{{isset($universitydata->Objectius)?$universitydata->Objectius:''}}</textarea>                                    
                                     
                                        @if($errors->has("Objectius"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('Objectius')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">            
                                    <label class="form-label text-panel-name">Què podre fer desprès</label>  <br>                           
                                        <textarea name="podre" cols="100" rows="30" class="form-control ckeditor" required>{{isset($universitydata->podre)?$universitydata->podre:''}}</textarea>                           
                                         @if($errors->has("podre"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('podre')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    </div>
                                    </div>

                                    <div class="col-sm-12 ">
                                    <div class="form-group form-float">
                                    <div class="form-line"> 
                                    <label class="form-label">Address</label>
                                        <br>                                      
                                        <textarea class="form-control ckeditor" name="address" id="address" value="{{isset($universitydata->address)?$universitydata->address:''}}"> {{isset($universitydata->address)?$universitydata->address:''}}</textarea>                                     
                                       
                                        @if($errors->has("address"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('address')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-sm-12 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                        <input type="text" class="form-control" name="univercity_url" id="univercity_url" value="{{isset($universitydata->univercity_url)?$universitydata->univercity_url:''}}">                                      
                                        <label class="form-label">Univercity Url</label><br>
                                        @if($errors->has("univercity_url"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('univercity_url')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                        <input type="text" class="form-control" name="sub_unvercity_degree" id="sub_unvercity_degree" value="{{isset($universitydata->sub_unvercity_degree)?$universitydata->sub_unvercity_degree:''}}">                                      
                                        <label class="form-label">Sub University degree</label><br>
                                        @if($errors->has("sub_unvercity_degree"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('sub_unvercity_degree')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                        <input type="text" class="form-control" name="contact1" id="contact1" value="{{isset($universitydata->contact1)?$universitydata->contact1:''}}">                                      
                                        <label class="form-label">Text 1</label><br>
                                        @if($errors->has("contact1"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('contact1')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                        <input type="text" class="form-control" name="contact2" id="contact2" value="{{isset($universitydata->contact2)?$universitydata->contact2:''}}">                                      
                                        <label class="form-label">Text 2</label><br>
                                        @if($errors->has("contact2"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('contact2')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>

                                <div class="col-sm-6 ">
                                <div class="form-group form-float">
                                    <div class="form-line">                                       
                                        <input type="text" class="form-control" name="contact3" id="contact3" value="{{isset($universitydata->contact3)?$universitydata->contact3:''}}">                                      
                                        <label class="form-label">Text 3</label><br>
                                        @if($errors->has("contact3"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('contact3')}}</strong>
                                        </span>
                                        @endif
                                       </div> 
                                    </div>
                                </div>
                              
                                <div class="col-sm-6 ">
                                	<div class="form-group"> 
                                    <label class="form-label text-panel-name">Ponderacions d'assignatures de la Fase Específica de PAU</label>
                                    <div class="form-line">    
									 <?php  if(!empty($universitydata->Ponderacions_image)){ ?>
										   <img src="{{ url('public') }}/images/banner/{{isset($universitydata->Ponderacions_image)?$universitydata->Ponderacions_image:''}}" width="200" height="200" >
										 <?php } ?>	
                                       <input type="file" class="form-control" name="Ponderacions_image"> 
							           <input type="hidden" class="form-control" name="Ponderacions_image" value="{{isset($universitydata->Ponderacions_image)?$universitydata->Ponderacions_image:''}}">  

                                          @if($errors->has("Ponderacions_image"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('Ponderacions_image')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                   </div>
                                </div>

                                <div class="row clearfix">
								   <div class="col-sm-6">
								     <a href="javascript: void(0)" class="btn btn-primary waves-effect" onclick="showdataimage(1)">Image Upload</a>
								   </div>
								    <div class="col-sm-6">
									   <a href="javascript: void(0)" class="btn btn-primary waves-effect" onclick="showdataimage(2)">Add Content </a>
								   </div>
							    </div>

                                <div class="form-group form-float" id="image">
                                <label class="form-label">Distribució  de crèdits i assignatures</label>  <br>  
                                    <div class="form-line">            
                                    <?php  if(!empty($universitydata->distribution_image)){ ?>
										   <img src="{{ url('public') }}/images/banner/{{isset($universitydata->distribution_image)?$universitydata->distribution_image:''}}" width="200" height="200" >
										 <?php } ?>	
                                       <input type="file" class="form-control" name="distribution_image"> 
							           <input type="hidden" class="form-control" name="distribution_image" value="{{isset($universitydata->distribution_image)?$universitydata->distribution_image:''}}">  
                                          @if($errors->has("distribution_image"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('distribution_image')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    </div> 

                                    <div class="col-md-12 field_wrapper_attraction" id="dropdown" style="display:none;">
                        <div class="form-group" id="attraction">
                        <?php  if(!empty($universitydata->title))  {
                        $demos =json_decode($universitydata->title,true);
                                  $demoss =json_decode($universitydata->distribution,true);
                                  $sub_titles = json_decode($universitydata->sub_title , true);
                                 foreach($demos as $key=>$value){
                                      ?>
                           <label> Title</label>
                          <div class="col-md-12" >
                            <div class="row add-title-bar">
                              <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="title[]" placeholder="Enter Name" value="{{isset($value)?$value:''}}" />
                              </div>
                              <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="sub_title[]" placeholder="Enter Name" value="{{isset($sub_titles[$key])?$sub_titles[$key]:''}}" />
                              </div>
                              <div class="col-md-6 form-group">
                                <textarea class="form-control ckeditor" name="distribution[]" cols="10" rows="5" placeholder="Enter Content" value="" />{{isset($demoss[$key])?$demoss[$key]:''}}</textarea>
                              </div>
                         

                            </div>
                          </div>  
                          <?php }}else{?>
                             <label> Title</label>
                             <label> Title</label>
                             <div class="col-md-12" >
                               <div class="row add-title-bar">
                                 <div class="col-md-6 form-group">
                                   <input type="text" class="form-control" name="title[]" placeholder="Enter title" value="" />
                                 </div>
                                 <div class="col-md-6 form-group">
                                   <input type="text" class="form-control" name="sub_title[]" placeholder="Enter sub title" value="" />
                                 </div>
                                 <div class="col-md-6 form-group">
                                   <textarea class="form-control ckeditor" name="distribution[]" placeholder="Enter Content" value="" /></textarea>
                                 </div>
                               </div>
                             </div> 
                              
                             <input type="button" value="ADD" class="btn btn-Success" onclick="addRow()">
                             <input type="hidden" value="1" id="ckeditor_value">
                           
                        <?php  }
                    ?>
                     
                        </div>
                      </div>
 <div id="content">

    <div class='col-md-12' style="display: none;" id="ckeditords1"><div class='row add-title-bar'><div class='col-md-6 form-group'><input type='text' class='form-control' name='title[]' placeholder='Enter Name' value=''/></div><div class='col-md-6 form-group'><textarea class='form-control ckeditor' id='ckeditor1' name='distribution[]' placeholder='Enter Content' value='' /></textarea></div><input type='button' class='btn btn-success' value='Remove' onclick='removeRow(this)'></div></div>

     <div class='col-md-12' style="display: none;" id="ckeditords2"><div class='row add-title-bar'><div class='col-md-6 form-group'><input type='text' class='form-control' name='title[]' placeholder='Enter Name' value=''/></div><div class='col-md-6 form-group'><textarea class='form-control ckeditor' id='ckeditor2' name='distribution[]' placeholder='Enter Content' value='' /></textarea></div><input type='button' class='btn btn-success' value='Remove' onclick='removeRow(this)'></div></div>

     <div class='col-md-12' style="display: none;" id="ckeditords3"><div class='row add-title-bar'><div class='col-md-6 form-group'><input type='text' class='form-control' name='title[]' placeholder='Enter Name' value=''/></div><div class='col-md-6 form-group'><textarea class='form-control ckeditor' id='ckeditor3' name='distribution[]' placeholder='Enter Content' value='' /></textarea></div><input type='button' class='btn btn-success' value='Remove' onclick='removeRow(this)'></div></div>
     
      <div class='col-md-12' style="display: none;" id="ckeditords4"><div class='row add-title-bar'><div class='col-md-6 form-group'><input type='text' class='form-control' name='title[]' placeholder='Enter Name' value=''/></div><div class='col-md-6 form-group'><textarea class='form-control ckeditor' id='ckeditor4' name='distribution[]' placeholder='Enter Content' value='' /></textarea></div><input type='button' class='btn btn-success' value='Remove' onclick='removeRow(this)'></div></div>
      
     <div class='col-md-12' style="display: none;" id="ckeditords5"><div class='row add-title-bar'><div class='col-md-6 form-group'><input type='text' class='form-control' name='title[]' placeholder='Enter Name' value=''/></div><div class='col-md-6 form-group'><textarea class='form-control ckeditor' id='ckeditor5' name='distribution[]' placeholder='Enter Content' value='' /></textarea></div><input type='button' class='btn btn-success' value='Remove' onclick='removeRow(this)'></div></div>

    <div class='col-md-12' style="display: none;" id="ckeditords6"><div class='row add-title-bar'><div class='col-md-6 form-group'><input type='text' class='form-control' name='title[]' placeholder='Enter Name' value=''/></div><div class='col-md-6 form-group'><textarea class='form-control ckeditor' id='ckeditor6' name='distribution[]' placeholder='Enter Content' value='' /></textarea></div><input type='button' class='btn btn-success' value='Remove' onclick='removeRow(this)'></div></div>      
      
</div>
								
                              <!--   <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div> -->
                             
                                <a type="button" href="{{ url('admin/university_list') }}"  class="btn btn-primary waves-effect">Back</a>
                             
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

 function addRow() {

    var ckid = document.getElementById("ckeditor_value");
    var ckid1 =ckid.value++;
   //alert(ckid1);
    var blocker = "ckeditords"+ckid1;

    $("#"+blocker).show();
  
}

function removeRow (input) {
  input.parentNode.remove()
}</script> 
<script>
function showdataimage(id){
     if(id==1){
	 $("#image").css("display", "block");
	 $("#dropdown").css("display", "none");
	 }
	 else {
	   $("#dropdown").css("display", "block");		 
	  $("#image").css("display", "none");
	  
	 }
}
</script>

<script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
   
<script type="text/javascript">
    $(document).ready(function () {
        $('#ckeditor1').ckeditor();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#ckeditor2').ckeditor();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#ckeditor3').ckeditor();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#ckeditor4').ckeditor();
    });
</script>
