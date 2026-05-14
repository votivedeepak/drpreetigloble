@include('layouts.header')
<main>

<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header justify-content-center">
          <h2>Enquire Now</h2>

         <!--  <p class="text-center">Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore </p> -->
        </div>
        

        <div class="col-md-6 offset-md-3 ">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row gy-3">

                
               <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email*" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Your Phone*" required>
                </div>

               
               <div class="row ">
                <div class="col-lg-6 form-group  mt-3">
            

                    <!--- India states -->
<select id="country-state" name="country-state" aria-label="Default select example" class=" form-select ">
    <option value="">Select state</option>
    <option value="AN">Andaman and Nicobar Islands</option>
    <option value="AP">Andhra Pradesh</option>
    <option value="AR">Arunachal Pradesh</option>
    <option value="AS">Assam</option>
    <option value="BR">Bihar</option>
    <option value="CH">Chandigarh</option>
    <option value="CT">Chhattisgarh</option>
    <option value="DN">Dadra and Nagar Haveli</option>
    <option value="DD">Daman and Diu</option>
    <option value="DL">Delhi</option>
    <option value="GA">Goa</option>
    <option value="GJ">Gujarat</option>
    <option value="HR">Haryana</option>
    <option value="HP">Himachal Pradesh</option>
    <option value="JK">Jammu and Kashmir</option>
    <option value="JH">Jharkhand</option>
    <option value="KA">Karnataka</option>
    <option value="KL">Kerala</option>
    <option value="LA">Ladakh</option>
    <option value="LD">Lakshadweep</option>
    <option value="MP">Madhya Pradesh</option>
    <option value="MH">Maharashtra</option>
    <option value="MN">Manipur</option>
    <option value="ML">Meghalaya</option>
    <option value="MZ">Mizoram</option>
    <option value="NL">Nagaland</option>
    <option value="OR">Odisha</option>
    <option value="PY">Puducherry</option>
    <option value="PB">Punjab</option>
    <option value="RJ">Rajasthan</option>
    <option value="SK">Sikkim</option>
    <option value="TN">Tamil Nadu</option>
    <option value="TG">Telangana</option>
    <option value="TR">Tripura</option>
    <option value="UP">Uttar Pradesh</option>
    <option value="UT">Uttarakhand</option>
    <option value="WB">West Bengal</option>
</select>
                </div>
                <div class="col-lg-6 form-group  mt-3">
 <select class="form-select " name="course_type" id="course_type" aria-label="Default select example" required>
                      <option selected="">select Course Type</option>
                      <option value="Certificate Course">Certificate Course</option>
                      <option value="Diploma">Diploma</option>
                       <option value="Undergradute">Undergradute</option>
                      <option value="Diploma">Diploma</option>
                       <option value="Postgraduate">Postgraduate</option>
                      <option value="Ph.D.">Ph.D.</option>
                  </select>
                 
                </div>
              </div>

             <!--  <div class="row">
                <div class="col-md-6 form-group">
            

                    <select class="form-select" aria-label="Default select example">
                      <option selected="">Qualification</option>
                      <option value="1">10th</option>
                      <option value="2">12th</option>
                      <option value="3">Others</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">

                  <select class="form-select" aria-label="Default select example">
                      <option selected="">Gender</option>
                      <option value="1">Female</option>
                      <option value="2">Male</option>
                     
                    </select>
                 
                </div>
              </div> -->
           
             
              <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Type Your Enquiry Here" required></textarea>
                </div>

             
              
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your Application has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Submit</button></div>
            </form>

          </div>
 
       
        

      </div>
    </section><!-- End Contact Section -->


</main>

  <!---/.EMD OF FOOTER--->
@include('layouts.footer')



