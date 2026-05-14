@include('layouts.header')
<div class="page_header min-uoni mobile-banner-uni"><img src="{{ url('public/frontend/assets/images/banner.jpg') }}"></div>
<div class="container">
 	<ul class="list_filt mobile-list-view">
 		<li class="active">
 			<a href="{{ url('univercity') }}">Buscador de Graus</a>
 		</li>
 		<li>
 			<a href="{{ url('coneixfuturscompanys') }}">Top 20 Públic </a>
 		</li>
 		<li>
 			<a href="{{ url('find-university-flat')}}">Nous Graus</a>
 		</li>
 		<li>
 			<a href="{{ url('parties-tournaments')}}">Dobles Titulacions</a>
 		</li>
 	</ul>



 	<div class="row minijma">
 		<div class="col-md-12">

 			<div class="box_tabFilter" id="infodetail">
 				<div class="mid_bak">
 					<div class="bx_kab"><a href="{{ url('univercity')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
 					 <!-- <h3 class="info-head"></h3>  -->
 					<div class="row">
						<div class="col-md-12 p-0">
						 <?php  if(!empty($unvercitydetail->unvercity_banner)){ ?>
						  <div class="info_img">
                         <img src="{{ url('public') }}/images/banner/{{$unvercitydetail->unvercity_banner}}"  height="100" width="1000">
                           <div class="preu-public">
							<div class="list-text">
						   <ul> 
								<li><i class="fa fa-database" aria-hidden="true"></i>{{$unvercitydetail->contact1}}</li>
								<li><i class="fa fa-user" aria-hidden="true"></i> {{$unvercitydetail->contact2}}</li>
								<li><i class="fa fa-map-marker" aria-hidden="true"></i> {{ $unvercitydetail->us_name }} | {{ $unvercitydetail->name }}</li>
								<li><i class="fa fa-user" aria-hidden="true"></i> {{$unvercitydetail->contact3}}</li>
								
						
						</ul> </div>

            <div class="secondbox"> <p>Nota de tall 1a assignació PAU/CFGS 2023</p><h3><i class="fa fa-scissors" aria-hidden="true"></i> {{ $unvercitydetail->cutofmark }}</h3> 
          <?php  if(!empty($unvercitydetail->univercity_url)){ ?>
            <a href="https://{{ $unvercitydetail->univercity_url }}" class="wtsp-link"><p class="invl-text">

                  <?php echo $unvercitydetail->univercity_url;?>
                   </p></a>
              <?php }else{ ?>
             <a href="#" class="no-border" style=" border-top: none; display: none;"></a>
              <p class="invl-text">Not a valid URL</p> 
              <?php } ?> 
            </div> 
            </div>
						</div>
						 <div class="text-overlay-img ">
						 	 <div class="unve-img-heading">
                         <div class="first-text-box m-auto"> <h3>{{ $unvercitydetail->unvercity_degree }}</h3><h5>{{ $unvercitydetail->sub_unvercity_degree }}</h5><h5 class="univercity-lnk">{{ $unvercitydetail->unc_name }}</h5> </div>

                        </div>
                      
						 </div>
						
						  </div>
						  <?php }else{ ?>	
                <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
                <?php } ?>
							<!-- <ul class="lis_kab">
		 						<li>
		 							<span><i class="fa fa-map-marker" aria-hidden="true"></i></span> the printing and typesetting
		 						</li>
		 						<li>
		 							<span><i class="fa fa-clock-o" aria-hidden="true"></i></span> 10 AM to 7 PM
		 						</li>
		 						<li>
		 							<span><i class="fa fa-users" aria-hidden="true"></i></span> Places 80
		 						</li>


		 						<li>
		 							<span><i class="fa fa-eur" aria-hidden="true"></i></span> Places 80
		 						</li>
		 					</ul> -->							
						</div>
						<!-- <div class="col-md-6">
							<ul class="lis_kab">
		 						<li>
		 							<span><i class="fa fa-eur" aria-hidden="true"></i></span> Places 80
		 						</li>
		 						<li>
		 							<span><i class="fa fa-comment" aria-hidden="true"></i></span> Ldioma
		 						</li>
		 						<li>
		 							<span><i class="fa fa-calendar" aria-hidden="true"></i></span> calendar
		 						</li>
		 						<li>
		 							<span><i class="fa fa-university" aria-hidden="true"></i> Modalital
		 						</li>
		 					</ul>							
						</div> -->
 					</div> 				

				<!-- 	<div class="bx_labi">
		                <nav>
		            	    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		                	    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Informació General</a>
		                    	<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dades de la Titulació</a>
		                    </div>
		                </nav>
		                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
		                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		                     <p></p>
		                    </div>
		                  </div>		                
		                </div>
 -->
 



 					


