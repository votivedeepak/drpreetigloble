@include('layouts.header')


<div class="page_header mobile-banner-uni"><img src="{{ url('public/frontend/assets/images/banner.jpg') }}"></div>
<div class="container">
 	<ul class="list_filt mobile-list-view">
 		<li>
 			<a href="{{ url('univercity') }}">Buscador de Graus</a>
 		</li>
 		<li class="active">
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


<section class="setting-section midSetting"> 
    <div class="container">
      <div class="xb_left">
            <div class="xb_lftImg">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
            </div>
			<div class="xb_lftImg mobileview">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				   <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
            </div>
      </div>

      <div class="xb_mid">
            <div class="row wow fadeInDown">
                  <div class="col-lg-12">
                        <div class="web-heading wow fadeInUp" data-wow-delay="0.2s">              
                          <h2>Top 20 Public</h2>
                          <p>It is a long established fact that a reader</p>
                        </div>            
                  </div>          
            </div>
                  <div class="row">
				    <?php $i=0; ?>
						      @if(!$toplistlist->isEmpty())               
                              @foreach($toplistlist as $ttlist)
						      <?php $i++;?>
                  <div class="col-md-6">
                        <div class="mid_wintow">
						     
                              <h4>{{$ttlist->t_heading}}</h4>
                              <h5>( {{$ttlist->t_subheading	}} )</h5>
                              <ul id="item" class="list_nmn">
							  <?php  $sublist = DB::table('tbl_toppublicmainsub')->where('tpmain_id',$ttlist->tp_id )->limit(3)->get();?>
                              <?php $k=0; ?>
							  @if(!$sublist->isEmpty())               
                              @foreach($sublist as $slist)
						       <?php $k++;?>
								  <li>
                                          <span>{{ $k}}</span>
                                          <div class="xd_num">
                                                <h6>{{$slist->tps_heading}}</h6>
                                                <p>{{$slist->tps_subheading}}</p>
                                          </div>
                                    </li> 
									 @endforeach
                                   @endif
									<div class="menu{{$i}}" style="display: none;">
							  <?php  $sublist1 = DB::table('tbl_toppublicmainsub')->where('tpmain_id',$ttlist->tp_id )->limit(30)->offset(3)->get();?>
                              <?php $k=3; ?>
							  @if(!$sublist1->isEmpty())               
                              @foreach($sublist1 as $slist1)
						       <?php $k++;?>
                                     <li>
                                          <span>{{ $k}}</span>
                                          <div class="xd_num">
                                                 <h6>{{$slist1->tps_heading}}</h6>
                                                <p>{{$slist1->tps_subheading}}</p>
                                          </div>
                                    </li>
									 @endforeach
                                   @endif
                                   
									</div>
                              </ul>
                            
                              <span class="midArrow button_main{{$i}}">
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                              </span>
                        </div>                        
                  </div>
				     @endforeach
                                   @endif
                 
            </div>
            
			
			
      </div>


      <div class="xb_rgt">
            <div class="xb_lftImg">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				 <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
                <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">				 
            </div> 

             <div class="xb_lftImg mobileview">
                  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
                   <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				    <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				   <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
				  <img src="{{ url('public/frontend/assets/images/side1.jpg') }}">
            </div>  			
      </div>


    	
	
    </div>
</section>


<script>
 /*      $(document).ready(function(){
        $(".button_main").click(function(){
          $(".mid_wintow").toggleClass("main_toe");
        });
      }); */


 $(document).ready(function() {
        $(".button_main1").click(function(){
        $('.menu1').slideToggle("fast");
        });
		
		$(".button_main2").click(function(){
        $('.menu2').slideToggle("fast");
        });
		
		$(".button_main3").click(function(){
        $('.menu3').slideToggle("fast");
        });
		$(".button_main4").click(function(){
        $('.menu4').slideToggle("fast");
        });
		$(".button_main5").click(function(){
        $('.menu5').slideToggle("fast");
        });
		$(".button_main6").click(function(){
        $('.menu6').slideToggle("fast");
        });
		$(".button_main7").click(function(){
        $('.menu7').slideToggle("fast");
        });
		$(".button_main8").click(function(){
        $('.menu8').slideToggle("fast");
        });
		$(".button_main9").click(function(){
        $('.menu9').slideToggle("fast");
        });
		$(".button_main10").click(function(){
        $('.menu10').slideToggle("fast");
        });
		$(".button_main11").click(function(){
        $('.menu11').slideToggle("fast");
        });
		$(".button_main12").click(function(){
        $('.menu12').slideToggle("fast");
        });
		$(".button_main13").click(function(){
        $('.menu13').slideToggle("fast");
        });
   }); 
	  

	 
</script>

@include('layouts.footer') 
<style>
ul.list_nmn {
    margin-top: 25px;
	height: unset;
}
</style>

