@include('layouts.header')
<div class="page_header min-uoni mobile-banner-uni"><img src="{{ url('public/frontend/assets/images/banner.jpg') }}"></div>
<div class="container">
    <div class="row minijma">
    <div class="col-md-12 p-0">
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
</div>
</div>


 	<div class="row minijma ">
 		<div class="col-md-12 p-0">

 			<div class="box_tabFilter" id="infodetail">
 				<div class="mid_bak">
 					<div class="bx_kab"><a href="{{ url('univercity')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></div>
 					<!-- <h3 class="info-head">{{ $unvercitydetail->unvercity_degree }}</h3> -->
 					<div class="row">
						<div class="col-md-12 p-0">
						 <?php  if(!empty($unvercitydetail->unvercity_banner)){ ?>
						  <div class="info_img">
                 <img src="https://votivetech.in/unisos/public/images/banner/topbgbar.jpg" height="100" width="1000">

                        <!--  <img src="{{ url('public') }}/images/banner/{{$unvercitydetail->unvercity_banner}}"  height="100" width="1000"> -->

             <div class="text-overlay-img ">
              <div class="unve-img-heading">
                         <div class="first-text-box m-auto"> <h3>{{ $unvercitydetail->unvercity_degree }}</h3>
                         	<h5>Escola Politècnica Superior d'Enginyeria de Manresa (UPC)</h5>
                          <a href="{{ $unvercitydetail->whatapplink }}"><p style="color:#0189f2";>{{ $unvercitydetail->whatapplink }}</p></a> </div>

                        </div>
                       <!--  <div class="col-md-5">

                        </div> -->

             </div>


                           <div class="preu-public">
							<div class="list-text">
						   <ul> 
								<li><i class="fa fa-database" aria-hidden="true"></i> find the loaction</li>
								<li><i class="fa fa-user" aria-hidden="true"></i> find the loaction</li>
								<li><i class="fa fa-map-marker" aria-hidden="true"></i> find the loaction</li>
								<li><i class="fa fa-user" aria-hidden="true"></i> find the loaction</li>
								
						
						</ul> </div>

						<div class="secondbox"> <p>Administración y Dirección de Empresa</p><h3><i class="fa fa-scissors" aria-hidden="true"></i> {{ $unvercitydetail->cutofmark }}</h3>
              <a href="#" >http:canva.com </a>


             </div>
						</div>
						 
						
						  </div>
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

					<!-- <div class="bx_labi">
		                <nav>
		            	    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		                	    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Informació General</a>
		                    	<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dades de la Titulació</a>
		                    </div>
		                </nav>
		                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
		                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
		                     <p>{!! $unvercitydetail->description !!}</p>
		                    </div>
		                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> -->
		                    <!-- 	<div class="bx_fourFilter">
		                    		<nav>
					            	    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
					                	    <a class="nav-item nav-link active" id="nav-home-tab_one" data-toggle="tab" href="#nav-home_one" role="tab" aria-controls="nav-home_one" aria-selected="true">1. Employment indicators</a>
					                    	<?php if(!empty(Auth::user()->id)) { ?>
											<a class="nav-item nav-link" id="nav-profile-tab_two" data-toggle="tab" href="#nav-profile_two" role="tab" aria-controls="nav-profile_two" aria-selected="false">2. Satisfaction</a>
					                    	<a class="nav-item nav-link" id="nav-home-tab_thre" data-toggle="tab" href="#nav-home_thre" role="tab" aria-controls="nav-home_thre" aria-selected="false">3. Admission and enrollment</a>
					                    	<a class="nav-item nav-link" id="nav-profile-tab_for" data-toggle="tab" href="#nav-profile_for" role="tab" aria-controls="nav-profile_for" aria-selected="false">4. Performance</a>
					                        <?php } else { ?>
											<a class="nav-item nav-link" id="nav-profile-tab_two"  href="{{ url('login') }}" role="tab" aria-controls="nav-profile_two" aria-selected="false">2. Satisfaction</a>
					                    	<a class="nav-item nav-link" id="nav-home-tab_thre"  href="{{ url('login') }}" role="tab" aria-controls="nav-home_thre" aria-selected="false">3. Admission and enrollment</a>
					                    	<a class="nav-item nav-link" id="nav-profile-tab_for"  href="{{ url('login') }}" role="tab" aria-controls="nav-profile_for" aria-selected="false">4. Performance</a>
											<?php } ?>
										</div>
					                </nav>
					                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
					                    <div class="tab-pane fade show active" id="nav-home_one" role="tabpanel" aria-labelledby="nav-home-tab_one">
					                    	<div class="row">
						                     <div class="col-md-12">											
						                       <?php  if(!empty($unvercitydetail->institution_degree_labour)){ ?>
										      <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_labour}}">
											   <?php }  ?>	
						                      	</div>
						                    </div>
						                 
					                    </div>
					                    <div class="tab-pane fade" id="nav-profile_two" role="tabpanel" aria-labelledby="nav-profile-tab_two">
					                    	 <div class="row">
						                      	<div class="col-md-12">
												 <?php  if(!empty(Auth::user()->id) && Auth::user()->user_role==2) { ?>
						                       <?php  if(!empty($unvercitydetail->institution_degree_satisfaction)){ ?>
										      <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_satisfaction}}">
												 <?php } } ?>	
						                      	</div>
						                    </div>
					                   
						                   
					                    </div>
					                    <div class="tab-pane fade" id="nav-home_thre" role="tabpanel" aria-labelledby="nav-home-tab_thre">
					                    	<div class="row">
						                      	<div class="col-md-12">
											   <?php if(!empty(Auth::user()->id) && Auth::user()->user_role==2) { ?>
						                       <?php  if(!empty($unvercitydetail->institution_degree_access)){ ?>
										      <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_access}}">
												 <?php }} ?>	
						                      	</div>
						                    </div>
						                   
					                    </div>
					                    <div class="tab-pane fade" id="nav-profile_for" role="tabpanel" aria-labelledby="nav-profile-tab_for">
					                    	<div class="row">
						                      	<div class="col-md-12">
											  <?php if(!empty(Auth::user()->id) && Auth::user()->user_role==2) { ?>
						                       <?php  if(!empty($unvercitydetail->institution_degree_academicrs)){ ?>
										      <img src="{{ url('public') }}/images/degreedata/{{$unvercitydetail->institution_degree_academicrs}}">
										      <?php }} ?>	
						                      	</div>
						                      	
						                    </div>
					                    
						                    
					                    </div>
					                </div>



		                    	</div> -->


		                      
		                   <!--  </div>
		                  </div>		                
		                </div> -->




