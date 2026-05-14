<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<main>

<style type="text/css">
.homepoup{ margin-top: 0px !important; }
.homepouphead {
    color: #d4602a;
    font-size: 30px;
}  

.php-email-form {   
    padding: 10px;
}

.homescfs label{
    font-size: 13px;
}
</style>  

<div class="social-nt-fixed">
     <ul>
         <li class="twit"> <a href="https://twitter.com/dpguindia"><i class="fa-brands fa-twitter"></i></i></a> </li>
         <li class="fb"> <a href="http://www.facebook.com/dpguindia" target="blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
         <li class="email"> <a href="mailto: dpguindia@gmail.com"><i class="fas fa-envelope" aria-hidden="true"></i></a> </li>
         <li class="inkdin"> <a href="https://www.instagram.com/dpguindia/"><i class="fa-brands fa-instagram"></i></a> </li>

     </ul>
</div>


    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo e(url('public/frontend/assets/img/img1.jpg')); ?>" class="d-block w-100 " alt="" >
        
          <div class="container">
          <div class="carousel-caption">
            <h1>WELCOME TO DR. PREETI GLOBAL UNIVERSITY</h1>
            <p>Under the aegis of
"Laxman Seth Group of Institutions & Laxman Seth Educational Foundation "</p>
         
          </div>
          </div>
         <!-- </div> -->
      </div>
      <div class="carousel-item">
         <img src="<?php echo e(url('public/frontend/assets/img/img1.jpg')); ?>" class="d-block w-100 " alt="" >
       <!--  <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->

        <div class="container">
          <div class="carousel-caption">
            <h1>WELCOME TO DR. PREETI GLOBAL UNIVERSITY</h1>
            <p>Under the aegis of
"Laxman Seth Group of Institutions & Laxman Seth Educational Foundation "</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <!--   <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
         <img src="<?php echo e(url('public/frontend/assets/img/img1.jpg')); ?>" class="d-block w-100 " alt="" >
        <div class="container">
          <div class="carousel-caption ">
            <h1>WELCOME TO DR. PREETI GLOBAL UNIVERSITY</h1>
            <p>Under the aegis of
"Laxman Seth Group of Institutions & Laxman Seth Educational Foundation "</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div> 
<!----/.end of carousel---->

