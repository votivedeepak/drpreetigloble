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
    <h4 style="color: #000; margin: 10px 0;">Statutes/Ordinances Pertaining to Academics/Examinations</h4>

    <ul style="list-style-type: disc; padding-left: 20px; font-family: Arial, sans-serif; font-size: 14px; color: #003399;">
      <li>
        <a href="{{ url('public/frontend/assets/sdpdf/3.3.1 DPGU ORDINANCE.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          DPGU ORDINANCE
        </a>
      </li>
      <li>
        <a href="{{ url('public/frontend/assets/sdpdf/3.3.2 CERTIFICATE AOA MOA.pdf')}}" target="_blank" style="color: #003399; text-decoration: none; font-weight: bold;">
          CERTIFICATE AOA MOA
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


