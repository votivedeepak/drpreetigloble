@include('layouts.header')

<section class="setting-section midSetting"> 
    <div class="container">
    
      
            <div class="row ">
                  <div class="col-lg-12">
				  
             <div class="out-line">
                 <h3>Completa elu profile</h3>
            <div class="main-login banner-msg-login c_futurs">
                   
               
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
           
       <div class="d-f-from">
        <div class="inform-box">
       <form id="userprofile" method="POST" name="userForm" action="{{ url ('updateprofile') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />

        <div class="form-group">
          <label for="inputUsernameEmail">Escola</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ $userdata->s_name }}">
         
        </div>
         <div class="form-group">
          <label for="inputUsernameEmail">Lioc de redidencia</label>
          <input type="text" class="form-control" id="autocomplete" onFocus="geolocate()"  name="autocomplete" placeholder="" value="{{ $userdata->address }}">
          
        </div>
         <div class="form-group">
          <label for="inputUsernameEmail">Numero de telefon movil</label>
          <input type="text" class="form-control" id="mnuber" name="mnuber" placeholder=""  value="{{ $userdata->mobileno }}">
          
        </div>
         <div class="form-group">
          <label for="inputUsernameEmail">Unsari d'instagram</label>
          <input type="text" class="form-control" id="instagram" name="instagram" placeholder="" value="{{ $userdata->instagram }}">
           <span class="in-us-val">opcional</span>
		</div>
        <div class="form-group">
         <label for="inputUsernameEmail">Foto de perfil</label>
        <input type="file" id="myFile" name="image" class="img-crl">
	   <input type="hidden" class="form-control" id="oldimage" name="oldimage" value="<?php if(!empty($userdata->profile_pic)){ echo $userdata->profile_pic; } ?>">
          <span class="in-us-val">opcional</span>
      </div>
      <div class="put-img">
	  @if($userdata->profile_pic!=null)
		<img src="{{url('public/uploads/profile_img')}}/{{ $userdata->profile_pic }}" alt="profile-pic"> 
	    @else
        <img src="{{ url('public/frontend/assets/images/user_img.jpg') }}" alt="profile-pic">
	  @endif
     
      </div>
        <br>
        <div class="form-group">
          <label for="inputUsernameEmail">universitari</label>
		    <select class="form-control" name="univercity" id="univercity" onchange="selectcat(this.value)">
			   <option value=""> Select Any</option>
			    @if(!$unvercitylist->isEmpty())
			  @foreach($unvercitylist as $listd)
			  <option value="{{ $listd->unc_id }}" <?php if(isset($listd->unc_id )){ if($listd->unc_id==$userdata->unversity ){ echo 'selected'; }  else {} }?>> {{ $listd->unc_name }}</option>
			    @endforeach
            @endif 
			</select>
			
        </div>

         <div class="form-group">
          <label for="inputUsernameEmail">Grau universitari que cursaras</label>
		    <select class="form-control" name="univedegree" id="univedegree">
			   <option value=""> Select Any</option>
			    @if(!$degreelist->isEmpty())
			  @foreach($degreelist as $listd)
			  <option value="{{ $listd->unrs_id }}" <?php if(isset($listd->unrs_id)){ if($listd->unrs_id==$userdata->univedegree ){ echo 'selected'; }  else {} }?>> {{ $listd->unvercity_degree }}</option>
			    @endforeach
            @endif 
			</select>
			
        </div>   		
      
        <button type="submit" class="btn btn btn-primary w-s-10">
       Contiturp
        </button>
        <br>
        <p class="text-bo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
      </form>
    </div></div>
    </div></div>
                               
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


   $("#userprofile").validate({      
    rules: {
        name: {
                required: true,
            },
        autocomplete: {
            required: true,
        },
        mnuber: {
                required: true,
                number: true,
                 
            },
        univedegree: {
          required: true,
        },     
           
    },
    messages: {
      name: {
        required: "Escola is required",
      },
      autocomplete: {
        required: "Lioc de redidencia",
      },
     mnuber: {
          required: "Numero de telefon movil is required",
        }, 
     univedegree: {
          required: "Grau universitari que cursaras is required",
        },
         
    },
  
  })
</script>
