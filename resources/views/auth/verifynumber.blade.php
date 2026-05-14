@include('layouts.header')

<div class="container">
	<div class="gtco-container log-reg-back">
			<div class="row">
			<div class="col-md-2"></div>
                <div class="col-md-8">
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
					
			    		<h3>Verify Email</h3>      
      <form id="userForm" method="POST" name="userForm" action="{{ url ('verifycode') }}">
	  	<input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
             <input type="hidden" name="uderid" value="{{ Request::segment(2) }}">
        <div class="form-group">
          <label for="inputUsernameEmail" style="width:100%; margin-bottom:20px;">Enter Code</label>
          <span class="code">G-</span>
          <input type="text" class="form-control code-enter" id="code" name="code" placeholder="Enter Code Number Only" requried style="width:95%;">
        </div>
        
        <div class="row other-links">
        <div class="col-md-12">
        
        </div>
        </div>
        <button type="submit" class="btn btn btn-primary code-button">
         Send 
        </button>
      </form>
    </div> 
    
                </div>
                <div class="col-md-2"></div>
			</div>
		</div>
</div>

@include('layouts.footer') 
