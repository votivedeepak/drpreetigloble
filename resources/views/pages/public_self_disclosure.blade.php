 @include('layouts.header')
<main>

<link href="{{ url('public/frontend/assets/css/mystyle.css')}}" rel="stylesheet">    

<style>
h1,h2,h3{color:#003366;}
table{width:100%;border-collapse:collapse;margin:20px 0;}
td,th{border:1px solid #ccc;padding:8px;text-align:left;}
hr{margin:40px 0;}

#about-u:before {
    background: none;
    position: absolute;
}

</style>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const accordions = document.querySelectorAll(".tw-accordion");

  accordions.forEach(button => {
    button.addEventListener("click", () => {
      const expanded = button.getAttribute("aria-expanded") === "true";
      const content = button.querySelector(".tw-accordion-content");

      // Close all accordions in the same group
      const group = button.closest(".tw-accordion-group");
      if (group) {
        group.querySelectorAll(".tw-accordion").forEach(b => {
          b.setAttribute("aria-expanded", "false");
          b.querySelector(".tw-accordion-content").hidden = true;
        });
      }

      // Toggle the clicked accordion
      button.setAttribute("aria-expanded", !expanded);
      content.hidden = expanded;
    });
  });
});
</script>


<section id="about-u" class="d-flex align-items-center justify-content-center" style="background-image: url('https://www.drpreetiglobaluniversity.com/public/frontend/assets/img/public-self-disclosure-pg.jpg');> 
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        
        </div>
      </div>

    
    </div>
  </section><!-- End about-u -->

  <div class="tw:max-w-7xl tw:mx-auto tw:text-center tw:pt-10"> <h1 class="tw:text-2xl tw:font-semibold tw:uppercase" id="page-title"> Public Self Disclosure </h1> </div>
<section class="tw:max-w-7xl tw:mx-auto tw:px-5 tw:pt-10" aria-labelledby="unsung-heroes-title">
  <div>
    <div class="tw-accordion-group" id="accordion-group-889940" data-accordion-group="true">

      <!-- About HEI -->
      <button class="tw-accordion" aria-controls="accordion-about-hei">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">About HEI</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-about-hei" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><span style="font-size:16px;">About Us - </span><a href="/pages/about"><span style="font-size:16px;">Overview</span></a></li>
              <li><a href="{{ url('public/frontend/assets/sdpdf/statute.pdf')}}" target="_blank"><span style="font-size:16px;">Act and Statutes or MoA</span></a></li> 
              <li><a href="{{ url('public/frontend/assets/sdpdf/1.2-Dpgu-Institutional-Development-plan.pdf')}}" target="_blank"><span style="font-size:16px;">Institutional Developmental Plan</span></a></li>
              <li><a href="/pages/NAAC"><span style="font-size:16px;">Accreditation &amp; Ranking</span></a></li>
              <li><span style="font-size:16px;">Recognition and Approval</span>
                <ul>