<div class="row">
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
      <div class="content sny-table"> 
     
        <div class="bg-tab">
      <ul>
      <li class="mt-3"><b>{{$sub_titles[$key]}}</b></li> 
      </ul>
    </div> 
    </div> 
  
    <div class="content sny-table">
       <div class="bg-tab">
      <ul>
      <li class="mb-3">{{$demoss[$key]}}</li> 
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


 <div class="mt-5">
<div class="tabing-text">

  <!-- <div class="accordion" id="accordionExample">
    <div class="card">
      <div class="card-head" id="headingOne">
        <h2 class="mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         Presentaciò de l'assignatura

        </h2>
      </div>

      <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="panel-body">
        <p>
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>

          <a href="#" class="mt-1 mb-2 vinver-linke">Atanu Univesity sant paca <i class="fa fa-external-link" aria-hidden="true"></i> </a>
          <p>
          Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p> 
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-head" id="headingTwo">
        <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Objectius de l’estudi

        </h2>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
     <div class="panel-body">
        	 <p>
          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. </p>

          <a href="#" class="mt-1 mb-2 vinver-linke">Atanu Univesity sant paca <i class="fa fa-external-link" aria-hidden="true"></i> </a>
          <p>
          Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p> 
          
         
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-head" id="headingThree">
        <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Ponderacions d'assignatures de la Fase Específica de PAU
        </h2>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="panel-body table-bg">
        	<div class="col-md-8 m-auto">
        		 <img src="{{ url('public') }}/images/banner/{{$unvercitydetail->Ponderacions_image}}"  height="100" width="1000"> 
       
</div>
        </div>
      </div>
    </div>


    

    <div class="card">
      <div class="card-head" id="headingfour">
        <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
       Distribució  de crèdits i assignatures

        </h2>
      </div>
      <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
        <div class="panel-body">
          <div class="text-center headin-dangu w-100 mt-3">
  <h5> Distribució  de Crèdits  </h5>
</div>
         
          <div class="img-table">
       <img src="https://votivetech.in//unisos/public/frontend/assets/images/tableimg.png" >
       </div>


<div class="col-md-8 m-auto iner-tab">
<div class="text-center headin-dangu">
  <h5> Distribució  d'assignatures </h5>
