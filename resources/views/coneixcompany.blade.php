@include('layouts.header')
<style type="text/css">
 .back-conis{
  background-color: #f5f5f5e0 !important
 } 

</style>
<section>

<div class="container">
	<div class="gtco-container log-reg-back">
			<div class="row">
			
			
                <div class="col-md-6 col-sm-6 m-auto col-xs-12 mt-5">
                  <h3 class="mt-5 pb-1 pt-5 text-center contexi-text">CONEIX FUTURS COMPANYS </h3>
                	<div class=" banner-msg-login mt-1 mb-0">
					@if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                     </div>
                    @endif
					
				   @if ($message = Session::get('error'))
                     <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">×</button>    
                      <strong>{{ $message }}</strong>
                     </div>
                   @endif
      
        <form id="userForm" method="POST" name="userForm" action="{{ url ('coneixfuturepost') }}" class="text-center ali-inpot">
	   <div class="inn-box">
    	<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
        <p class="ila-text">Selecciona el grau universitari que cursaras i la universitat a la qual et matricularas </p>
        <div class="form-group">
        <select class="form-control" name="univercity" id="univercity" onchange="selectcat(this.value)" required>
        
			   <option value="@if(!empty($detaildegree->unc_id)){{$detaildegree->unc_id}}@endif"> @if(!empty($detaildegree->unc_name)){{$detaildegree->unc_name}}@else<?php echo "Seleccionar universidad";?>@endif</option>
			    @if(!$unvercitylist->isEmpty())
			  @foreach($unvercitylist as $listd)
			  <option value="{{ $listd->unc_id }}">{{ $listd->unc_name }} </option>
			    @endforeach
            @endif 
		</select>
        </div>
        <div class="form-group">
          
        <select class="form-control" name="univedegree" id="univedegree" required>
			   <!-- <option value=""> Seleccionar grau</option> -->
         <option value="@if(!empty($detaildegree->unrs_id)){{$detaildegree->unrs_id}}@endif"> @if(!empty($detaildegree->unvercity_degree)){{$detaildegree->unvercity_degree}}@else<?php echo "Seleccionar grau";?>@endif</option>
			    @if(!$degreelist->isEmpty())
			  @foreach($degreelist as $listd)
			  <option value="{{ $listd->unrs_id }}"> {{ $listd->unvercity_degree }}</option>
			    @endforeach
            @endif 
		</select>
        </div>
        <div class="form-group">
        <textarea class="form-control lico-text" id="autocomplete" onFocus="geolocate()" name="autocomplete" placeholder="Lioc de redidencia" required>@if(!empty($address)){{$address}}@endif</textarea>
       </div>
        <div class="row other-links">
        <div class="col-md-12">   
        </div>
        </div>
      </div>
        <div class="w-100 text-center mb-5">
    <button type="submit" class="btn btn btn-primary main-login-c">
        Accedir
        </button>
      </div>
      </form>

    </div> 
    
    
                </div>
		
			</div>
		</div>
</div>
</section>

@include('layouts.footer') 
<script>
function selectcat(id)
	  {
		//alert(id);
		$.ajax({
		  headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 	
		url: "{{ url('/') }}"+'/selectdegree',
        type: "POST",
        data:{'id':id},
        success: function(returncat){ 
         //alert(returncat);
		  $("#univedegree").html(returncat);
		}
		 });
	  }


   
</script>