<!-- ======= Services Section ======= -->
    <section id="services" class="services">

      <div class="container" data-aos="fade-up">

       <!--  <header class="section-header">
          <h2>Services</h2>
          <p>Veritatis et dolores facere numquam et praesentium</p>
        </header> -->

        <div class="row ">
          <div class="col-lg-3 pt-3 col-md-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class=" icon">
                             <svg  height="30" width="30"fill="#d4602a" viewBox="0 -0.1 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 122.67" xml:space="preserve" stroke="#d4602a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M122.88,62.58l-12.91,8.71l7.94,13.67l-15.03,3.23l2.72,15.92l-15.29-2.25l-2.76,15.58l-14.18-8.11 l-7.94,13.33l-10.32-11.93l-12.23,9.55l-4.97-15.16l-15.54,4.59l1.23-15.54L7.69,92.43l6.75-13.93L0,71.03l11.29-10.95L0.38,48.66 l14.65-6.5L9.42,27.51l15.58-0.76l0-15.8l14.78,5.22l5.99-14.82l11.93,9.98L68.15,0l7.6,13.33l14.18-6.5l2.12,15.07l15.8-1.15 l-3.86,15.46l15.41,4.2l-9.21,12.95L122.88,62.58L122.88,62.58z M104.96,61.1c0-12.14-4.29-22.46-12.87-31 c-8.58-8.54-18.94-12.82-31.04-12.82c-12.1,0-22.42,4.29-30.96,12.82c-8.54,8.53-12.82,18.85-12.82,31 c0,12.1,4.29,22.46,12.82,31.08c8.53,8.62,18.85,12.95,30.96,12.95c12.1,0,22.46-4.33,31.04-12.95 C100.67,83.56,104.96,73.2,104.96,61.1L104.96,61.1L104.96,61.1z"></path> </g> </g></svg>
              </i>
              <h4>Apply Online</h4>
             <a href="<?php echo e(url('global/admission-online')); ?>">  <p>You Can Apply Online for Admission.</p></a>
             
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pt-3" data-aos="fade-up" data-aos-delay="200">
            <div class="service-box blue">
              <i class="icon">
                     <svg height="30" width="30" fill="#2a60a1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="#2a60a1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M14.25 2.5h-.75v-1h-1.25v1h-8.5v-1H2.5v1h-.75A1.25 1.25 0 0 0 .5 3.75v9.5a1.25 1.25 0 0 0 1.25 1.25h12.5a1.25 1.25 0 0 0 1.25-1.25v-9.5a1.25 1.25 0 0 0-1.25-1.25zM1.75 3.75h12.5V5H1.75V3.75zm0 9.5v-7h12.5v7z"></path><path d="M3 8h1.1v1.2H3zm0 2.4h1.1v1.2H3zM11.8 8h1.1v1.2h-1.1zm0 2.4h1.1v1.2h-1.1zM9.6 8h1.1v1.2H9.6zm0 2.4h1.1v1.2H9.6zM7.4 8h1.1v1.2H7.4zm0 2.4h1.1v1.2H7.4zM5.2 8h1.1v1.2H5.2zm0 2.4h1.1v1.2H5.2z"></path></g></svg>
              </i>
              <h4>Exam Timetable </h4>
             <a href="#"> <p>Click here to Find Exam Schedule.</p></a>
             
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pt-3" data-aos="fade-up" data-aos-delay="300">
            <div class="service-box orange">
              <i class=" icon">  <svg  height="30" width="30"fill="#d4602a" viewBox="0 -0.1 122.88 122.88" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="enable-background:new 0 0 122.88 122.67" xml:space="preserve" stroke="#d4602a"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style> <g> <path class="st0" d="M122.88,62.58l-12.91,8.71l7.94,13.67l-15.03,3.23l2.72,15.92l-15.29-2.25l-2.76,15.58l-14.18-8.11 l-7.94,13.33l-10.32-11.93l-12.23,9.55l-4.97-15.16l-15.54,4.59l1.23-15.54L7.69,92.43l6.75-13.93L0,71.03l11.29-10.95L0.38,48.66 l14.65-6.5L9.42,27.51l15.58-0.76l0-15.8l14.78,5.22l5.99-14.82l11.93,9.98L68.15,0l7.6,13.33l14.18-6.5l2.12,15.07l15.8-1.15 l-3.86,15.46l15.41,4.2l-9.21,12.95L122.88,62.58L122.88,62.58z M104.96,61.1c0-12.14-4.29-22.46-12.87-31 c-8.58-8.54-18.94-12.82-31.04-12.82c-12.1,0-22.42,4.29-30.96,12.82c-8.54,8.53-12.82,18.85-12.82,31 c0,12.1,4.29,22.46,12.82,31.08c8.53,8.62,18.85,12.95,30.96,12.95c12.1,0,22.46-4.33,31.04-12.95 C100.67,83.56,104.96,73.2,104.96,61.1L104.96,61.1L104.96,61.1z"></path> </g> </g></svg></i>
               <h4>Syllabus</h4>
              <a href="#"><p>Click here Find Latest Syllabus.</p></a>
             
            </div>
          </div>
          <div class="col-lg-3 col-md-6 pt-3" data-aos="fade-up" data-aos-delay="200">
         
            <div class="service-box blue">
              <i class="icon">
                <svg height="30" width="30" fill="#2a60a1" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="#2a60a1"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M14.25 2.5h-.75v-1h-1.25v1h-8.5v-1H2.5v1h-.75A1.25 1.25 0 0 0 .5 3.75v9.5a1.25 1.25 0 0 0 1.25 1.25h12.5a1.25 1.25 0 0 0 1.25-1.25v-9.5a1.25 1.25 0 0 0-1.25-1.25zM1.75 3.75h12.5V5H1.75V3.75zm0 9.5v-7h12.5v7z"></path><path d="M3 8h1.1v1.2H3zm0 2.4h1.1v1.2H3zM11.8 8h1.1v1.2h-1.1zm0 2.4h1.1v1.2h-1.1zM9.6 8h1.1v1.2H9.6zm0 2.4h1.1v1.2H9.6zM7.4 8h1.1v1.2H7.4zm0 2.4h1.1v1.2H7.4zM5.2 8h1.1v1.2H5.2zm0 2.4h1.1v1.2H5.2z"></path></g></svg>
              </i>
              <h4>Registration Form </h4>
                <a href="<?php echo e(url('global/admission-online')); ?>"><p>Click For More Information.</p>
             </a>
            </div>
          </div>

       </div>

          <div class="block-two pt-5">
           <div class="row ">

              <div class="col-xl-4 col-md-6  pt-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo e(url('public/frontend/assets/img/news-media-image.png')); ?>" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
             <!--    <div class="icon">
                  <i class="bi bi-activity"></i>
                </div> -->
              
                  <h4>MEDIA & GALLERY</h4>
               
                <p>Please Check out the News and Media to know more about the university.</p>

                
                <a href="<?php echo e(url('global/campuslife')); ?>" class="read-more"><span>View All</span> <i class="bi bi-arrow-right"></i></a>

              </div>
            </div>
              </div><!-- End Service Item -->

              <div class="col-xl-4 col-md-6 pt-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo e(url('public/frontend/assets/img/approval-image.png')); ?>" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
               <!--  <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div> -->
              
                  <h4>APPROVALS</h4>
                
                <p>A Private University established under sub-section (1) of section 28 of the MP Private University Act 2007.</p>
                <a href="<?php echo e(url('public/frontend/assets/pdf/2022-09-15-Ex-498.pdf')); ?>" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
              </div><!-- End Service Item -->

              <div class="col-xl-4 col-md-6 pt-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo e(url('public/frontend/assets/img/en-now.png')); ?>" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
               <!--  <div class="icon">
                  <i class="bi bi-broadcast"></i>
                </div> -->
              
                  <h4>ADMISSION ENQUIRY</h4>
                
                <p>All students of academic year 22-23 process for their registration form here.</p>
                <a href="<?php echo e(url('global/admission-online')); ?>" class="read-more"><span>Enquiry Now</span> <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
              </div><!-- End Service Item -->
            </div>
        </div>

      </div>

      

    </section><!-- End Services Section -->

    <section id="Admission" class="Admission" data-aos="fade-up">
      <div class="container-fluid">
        <div class="Admission-inner justify-content-center">
         <!--    <div class="row">
               <div class="col-md-8 offset-md-2"> -->
                <h2>Admisssions Process </h2>
         <p>Admissions to professional courses at Dr. Preeti Global University are based on Entrance Examinations conducted by the University or by Central/ State government agencies. Each of these has a specified quota of intake. Seats left vacant in one category may be filled by admissions in other categories. Admissions to all other courses are based on the merit in the qualifying examination. Candidates seeking admissions at Dr. Preeti Global University, have two options.</p>
        <div class="btnn ">
           <a href="<?php echo e(url('global/admission-online')); ?>" class="btn-buy">Explore</a>
        </div>
    <!--   </div>
            </div> -->


        </div>
      </div>
      
    </section>

  <section id="program" class="program" data-aos="fade-up">
    <div class="container">
       <div class="program-title">
        <h4>PROGRAMS WE OFFER</h4>
        <!-- <hr> -->
        <!-- <hr class="org"> -->
       </div>
        <div class=" slides-3 swiper p-slider ">
        
          <div class="row posts swiper-wrapper">
           <!--  <div class="owl-carousel owl-theme"> -->
              
            
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-1.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Engineering & Technologies </h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Engineering')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-2.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Pharmacy </h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Pharmacy')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-3.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Management </h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Management')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-4.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Commerce</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Commerce')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->





            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-5.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Nursing </h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Nursing')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-6.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Arts </h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Arts')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-7.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Agriculture</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Agriculture')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-8.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Paramedical Science</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Paramedical-Science')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->


             
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-9.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of General Science</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/General-Science')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-10.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Forensic Science</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Forensic-Science')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-11.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Dept. of Journalism & Mass Communication</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Communication')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-12.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Physical Education</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Physical-Education')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-13.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of LAW</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/LAW')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-14.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Computer Application</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Computer-Application')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-15.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Home Science</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Home-Science')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->
            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-16.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Fine  Arts</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/fine-Arts')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-17.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Social Work</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Social-Work')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

             <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-18.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Library Science</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Library-Science')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

          
             <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/dept-19.jpg')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Education</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Education')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <div class="col-lg-3 pt-3">
              <div class="post">
                <a href="#"><img src="<?php echo e(url('public/frontend/assets/img/embryology.png')); ?>">
                  <div class="serv-child">
                    <!-- <div class="thumb">
                       <img src="img/services-1.jpg">
                    </div> -->
                    <div class="post-content">
                      <div class="title text-center"><h5 class="text-white pt-1">Department of Research</h5>
                      </div>
                      <div class="desc"> 
                           <div class="btnn ">
                           <a href="<?php echo e(url('global/Embryology')); ?>" class="btn-more"><span>Explore</span></a>
                          </div>
                      </div>
                     </div>
                  </div>
                </a>
              </div>
            </div><!---/.vcol-lh-3--->

            <!-- </div> --><!---owl-c-->
          </div>
        </div>
    
    </div><!--container--->
  </div>