</div>
<div id="accordion-1">
    <div class="head"> 
      <h3>Primer</h3> 
      <i class="fa fa-angle-down  arrow" aria-hidden="true"></i>
     
     </div>
    <div class="content sny-table">
       <div class="bg-tab">
      <ul>
       <li>synth nesciunt you probably haven't heard of.</li> 
      <li>Leggings occaecat craft.  </li>
      <li>farm-to-table, raw denim. </li>
      <li>synth nesciunt you probably haven't. </li> 

      </ul>
    </div>
    </div>
  </div>
  
<div id="accordion-1">
    <div class="head"> 
       <h3>Segon</h3> 
       <i class="fa fa-angle-down  arrow" aria-hidden="true"></i>
      
    </div>

    <div class="content sny-table"> 
      <div class="bg-tab">
      <ul> 
       <li>synth nesciunt you probably haven't heard of.</li> 
      <li>Leggings occaecat craft.  </li>
      <li>farm-to-table, raw denim. </li>
      <li>synth nesciunt you probably haven't. </li> 

       </ul>
    </div>
    </div>
  
   </div>
   
<div id="accordion-1">
    <div class="head">
      <h3>Distribució  d'assignatures</h3> 
       <i class="fa fa-angle-down  arrow" aria-hidden="true"></i> 
     
     </div>  
    <div class="content sny-table"> 
      <div class="bg-tab">
      <ul> 
       <li>synth nesciunt you probably haven't heard of.</li> 
      <li>Leggings occaecat craft.  </li>
      <li>farm-to-table, raw denim. </li>
      <li>synth nesciunt you probably haven't. </li> 

      </ul>
    </div> 
     </div>
  </div>
  <div id="accordion-1">
    <div class="head"> 
       <h3>Quart</h3> 
      <i class="fa fa-angle-down  arrow" aria-hidden="true"></i> 
     
     </div> 
    <div class="content sny-table">
      <div class="bg-tab">
       <div class="bg-tab">
      <ul> 
     <li>synth nesciunt you probably haven't heard of.</li> 
      <li>Leggings occaecat craft.  </li>
      <li>farm-to-table, raw denim. </li>
      <li>synth nesciunt you probably haven't. </li> 

      </ul>
    </div> 
     </div>
    </div>
  </div>  </div>

        </div>
      </div>
    </div>


<div class="card">
      <div class="card-head" id="headingfive">
        <h2 class="mb-0 collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
      Què podre fer desprès

        </h2>
      </div>
      <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
        <div class="panel-body">
          <div class="heading-plust">
           <h4> Competències</h4>
       <ul>
         <li> Comprensió de les variables macroeconòmiques que regulen l'economia i la interrelació existent amb la gestió d'empreses.</li>

        <li>Capacitat per aplicar el raonament econòmic a la presa de decisions. </li>
        <li>Comprensió de les estratègies microeconòmiques i les seves implicacions amb la gestió. </li>
        <li>Capacitat per identificar situacions d'optimització de recursos i costos. </li> 
       </ul>
     </div> 

     <div class="heading-plust">
          <h4> Àmbits de treball
</h4>
       <ul>
         <li>Consultories</li>
        <li>auditories </li>
        <li>assessories fiscals i financeres </li>
        <li>empreses de màrqueting </li> 
       </ul>
     </div>
   
     <div class="heading-plust">
          <h4> Sortides professionals
</h4>
       <ul>

         <li>   Administrador/a i analista de sistemes i d'institucions sense ànim de lucre
         </li>
        <li>gestor/a públic/a </li>
        <li>analista de mercats </li>
        <li>auditor/a </li> 
       </ul>
     </div>

        </div>
      </div>
    </div>

</div> -->
<div class="col-md-12 p-0">
  <div class="advertisment-box">
<img src="https://votivetech.in/unisos/public/images/banner/advertime.jpg">
</div>

</div>
</div></div></div>
 <div class="col-md-3">
  <div class="right-blue">
<a href="#"> Alextreai all grounp de wattsap d resuestr carrap</a>
</div>

<div class="balck-box">
  <img src="https://votivetech.in/unisos/public/frontend/assets/images/advertis.png">

  </div>

  </div>
 				</div>

