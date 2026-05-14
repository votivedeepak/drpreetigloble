@include('layouts.header')

<section class="setting-section midSetting"> 
    <div class="">
    
      
            <div class=" ">
                  <div class="col-lg-12 confi-bg ">
				 <!--   <img src="{{ url('public/frontend/assets/images/s2.png') }}"> -->
         <div class="text-conet">
                        <h2> Coneix futurs companys</h2>
                         <p> Unexite al grup de <b>Whatsapp</b> de al teva carrera universitaria i accedeix al grup social d'unisos </p>  
                         <br>
						  <?php if(!empty($userdata->vrfn_no)) {$mo = $userdata->vrfn_no; } else {$mo="";}if(!empty(Auth::user()->id) && $mo==1) { ?>
                           <a href="{{ url('universitydegree')}}" class="uni-btn">Accedir </a>
						    <?php } elseif(!empty(Auth::user()->id) && $mo!=1){ ?>
						    <a href="{{ url('universitydegree')}}" class="uni-btn">Accedir </a>
						  <?php  } else {?>
						  <a href="{{ url('login') }}" class="uni-btn">Accedir </a>
						  <?php } ?>
                         </div>     


                  </div>          
            </div>            
      </div>


    	
	
    </div>
</section>


@include('layouts.footer') 
<script>
function alertlogin() {
  alert("You have not verified the mobile number.");
}
</script>
