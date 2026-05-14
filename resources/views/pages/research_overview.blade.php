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

ol, ul { margin-bottom: 10px; }

ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    padding-inline-start: 40px;
    unicode-bidi: isolate;
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
    <h4 style="color: #000; margin: 10px 0;">Research and Innovation at AUS</h4>

    <div style="text-align: justify; font-family: Verdana; font-size: 14px;">
      <p>
        The DPGU is committed to fostering a culture of research and innovation and has established a robust framework to support faculty and students in their
research endeavors. Our research facilities are regularly updated to ensure that they remain state-of-the-art, providing researchers with access to the latest tools and technologies.
      </p>

      <p>
       To promote research, the university has a well-defined policy that outlines the guidelines and procedures for conducting research. This policy is uploaded on the university’s website and is regularly reviewed and updated to ensure that it remains relevant and effective. The policy provides clear guidelines on:
      </p>

      <ul>
 <li>Research ethics and integrity</li>
<li>Research funding and grants</li>
<li>Intellectual property rights</li>
<li>Research collaborations and partnerships</li>
<li>Research dissemination and publication</li>
      </ul>

      <p>
        The university also provides various resources and support services to facilitate research, including
      </p>

      <ul>
        <li>Research laboratories and equipment</li>
        <li>Research funding and grants</li>
        <li>Research mentorship and guidance</li>
        <li>Research training and workshops</li>
        <li>Research dissemination and publication support</li>
      </ul>

      <p>
        To ensure that research is conducted in a responsible and ethical manner, the institution has established a 
        <strong>Research Ethics Committee (REC)</strong> that reviews and approves all research proposals. 
        The REC ensures that research is conducted in accordance with ethical principles and guidelines.
      </p>

      <p>
        The university also encourages interdisciplinary research collaborations and partnerships with industry, government, 
        and other academic institutions. These collaborations provide researchers with opportunities to work on real-world problems 
        and develop innovative solutions.
      </p>

      <p>
        To promote research among students, the institution offers various research-based programs and initiatives, including:
      </p>

      <ul>
        <li>Regular interaction sessions for upgrading qualitative research work</li>
        <li>Research training and workshops</li>
        <li>Research mentorship and guidance</li>
      </ul>

      <p>
        The institution's commitment to research is reflected in its research output, which includes publications in top-tier journals, 
        presentations at international conferences, and patents and innovations. The university's research has also had a significant 
        impact on society, with many research projects leading to real-world applications and solutions.
      </p>

      <p>
        Overall, the university's research facilities, policies, and support services provide a conducive environment for research 
        and innovation to flourish. By promoting research, the institution aims to advance knowledge, address societal challenges, 
        and develop innovative solutions that benefit humanity.
      </p>
    </div>
  </div>
</div>



 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


