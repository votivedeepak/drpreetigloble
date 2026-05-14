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
      <form id="userForm" method="POST" name="userForm" action="{{ url ('forgotpass') }}">
	  	<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />

        <div class="form-group">
          <label for="inputUsernameEmail">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" requried>
        </div>
        
        <div class="row other-links">
        <div class="col-md-12">
        
        </div>
        </div>
        <button type="submit" class="btn btn btn-primary">
        Send Password Reset Link
        </button>
      </form>
    </div> 
    
                </div>
                
			</div>
		</div>
</div>

@include('layouts.footer') 