</section>
 

 <!-- End On Focus Section--->

 <div  id="glorious-year" class="glorious-year" data-aos="fade-up">
   <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <!-- <div class="vl-video d-flex flex-column justify-content-center h-100">
        <iframe  width="100%" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
            </iframe>
        </div> -->
          <div class="content d-flex flex-column justify-content-center h-100">
              <h4>Glorious Years of  Excellence and Leadership</h4>
              <hr>
              <p>
                At present Laxman Seth Group has separate identity and well renowned name in whole central part of India.
              </p>
              <ul>
                <li><i class="fa-regular fa-circle-check"></i> Sponsoring body of Dr. Preeti Global University is Laxman Seth Educational Foundation.</li>
                <li><i class="fa-regular fa-circle-check"></i> Laxman Seth Educational Foundation was incorporated in 2011 as Pvt. Ltd. Company under Indian companies section 25.</li>
                <!-- <li><i class="fa-regular fa-circle-check"></i>Laxman Seth Hospital and Test Tube Baby Centre is one of the leading hospital in Jhansi established in 2001..</li> -->
              </ul>
              <!-- <div class=" ">
               <a href="#" class="btn-buy">Explore</a>
              </div> -->
          </div>

      </div>
        <div class="col-lg-6">
          <div class="content d-flex flex-column justify-content-center h-100">
             <!--  <h4>Glorious Years of  Excellence and Leadership</h4>
              <hr>
              <p>
                At present Laxman Seth Group has separate identity and well renowned name in whole central part of India.
              </p> -->
              <ul>
                <li><i class="fa-regular fa-circle-check"></i>Laxman Seth Hospital and Test Tube Baby Centre is one of the leading hospital in Jhansi established in 2001..</li>
                <li><i class="fa-regular fa-circle-check"></i> Laxman Seth Educational Foundation Running large no of college/courses in different streams.</li>
                <li><i class="fa-regular fa-circle-check"></i> At present Laxman Seth Group has separate identity and well renowned name in whole central part of India.</li>
               <!--  <li><i class="fa-regular fa-circle-check"></i>Laxman Seth Hospital and Test Tube Baby Centre is one of the leading hospital in Jhansi established in 2001..</li> -->
              </ul>
              <div class="text-right ">
               <a href="<?php echo e(url('global/about')); ?>" class="btn-buy">Explore</a>
              </div>
          </div>
        </div>
    </div>
     
   </div>
 </div>
    <section id="news-media" class="news-media" >
      <div class="container">
        <div class="row">
        <div class="col-lg-6" data-aos="fade-up">
          <div class="news-inner  pt-3">
           <div class="news-title">
           <h4>NEWS</h4>
           <hr>
           </div>
         <div class="news-slider">
           <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg">
                 <img src="<?php echo e(url('public/frontend/assets/img/news-image2.jpg')); ?>">
                <!-- <img alt="growth-and-development-of-udaipur-city-news" src="https://www.iimu.ac.in/upload_data/news/mainimage/growth-and-development-of-udaipur-city-news.jpg" class="img-responsive">  -->
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Govt. approvals</h6>
                <p class="contentflowhide">Laxman seth group of institute has been recieved university approval.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->

      </div><!---1--->
      <div class="swiper-slide">
          <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                   
                    <img src="<?php echo e(url('public/frontend/assets/img/11.jpg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Inauguration</h6>
                <p class="contentflowhide">Inauguration of dr. preeti global university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---2-->
      <div class="swiper-slide">
         <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                 <img src="<?php echo e(url('public/frontend/assets/img/news-media-4.jpeg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Meeting with governor</h6>
                <p class="contentflowhide">The interview was published in  Patrika news paper based on the interaction of university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
       </div><!---1--->
    <div class="swiper-slide">
           <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                <img src="<?php echo e(url('public/frontend/assets/img/media-img.jpeg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Award ceremony </h6>
                <p class="contentflowhide">The interview was published in Patrika news paper based on the interaction of university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---2-->
      <div class="swiper-slide">
          <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                 <img src="<?php echo e(url('public/frontend/assets/img/11.jpg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Inauguration</h6>
                <p class="contentflowhide">Inauguration of dr. preeti global university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---1--->
      <div class="swiper-slide">
         <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                   <img src="<?php echo e(url('public/frontend/assets/img/news-image2.jpg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Govt. approvals</h6>
                <p class="contentflowhide">Laxman seth group of institute has been recieved university approval.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---2-->
     
    </div>
    <div class="swiper-pagination"></div>
  </div>
        </div>
      </div><!--news-inner-->
        </div>
      <div class="col-lg-6" data-aos="fade-up">
          <div class="media-inner pt-3">
           <div class="news-title">
           <h4>MEDIA</h4>
           <hr>
           </div>
         <div class="news-slider">
           <div class="swiper mySwiper">
  <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                <img src="<?php echo e(url('public/frontend/assets/img/11.jpg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Inauguration</h6>
                <p class="contentflowhide">Inauguration of dr. preeti global university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->

      </div><!---1--->
      <div class="swiper-slide" data-aos="fade-up">
          <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                <img src="<?php echo e(url('public/frontend/assets/img/media-img.jpeg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Award ceremony</h6>
                <p class="contentflowhide">The interview was published in Patrika news paper based on the interaction of university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---2-->
      <div class="swiper-slide">
         <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
               <img src="<?php echo e(url('public/frontend/assets/img/news-media-4.jpeg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Meeting with governor</h6>
                <p class="contentflowhide">The interview was published in Patrika news paper based on the interaction of university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---1--->
      <div class="swiper-slide">
           <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                <img src="<?php echo e(url('public/frontend/assets/img/news-image2.jpg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Govt. approvals</h6>
                <p class="contentflowhide">Laxman seth group of institute has been recieved university approval.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---2-->
      <div class="swiper-slide">
          <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
               <img src="<?php echo e(url('public/frontend/assets/img/news-media-4.jpeg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Meeting with governor</h6>
                <p class="contentflowhide">The interview was published in Patrika news paper based on the interaction of university.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---1--->
      <div class="swiper-slide">
         <div class=" col-lg-12 item">
          <div class=" slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 567px;"> <a href="#">
            <div class="halfimg">
              <div class="fl leftimg"> 
                <img src="<?php echo e(url('public/frontend/assets/img/news-image2.jpg')); ?>">
              </div>
              <div class="fl halfimgright">

                <h6><svg   height="15" width="15" fill="#fdfcfc" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8.489 31.975c-0.271 0-0.549-0.107-0.757-0.316-0.417-0.417-0.417-1.098 0-1.515l14.258-14.264-14.050-14.050c-0.417-0.417-0.417-1.098 0-1.515s1.098-0.417 1.515 0l14.807 14.807c0.417 0.417 0.417 1.098 0 1.515l-15.015 15.022c-0.208 0.208-0.486 0.316-0.757 0.316z"></path> </g></svg>Govt. approvals</h6>
                <p class="contentflowhide">Laxman seth group of institute has been recieved university approval.</p>
                    
              </div>
            </div> 
           </a>
          </div>
        </div><!----item--->
      </div><!---2-->
     
    </div>
    <div class="swiper-pagination"></div>
  </div>
        </div>
      </div><!--news-inner-->
        </div>
       </div><!---row-->
    </div><!-- media-inner -->
    </section>
  

        <section id="clients" class="clients" >

      <div class="container" data-aos="fade-up">

        <header class="section-header">
           <div class="program-title">
        <h4>HIRING COMPANIES</h4>
      <!--   <hr> -->
        <!-- <hr class="org"> -->
       </div>
        </header>

        <div class="clients-slider swiper" data-aos="fade-up">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-11.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-22.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-3.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-4.png')); ?>" class="img-fluid" alt=""></div>

            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-11.png')); ?>" class="img-fluid" alt=""></div>  

            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-6.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-11.png')); ?>" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-22.png')); ?>" class="img-fluid" alt=""></div>
             <div class="swiper-slide"><img src="<?php echo e(url('public/frontend/assets/img/company-img-3.png')); ?>" class="img-fluid" alt=""></div>
          </div>
         
        </div>
      </div>

    </section><!-- End Clients Section -->

