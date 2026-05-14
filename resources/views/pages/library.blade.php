 @include('layouts.header')
<main>

<style>

#about-u:before {
    background: none;
    position: absolute;
}

.library-heading {
  font-family: Arial, sans-serif;
  font-weight: 700;
  margin-top: 1.5rem;
}

.highlights li {
  margin-bottom: 6px;
}

.library-images img,
.resource-links img {
  max-width: 120px;
  border-radius: 6px;
  transition: transform 0.3s;
}

.library-images img:hover,
.resource-links img:hover {
  transform: scale(1.05);
}

.highlights {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    list-style-type: none;
    margin-top: 20px;
    padding-left: 0;
}



.highlights li {
    width: 100%;
    max-width: 44%;
    padding-left: 20px;
    position: relative;
}

.highlights li::after {
    position: absolute;
    content: "";
    left: 0;
    top: 4px;
    width: 10px;
    height: 10px;
    background-color: #ffb424;
    border-radius: 50%;
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
    <h4 style="color: #000; margin: 10px 0;">University Library Overview</h4>

    <div class="row align-items-center mb-4">

    <p style="text-align: justify; font-family: Arial;">
      Dr. Preeti Global University (DPGU) boasts the largest collection of academic books in the region. Our library is distinguished by its diverse and regularly updated collection, featuring academic and non-academic books, career-building resources, personality development guides, and extensive research materials to meet evolving educational needs.
With a team of highly trained professionals, the library fosters an inclusive and welcoming environment where students can study, read, and engage comfortably. Equipped with modern technology, including computers, Wi-Fi, and online resources, it serves as a hub for research and learning.
DPGU is also committed to sustainability, integrating eco-friendly practices to minimize waste and promote responsible resource use. Additionally, the Learning Resource Center is fully automated with the Software for University Libraries (SOUL), ensuring efficient management and accessibility.</p>
      
    </div>

    <h4 class="library-heading mt-4">Highlights</h4>
    <ul class="highlights" style="font-family: Arial; font-size: 14px; line-height: 1.8;">
<li>Automated system powered by SOUL software.</li>
<li>E-library with extensive digital resources more than 20 Lac e-books and e-journals, videos.</li>
<li>Research assistance for academic and professional growth.</li>
<li>35000+ books across various disciplines</li>
<li>200+ journals for in-depth study and reference.</li>
<li>250+ seating capacity for comfortable study</li>
<li>Fully Wi-Fi-enabled library for seamless connectivity.</li>
<li>Dedicated digital library for remote access to resources.</li>
 
    </ul>

  
  </div>
</div>


 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


