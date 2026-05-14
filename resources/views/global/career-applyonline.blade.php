@include('layouts.header')
<main>
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header justify-content-center">
          <h2>Career with Us</h2>
<!-- 
          <p class="text-center">Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore </p> -->
        </div>
        

        <div class="col-md-6 offset-md-3 ">

            <form action="{{url('global/careerapplyonline')}}" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            @csrf
              <div class="row">

                <div class="col-md-6 form-group">
                  <input type="text" name="postname" class="form-control" id="postname" placeholder="Your Post Name" required value="{{ old('postname') }}">
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="Your First Name" required value="{{ old('fname') }}">
                </div>
              </div>
              <div class="row">
                
                <div class="col-md-6 form-group">
                  <input type="text" name="lname" class="form-control" id="lname" placeholder="Your last Name" required value="{{ old('lname') }}">
                </div>
                <div class="col-md-6 form-group">
                   <input type="date" class="form-control"  name="date" required value="{{ old('date') }}">
                </div>
              </div>
                             
               <div class="row">
                <div class="col-md-6 form-group">
                <select class="form-select" aria-label="Default select example" required name="qualification" required>
                      <option selected="">Qualification</option>
                      <option value="1">10th</option>
                      <option value="2">12th</option>
                      <option value="3">Others</option>
                    </select>
                </div>
                @if($errors->has('qualification'))
                  <span class="text-danger">{{ $errors->first('qualification')}}</span>
                  @endif 
                <div class="col-md-6 form-group">

                  <select class="form-select" aria-label="Default select example" required name="gender" required>
                      <option selected="">Gender</option>
                      <option value="1">Female</option>
                      <option value="2">Male</option>
                     
                    </select>
                </div>
                @if($errors->has('gender'))
                  <span class="text-danger">{{ $errors->first('gender')}}</span>
                @endif  
              </div>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="experience" class="form-control" id="name" placeholder="Experience"   required value="{{ old('experience') }}">
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" name="degree" class="form-control" id="name" placeholder="Degree" required value="{{ old('degree') }}">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                 
                  <input type="text" name="ccompany" class="form-control" id="name" placeholder="Current Company" required value="{{ old('ccompany') }}">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                   <input type="text" name="address" class="form-control" id="name" placeholder="Address" required value="{{ old('address') }}">
                </div>
              </div>
                <div class="row">
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="text"  class="form-control" id="phone" name="phone" placeholder="Phone number"  required value="{{ old('phone') }}">
                @if($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone')}}</span>
                @endif                   
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required value="{{ old('email') }}">
                </div>
              </div>
             
              <div class="row">
                <div class="col-md-6 form-group mt-4 mt-md-0">
                  <p>Upload your resume</p>
                 <input  type="file" id="formFile" required name="file">
                 @if($errors->has('file'))

                <span class="text-danger">{{ $errors->first('file')}}</span>

                @endif

                </div>
                <!-- <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div> -->
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

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')

