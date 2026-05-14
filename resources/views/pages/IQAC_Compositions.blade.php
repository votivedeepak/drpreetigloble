 @include('layouts.header')
<main>

<style>

#about-u:before {
    background: none;
    position: absolute;
}

.table {
  width: 100%;
  border-collapse: collapse;
  margin: 1rem 0;
  font-family: Arial, sans-serif;
}
.table th, .table td {
  border: 1px solid #000;
  padding: 8px 10px;
  font-size: 14px;
  vertical-align: top;
}
.table th {
  background-color: #e8f0ff;
  color: #003399;
  text-align: left;
}
.table tr:nth-child(even) {
  background-color: #f9f9f9;
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
    <h4 style="color: #000; margin: 10px 0;">IQAC Compositions</h4>

    <table class="table table-bordered" style="width: 95%; border-collapse: collapse; margin-top: 20px;">
      <thead style="background-color: #f2f6ff; color: #003399;">
        <tr>
          <th style="border: 1px solid #000;">CATEGORY</th>
          <th style="border: 1px solid #000;">DESIGNATION</th>
          <th style="border: 1px solid #000;">NAME OF THE MEMBER</th>
        </tr>
      </thead>
      <tbody>
        <!-- Faculty of Arts and Social Sciences -->

        <tr>
          <td style="border: 1px solid #000;">Chairperson</td>
          <td style="border: 1px solid #000;">Director</td>
          <td style="border: 1px solid #000;">Dr. Sanjeev Gupta</td>
        </tr>

                 <tr>
          <td style="border: 1px solid #000;">Member of Management</td>
          <td style="border: 1px solid #000;">Director</td>
          <td style="border: 1px solid #000;">Dr. Preeti Gupta</td>
        </tr>

                <tr>
          <td style="border: 1px solid #000;">Administrative Officer</td>
          <td style="border: 1px solid #000;">Registrar</td>
          <td style="border: 1px solid #000;">Mr. Ajay Rai</td>
        </tr>



        <tr>
          <td rowspan="3" style="border: 1px solid #000;">Senior Teachers</td>
          <td style="border: 1px solid #000;">Professor</td>
          <td style="border: 1px solid #000;">Dr. Devesh Sharma</td>
        </tr>
        <tr>
          <td style="border: 1px solid #000;">Professor</td>
          <td style="border: 1px solid #000;">Dr. Neelam Verma</td>
        </tr>
        <tr>
          <td style="border: 1px solid #000;">Professor</td>
          <td style="border: 1px solid #000;">Dr. Abhishek Gupta</td>
        </tr>


      </tbody>
    </table>
  </div>
</div>

 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