<div class="row info-layp padding-page-content">

<div class="col-md-9">

<div class="card-wrapper content-cc">
  <div class="faq-card">
      <div class="faq-articles tabing-text">
        <article class="faq-accordion">
          <input type="checkbox" class="tgg-title" id="tgg-title-1">
          <div class="faq-accordion-title">
            <label for="tgg-title-1">
              <h2>Presentaciò de l'assignatura</h2>
              <span class="arrow-icon">
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </span>
            </label>
          </div>

          <div class="faq-accordion-content">
          <div class="panel-body">
       
          {!! substr($unvercitydetail->assignatura, 0) !!}
        
        </div>
          </div>

        </article> <!-- faq accordion -->

        <article class="faq-accordion">

          <input type="checkbox" class="tgg-title" id="tgg-title-2">
          <div class="faq-accordion-title">
            <label for="tgg-title-2">
              <h2>
               Objectius de l’estudi
              </h2>
              <span class="arrow-icon">
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </span>
            </label>
          </div>

          <div class="faq-accordion-content">
              <div class="panel-body">
       
              {!! substr($unvercitydetail->Objectius, 0) !!}
        
        </div>
          </div>

        </article> 
        <!-- faq accordion -->

        <article class="faq-accordion">
          <input class="tgg-title" type="checkbox" id="tgg-title-3">
          <div class="faq-accordion-title">
            <label for="tgg-title-3">
              <h2>
             Ponderacions d'assignatures de la Fase Específica de PAU
              </h2>
              <span class="arrow-icon">
               <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </span>
            </label>
          </div>

          <div class="faq-accordion-content">
             <div class="panel-body">
          <div class="row">
          <div class="col-md-12 m-auto">

          <div class="img-table">
          <?php if(!empty($unvercitydetail->Ponderacions_image)){ ?>
          <img src="{{ url('public') }}/images/banner/{{$unvercitydetail->Ponderacions_image}}">
          <?php }else{ ?>
            <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
             <?php } ?>
                 </div>
        
</div></div>
        </div>
          </div>
        </article> <!-- faq accordion -->


            <article class="faq-accordion">
          <input class="tgg-title" type="checkbox" id="tgg-title-4">
          <div class="faq-accordion-title">
            <label for="tgg-title-4">
              <h2>
              Distribució de crèdits i assignatures
              </h2>
              <span class="arrow-icon">
               <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </span>
            </label>
          </div>

          <div class="faq-accordion-content">
            <div class="panel-body">
          <div class="text-center headin-dangu w-100 mt-3">
     <h5> Distribució  de Crèdits  </h5>
</div>
              

<div class="row">
<div class="col-md-8 m-auto iner-tab" style="margin-bottom: 50px !important;">

<div class="img-table-align">
<?php if(!empty($unvercitydetail->distribution_image)){ ?>
      <img src="{{ url('public') }}/images/banner/{{$unvercitydetail->distribution_image}}"  height="100" width="1000"> 
   <?php }else{ ?>
    <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
       <?php }?>
          </div>

<div class="text-center headin-dangu">
  <h5> Distribució  d'assignatures </h5>
</div>
<?php $demos =json_decode($unvercitydetail->title,true);
    $demoss =json_decode($unvercitydetail->distribution,true);
    $sub_titles = json_decode($unvercitydetail->sub_title , true);
    if(!empty($demos)){
   foreach($demos as $key=> $value){
   ?>
  <div id="accordion-1">
    <div class="head"> 
    <h3>{{$value}}</h3>
      <i class="fa fa-angle-down  arrow" aria-hidden="true"></i>
     </div>
      <div class="key-tab">
      <!-- <div class="content sny-table"> 
     
        <div class="bg-tab">
      <ul>
      <li class="mt-3"><b>{!! substr($sub_titles[$key], 0) !!}</b></li> 
      </ul>
    </div> 
    </div>  -->
  
    <div class="content sny-table">
       <div class="bg-tab">
      <ul>
      <li class="mb-3">{!! substr($demoss[$key], 0) !!}</li> 
      </ul>
    </div>
    </div>
    </div>
  </div>
  <?php }}else{

?>
<?php 
echo "No Data Found";
}

