@include('layouts.header')
<style>
strong {
    color: red;
}
.prev, .next{
  padding: 3px;
  margin-top: 0px;
  top: 0px;
  background-color: #008bef;
}
.ui.calendar .ui.table tr th .icon{
  font-size: 14px;
}
.ui.input {
    font-size: 1em;
    width: 100%;

}
.icon:before{
  content: inherit;
}
.ui.bottom.left.popup:before {
    top: -.325em;
    left: 1em;
    right: auto;
    bottom: auto;
    margin-left: 0;
    box-shadow: inherit !important;
}
</style>

<link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />


<div class="container">
	<div class="gtco-container log-reg-back">
			<div class="row">
		               
                <div class="col-md-6 col-sm-6  col-xs-12">
                	<div class="main-login banner-msg-login" style="overflow: inherit;">
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
					
			    		<h3>Registrat</h3>
      
      <form id="userForm" method="POST" name="userForm" action="{{ url ('user_save') }}">
	    <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
      	<div class="row">
      		<div class="col-md-6 col-sm-6  col-xs-12">
      			<div class="form-group">
          <label for="inputUsernameEmail">Nom</label>
          <input type="text" class="form-control" id="f_name" name="f_name" placeholder="Nom">
        </div>
      		</div>
      		<div class="col-md-6 col-sm-6  col-xs-12">
      			<div class="form-group">
          <label for="inputUsernameEmail">Cognom</label>
          <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Cognom">
        </div>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md-6 col-sm-6  col-xs-12">
      	      <div class="form-group">
                <label for="inputUsernameEmail">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email ">
               <strong>{{$errors->first('email')}}</strong>
			  </div>
      		</div>
			
			<div class="col-md-6 col-sm-6  col-xs-12">
      	      <div class="form-group">
                <label for="inputUsernameEmail">Escola</label>
				 <input type="text" class="form-control" id="scope" name="scope" placeholder="Escola">

                <!-- <select class="form-control" id="scope" name="scope">
                         <option value="">Select Scope</option>
                              @foreach($scopelist  as $scopen)
                                <option value="{{$scopen->sp_id}}" >{{$scopen->sp_name}}</option>
                                 @endforeach                             
                 </select> -->
              </div>
      		</div>
      	
      	</div>

      	<div class="row">
      		<div class="col-md-6 col-sm-6  col-xs-12">
      			     <div class="form-group">          
                     <label for="inputPassword">Contrasenya</label>
                     <input type="password" class="form-control" id="pass" name="pass" placeholder="Contrasenya">
                    </div>
      		</div>
			
      	<div class="col-md-6 col-sm-6  col-xs-12">
      		<div class="form-group">          
                <label for="inputPassword">Confirma contrasenya</label>
                <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Confirma contrasenya">
              </div>
      		</div>
      	</div>
		  <div class="row">
		  	<div class="col-md-12 col-sm-12  col-xs-12">
		   <div class="form-group">    
		   <!-- <span for="inputPassword" class="textc">obligatori per accedir a “coneix futurs companys universitaris “</span> -->
		  </div>
		  </div>
		  </div>
		
        <div class="row">
      		<!-- <div class="col-md-6 col-sm-6  col-xs-12">
      			     <div class="form-group">          
                     <label for="inputPassword">Lioc de redidencia</label>
                     <input type="text" class="form-control" id="autocomplete" onFocus="geolocate()" name="autocomplete"   placeholder="Lioc de redidencia">
                    </div>
      		</div> -->
          <div class="col-md-6 col-sm-6  col-xs-12">
      			     <div class="form-group">          
                     <label for="inputPassword">Any de naixement</label>
              <div class="ui">
                     <div class="ui calendar" id="example2">
    <div class="ui input left icon">
      <i class="calendar icon"></i>
      <input type="text" placeholder="Date" name="birth_date" value="birth_date" id="birth_date" style="padding: 15px;">
    </div>
  </div></div>
                    <!--  <input type="date" id="birth_date" name="birth_date" value="birth_date" class="form-control" placeholder="Birth date"> -->
			  
                    </div>
      		</div>
			
      	<!-- <div class="col-md-6 col-sm-6  col-xs-12">
      		<div class="form-group">          
                <label for="inputPassword">Numero de telefon movil</label>
                <input type="text" class="form-control" id="mnuber" name="mnuber" placeholder="Numero de telefon movil">
                <strong>{{$errors->first('mnuber')}}</strong>
			  </div>
      		</div> -->
      	</div> 
		
		 <div class="row">

     
      		<!-- <div class="col-md-6 col-sm-6  col-xs-12">
      			     <div class="form-group">          
                     <label for="inputPassword">universitari</label>
                     <select class="form-control" name="univercity" id="univercity" onchange="selectcat(this.value)">
			   <option value=""> Select Any</option>
			    @if(!$unvercitylist->isEmpty())
			  @foreach($unvercitylist as $listd)
			  <option value="{{ $listd->unc_id }}"> {{ $listd->unc_name }}</option>
			    @endforeach
            @endif 
			</select>
                    </div>
      		</div> -->
			
      	<!-- <div class="col-md-6 col-sm-6  col-xs-12">
      		<div class="form-group">          
                <label for="inputPassword">Grau universitari que cursaras</label>
                <select class="form-control" name="univedegree" id="univedegree">
			   <option value=""> Select Any</option>
			    @if(!$degreelist->isEmpty())
			  @foreach($degreelist as $listd)
			  <option value="{{ $listd->unrs_id }}"> {{ $listd->unvercity_degree }}</option>
			    @endforeach
            @endif 
			</select>
              </div>
      		</div> -->
      	</div>
		
		
		
		
        <button type="submit" class="btn btn btn-primary">Enregistrat</button>
      </form>
    </div> 
      </div>
				<div class="col-md-6 col-sm-6  col-xs-12">
					<div class="display-t">
						<div class="banner-msg-login animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h3>Crea el teu compte a Unisos</h3>
                            <ul class="list_regi">
                            	<li>Activa el teu compte universitari a Unisos</li>
                            	<li>gaudeix de tots els serveis que ofereix Unisos: accedeix a la informació completa que ofereix el buscador de graus,troba el link de whatsapp de la teva carrera i molt més a UNISOS</li>
                            	<!-- <li>Activate the Universia services you need and enjoy their benefits: academic guidance, scholarships, job search...</li> -->
                            </ul>
                           	<a href="{{ url('login')}}" class="btn_rrgi">LOGIN</a> 	
						</div>
					</div>
				</div>
                
			</div>
		</div>