<div class="row">
<div class="col-md-12 m-auto">

    <div class="bx_fourFilter navtab-bottom">
                           
                       <div class="tab-content box-gray py-3 px-3 px-sm-0" id="nav-tabContent">
                              <div class="tab-pane fade show active" id="nav-home_one" role="tabpanel" aria-labelledby="nav-home-tab_one">
                                <div class="row">
                                 <div class="col-md-12 ">   
                                 <h2 class="pie-heading"> Dades Generals</h2>                   
                                  <div class="image-graphical">
                                                            <img src="https://votivetech.in/unisos/public/images/degreedata/1.png">
                                                 </div>
                         
                                    </div>
                                </div>
                             
                              </div>
                              <div class="tab-pane fade" id="nav-profile_two" role="tabpanel" aria-labelledby="nav-profile-tab_two">
                                 <div class="row">
                                    <div class="col-md-12 ">
                                       <h2 class="pie-heading">  Satisfaction</h2> 
                             <div class="image-graphical">
                               <img src="https://votivetech.in/unisos/public/images/banner/advertime.jpg">
                             </div>
                                    </div>
                                </div>
                             
                               
                              </div>
                              <div class="tab-pane fade" id="nav-home_thre" role="tabpanel" aria-labelledby="nav-home-tab_thre">
                                <div class="row">
                                    <div class="col-md-12">
                                       <h2 class="pie-heading">  Admission and enrollment</h2> 
                           <div class="image-graphical">
                             <img src="https://votivetech.in/unisos/public/images/banner/advertime.jpg">
                           </div>
                                </div>
                               
                              </div></div>
                              <div class="tab-pane fade" id="nav-profile_for" role="tabpanel" aria-labelledby="nav-profile-tab_for">
                                <div class="row">
                                    <div class="col-md-12">
                                    <h2 class="pie-heading">Performance</h2> 
                                    <div class="image-graphical">
                                      <img src="https://votivetech.in/unisos/public/images/banner/advertime.jpg">
                                    </div>
                                    </div>
                                    
                                </div>
                              
                                
                              </div>
                         
                      <nav>
                      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab_one" data-toggle="tab" href="#nav-home_one" role="tab" aria-controls="nav-home_one" aria-selected="true">1. Employment indicators</a>
                          <a class="nav-item nav-link" id="nav-profile-tab_two" data-toggle="tab" href="#nav-profile_two" role="tab" aria-controls="nav-profile_two" aria-selected="false">2. Satisfaction</a>
                          <a class="nav-item nav-link" id="nav-home-tab_thre" data-toggle="tab" href="#nav-home_thre" role="tab" aria-controls="nav-home_thre" aria-selected="false">3. Admission and enrollment</a>
                          <a class="nav-item nav-link" id="nav-profile-tab_for" data-toggle="tab" href="#nav-profile_for" role="tab" aria-controls="nav-profile_for" aria-selected="false">4. Performance</a>
                                             
              </div>
                          </nav>
 </div>

                          </div>
                         </div>
                        </div>


                         <div class="row mt-5">
     <div class="col-md-6 unvirl-address">

    <h2> Universidad y localización</h2>                    
 <h5>Facultad de Biología (UB) </h5>
 <div class="mt-2">
 <p> Centro propio</p>
 <p>Campus de la Diagonal Portal del Coneixement</p>
<p>Av. Diagonal, 645</p>
<p>08028 - Barcelona </p>
 <a href="#" >www.ub.edu/biologia</a>
</div>
</div>

   <div class="col-md-6 mt-5">
                        
<div class="botom-advertis top-map ">
 <button id="button-map" class="button-map">
                                Como llegar</button>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.2839258061963!2d2.1881048153147358!3d41.389639979263926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a31acb13f157%3A0x375d277935ed5c7b!2sUniversitat%20Pompeu%20Fabra%20-%20Campus%20de%20la%20Ciutadella!5e0!3m2!1sen!2sin!4v1676456638390!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>
</div>





 			</div> 	
</div>
</div>
</div>
</div>
     


@include('layouts.footer')



<script type="text/javascript">
  
var str = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css';
$("link[href*='"+ str +"']").remove();

</script>

<script type="text/javascript">

var str = 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js';
$("link[href*='"+ str +"']").remove();

</script>

<script type="text/javascript">

var str = 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js';
$("link[href*='"+ str +"']").remove();

</script>





<script type="text/javascript">
  
  const btns = document.querySelectorAll(".acc-btn");

// fn
function accordion() {
  // this = the btn | icon & bg changed
  this.classList.toggle("is-open");

  // the acc-content
  const content = this.nextElementSibling;

  // IF open, close | else open
  if (content.style.maxHeight) content.style.maxHeight = null;
  else content.style.maxHeight = content.scrollHeight + "px";
}

// event
btns.forEach((el) => el.addEventListener("click", accordion));



</script>


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
