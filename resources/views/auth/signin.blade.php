@include('layouts.header')

<div class="container">
	<div class="gtco-container log-reg-back">
			<div class="row">
			
			
                <div class="col-md-6 col-sm-6  col-xs-12">
                	<div class="main-login banner-msg-login">
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
					
			    		<h3>LOG IN</h3>
      
      <form id="userForm" method="POST" name="userForm" action="{{ url ('login') }}">
	  	<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />

        <div class="form-group">
          <label for="inputUsernameEmail">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" requried>
        </div>
        <div class="form-group">
          
          <label for="inputPassword">Contrasenya</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="row other-links">
        <div class="col-md-12">
        <div class="checkbox pull-left">
          <label>
            <input type="checkbox">
           Recordam-ho</label>
        </div>
        <div class="checkbox pull-right">
          <a href="{{ url('password/reset')}}">¿Has oblidat la contrasenya?</a>
        </div>
        </div>
        </div>
        <button type="submit" class="btn btn btn-primary">
         Iniciar sessió
        </button>
      </form>
    </div> 
    
                </div>
			
				<div class="col-md-6 col-sm-6  col-xs-12">
					<div class="display-t">
						<div class="banner-msg-login animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h3>Encara no t’has enregistrat?</h3>
                            <ul class="list_regi">
                            	<li>Enregistrat en menys d’1 minut</li>
                            	<li>Activa el teu compte universitari a Unisos</li>
                            	<li>Activa el teu compte i gaudeix de tots els serveis que ofereix Unisos: accedeix a la informació completa que ofereix el buscador de graus,troba el link de whatsapp de la teva carrera i molt més a UNISOS</li>
                            </ul>
                           	<a href="{{ url('signup')}}" class="btn_rrgi">Registrat ara</a> 							
						</div>
					</div>
				</div>
                
                
			</div>
		</div>
</div>

@include('layouts.footer') 