</div>
<style>
span.textc {
    font-weight: 400;
    font-size: 16px;
    text-align: center;
    margin-left: 7%;
    margin-right: 7%;
}

</style>
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


   $("#userForm").validate({
      
    rules: {
        f_name: {
                required: true,
            },
        l_name: {
            required: true,
        },
		name: {
                required: true,
            },
        autocomplete: {
            required: true,
        },
		 univercity: {
            required: true,
        },
        mnuber: {
                required: true,
                number: true,
                 
            },
        univedegree: {
          required: true,
        },     
        email: {
                required: true,
                email: true,
                 
            },
        scope: {
          required: true,
        },     
        pass: {
           required: true,

         },
       cpass: {
           required: true,
           equalTo:'#pass',
         },      
    },
    messages: {
      first_name: {
        required: "First name is required",
      },
      last_name: {
        required: "Last name is required",
      },
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
      email: {
          required: "Email id is required",
          email: "Please enter valid email",
        },
        scope: {
          required: "Escola Name is required",
        }, 
      pass : {
          required : "Contrasenya is required",
        },
      cpass : {
          required : "Contrasenya is required",
          equalTo : "Confirm Contrasenya does not match",
        },
         
    },
  
  })
</script>

<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>

<script type="text/javascript">

$('#example2').calendar({
   type: 'date',
  formatter: {
    date: function (date, settings) {
      if (!date) return '';
      var day = date.getDate();
      var month = date.getMonth() + 1;
      var year = date.getFullYear();
      return day + '/' + month + '/' + year;
    }
  }
  });



</script>