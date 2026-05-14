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
                            <form id="form_validation" action="{{ url('admin/htournaments_save') }}" enctype="multipart/form-data" method="POST">
                              @csrf
                             <input type="hidden" name="s_idd" id="s_idd" value="{{isset($tournamentsdata->ht_id )?$tournamentsdata->ht_id :''}}">   
                          
                                <div class="col-sm-6">
                                 <div class="form-group form-float" id="genral">
                                    <div class="form-line">                                      
                                        <input type="text" class="form-control" name="title" id="title" value="{{isset($tournamentsdata->title)?$tournamentsdata->title:''}}">                                      
                                        <label class="form-label">Name of the degree</label>
                                        @if($errors->has("title"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('title')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
								
								<div class="col-sm-6">
                                 <div class="form-group form-float" id="genral">
                                    <div class="form-line">                                
                                         <?php  if(!empty($tournamentsdata->t_image)){ ?>
										   <img src="{{ url('public') }}/images/home/{{$tournamentsdata->t_image}}" width="200" height="200" >
										 <?php } ?>	
										  <input type="file" class="form-control" name="t_image"> 
										 <input type="hidden" class="form-control" name="t_image_old" value="{{isset($tournamentsdata->unvercity_logo)?$universitydata->unvercity_logo:''}}">  
                                         @if($errors->has("t_image"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('t_image')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>

							   <div class="col-sm-12">
                                 <div class="form-group form-float" id="genral">
                                    <div class="form-line">                                      
                                        <textarea name="description" cols="30" rows="4" class="form-control no-resize">{{isset($tournamentsdata->description)?$tournamentsdata->description:''}}</textarea>                                       
                                         @if($errors->has("description"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('description')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
								                             
                             
                                <input type="submit" value=" @if(empty($tournamentsdata)) Add @else Update @endif " name="submit" class="btn btn-primary waves-effect">
                             
                                <!-- <button class="btn btn-primary waves-effect" name="submit" type="submit">SUBMIT</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @include('Admin.layouts.footer')