?>
  </div>
  </div>

        </div>
          </div>

        </article> <!-- faq accordion -->


 <article class="faq-accordion">
          <input class="tgg-title" type="checkbox" id="tgg-title-5">
          <div class="faq-accordion-title">
            <label for="tgg-title-5">
              <h2>
            Què podre fer desprès
              </h2>
              <span class="arrow-icon">
               <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </span>
            </label>
          </div>

          <div class="faq-accordion-content">
             <div class="panel-body">
      
          <div class="heading-plust">
          {!! substr($unvercitydetail->podre, 0) !!}
      
     </div> 

     
       
           </div>
          </div>
        </article> <!-- faq accordion -->
        

      </div> <!-- faq articles -->

    </div>

  </div> <!-- faq card -->
  <div class="col-md-12 p-0">
  <div class="advertisment-box">
<img src="https://votivetech.in/unisos/public/images/banner/advertime.jpg">
</div>

</div>

</div>
<div class="col-md-3">
  <div class="right-blue">
<a href="{{ url('confix-companys')}}"> Accedeix al grup de whatsapp d’aquesta carrera</a>
</div>
<div class="balck-box">
  <img src="https://votivetech.in/unisos/public/frontend/assets/images/advertis.png">
  </div>
  </div> 
</div> 
  
<div class="col-md-12 m-auto xc-pading padding-page-content">

    <div class="bx_fourFilter navtab-bottom"> 
    <?php $person2 = Session::get('tabid');
    
    ?>
                               
                          <div class="tab-content box-gray py-3 px-3 px-sm-0" id="nav-tabContent">

                              <div class="tab-pane fade <?php if($person2=="") {echo "show active";} else {} ?>" id="nav-home_one" role="tabpanel" aria-labelledby="nav-home-tab_one">
                                <div class="row">
                                 <div class="col-md-12 ">   
                                 <h2 class="pie-heading"> Dades Generals</h2>                   
                                  <div class="image-graphical">
                                  <?php  if(!empty($unvercitydetail->institution_degree_labour)){ ?>
                          <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_labour}}">
                         <?php }else{  ?>
                          <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
                          <?php } ?>
                        </div>
                                    </div>
                                </div>
                              
                              </div>
                              <div class="tab-pane fade<?php if($person2=="nav-profile-tab_two") {echo "active in";} else {} ?>" id="nav-profile_two" role="tabpanel" aria-labelledby="nav-profile-tab_two">
                                 <div class="row">
                                    <div class="col-md-12 ">
                                       <h2 class="pie-heading">Satisfaction</h2> 
                             <div class="image-graphical">
                             <?php  if(!empty(Auth::user()->id) && Auth::user()->user_role==2) { ?>
                                   <?php  if(!empty($unvercitydetail->institution_degree_satisfaction)){ ?>
                          <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_satisfaction}}">
                         <?php } else{ ?> 
                          <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
                          <?php } }?>
                            </div>
                                    </div>
                                </div>
                             
                               
                              </div>
                              <div class="tab-pane fade <?php if($person2=="nav-profile-tab_three") {echo "active in";} else {} ?>" id="nav-home_thre" role="tabpanel" aria-labelledby="nav-home-tab_thre">
                                <div class="row">
                                    <div class="col-md-12">
                                       <h2 class="pie-heading">Admission and enrollment</h2> 
                           <div class="image-graphical">
                           <?php if(!empty(Auth::user()->id) && Auth::user()->user_role==2) { ?>
                                   <?php  if(!empty($unvercitydetail->institution_degree_access)){ ?>
                          <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_access}}">
                          <?php } else{ ?> 
                          <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
                          <?php } }?>
                          
                                    </div>
                                </div>
                               
                              </div></div>
                              <div class="tab-pane fade <?php if($person2=="nav-profile-tab_for") {echo "active in";} else {} ?>" id="nav-profile_for" role="tabpanel" aria-labelledby="nav-profile-tab_for">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2 class="pie-heading">Performance</h2> 
                                    <div class="image-graphical">
                                    <?php if(!empty(Auth::user()->id) && Auth::user()->user_role==2) { ?>
                                   <?php  if(!empty($unvercitydetail->institution_degree_academicrs)){ ?>
                          <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_academicrs}}">
                          <?php } else{ ?> 
                          <img src="https://votivetech.in/unisos/public/frontend/assets/images/pp.png"  height="100" width="1000"> 
                          <?php } }?>
                        </div>
                                    </div>
                                    
                                </div>
                              
                                
                              </div>
                         
                      <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link <?php if($person2==" ") {echo "Active";} else {} ?>" id="nav-home-tab_one" data-toggle="tab" href="#nav-home_one" role="tab" aria-controls="nav-home_one" aria-selected="true" onclick="addtab('nav-profile_one')">1. Employment indicators</a>

                                <?php if(!empty(Auth::user()->id)) { ?>
                                  <?php $person2 = Session::get('tabid'); ?>

                               <a class="nav-item nav-link <?php if($person2=="nav-profile-tab_two") {echo "active in";} else {} ?>" id="nav-profile-tab_two" data-toggle="tab" href="#nav-profile_two" role="tab" aria-controls="nav-profile_two" aria-selected="false" onclick="addtab('nav-profile_two')">2. Satisfaction</a>

                                <a class="nav-item nav-link <?php if($person2=="nav-home-tab_thre") {echo "active in";} else {} ?> id="nav-home-tab_thre" data-toggle="tab" href="#nav-home_thre" role="tab" aria-controls="nav-home_thre" aria-selected="false" onclick="addtab('nav-profile_three')">3. Admission and enrollment</a>

                                <a class="nav-item nav-link <?php if($person2=="nav-profile-tab_for") {echo "active in";} else {} ?>" id="nav-profile-tab_for" data-toggle="tab" href="#nav-profile_for" role="tab" aria-controls="nav-profile_for" aria-selected="false" onclick="addtab('nav-profile_for')">4. Performance</a>
                                <?php } else { ?>
                                         
                          <a class="nav-item nav-link " id="nav-profile-tab_two"  href="{{ url('login') }}/{{base64_encode($unvercitydetail->unrs_id)}}/nav-profile-tab_two" role="tab" aria-controls="nav-profile_two" aria-selected="false">2. Satisfaction</a> 

                                <a class="nav-item nav-link " id="nav-home-tab_thre"  href="{{ url('login') }}/{{base64_encode($unvercitydetail->unrs_id)}}/nav-home-tab_thre" role="tab" aria-controls="nav-home_thre" aria-selected="false">3. Admission and enrollment</a>

                                <a class="nav-item nav-link " id="nav-profile-tab_for"  href="{{ url('login') }}/{{base64_encode($unvercitydetail->unrs_id)}}/nav-profile-tab_for" role="tab" aria-controls="nav-profile_for" aria-selected="false">4. Performance
                                </a>
                                <?php } ?>
                   
                    </div>
                          </nav>
 </div>

                          </div>
                         </div>


  <div class="row fcv-pading padding-page-content">
     <div class="col-md-6 ">
   <div class="unvirl-address">
    <h2> Universidad y localización</h2> 
    <div class="mt-2">
    {!! substr($unvercitydetail->address, 0) !!}

