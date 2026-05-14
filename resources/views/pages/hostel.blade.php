 @include('layouts.header')
<main>

<style>

#about-u:before {
    background: none;
    position: absolute;
}


.hostel-facilities {
  font-family: 'Arial', sans-serif;
  color: #333;
  margin: 20px 0;
}

.hostel-facilities h2 {
  text-align: center;
  text-transform: uppercase;
  font-size: 1.6rem;
  margin-bottom: 20px;
  color: #2a4d69;
}

.facility-table {
  width: 100%;
  border-collapse: collapse;
  background-color: #fff;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.facility-table th,
.facility-table td {
  border: 1px solid #ddd;
  padding: 12px 16px;
  vertical-align: top;
}

.facility-table th {
  width: 25%;
  background-color: #f4f6f8;
  font-weight: 600;
  color: #222;
}

.facility-table ul {
  margin: 0;
  padding-left: 20px;
}

.facility-table ul li {
  margin-bottom: 5px;
}

@media (max-width: 768px) {
  .facility-table th,
  .facility-table td {
    display: block;
    width: 100%;
  }

  .facility-table th {
    background-color: #e9f0f7;
    border-bottom: none;
  }
}


.fee-structure {
  font-family: 'Arial', sans-serif;
  color: #333;
  margin: 20px 0;
  text-align: center;
}

.fee-structure h3 {
  font-size: 1.4rem;
  text-transform: uppercase;
  color: #2a4d69;
  margin-bottom: 15px;
}

.fee-table {
  width: 100%;
  border-collapse: collapse;
  margin: 0 auto;
  background-color: #fff;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
}

.fee-table th,
.fee-table td {
  border: 1px solid #ddd;
  padding: 10px 15px;
  font-size: 14px;
}

.fee-table th {
  background-color: #f4f6f8;
  font-weight: bold;
  color: #222;
}

.fee-table tr:nth-child(even) {
  background-color: #f9f9f9;
}

@media (max-width: 768px) {
  .fee-table th,
  .fee-table td {
    display: block;
    width: 100%;
    text-align: left;
  }

  .fee-table th {
    background-color: #e9f0f7;
    border-bottom: none;
  }
}

ul {
    list-style-type: disc;
}

::marker {
    unicode-bidi: isolate;
    font-variant-numeric: tabular-nums;
    text-transform: none;
    text-indent: 0px !important;
    text-align: start !important;
    text-align-last: auto !important;
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
    <h4 style="color: #000; margin: 10px 0;">SECURITY YOU TRUST, COMFORT YOUR DAUGHTER DESERVES.</h4>

    <div class="row align-items-center mb-4">

    <p style="text-align: justify; font-family: Arial;">
      Located within the serene and secure premises of the DPGU campus, our Girls’ Hostel is designed to ensure 100% safety and well-being of all female students. It provides a structured and academically supportive environment where students can thrive both personally and professionally
     </p>


     <div class="hostel-facilities">
  <h2>Girls’ Hostel Facilities</h2>
  <table class="facility-table">
    <tbody>
      <tr>
        <th>Accommodation Options</th>
        <td>
          <ul>
            <li>Single, twin, and triple-bedded rooms</li>
            <li>Spacious rooms with ample natural light and ventilation</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Fully Furnished</th>
        <td>
          <ul>
            <li>Bed and mattress</li>
            <li>Study table and chair</li>
            <li>Bookshelf</li>
            <li>Reading lamp</li>
            <li>Wardrobe and mirror</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Comfort & Infrastructure</th>
        <td>
          <ul>
            <li>Sliding windows with mosquito mesh and curtains</li>
            <li>Adequate lighting and fans in all rooms</li>
            <li>Wide and airy corridors for easy movement and natural airflow</li>
            <li>Modern bathrooms and toilets equipped with branded fittings</li>
            <li>Maximum of 4 students per shower and W.C. unit</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Essential Amenities</th>
        <td>
          <ul>
            <li>Purified and chilled drinking water</li>
            <li>Centralized water heating system</li>
            <li>Centralized iron-removal water filtration plant</li>
            <li>Wi-Fi internet connectivity throughout the premises</li>
            <li>Laundry services on chargeable basis</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Dining Facilities (Maa Rasoi)</th>
        <td>
          <ul>
            <li>Hygienic, well-equipped mess serving 4 nutritious meals a day, including evening tea and snacks</li>
            <li><strong>Buffet system with a variety of cuisines:</strong>
              <ul>
                <li>Local</li>
                <li>Assamese</li>
                <li>North Indian</li>
                <li>South Indian</li>
                <li>Continental</li>
              </ul>
            </li>
            <li>All meals prepared by professional cooks</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Health & Wellness</th>
        <td>
          <ul>
            <li>Gym and yoga room with modern equipment</li>
            <li>First Aid Room with nursing staff available</li>
            <li>Transport services to nearby and specialized hospitals in case of emergencies</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Leisure & Learning Spaces</th>
        <td>
          <ul>
            <li>Indoor games room</li>
            <li>Study room</li>
            <li>TV room</li>
            <li>Guest rooms for visiting parents on chargeable basis</li>
            <li>Outdoor courts for badminton and volleyball</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Safety & Supervision</th>
        <td>
          <ul>
            <li>24x7 physical security with trained male and female guards</li>
            <li>CCTV surveillance throughout the hostel</li>
            <li>Regular maintenance and upkeep of all facilities</li>
            <li>Experienced and caring wardens offering personal support and discipline</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Housekeeping & Cleanliness</th>
        <td>
          <ul>
            <li>Dedicated housekeeping staff to maintain hygiene and cleanliness</li>
            <li>Routine cleaning and sanitation of all areas</li>
          </ul>
        </td>
      </tr>

      <tr>
        <th>Fire Safety</th>
        <td>
          <ul>
            <li>Firefighting systems installed across the buildings</li>
            <li>
              This hostel is more than a place to stay—it’s a vibrant, secure community that supports academic excellence
              and holistic development. We welcome parents and students to visit and experience the environment firsthand.
            </li>
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
</div>


<div class="fee-structure">
  <h3>Hostel Fee Structure</h3>
  <table class="fee-table">
    <thead>
      <tr>
        <th>Seater</th>
        <th>Washroom</th>
        <th>One Time (INR)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Common</td>
        <td>112,000</td>
      </tr>
      <tr>
        <td>2Lx</td>
        <td>Attached with Kitchen</td>
        <td>120,000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Common</td>
        <td>102,000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Common</td>
        <td>90,000</td>
      </tr>
    </tbody>
  </table>
</div>

<div class="hostel-facilities">
<p>We understand that most of the students moving away from home feel out of place; hence we strive to make the transition as smooth as possible by offering comfortable and safe stay in the campus. The University offers separate hostels for boys and girls supervised 24X7 by wardens and vigilant security personnel. Life-on-campus not only helps students to study but to socialize with their peers. Students have the luxury of being located outside the bustle of the city, yet not far from the attractions of the city during weekends. Friendships generated in the students’ life lasts longer.
Every effort is made to make students feel at home while their stay at the hostels.</p>
<h4>The Hostel Facilities majorly comprise of:</h4>
<p>• Comfortable rooms with and without attach toilets.</p>
<p>• Air conditioned rooms are also available.</p>
<p>• Rooms designed to provide adequate moving space and proper ventilation on sound engineering principles.</p>
<p>• 24X7 Wi-Fi facility for uninterrupted internet connectivity.</p>
<p>• Separate mess for each hostel serving sumptuous, hygienic and nutritious food to the hostlers.</p>
<p>To make the stay of the students a pleasant one, various events, activities and celebrations like colorful evening with various cultural activities within the hostels are a constant feature. Talent hunt, literary events are also organized frequently. Sports and cultural clubs have been created for the students to enhance their participation and knowledge. The common room of each hostel is well equipped with LCD, Magazines & Newspapers.</p>
<p>With around 300 families of faculty and staff members’ staying on the campus, the students have the advantage of getting guidance even after the college hours and at the weekends.</p>
</div>



      
    </div>
  
  </div>
</div>


 
     </div>
  </div>
  
</section>

  <!---/.EMD OF FOOTER--->
</main>
@include('layouts.footer')


