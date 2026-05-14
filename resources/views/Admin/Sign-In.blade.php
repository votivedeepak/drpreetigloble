<!DOCTYPE html>
<html>
@include('Admin.layouts.head')
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin</a>
            <small>Search Education</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ url('admin/adminlogin') }}">
                    @csrf
                    <div class="msg">Sign in to start your session</div>
                    @if(Session::has('success'))
                    <div class="alert alert-success" style="color: #8ec48e;">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('warning'))
                     <div class="alert alert-danger">{{Session::get('warning')}}</div>
                    @endif
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div> -->
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           
                        </div>
                       <!--  <div class="col-xs-6 align-right">
                            <a href="{{ url('admin/forgotpwd') }}">Forgot Password?</a>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
@include('Admin.layouts.footer')
</body>
</html>