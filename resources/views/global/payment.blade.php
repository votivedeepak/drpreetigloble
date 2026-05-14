@include('layouts.header')
<main>
 <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header justify-content-center">
          <h2>Online Fees</h2>

          <!-- <p >Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum esciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p> -->
        </div>

        <div class="row gx-lg-0 gy-4">

          <div class="col-lg-4">

            <div class="info-container d-flex flex-column align-items-center justify-content-center" style="height: 40%">
              <div class="info-item d-flex">
                <i class="fa-solid fa-location-dot flex-shrink-0"></i>
                <div>

                  <h4>Online Payment</h4><br>
                  <p>Dr. Preeti Global University</p>
                  <p>SBI, DINARA</p>
                  <p>Account No : 41865519958</p>
                  <p>IFSC Code : SBIN0030170</p>

                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
            <i class="fa-solid fa-location-dot flex-shrink-0"></i>
                <div>
                  <h4>UPI Payment Number:</h4>
                  <p>Phonepe : 9235592522</p>
                </div>
              </div><!-- End Info Item -->


            </div>

          </div>

          <div class="col-lg-8">
          
          <img src="{{ url('/public/uploads/online-payment.png') }}">

          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  <!---/.EMD OF FOOTER--->
</main>

@include('layouts.footer')
