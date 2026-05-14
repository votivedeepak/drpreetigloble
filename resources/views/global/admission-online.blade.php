 @include('layouts.header')
<main>
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header justify-content-center">
          <h2>Online Admission form</h2>
<!-- 
          <p class="text-center">Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore </p> -->
        </div>
        

        <div class="col-md-6 offset-md-3 ">

            <form action="{{url('global/admissiononline')}}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">

                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name*" required>
                   {!!$errors->first("name", "<span class='text-danger'>:message</span>")!!}
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="father_name" class="form-control" id="name" placeholder="Your Father's Name*" required>
                   {!!$errors->first("father_name", "<span class='text-danger'>:message</span>")!!}
                </div>
              </div>
               <div class="row">
               
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="tel"  class="form-control" id="number" name="number" placeholder="Phone Number*" maxlength="10" required>
                   {!!$errors->first("number", "<span class='text-danger'>:message</span>")!!}
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
              <div class="row">
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

          </div>      
        
      </div>
    </section><!-- End Contact Section -->

</main>
@include('layouts.footer')


