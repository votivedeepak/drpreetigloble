@include('layouts.header')


<div class="page_header mobile-banner-uni"><img src="{{ url('public/frontend/assets/images/banner.jpg') }}"></div>
<div class="container">
 	<ul class="list_filt mobile-list-view">
 		<li>
 			<a href="{{ url('univercity') }}">Buscador de Graus</a>
 		</li>
 		<li>
 			<a href="{{ url('coneixfuturscompanys') }}">Top 20 Públic </a>
 		</li>
 		<li>
 			<a href="{{ url('find-university-flat')}}">Nous Graus</a>
 		</li>
 		<li class="active">
 			<a href="{{ url('parties-tournaments')}}">Dobles Titulacions</a>
 		</li>
 	</ul>

 </div>


<section class="setting-section midSetting"> 
    <div class="container">
      <div class="xb_left">
            <div class="xb_lftImg">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">				
				
            </div>
			<div class="xb_lftImg mobileview">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				
						  
            </div>
      </div>

      <div class="xb_mid">
            <div class="row wow fadeInDown">
                  <div class="col-lg-12">
                        <div class="web-heading wow fadeInUp" data-wow-delay="0.2s">              
                          <h2>Parties and Tournaments</h2>
                          <p>It is a long established fact that a reader</p>
                        </div>            
                  </div>          
            </div>
                  <div class="row">
				
                  <div class="col-md-12">
                        <div class="mid_wintow">
						    <p>{!! $flatdata->description !!}</p>
                            
                              <!-- <span class="midArrow button_main">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span> -->
							  <br>
                        </div>                        
                  </div>
				  
                 
            </div>
            
			
			
      </div>


      <div class="xb_rgt">
            <div class="xb_lftImg">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				 						
            </div>
			
                <div class="xb_lftImg mobileview">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
	            </div> 
			 
      </div>


    	
	
    </div>
</section>


@include('layouts.footer') 
<style>
ul.list_nmn {
    margin-top: 25px;
	height: unset;
}
.xb_mid {
    max-width: 68%;
    display: inline-block;
    width: 100%;
    padding: 0px 20px;
    background: #f5f5f5;
    height: 800px;
    overflow-y: auto;
    float: left;
}
</style>

