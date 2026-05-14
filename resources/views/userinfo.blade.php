@include('layouts.header')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section class="setting-section midSetting bg-profile">
   <div class="container">
      <div class="row ">
         <div class="col-lg-12 bg-l01">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2 us-pd-1 ">
                     <div class="panel panel-default">
                        
                        
                        <div class="panel-body box-use-prop">
                           <div class="box box-info">
                              <div class="box-body">
                                 <div class="col-sm-12"  style="margin-bottom:20px;">
                                    <div  class="prf-use">									                                        <?php  if(!empty($detaildegree->unvercity_logo)){ ?>										   <img src="{{ url('public') }}/images/institute/{{$detaildegree->unvercity_logo}}" class="img-circle-profile img-responsive">										 <?php } else { ?>	
                                       <img alt="User Pic" src="https://votivetech.in/unisos/public/frontend/assets/images/img-p123.png" id="profile-image1" class="img-circle img-responsive"> 										 <?php } ?>
                                       <input id="profile-image-upload" class="hidden" type="file">
                                       
                                       
                                       <!--Upload Image Js And Css-->
                                    </div>
                                    <div class="text-name">
                                      <div>
                                         <h4 class="f-he">{{ $detaildegree->unvercity_degree}}</h4>
                                    <h4 class="se-he" >{{ $detaildegree->unc_name}}</h4>
                                  </div>
                                    </div>
                                    <br>
                                    <!-- /input-group -->
                                 </div>
                                
                                
                                 <div class="socail-links">
                                    <form >
                                      
                                              <div class="whars-alig">
                                                <label for="inputUsernameEmail">Accedeix al grup de whatsapp:</label>
                                                <span class="wht-img"><a href="{{  $detaildegree->whatapplink }}" target="_blanck"><img src="https://votivetech.in/unisos/public/frontend/assets/images/wh.png"></a></span>
                                            
                                             </div>
                                             <!--<div class="col-md-10">
											  <label for="inputUsernameEmail">{{ $detaildegree->whatapplink}}</label>                                                   
                                             </div>-->
                                         
                                   
                                    </form>
                                 </div>
								 <div class="participiant-co">
								     <h3>participants</h3>
								 </div>
                 <div class="row">
                 <div class="col-md-12">
                                 <div class="serach-result">
                                        <!--  <div class="row">
                                          <div class="form-group">
                                             <div class="col-md-12">
                                                <label for="inputUsernameEmail">Nombre d'alumnes</label>
                                             </div>
                                             <div class="col-md-12">
                                                <input type="text" class="form-control" placeholder="creca" style="padding-left:40px;">
                                                <span class="sc-us"><i class="fa fa-search" aria-hidden="true"></i>
                                                </span>
                                             </div>
                                          </div>
                                       </div> -->
                                    <table>
									 @if(!empty($userlistc))				 
        	                             @foreach($userlistc as $ulists)
                                       <tr>
                                          <td>
										  <div class="imf-eq">
										   @if($ulists->profile_pic!=null)
	                                     	<img src="{{url('public/uploads/profile_img')}}/{{ $ulists->profile_pic }}" alt="profile-pic" class="img-circle img-responsive wd-10"  onclick="document.getElementById('d{{ $ulists->id }}').style.display='block'"> 
	                                        @else
                                           <img src="{{ url('public/frontend/assets/images/use-123.png') }}" alt="profile-pic" class="img-circle img-responsive wd-10"  onclick="document.getElementById('id01').style.display='block'">
	                                       @endif										  
										  </div>
										  <p class="us-na">{{  $ulists->first_name}} {{  $ulists->last_name }}</p>
										  <span class="us-sur"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                          <?php $vv = explode(',' , $ulists->address); echo $vv[0]; ?></span></td>                                                                       
                                          <!-- <td class="mb-h"><strong>Colog</strong> {{  $ulists->s_name}}</td> -->
                                          <td class="insta-right"><!--<strong class="mb-s">Instagram :</strong>--><span class="inst-d"><a href="https://www.instagram.com/{{  $ulists->instagram }}" target="_blanck"><img src="https://votivetech.in/unisos/public/frontend/assets/images/ims.png"></a></span></td>
                                       </tr>
                                         <?php if($ulists->id==Auth::user()->id){ ?><tr>                                          
                                      <td colspan="3" style="padding:3px;"><p class="edt-prp"><a href="{{ url('user/dashboard')}}">Edita el teu perfil</a></p></td>
                                       </tr><?php } ?>
									   	@endforeach
			                               @endif
									
									  @if(!empty($userlist))				 
        	                             @foreach($userlist as $ulist)
                                       <tr>
                                          <td>
										  <div class="imf-eq">
										   @if($ulist->profile_pic!=null)
	                                  	    <img src="{{url('public/uploads/profile_img')}}/{{ $ulist->profile_pic }}" alt="profile-pic" class="img-circle img-responsive wd-10"  onclick="document.getElementById('d{{ $ulist->id }}').style.display='block'"> 
	                                       @else
                                            <img src="{{ url('public/frontend/assets/images/use-123.png') }}" alt="profile-pic" class="img-circle img-responsive wd-10"  onclick="document.getElementById('id01').style.display='block'">
	                                        @endif										  
										  </div>
										  <p class="us-na">{{  $ulist->first_name}} {{  $ulist->last_name }}</p><span class="us-sur"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                          <?php $vv1 = explode(',' , $ulist->address); echo $vv1[0]; ?> </span></td>                                                                       
                                          <!-- <td class="mb-h"><strong>Colog</strong> {{  $ulist->s_name}}</td> -->
                                          <td class="insta-right"><!--<strong class="mb-s">Instagram :</strong>--><span class="inst-d"><a href="https://www.instagram.com/{{  $ulist->instagram }}" target="_blanck"><img src="https://votivetech.in/unisos/public/frontend/assets/images/ims.png"></a></span></td>
                                       </tr>
                                      
									   	@endforeach
			                               @endif
                                    
                                    </table>
                                 </div>
                                 <!-- /.box-body -->
                              </div>
                            </div>
                          </div>
                              <!-- /.box -->
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--profile popup image start-->
                   <div id="id01" class="w3-modal">
    <div class="w3-modal-content fl-i-2">
      <div class="w3-container img-m-2">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <img src="{{ url('public/frontend/assets/images/use-123.png') }}">
      </div>
    </div>
  </div>
  
   @if(!empty($userlist))				 
         @foreach($userlist as $ulist)
 <div id="d{{ $ulist->id }}" class="w3-modal">
    <div class="w3-modal-content fl-i-2">
      <div class="w3-container img-m-2">
        <span onclick="document.getElementById('d{{ $ulist->id}}').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <img src="{{url('public/uploads/profile_img')}}/{{ $ulist->profile_pic }}">
      </div>
    </div>
  </div>
   	@endforeach
	@endif
	
	
	 @if(!empty($userlistc))				 
    @foreach($userlistc as $ulists)
 <div id="d{{ $ulists->id }}" class="w3-modal">
    <div class="w3-modal-content fl-i-2">
      <div class="w3-container img-m-2">
        <span onclick="document.getElementById('d{{ $ulists->id}}').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <img src="{{url('public/uploads/profile_img')}}/{{ $ulists->profile_pic }}">
      </div>
    </div>
  </div>
   	@endforeach
	@endif
  
</div>
 <!--profile popup image end-->
                  <script>
                     $(function() {
                     $('#profile-image1').on('click', function() {
                     $('#profile-image-upload').click();
                     });
                     });       
                  </script> 
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</section>
@include('layouts.footer') 
<style>
   input.hidden {
   position: absolute;
   left: -9999px;
   }
   #profile-image1 {
   cursor: pointer;
   width: 100px;
   height: 100px;
   border:2px solid #03b1ce ;}
   .tital{ font-size:16px; font-weight:500;}
   .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
   table {
   font-family: arial, sans-serif;
   border-collapse: collapse;
   width: 100%;
   }
   td, th {
   border-bottom: 1px solid #ddd;
   text-align: left;
   padding: 8px;
   /*width:44%;*/
   }
  .panel.panel-default {
    float: left;
    width: 100%;
    border: unset;
}

 
 
 
  @media only screen and (max-width: 640px) {
td, th {
    border-bottom: 1px solid #ddd;
    text-align: left;
    padding: 8px;
    width: 86%;
}}
 
  @media only screen and (max-width: 480px) {
td, th {
    border-bottom: 1px solid #ddd;
    text-align: left;
    padding: 8px;
    width: 86%;
}}


</style>