<?php if(empty(Session::get('homepopup'))){ ?>

    <div class="modal fade show" id="empModal" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title homepouphead">Online Admission form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

            <form action="<?php echo e(url('global/admissiononlinehome')); ?>" method="post" role="form" class="php-email-form homepoup">
              <?php echo csrf_field(); ?>
              <div class="row">

                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                   <?php echo $errors->first("name", "<span class='text-danger'>:message</span>"); ?>

                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="father_name" class="form-control" id="name" placeholder="Your Father's Name*" required>
                   <?php echo $errors->first("father_name", "<span class='text-danger'>:message</span>"); ?>

                </div>
              </div>
               <div class="row">
               
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="tel"  class="form-control" id="number" name="number" placeholder="Phone Number*" maxlength="10" required>
                   <?php echo $errors->first("number", "<span class='text-danger'>:message</span>"); ?>

                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="tel"  class="form-control" id="watsapp_number" name="watsapp_number" placeholder="Whatsapp Number" maxlength="10" required>
                </div>
              </div>
              <div class="row">
                
                 <div class="col-md-6 form-group">
                   <input type="date" class="form-control" name="dob">
                </div>
                <div class="col-md-6 form-group">
                    <select class="form-select" name="gender" aria-label="Default select example" required>
                      <option selected="">Gender</option>
                      <option value="1">Female</option>
                      <option value="2">Male</option>
                     
                    </select>
                </div>
              </div>
              <div class="row homescfs">
                <div class="col-md-6 form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Student" checked="" style="height: 1rem; width: 1rem;">
                      <label class="form-check-label" for="gridRadios1">
                       Student
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Consultant" checked="" style="height: 1rem; width: 1rem;">
                      <label class="form-check-label" for="gridRadios1">
                       Consultant
                      </label>
                    </div>
                  </div>
                      
                </div>

                <div class="col-md-6 form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Faculty" checked="" style="height: 1rem; width: 1rem;">
                      <label class="form-check-label" for="gridRadios1">
                       Faculty
                      </label>
                    </div>
                    <div class="col-lg-6">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Staff" checked="" style="height: 1rem; width: 1rem;">
                      <label class="form-check-label" for="gridRadios1">
                       Staff
                      </label>
                    </div>
                  </div>
                      
                </div>
                
              </div>
              <!-- <div class="row">
                
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your last Name" required>
                </div>
                <div class="col-md-6 form-group">
                   <input type="date" class="form-control">
                </div>
              </div> -->
                
               
               <div class="row">
                <div class="col-md-6 form-group">
               
                  <select class="form-select" name="course_type" id="course_type" aria-label="Default select example" required>
                      <option selected="">select Course Type</option>
                      <option value="Certificate Course">Certificate Course</option>
                      <option value="Diploma">Diploma</option>
                       <option value="Undergradute">Undergradute</option>
                      <option value="Diploma">Diploma</option>
                       <option value="Postgraduate">Postgraduate</option>
                      <option value="Ph.D.">Ph.D.</option>
                  </select>

        
                </div>
                 <div class="col-md-6 form-group">
                  <input type="text" name="degree" class="form-control" id="name" placeholder="Degree" required>
                </div>
                 
                </div>

                 <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  
                   <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="col-md-12  form-group">
                  <textarea class="form-control" name="remark" rows="6" placeholder="Remark*" required></textarea>
                </div>
               <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your Application has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
                        
            </form>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
       </div>
     </div>

   <?php Session::put('homepopup', 1);?>  

    <?php } ?> 


  <!---/.EMD OF FOOTER--->
</main>

<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

<script type="text/javascript">
    $(window).load(function() { 
        $('#empModal').modal('show');

    });

</script>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php /**PATH /home4/drpreeti/public_html/drpreeti/resources/views/home.blade.php ENDPATH**/ ?>