<li><a href="{{ url('public/frontend/assets/sdpdf/1.4.1-UGC-APPROVAL-Dr.Preeti-Global-University.pdf')}}" target="_blank"><span style="font-size:16px;">UGC</span></a></li> 
<li><a href="{{ url('public/frontend/assets/sdpdf/1.4.2 UNIVERSITY STATE APPROVAL 22-02-2022.pdf')}}" target="_blank"><span style="font-size:16px;">MP State</span></a></li>
<li><a href="{{ url('public/frontend/assets/sdpdf/1.4.3 NCTE APPROVAL B.ED AND B.P.ED.pdf')}}" target="_blank"><span style="font-size:16px;">NCTE</span></a></li>
<li><a href="{{ url('public/frontend/assets/sdpdf/1.4.4 BCI 2025-26 D 3629 2025 FACULTY OF LAW DR. PREETI GLOBAL UNIVERSITY  MP_0001 (1).pdf')}}" target="_blank"><span style="font-size:16px;">BCI</span></a></li>
<li><a href="{{ url('public/frontend/assets/sdpdf/1.4.5 PCI.pdf')}}" target="_blank"><span style="font-size:16px;">PCI</span></a></li> 

                </ul>
              </li>
              <li><a href="{{ url('public/frontend/assets/sdpdf/1.5 Dpgu Annual Report.pdf')}}" target="_blank"><span style="font-size:16px;">Annual Report</span></a></li>
              <li><a href="{{ url('public/frontend/assets/sdpdf/1.6 Audit Balance sheet.pdf')}}" target="_blank"><span style="font-size:16px;">Audited Finance Statement</span></a></li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Administration -->
      <button class="tw-accordion" aria-controls="accordion-admin">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Administration</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-admin" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <table style="width:100%;" cellpadding="2" cellspacing="0" border="1" bordercolor="#000000">
              <tbody>
                <tr>
                  <th><span style="font-size:16px;">Designation</span></th>
                  <th><span style="font-size:16px;">Name</span></th>
                  <th><span style="font-size:16px;">Email</span></th>
                </tr>
                <tr style="font-size:16px;">
                  <td style="font-size:16px;">Chancellor</td>
                  <td style="font-size:16px;">MR. DEEPANSHU SUHANE</td>
                  <td style="font-size:16px;">dpguindia@gmail.com</td>
                </tr>
                <tr style="font-size:16px;">
                  <td>Vice-Chancellor</td>
                  <td>DR. DILEEP SHARMA</td>
                  <td>dpguindia@gmail.com</td>
                </tr>
                <tr style="font-size:16px;">
                  <td>Registrar</td>
                  <td>MR. AJAY RAI</td>
                  <td>dpguindia@gmail.com</td>
                </tr>
                <tr style="font-size:16px;">
                  <td>Finance Officer</td>
                  <td>MR. MAYANK AGRAWAL</td>
                  <td>dpguindia@gmail.com</td>
                </tr>
                <tr style="font-size:16px;">
                  <td>Controller of Examination</td>
                  <td>MR. PRASHANT TIWARI</td>
                  <td>dpguindia@gmail.com</td>
                </tr>
                <tr style="font-size:16px;">
                  <td>Ombudsperson</td>
                  <td>MR. ANKUR AGRAWAL</td>
                  <td>dpguindia@gmail.com</td>
                </tr>
                <tr style="font-size:16px;">
                  <td>Chief Vigilance Officer</td>
                  <td>MR. SUMIT SAHU</td>
                  <td>dpguindia@gmail.com</td>
                </tr>

               
                <tr style="font-size:16px;"><td colspan="3"><a href="/pages/BOG">Board of Governors</a></td></tr>
                <tr style="font-size:16px;"><td colspan="3"><a href="/pages/BOM">Board of Management</a></td></tr>
                <tr style="font-size:16px;"><td colspan="3"><a href="/pages/Academic-Council">Academic Council</a></td></tr>
                <tr style="font-size:16px;"><td colspan="3"><a href="/pages/Academic-Council">Board of Studies</a></td></tr>
                <tr style="font-size:16px;"><td colspan="3"><a href="/pages/Finance-Committee">Finance Committee</a></td></tr>
                <tr style="font-size:16px;"><td colspan="3"><a href="/pages/icc">Internal Complaints Committee</a></td></tr>
              </tbody>
            </table>
          </div>
        </div>
      </button>

      <!-- Academics -->
      <button class="tw-accordion" aria-controls="accordion-academics">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Academics</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-academics" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><a href="/pages/Programme-Offered"><span style="font-size:16px;">Details of Academic Programs</span></a></li>
              <li><a href="/pages/academic-calendar"><span style="font-size:16px;">Academic Calendar</span></a></li>
              <li><a href="/pages/ordinances-academics"><span style="font-size:16px;">Statutes/Ordinances Pertaining to Academics/Examinations</span></a></li>
              <li><a href="/pages/IQAC-Compositions"><span style="font-size:16px;">Internal Quality Assurance Cell</span></a></li>
              <li><a href="/pages/library"><span style="font-size:16px;">Library</span></a></li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Admission & Fee -->
      <button class="tw-accordion" aria-controls="accordion-admission-fee">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Admission &amp; Fee</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-admission-fee" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><a href="{{ url('public/frontend/assets/sdpdf/4.1 Dpgu Prospectus.pdf')}}" target="_blank"><span style="font-size:16px;">Prospectus</span></a></li>
              <li><a href="{{ url('public/frontend/assets/sdpdf/4.2 Dpgu Admission Process.pdf')}}" target="_blank"><span style="font-size:16px;">Admission Process</span></a></li>
              <li><a href="{{ url('public/frontend/assets/sdpdf/4.3 ugc refund policy.pdf')}}" target="_blank"><span style="font-size:16px;">Fee Refund Policy</span></a></li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Research -->
      <button class="tw-accordion" aria-controls="accordion-research">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Research</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-research" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><a href="/pages/research-overview"><span style="font-size:16px;">Research &amp; Development Cell</span></a></li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Student Life -->
      <button class="tw-accordion" aria-controls="accordion-student-life">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Student Life</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-student-life" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><a href="/pages/SportsFacilities"><span style="font-size:16px;">Sports Facilities</span></a></li>
              <!-- <li><a href="/pages/news"><span style="font-size:16px;">NSS Unit</span></a></li> -->
              <li><a href="/pages/hostel"><span style="font-size:16px;">Hostel Facilities</span></a></li>
              <li><a href="/pages/transportation"><span style="font-size:16px;">Transport Facilities</span></a></li>
              <li><a href="/pages/placement"><span style="font-size:16px;">Placement Cell</span></a></li>
              <li><a href="/pages/OBC_Committee"><span style="font-size:16px;">OBC Committee</span></a></li>
              <li><a href="/pages/SC_ST_Committee"><span style="font-size:16px;">SC-ST Committee</span></a></li>
              <li><a href="/pages/scholarship"><span style="font-size:16px;">National Scholarship Portal</span></a></li>
              <li>
                <span style="font-size:16px;">Anti-Ragging Cell</span>
                <ul>
                  <li><a href="/pages/Anti-Ragging"><span style="font-size:16px;">UGC Anti-Ragging Regulation</span></a></li>
                  <li><a href="/pages/Anti-Ragging-Policy"><span style="font-size:16px;">Anti-Ragging Policy</span></a></li>
                  <li><a href="/pages/Anti-Ragging-Committee"><span style="font-size:16px;">Anti-Ragging Committee</span></a></li>
                  <li><a href="/pages/Anti-Ragging"><span style="font-size:16px;">Anti-Ragging Squad</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Alumni -->
      <button class="tw-accordion" aria-controls="accordion-alumni">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Alumni</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-alumni" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <p><a href="/pages/Alumni-Connect"><span style="font-size:16px;">Alumni</span></a></p>
          </div>
        </div>
      </button>

      <!-- Information Corner -->
      <button class="tw-accordion" aria-controls="accordion-info-corner">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Information Corner</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-info-corner" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><a href="/pages/rti"><span style="font-size:16px;">RTI</span></a></li>
              <li><a href="/pages/news/type/Announcements"><span style="font-size:16px;">Circulars, Notices &amp; Announcements</span></a></li>
              <li><a href="/pages/news/type/Newsletter"><span style="font-size:16px;">Newsletters</span></a></li>
              <li><a href="/pages/news/type/Events"><span style="font-size:16px;">News &amp; Events</span></a></li>
              <li><a href="/pages/awards-achievements"><span style="font-size:16px;">Achievements</span></a></li>
              <li><a href="/pages/careers"><span style="font-size:16px;">Job Openings</span></a></li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Picture Gallery -->
      <button class="tw-accordion" aria-controls="accordion-gallery">
        <div class="tw-accordion-header">
          <h3 class="tw-accordion-label">Picture Gallery</h3>
          <span class="tw-accordion-icon" aria-hidden="true">
            <svg class="tw-accordion-arrow" width="20" height="20" fill="none">
              <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
        </div>
        <div class="tw-accordion-content" id="accordion-gallery" hidden="until-found" aria-expanded="false">
          <div class="tw-accordion-inner-content">
            <ul>
              <li><a href="/pages/albums" target="_blank"><span style="font-size:16px;">Picture Gallery</span></a></li>
            </ul>
          </div>
        </div>
      </button>

      <!-- Contact -->
     <button class="tw-accordion" aria-controls="d5439653-d436-45c1-8c62-df22a3fcc9fa-12" aria-expanded="true"> <div class="tw-accordion-header"><h3 class="tw-accordion-label">Contact Details with Telephone Directory</h3><span class="tw-accordion-icon" aria-hidden="true"> <svg class="tw-accordion-arrow" width="20" height="20" fill="none"> <path d="M5 8l5 5 5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </span> </div><div class="tw-accordion-content" id="d5439653-d436-45c1-8c62-df22a3fcc9fa-12" aria-expanded="false"><div class="tw-accordion-inner-content"><ul><li><span style="font-size:16px;"><a href="/pages/contact">Contact Details with Telephone Directory</a></span> </li></ul></div></div></button>

     </div>
    </div>
    </section>


  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


