<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Dr.Preeti Global University</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
    <link href="{{ url('public/frontend/assets/img/logo.png')}}" rel="icon">
    <!-- Bootstrap core CSS -->
<link href="{{ url('public/frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ url('public/frontend/assets/css/style.css')}}" rel="stylesheet">
<link href="{{ url('public/frontend/assets/css/swiper-bundle.min.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ url('public/frontend/assets/css/carousel.css')}}" rel="stylesheet">
       <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  </head>
  <body>
    

 <header class="header">
  <div class="container">
    <div class="row v-center">
      <div class="header-item item-left logo">
        <div class="c d-flex  align-items-center">
          <img src="{{ url('public/frontend/assets/img/logo.png')}}">
          <div>
            <h5>Dr.Preeti Global University <br>
         Shivpuri (Madhya Pradesh)</h5>
              <p class="logos">Under the aegis of
"Laxman Seth Group of Institutions & Laxman Seth Educational Foundation "</p>
      </div>
          </div>
                   
         
        </div>

      <!-- menu start here -->
      <div class="header-item item-center ">
        <div class="menu-overlay">
        </div>
        <nav class="menu">
          <div class="mobile-menu-head">
            <div class="go-back"><i class="fa fa-angle-left"></i></div>
            <div class="current-menu-title"></div>
            <div class="mobile-menu-close">&times;</div>
          </div>
          <ul class="menu-main">
            <li>
              <a href="{{ url('/')}}">Home</a>
            </li>
            <li class="menu-item-has-children">
              <a href="#">About <i class="fas fa-angle-down"></i></a>
             <!--  <div class="sub-menu single-column-menu">
                <h4 class="title"> University History</h4>
                                  <ul>
                                    <li><a href="{{url('global/about')}}"> About University</a></li>
                                    <li><a href="{{url('global/history')}}"> University History</a></li>
                                     <li><a href="{{url('global/layout')}}"> Layout of University</a></li>
                                      <li><a href="{{url('global/dpgu')}}">Why DPGU</a></li>
                                     <li><a href="{{url('global/our-vision')}}">Our Vision</a></li>
                                     <li><a href="{{url('global/our-mission')}}">Our Mission</a></li>
                                     
                                  </ul>
              </div> -->
                <div class="sub-menu mega-menu mega-menu-column-4">

                               <div class="list-item">
                                 <img src="{{ url('public/frontend/assets/img/WhatsApp Image 2023-03-29 at 5.36.49 PM.jpeg')}}" alt="shop">
                               </div>
                               <div class="list-item">
                                  <h4 class="title">The University </h4>
                                  <ul>
                                    <li><a href="{{url('global/about')}}"> About University</a></li>
                                    <li><a href="{{url('global/history')}}"> University History</a></li>
                                     <li><a href="{{url('global/layout')}}"> Layout of University</a></li>
                                      <li><a href="{{url('global/dpgu')}}">Why DPGU</a></li>
                                     <li><a href="{{url('global/our-vision')}}">Our Vision</a></li>
                                     <li><a href="{{url('global/our-mission')}}">Our Mission</a></li>
                                     <li><a href="{{url('global/Message')}}">Message</a></li>
                                     
                                  </ul>
                                  
                               </div>

                                <div class="list-item">
                                  <h4 class="title"> Approvals</h4>
                                  <ul>
                                    <li><a href="{{ url('public/frontend/assets/pdf/2022-09-15-Ex-498.pdf')}}" target="_blank">University </a></li>
                                    <li><a href="{{ url('public/frontend/assets/pdf/Dr. Preeti Global University.pdf')}}" target="_blank">UGC</a></li>
                                    
                                     <li><a href="{{ url('public/frontend/assets/pdf/laxmansrth - mp.pdf')}}" target="_blank">New NCTE</a></li>
                                    
                                     <li><a href="{{ url('public/frontend/assets/pdf/ncte.pdf')}}" target="_blank">NCTE-1</a></li>
                                      <li><a href="{{ url('public/frontend/assets/pdf/NCTE-2.pdf')}}" target="_blank">NCTE-2</a></li>
                                     <!--  <li><a href="{{ url('public/frontend/assets/pdf/BPED Recognition 1 .pdf')}}" target="_blank">AICTE</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/Paramedical-council.pdf')}}" target="_blank">Paramedical council </a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/Nursing-council.jpeg')}}" target="_blank">Nursing Council </a></li>
                                     
                                     <li><a href="{{ url('public/frontend/assets/pdf/Pharmacy 23-24 approval.pdf')}}" target="_blank">New PCI</a></li> -->
                                     
                                      <li><a href="{{ url('public/frontend/assets/pdf/PCI 1200 APPROVAL 2025-26.pdf')}}" target="_blank">PCI-1</a></li>
                                      <li><a href="{{ url('public/frontend/assets/pdf/PCI 6145 APPROVAL 2025-26.pdf')}}" target="_blank">PCI-2</a></li>
                                        <li><a href="{{ url('public/frontend/assets/pdf/BCI-2025-26.pdf')}}" target="_blank">LAW</a></li>
                                     
                                  </ul>
                                  
                               </div>

                              <!--  <div class="list-item">
                                  <h4 class="title"> All Fees</h4>
                                  <ul>
                                    <li><a href="{{ url('public/frontend/assets/pdf/University-Fees-Structre.pdf')}}" target="_blank"> Fees</a></li>
                                    
                                     
                                  </ul>
                                  
                               </div> -->

                          

                </div>
            </li>
                       <li class="menu-item-has-children">
                          <a href="#" >Academics <i class="fa fa-angle-down"></i></a>
                             <div class="sub-menu mega-menu mega-menu-column-4">
                               <div class="list-item">
                                <ul>
                                  <li> <a href="{{ url('global/Engineering')}}">Department of Engineering & Technologies </a></li>
                                  <li> <a href="{{ url('global/Pharmacy')}}">Department of Pharmacy</a></li>
                                  <li> <a href="{{ url('global/Management')}}">Department of Management</a></li>
                                  <li> <a href="{{ url('global/Commerce')}}">Department of Commerce</a></li>
                                  <li> <a href="{{ url('global/Nursing')}}">Department of Nursing</a></li>
                                  <li> <a href="{{ url('global/Arts')}}">Department of Arts</a></li>
                                  <li> <a href="{{ url('global/Agriculture')}}">Department of Agriculture</a></li>
                                </ul>
                              </div>
                               <div class="list-item">
                                <ul>
                                  <li> <a href="{{ url('global/Paramedical-Science')}}">Department of Paramedical Science</a></li>
                                  <li> <a href="{{ url('global/General-Science')}}">Department of General Science</a></li>
                                  <li> <a href="{{ url('global/Forensic-Science')}}">Department of Forensic Science</a></li>
                                  <li> <a href="{{ url('global/Communication')}}">Dept. of Journalism & Mass Communication</a></li>
                                  <li> <a href="{{ url('global/Physical-Education')}}">Department of Physical Education</a></li>
                                  <li> <a href="{{ url('global/LAW')}}">Department of LAW</a></li>
                                </ul> 
                               </div>
                               <div class="list-item">
                                <ul>
                                <li> <a href="{{ url('global/Computer-Application')}}">Department of Computer Application</a></li>
                                <li> <a href="{{ url('global/Home-Science')}}">Department of Home Science</a></li>
                                <li> <a href="{{ url('global/fine-Arts')}}">Department of Fine  Arts</a></li>
                                <li> <a href="{{ url('global/Social-Work')}}">Department of Social Work</a></li>
                                <li> <a href="{{ url('global/Library-Science')}}">Department of Library Science</a></li>

                                <li> <a href="{{ url('global/Education')}}">Department of Education</a></li>
                                 <!--<li> <a href="{{ url('global/Embryology')}}">Department of Embryology</a></li>-->
                                </ul> 
                               </div>
                               <div class="list-item">
                                  <img src="{{ url('public/frontend/assets/img/WhatsApp Image 2023-03-29 at 5.36.49 PM.jpeg')}}" alt="shop">
                               </div>
                          </div>
                     </li>
            <li class="menu-item-has-children">
              <a href="#">Admission <i class="fas fa-angle-down"></i></a>
              <div class="sub-menu single-column-menu">
                <ul>
                  <li><a href="{{url('global/admission-online')}}">Online Admission</a></li>
                  <li><a href="{{url('global/admission')}}">Offline Admission</a></li>
                  
                </ul>
              </div>
            </li>
           

            <li class="menu-item-has-children">
              <a href="{{url('global/campuslife')}}">Gallery <i class="fas fa-angle-down"></i></a>

               <!-- <div class="sub-menu single-column-menu">
                 <ul>
                                    <li><a href="{{url('global/campuslife')}}">Gallery</a></li> 
                                <li><a href="{{url('global/campuslife-video')}}">Video Gallery</a></li> 
                                    
                  </ul>
              </div> -->

               <!-- <div class="sub-menu mega-menu mega-menu-column-4">
                    <div class="list-item">
                                  <img src="{{ url('public/frontend/assets/img/WhatsApp Image 2023-03-29 at 5.36.49 PM.jpeg')}}" alt="shop">
                               </div>
                               <div class="list-item">
                                <ul>
                                 <li> <a href="{{url('global/about')}}"> Campus Events</a></li>
                                   <li><a href="{{url('global/about')}}"> Visiting Campus</a></li>
                                   <li> <a href="{{url('global/about')}}"> Campus Highlights</a></li>
                                   <li> <a href="{{url('global/about')}}">Campus Safety</a></li>
                                  </ul>
                               </div>
                               <div class="list-item">
                                
                                 <a href="#"> <h4 class="title">Gallery</h4></a>
                                

                                <ul>
                                     <li><a href="{{url('global/campuslife')}}">Gallery</a></li>
                                     <li><a href="{{url('global/campuslife-video')}}">Video Gallery</a></li>
                                    
                                  </ul>
                                  
                               </div>
                               <div class="list-item">
                                <h4 class="title">Campus Events</h4>
                                <ul>
                                     <li><a href="#">Product List</a></li>
                                     <li><a href="#">Product List</a></li>
                                     <li><a href="#">Product List</a></li>
                                     <li><a href="#">Product List</a></li>
                              
                                     
                                  </ul>
                               </div>
                             

              </div> -->
            </li>
             <li class="menu-item-has-children">
              <a href="#">Career <i class="fas fa-angle-down"></i></a>
                 <div class="sub-menu mega-menu mega-menu-column-4">
                    <div class="list-item">
                                 <img src="{{ url('public/frontend/assets/img/WhatsApp Image 2023-03-29 at 5.36.49 PM.jpeg')}}" alt="shop">
                               </div>
                               <div class="list-item">
                                  
                                  <ul>
                                     <li><a href="{{url('global/career-applyonline')}}">Apply online</a></li>
                                     <li><a href="{{url('global/Current-opening')}}">Current opening</a></li>
                                     
                                  </ul>
                                  
                               </div>
                               <!-- <div class="list-item">
                                <h4 class="title">infrastructure</h4>
                                <ul>
                                     <li><a href="{{url('global/about')}}">Library</a></li>
                                     <li><a href="{{url('global/about')}}">Laboratories</a></li>
                                     <li><a href="{{url('global/about')}}">Hostel</a></li>
                                     <li><a href="{{url('global/about')}}">Sports Facility</a></li>
                                     <li><a href="{{url('global/about')}}">Transport</a></li>
                                     <li><a href="{{url('global/about')}}">Healthcare</a></li>
                                     <li><a href="{{url('global/about')}}">Computer Lab</a></li>
                                  </ul>
                                  
                               </div> -->
                               <!-- <div class="list-item">
                                 <img src="{{ url('public/frontend/assets/img/services-1.jpg')}}" alt="shop">
                               </div> -->
                             

              </div>
            </li>
            
             <!--<li class="menu-item-has-children">
              <a href="{{ url('global/Online_Program')}}">online Programme</a>-->
              <!--   <div class="sub-menu mega-menu mega-menu-column-4">-->
                   
              <!--                 <div class="list-item">-->
                                  
              <!--                    <ul>-->
                                    
              <!--                       <li><a href="{{url('global/Current-opening')}}">online Programme</a></li>-->
                                     
              <!--                    </ul>-->
                                  
              <!--                 </div>-->
              <!--</div>-->
           <!-- </li>-->
            <li>
              <a href="{{ url('global/contact')}}">Contact</a>
            </li>

            <li>
              <a href="{{ url('pages/public-self-disclosure')}}">UGC Mandatory Disclosure</a>
            </li>

            <li>
              <a href="{{ url('pages/Short-Term-Courses')}}">Short Term Courses</a>
            </li>

            <li>
              <a href="{{ url('global/online-fees')}}">Online Fees</a>
            </li>
           <li><a href="{{ url('public/frontend/assets/pdf/Exam-Form-Notice.pdf')}}" target="_blank">Notice</a></li>
                                    
           <!--   <li class="menu-item-has-children">
              <a href="#">Results <i class="fas fa-angle-down"></i></a>
              <div class="sub-menu single-column-menu">
                <ul>
                  <li><a href="{{ url('public/frontend/assets/pdf/Exam-Form-Notice.pdf')}}" target="_blank">Session 2023-24</a>
                  </li>
                  
                </ul>
              </div>
            </li> -->


              <!-- <li class="menu-item-has-children">
              <a href="#">Results <i class="fas fa-angle-down"></i></a>
            
                <div class="sub-menu mega-menu mega-menu-column-4">

                               
                               <div class="list-item">
                                  <h4 class="title">Session 2023-24 </h4>
                                  <ul>
                                    <li><a href="{{ url('public/frontend/assets/pdf/B PHARMA RESULT 1ST SEM.pdf')}}" target="_blank">B PHARMA RESULT 1ST SEM</a></li>
                                    <li><a href="{{ url('public/frontend/assets/pdf/B TECH RESULT 1ST SEM CIVIL ENG..pdf')}}"  target="_blank">B TECH RESULT 1ST SEM CIVIL ENG.</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/B TECH RESULT 1ST SEM COMPUTER SCIENCE.pdf')}}"  target="_blank">B TECH RESULT 1ST SEM COMPUTER SCIENCE</a></li>
                                      <li><a href="{{ url('public/frontend/assets/pdf/B TECH RESULT 1ST SEM ELECTRICAL.pdf')}}"  target="_blank">B TECH RESULT 1ST SEM ELECTRICAL</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/B TECH RESULT 1ST SEM ELECTRONICS.pdf')}}"  target="_blank">B TECH RESULT 1ST SEM ELECTRONICS</a></li>
                                    
                                     
                                  </ul>
                                  
                               </div>

                                <div class="list-item">
                                  <h4 class="title"> </h4>
                                  <ul>
                                     <li><a href="{{ url('public/frontend/assets/pdf/B TECH RESULT 1ST SEM MECHANICAL.pdf')}}"  target="_blank">B TECH RESULT 1ST SEM MECHANICAL</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/BA LLB RESULT 1ST SEM.pdf')}}"  target="_blank">BA LLB RESULT 1ST SEM</a></li>
                                    
                                    <li><a href="{{ url('public/frontend/assets/pdf/LLB RESULT 1ST SEM.pdf')}}"  target="_blank">LLB RESULT 1ST SEM</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/POLY CIVIL RESULT 1ST SEM.pdf')}}"  target="_blank">POLY CIVIL RESULT 1ST SEM</a></li>
                                      
                                 
                                     
                                  </ul>
                                  
                               </div>

                               <div class="list-item">
                                  <h4 class="title"> </h4>
                                  <ul>
                                    <li><a href="{{ url('public/frontend/assets/pdf/POLY COMPUTER SCIENCE RESULT 1ST SEM.pdf')}}"  target="_blank">POLY COMPUTER SCIENCE RESULT 1ST SEM</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/POLY ELECTRICAL RESULT 1ST SEM.pdf')}}"  target="_blank">POLY ELECTRICAL RESULT 1ST SEM</a></li>
                                     <li><a href="{{ url('public/frontend/assets/pdf/POLY MECHANICAL RESULT 1ST SEM.pdf')}}"  target="_blank">POLY MECHANICAL RESULT 1ST SEM</a></li>
                                 
                                     
                                  </ul>
                                  
                               </div>

                             

                          

                </div>-->
            </li>


          <li class="menu-item-has-children">
              <a href="#">Login <i class="fas fa-angle-down"></i></a>
              <div class="sub-menu single-column-menu">
                <ul>
                  <li><a href="https://erp.dpguindia.com/adminlogin.aspx" target="_blank">Admin Login</a></li>
                  <li><a href="https://erp.dpguindia.com/student_panel/student_login.aspx">Student Login</a></li>
                  <li><a href="https://erp.dpguindia.com/CenterLogin/Login.aspx">Counsellor Login</a></li>
                  <li><a href="https://erp.dpguindia.com:581/" target="_blank">Exam Cell Login</a></li>
                  
                </ul>
              </div>
            </li>


          </ul>
        </nav>
      </div>
      <!-- menu end here --> 
      <div class="header-item item-right">
     
        <div class="mobile-menu-trigger">
          <span></span>
        </div>
      </div>
    </div>
  </div>
 </header>