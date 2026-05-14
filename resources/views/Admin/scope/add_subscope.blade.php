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
                            <form id="form_validation" action="{{ url('admin/subscope_save') }}" enctype="multipart/form-data" method="POST">
                              @csrf
                             <input type="hidden" name="s_idd" id="s_idd" value="{{isset($subscopedata->subs_id)?$subscopedata->subs_id:''}}">   
                          
						        <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">                                      
                                          <label class="form-label">Scope</label> 
										 
                                         <select class="form-control" id="scp_id" name="scp_id">
                                        <option value="">Select Scope</option>
                                          @foreach($scopelist  as $scl)
                                           <option value="{{$scl->sp_id}}" <?php if(!empty($subscopedata->scope_id)) { if($subscopedata->scope_id==$scl->sp_id) { echo 'selected'; }} ?>>{{$scl->sp_name}}</option>
                                          @endforeach                             
                                       </select>
                                         @if($errors->has("scp_id"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('scp_id')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
						  
                                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">                                      
                                        <input type="text" class="form-control" name="subscope_name" value="{{isset($subscopedata->subs_name)?$subscopedata->subs_name:''}}">
                                     
                                        <label class="form-label">Sub Scope Name</label>
                                         @if($errors->has("subscope_name"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('subscope_name')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                             
                             
                                <input type="submit" value=" @if(empty($subscopedata)) Add @else Update @endif " name="submit" class="btn btn-primary waves-effect">
                             
                                <!-- <button class="btn btn-primary waves-effect" name="submit" type="submit">SUBMIT</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @include('Admin.layouts.footer')