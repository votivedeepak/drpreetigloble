 @include('layouts.header')
<main>

<style>

#about-u:before {
    background: none;
    position: absolute;
}


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
    <h2 style="color: #000; margin: 10px 0; text-align: center;">Anti Ragging Policy</h2>

    <table style="width:100%; border-collapse:collapse; border:1px solid #000;">
      <tbody>
       
        <tr>
          <td style="padding:8px;">
            <a target="_blank" style="color:#003399; font-family:Arial; font-size:16px; font-weight:bold; text-decoration:underline;">
              Anti Ragging Policy
            </a>
          </td>
          <td style="text-align:center; padding:8px;">
            <a href="{{ url('public/frontend/assets/sdpdf/Student_life_UGC_ANTI_RAGGING_POLICY_REGULATIONS.pdf')}}" target="_blank">
              <img src="{{ asset('public/images/pdfdownload.png') }}" alt="Scholarship Policy" style="max-width:100px;">
            </a>
          </td>
        </tr>
      </tbody>
    </table>


 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


