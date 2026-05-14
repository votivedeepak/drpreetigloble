@include('layouts.header')
<style type="text/css">
/* img {
  display: block;
  max-width: 100%;
}
.preview {
  overflow: hidden;
  width: 160px; 
  height: 160px;
  margin: 10px;
  border: 1px solid red;
}
.modal-lg{
  max-width: 1000px !important;
} */
</style>


   <section class="setting-section"> 
      <div class="container">
        <div class="row wow fadeInDown">

        <div class="col-lg-12">
		
               
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
		
            <div class="web-heading wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- <span>Grab it features //</span> -->
              <h2>My Profile</h2>
              <p>It is a long established fact that a reader will be distracted</p>
            </div>
        </div>

          <div class="col-lg-12" role="tabpanel">
            <div class="row manag-tabs">
              <!-- <div class="col-sm-3">
                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
                    <li class="brand-nav"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab" class="active show">User Profile </a></li>
                    <li class="brand-nav"><a href="{{ url('logout')}}" >Logout</a></li> 
                    <!-- <li class="brand-nav"><a href="#tab7" aria-controls="tab7" role="tab" data-toggle="tab">Change Password</a></li> -->
					
               <!-- </ul>
              </div> -->
              <div class="col-sm-12">
                  <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="tab1">
                        <div class="profl-setng">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="profile-basic background-white p20">
                                <h3 class="page-title">
                                    User Information
                                </h3>
                               
                                <div class="prof-img">                                  
                                  <div class="user-photo">
                                      <a href="#">
									   @if($userdata->profile_pic!=null)
												<img src="{{url('public/uploads/profile_img')}}/{{ $userdata->profile_pic }}" alt="profile-pic"> 
											        @else
                                             <img src="{{ url('public/frontend/assets/images/use-123.png') }}" alt="profile-pic">
											  @endif
                                      </a>
                                  </div>
                                </div>
                                <div class="prsn-info my-profl">
                                  <div class="row">                                    
                                    <div class="form-group col-lg-12">
									<form id="userForm" method="POST" name="userForm" action="{{ url ('user_update') }}" enctype="multipart/form-data">
                                      <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}" />
                                        <div class="row">
                                          <div class="col-md-12 col-sm-12  col-xs-12">
                                            <div class="form-group">
                                                <label for="inputUsernameEmail">First Name</label>
                                                <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" value="{{ $userdata->first_name }}">
                                              </div>
                                          </div>
                                          <div class="col-md-12 col-sm-12  col-xs-12">
                                            <div class="form-group">
                                              <label for="inputUsernameEmail">Last Name</label>
                                              <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" value="{{ $userdata->last_name }}">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="row">
                                          <div class="col-md-12 col-sm-12  col-xs-12">
                                              <div class="form-group">
                                                <label for="inputUsernameEmail">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $userdata->email }}" readonly>
                                              </div>
                                          </div>      
                                          <div class="col-md-12 col-sm-12  col-xs-12">
                                                <div class="form-group">
                                                  <label for="inputUsernameEmail">School</label>
                                                  <input type="text" class="form-control" id="scope" name="scope" placeholder="Enter School" value="{{ $userdata->scope }}">
                                                </div>
                                            </div>  
											
											 <div class="col-md-12 col-sm-12  col-xs-12">
                                                <div class="form-group">
                                                  <label for="inputUsernameEmail">Unsari d'instagram</label>
                                                  <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Unsari d'instagram" value="{{ $userdata->instagram }}">
                                                </div>
                                            </div>  

                                            <div class="col-md-12 col-sm-12  col-xs-12">
                                                <div class="form-group">
                                                  <label for="inputUsernameEmail">Seleccionar universitat</label>
                                                  <input type="text" class="form-control" id="unversity" name="unversity" placeholder="Seleccionar universitat" value="{{ $detaildegree->unc_name }}" readonly>
                                                </div>
                                            </div>  

                                            <div class="col-md-12 col-sm-12  col-xs-12">
                                                <div class="form-group">
                                                  <label for="inputUsernameEmail"> Seleccionar grau</label>
                                                  <input type="text" class="form-control" id="univedegree" name="univedegree" placeholder="Seleccionar grau" value="{{ $detaildegree->unvercity_degree }}" readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12  col-xs-12">
                                                <div class="form-group">
                                                  <label for="inputUsernameEmail">Lioc de redidencia</label>
                                                  <input type="text" class="form-control" id="address" name="address" placeholder="Lioc de redidencia" value="{{ $userdata->address }}">
                                                </div>
                                            </div>
											
											
										   <div class="col-md-12 col-sm-12  col-xs-12">
                                                <div class="form-group">
                                                  <label for="inputUsernameEmail">Profile Image</label>
                                                  <!-- <input type="file" class="form-control" id="image" name="image" class="image"> --->
												   <input type="file" name="image" class="image">
												  <input type="hidden" class="form-control" id="oldimage" name="oldimage" value="<?php if(!empty($userdata->profile_pic)){ echo $userdata->profile_pic; } ?>">
                                                </div>
                                            </div>  	
                                        </div>    
                                        <button type="submit" class="btn btn btn-primary">Update</button>
                                      </form>
                                    </div>
                                  </div>
                               
                                                         </div>
                            </div>
                              
                          </div>
                        </div>
                      </div>


                     <!-- <div role="tabpanel" class="tab-pane" id="tab7">
                        <form>
                          <div class="profile-basic background-white p20">
                                <h3 class="page-title">
                                    Change Password
                                </h3> 
                                <form>
                                <div class="verify-info">
                                  <div class="row">

                                    <div class="form-group col-lg-12">
                                        <label>Old Password</label>
                                        <input type="password" class="form-control" value="123456789">
                                        <span class="pass-view fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>New Password</label>
                                        <input type="password" class="form-control" value="123456789">
                                        <span class="pass-view fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" value="123456789">
                                        <span class="pass-view fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>

                                  </div>
                                </div>
                                <div class="full-width">
                                    <div class="">
                                        <button class="btn btn-primary color-btn">Change Password</button>
                                    </div>
                                  </div> 
                          </div>
                        </form>
                      </div> -->

                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>					
	
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Laravel Crop Image Before Upload using Cropper JS - NiceSnippets.com</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="img-container">
            <div class="row">
                <div class="col-md-8">
                    <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
                </div>
                <div class="col-md-4">
                    <div class="preview"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="crop">Crop</button>
      </div>
    </div>
  </div>