</div>         
 </div>
</div>
 <div class="col-md-6">                      
<div class="botom-advertis top-map ">
<?php $address = $unvercitydetail->credits;
?>
  <iframe frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q='<?php echo str_replace(",", "", str_replace(" ", "+", $address)); ?>'&z=14&output=embed" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
 <!-- <button id="button-map" class="button-map">
                                </button> -->
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.2839258061963!2d2.1881048153147358!3d41.389639979263926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a31acb13f157%3A0x375d277935ed5c7b!2sUniversitat%20Pompeu%20Fabra%20-%20Campus%20de%20la%20Ciutadella!5e0!3m2!1sen!2sin!4v1676456638390!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
  </div>
</div>
</div>

<!---------html here---------------------------->

 			</div> 	
</div>
  </div>



</div>
 	</div>

    
<!------>
  
<!------>
@include('layouts.footer')

<script>
 function addtab(id){
    
	 $("#nav-profile-tab_two").css("display", "block");
	 $("#nav-profile-tab_two").css("display", "none");
	
	   $("#nav-home-tab_thre").css("display", "block");		 
	  $("#nav-home-tab_thre").css("display", "none");

    $("#nav-profile-tab_for").css("display", "block");		 
	  $("#nav-profile-tab_for").css("display", "none");

}

<script type="text/javascript">
	
	$('.head').click(function(){
  $(this).toggleClass('active');
  $(this).parent().find('.arrow').toggleClass('arrow-animate');
  $(this).parent().find('.content').slideToggle(280);
});

// icon from Font Awesome was used in accordion-1
</script>


<style>
h3.info-head {
    padding: 5px 21px 0px;
}


</style> 
<script>
$(document).ready(function () {
    // Handler for .ready() called.
    $('html, body').animate({
        scrollTop: $('#infodetail').offset().top
    }, 'slow');
});
</script>
