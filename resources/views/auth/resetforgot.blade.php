@include('layouts.header')

<div class="container">
	<div class="gtco-container log-reg-back">
			<div class="row">
				<div class="col-md-6 col-sm-6  col-xs-12">
					<div class="display-t">
						<div class="banner-msg-login animate-box fadeIn animated-fast" data-animate-effect="fadeIn">
                            <h3>Reset Password</h3>
                            <ul class="list_regi">
                            	<li>Enter your email address and we'll send you an email with instructions to reset your password.</li>                       	
                            </ul>
                           						
						</div>
					</div>
				</div>
                
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
					
	<h3>Reset Password</h3> 
	
      <form id="userForm" method="POST" name="userForm" action="{{ url ('password/updateforgot') }}">
	  	<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
             <input type="hidden" name="token" value="{{ Request::segment(2) }}">
        <div class="form-group">
          <label for="inputUsernameEmail">Verification Code</label>
          <input type="text" class="form-control" id="token_id" name="token_id" requried>
        </div>
		
		<div class="form-group">
          <label for="inputUsernameEmail">Password</label>
          <input type="password" class="form-control" id="password" name="password" requried>
        </div>
		
		<div class="form-group">
          <label for="inputUsernameEmail">Confirm Password </label>
          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" requried>
        </div>
        
        <div class="row other-links">
        <div class="col-md-12">
        
        </div>
        </div>
        <button type="submit" class="btn btn btn-primary">
        Reset Password
        </button>
      </form>
	  
    </div> 
    
                </div>
                
			</div>
		</div>
</div>

@include('layouts.footer') 
