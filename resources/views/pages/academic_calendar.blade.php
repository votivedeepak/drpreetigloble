 @include('layouts.header')
<main>

<style>

#about-u:before {
    background: none;
    position: absolute;
}

li { line-height: 35px; font-size:16px; }


</style>  

<section id="about-u" class="d-flex align-items-center justify-content-center" style="background-image: url('https://www.drpreetiglobaluniversity.com/public/frontend/assets/img/public-self-disclosure-pg.jpg');> 
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        
        </div>
      </div>

    
    </div>
  </section><!-- End about-u -->
<section  id="academic-inner"  class="academic-inner about-fblock">
  <div class="ac-box">
     <div class="container">


<div class="col-md-12">
  <div class="course-details-1x imgs">
    <h4 style="color: #000; margin: 10px 0;">Academic Calendars</h4>

    <ul style="list-style-type: disc; padding-left: 20px; font-family: Arial, sans-serif; font-size: 14px; color: #003399;">

        <li>
        <a href="{{ url('public/frontend/assets/sdpdf/25-26 Academic Calendar.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          Academic Calendar 2025–26
        </a>
      </li>
      <li>
        <a href="{{ url('public/frontend/assets/sdpdf/2024-25 Academic Calendar.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          Academic Calendar 2024–25
        </a>
      </li>

<!--       <li>
        <a href="{{ url('public/frontend/assets/sdpdf/3.2.3 Academic calendar 2025-26.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          Academic Calendar 2025–26
        </a>
      </li>
      <li>
        <a href="{{ url('public/frontend/assets/sdpdf/3.2.2 Academic calendar 2024-25.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          Academic Calendar 2024–25
        </a>
      </li> -->
      <li>
        <a href="{{ url('public/frontend/assets/sdpdf/3.2.1 Academic calendar 2023-24.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          Academic Calendar 2023–24
        </a>
      </li>
      
    </ul>
  </div>
</div>


 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