</div>
	
    <!--   <h4><a href="{{ url('logout')}}">Logout</a></h4><br> -->   
           
 @include('layouts.footer') 
 <script>
/* 
var $modal = $('#modal');
var image = document.getElementById('image');
var cropper;
  
$("body").on("change", ".image", function(e){
    var files = e.target.files;
    var done = function (url) {
      image.src = url;
      $modal.modal('show');
    };
    var reader;
    var file;
    var url;

    if (files && files.length > 0) {
      file = files[0];

      if (URL) {
        done(URL.createObjectURL(file));
      } else if (FileReader) {
        reader = new FileReader();
        reader.onload = function (e) {
          done(reader.result);
        };
        reader.readAsDataURL(file);
      }
    }
});

$modal.on('shown.bs.modal', function () {
    cropper = new Cropper(image, {
	  aspectRatio: 1,
	  viewMode: 3,
	  preview: '.preview'
    });
}).on('hidden.bs.modal', function () {
   cropper.destroy();
   cropper = null;
});

$("#crop").click(function(){
    canvas = cropper.getCroppedCanvas({
	    width: 160,
	    height: 160,
      });

    canvas.toBlob(function(blob) {
        url = URL.createObjectURL(blob);
        var reader = new FileReader();
         reader.readAsDataURL(blob); 
         reader.onloadend = function() {
            var base64data = reader.result;	    	 
             $.ajax({
			 headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 	 
                type: "POST",
                dataType: "json",
				url: "{{ url('/') }}"+'/user/userimage',
                //url: "userimage",
                data: {'image': base64data},
                success: function(data){
                    $modal.modal('hide');
                    //alert("success upload image");
					$('#oldimage').val(data);
                }
              });
         }
    });
}) */

</script>