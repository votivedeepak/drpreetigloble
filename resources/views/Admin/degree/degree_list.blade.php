<!DOCTYPE html>
<html>
@include('Admin.layouts.head')
<body class="theme-red">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
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
    </div> -->
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
           
         
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                       
                        <div class="header">
                              @if(Session::has('success'))
                                <div class="alert alert-success" style="width: 80%; color: #8ec48e;">{{Session::get('success')}}</div>
                                @endif
                                @if(Session::has('warning'))
                                 <div class="alert alert-danger">{{Session::get('warning')}}</div>
                                @endif
                            <h2>
                             Degree list
                            </h2>
                            
                            <ul class="header-dropdown m-r--5">
                              <!-- <form method="POST" id="form_validation" action="{{ url('institute/update') }}">  @csrf
                                  <div id="edit_btn_show"> 
                                  <input type="submit" name="submit" value="Edit Institute" id="edit_institute"  class="btn bg-light-green waves-effect">
                                </div>
                                  <input type="hidden" id="hiddn_check_edit_institute" value="hiddn_check_edit_institute" name="institution_id">
                              </form> -->
                                <a href="{{ url('admin/add_degree') }}" type="button" class="btn btn-warning waves-effect">Add Degree</a>
                                <!-- <a href="{{ url('admin/institute_export') }}" type="button" class="btn btn-warning waves-effect">Export Institute</a> --> 
                               
                            </ul>
                        
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="example1">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th> 
										    <th>cost price</th>   
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
								
                                    	 <?php $i=0; ?>
                                           @foreach($degreelist as $k => $v)
                                            <?php $i++;
                                                $status ='';
                                                 if($v->degree_status == 1){
                                                        $status = 'Active';
                                                   }else{
                                                     $status = 'Inactive';
                                                    }
                                               ?>
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$v->dgr_name}}</td>
                                              <td>{{$v->dgr_amount}}</td>                                   
                                            <td> <div class="switch">
                                           <label>
                                            <input type="checkbox"  onclick="return status_change('{{$v->dgr_id }}','{{ $v->degree_status }}','/status_degree');"<?php if($status == 'Active'){ echo 'checked'; } ?> ><span class="lever switch-col-light-green"></span></label>
                                          </div>
                                          </td>
                                            <td>                                           
                                            <label for="{{$v->dgr_id}}"></label>
                                              <ul class="header-dropdown m-r--5 manegDots">
                                                <li class="dropdown" style="list-style: none;">
                                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                  <i class="material-icons">more_vert</i>
                                                  </a>
                                                  <ul class="dropdown-menu pull-right">
                                                    <li><a href="{{url('admin/editdegree')}}/{{$v->dgr_id}}" class=" waves-effect waves-block">Edit</a></li>
                                                  
                                                  </ul>
                                                </li>
                                              </ul>
                                            </span>
                                            </td>
                                        </tr>
                                        @endforeach                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
   @include('Admin.layouts.footer')
 </body>
</html>