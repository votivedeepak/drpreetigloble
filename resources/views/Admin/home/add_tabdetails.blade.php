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
                            <h2>Tab Details</h2>
                      
                        </div>
                        <div class="body">
                            <form id="form_validation" action="{{ url('admin/univer_save') }}" enctype="multipart/form-data" method="POST">
                              @csrf
                             <input type="hidden" name="s_idd" id="s_idd" value="">   
                             <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line"> 
                                <select class="form-control" id="unc_id" name="unc_id">
                                        <option value="">Select University</option>
                                         @foreach($univercity  as $ulist)
                                         <option value="{{ $ulist->unc_id }}"> {{ $ulist->unc_name }}</option>
                                       @endforeach                             
                                    </select>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <div class="form-group form-float">
                                    <div class="form-line">                                      
                                        <input type="text" class="form-control" name="tab_name" value="">
                                     
                                        <label class="form-label">Tab Name</label>
                                         @if($errors->has("tab_name"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('tab_name')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-12">
                                 <div class="form-group form-float" id="genral">
                                    <div class="form-line"> 
                                    <label class="form-label">Description</label>   <br>                                  
                                        <textarea name="description" cols="30" rows="4" class="form-control no-resize"></textarea>                                       
                                         @if($errors->has("description"))
                                        <span class="invalid-feedback d-block" role="alert" style="color: red;">
                                        <strong>{{$errors->first('description')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                </div>
                             
                             
                                <input type="submit" value=" @if(empty($uncdata)) Add @else Update @endif " name="submit" class="btn btn-primary waves-effect">
                             
                                <!-- <button class="btn btn-primary waves-effect" name="submit" type="submit">SUBMIT</button> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 @include('Admin.layouts.footer')