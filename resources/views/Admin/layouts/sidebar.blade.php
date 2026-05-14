  <section>
   
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{ url('resources/Admin') }}/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{url('admin/profile')}}/{{ Auth::user()->id }}"><i class="material-icons">person</i>Profile</a></li>
                            
                            <!-- <li role="separator" class="divider"></li> -->
                            <!-- <li><a href="{{ url('admin/logout') }}"><i class="material-icons">input</i>Logout</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu" id="myDIV">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li <?php if(request()->segment(2)=='dashboard'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/dashboard') }}">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
					
					<!-- <li <?php if(request()->segment(2)=='degree_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/degree_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Degree</span>
                        </a>
                    </li>  -->  
                 
                    <li <?php if(request()->segment(2)=='university_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/university_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>University</span>
                        </a>
                    </li> 
					
					<li <?php if(request()->segment(2)=='ucategory_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/ucategory_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>University Category</span>
                        </a>
                    </li> 

                    <!-- <li <?php //if(request()->segment(2)=='utab_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/utab_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>University Tab Details</span>
                        </a>
                    </li>  -->
                    
                    <li <?php if(request()->segment(2)=='scope_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/scope_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Scope</span>
                        </a>
                    </li>                     
  
                    <li <?php if(request()->segment(2)=='subscope_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/subscope_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Sub Scope</span>
                        </a>
                    </li> 
					
					  <li <?php if(request()->segment(2)=='hometournaments_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/hometournaments_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Home Page Tournaments</span>
                        </a>
                    </li> 
					
					  <li <?php if(request()->segment(2)=='topp_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/topp_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Page Top Public</span>
                        </a>
                    </li>   

                  <li <?php if(request()->segment(2)=='toppsub_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/toppsub_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Page Sub Top Public</span>
                        </a>
                    </li>  

					<li <?php if(request()->segment(2)=='uflat_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/uflat_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Page University Flat</span>
                        </a>
                    </li>  

					   <li <?php if(request()->segment(2)=='tournaments_list'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/tournaments_list') }}">
                            <i class="material-icons">text_fields</i>
                            <span>Page Tournaments</span>
                        </a>
                    </li> 
					

                     <li <?php if(request()->segment(2)=='userlist'){echo 'class="active"';} ?>>
                        <a href="{{ url('admin/userlist') }}">
                            <i class="material-icons">text_fields</i>
                            <span>User List</span>
                        </a>
                    </li> 					
                                   
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                 Unissoss Copyright ©<script>document.write(new Date().getFullYear());</script> 
                </div>
                <div class="version">
                   All Rights Reserved.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>


