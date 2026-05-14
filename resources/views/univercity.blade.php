@include('layouts.header')
<div class="page_header min-uoni mobile-banner-uni"><img src="{{ url('public/frontend/assets/images/banner.jpg') }}"></div>
 <div class="container">
 	<ul class="list_filt mobile-list-view">
 		<li class="active">
 			<a href="{{ url('univercity') }}">Buscador de Graus</a>
 		</li>
 		<li>
 			<a href="{{ url('coneixfuturscompanys') }}">Top 20 Públic </a>
 		</li>
 		<li>
 			<a href="{{ url('find-university-flat')}}">Nous Graus</a>
 		</li>
 		<li>
 			<a href="{{ url('parties-tournaments')}}">Dobles Titulacions</a>
 		</li>
 	</ul>
 	<div class="row minijmaTwo">
 		<div class="col-md-4">
 			<div class="bx_filLeft">
 				<h3>Filtre</h3>

 				<div class="form-group">		          
					<input type="text" class="form-control" id="keywordde" name="keywordde" onkeydown="searchdata(this)" placeholder="Cerca…">	
		        </div>
		        <h4>Filtra per:</h4>
 				<div class="form-group">
		          <label for="inputUsernameEmail">Universitat</label>
		          <select name="university" id="university" onchange="first(this.value)">
					  <option value="">Seleccionar</option>
					   @if(!$unvercitylist->isEmpty())               
                             @foreach($unvercitylist as $unlist)
					  <option value="{{ $unlist->unc_id }}">{{ $unlist->unc_name }}</option>
					    @endforeach
                           @endif	
					 
				 </select>	          
		        </div>
		        <div class="form-group">
		          <label for="inputUsernameEmail">Localització</label>
		          <select name="location" id="location" onchange="second(this.value)">
					  <option value="">Seleccionar</option>
					   @if(!$statelist->isEmpty())               
                             @foreach($statelist as $llist)
					  <option value="{{ $llist->id }}">{{ $llist->name }}</option>
					    @endforeach
                           @endif	
				 </select>	          
		        </div>

		        <div class="form-group">
		          <label for="inputUsernameEmail">Ambit</label>
		          <select name="scope" id="scope" onchange="third(this.value);selectcat(this.value);">
					  <option value="">Seleccionar</option>
					   @if(!$scopelist->isEmpty())               
                             @foreach($scopelist as $slist)
					  <option value="{{ $slist->sp_id }}">{{ $slist->sp_name }}</option>
					    @endforeach
                           @endif	
				 </select>	          
		        </div>


		        <div class="form-group">
		          <label for="inputUsernameEmail">Subàmbit</label>
		          <select name="subscope" id="subscope" onchange="fourth(this.value)">
					  <option value="">Seleccionar</option>
					  @if(!$subscopelist->isEmpty())               
                             @foreach($subscopelist as $sublist)
					  <option value="{{ $sublist->subs_id }}">{{ $sublist->subs_name }}</option>
					    @endforeach
                           @endif	
				 </select>	          
		        </div>
				
				<div class="form-group">
		          <label for="inputUsernameEmail">Tipus</label>
		          <select name="utype" id="utype" onchange="utype(this.value)">
					  <option value="">Seleccionar</option>					 
					  <option value="public">Public</option>
					   <option value="private">Private</option>
					
				 </select>	          
		        </div>


		        <div class="rad_box">
		        	<span class="mt_ord">
			        	<input type="radio" id="male" name="type" value="alphabatic">
						<label for="male">Ordenar per ordre alfabètic</label>
					</span>
					<span class="mt_ord">					
						<input type="radio" id="female" name="type" value="cutofmark">
						<label for="female">Ordenar per nota de tall</label>
					</span>       	

		        </div>



		        
 			</div>

      <div class="bx_filFevr info-align">
        <div class="bx_labi">
                    <nav>
                      <div class="nav nav-tabs nav-fill cont-ctr-mb" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Favorites</a>
                          <!-- <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Access</a> -->
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                         <table class="table">                           
                            <tbody id="accdatas">
							<?php if(!empty(Auth::user()->id)) {?>
							    @if(!empty($unvercitydatalistfav))               
                             @foreach($unvercitydatalistfav as $unrlists)
						  <?php $cid=base64_encode($unrlists->unrs_id); ?>
                              <tr >
                                <th scope="row">
                                  <div class="info"><a href="{{url('infodetail')}}/{{$cid}}">Info</a></div>
                                </th>
                                <td>{{ $unrlists->unvercity_degree }}</td>
								<?php $unss = DB::table('tbl_unvercitylist')->where('unc_id',$unrlists->unvercity_name)->first(); ?>
								<td>{{ $unss->us_name }}</td>
                              </tr>
							      @endforeach
                             @endif	  
							<?php } ?>    
                                                     
                          </tbody>
                          </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                          <div class="mid_xtx">
                              <table class="table">                           
                           <tbody id="accdata">
							<?php if(!empty(Auth::user()->id)) {?>
							    @if(!empty($unvercitydatalistfav))               
                             @foreach($unvercitydatalistfav as $unrlists)
						  <?php $cid=base64_encode($unrlists->unrs_id); ?>
                              <tr >
                                <th scope="row">
                                  <div class="info"><a href="{{url('infodetail')}}/{{$cid}}">Info</a></div>
                                </th>
                                <td>{{ $unrlists->unvercity_degree }}</td>                               
                              </tr>
							      @endforeach
                             @endif	  
							<?php } ?>                       
                          </tbody>
                          </table>
                          </div>
                        </div>
                      </div>                    
                    </div>
        
      </div>


 		</div>
 		<div class="col-md-8">

 			<div class="box_tabFilter table-responsive">
 				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col"><a href="{{ url('') }}"><span class="mini_logo"><img src="{{ url('public/frontend/assets/images/minilogo.png') }}"></span></a></th>
				      <th scope="col">Nom del Grau</th>
				      <th scope="col">Universitat</th>
				      <th scope="col">Localització</th>
				      <th scope="col">Nota de Tall</th>
				    </tr>
				  </thead>
				  <tbody id="searchfield">
				    @if(!$unvercitydatalist->isEmpty())               
                             @foreach($unvercitydatalist as $unrlist)
						 <?php $cid=base64_encode($unrlist->unrs_id); ?>
				    <tr id="hiddendiv">
				      <th scope="row">
				      	<div class="info"><?php if(!empty(Auth::user()->id)) {
							$favr = DB::table('tbl_unvercity_fav')->where('usr_id',Auth::user()->id)->where('uvs_id',$unrlist->unrs_id)->first();
							if($favr){
								if($favr->fav_status==1){
								$fav = 1;	
								}
								else {
								$fav = 0;	
								}
							}else {
								$fav = 0;
							}
							?>
                             <a href="javascript:void(0)" onclick="favunersity('<?php echo $unrlist->unrs_id; ?>')"><?php if($fav==1) { ?> <i class="fa fa-heart" aria-hidden="true" id="hard<?php echo $unrlist->unrs_id; ?>"></i><?php } else { ?><i class="fa fa-heart-o" aria-hidden="true" id="hard<?php echo $unrlist->unrs_id; ?>"></i> <?php } ?></a> 
                              <?php }else { ?>
                             <a href="{{ url('login') }}" ><i class="fa fa-heart-o" aria-hidden="true" ></i></a> 
							  <?php } ?>
							 <a href="{{url('infodetail')}}/{{$cid}}">Info</a></div>
				      </th>
				      <td>{{$unrlist->unvercity_degree }}</td>
				      <td>{{$unrlist->us_name }}</td>
				      <td>{{$unrlist->name }}</td>
				      <td>{{$unrlist->cutofmark }}</td>
				    </tr>
				    @endforeach
                           @endif
					
				  </tbody>				  
				</table>
                    </tr>
				<!-- <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav> -->

 			</div>
 			<div id="pagination12">
				     <div class="pagination box-page">
                        {!! $unvercitydatalist->links() !!}
	                         </div></div>
 		</div>
 	</div>
 </div>
 <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
    <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
    <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />
 
 <style>
 .pagination {
    display: inline-block;
    padding-left: 0;
    margin: 9px 0;
    border-radius: 4px;
}
.pagination .page-item > * {
    width: 63px;
    
}
/*div#pagination12 {
    margin: 10px auto 30px!important;
    float: none !important;
    width: 100%;
    text-align: left;
    box-shadow: 0px 0px 10px #ccc;
    padding: 10px;
}*/
 </style>
@include('layouts.footer')

<script>
  $( document ).ready(function() {
       var keywordde = $(this).val();
        var setkeywordde=localStorage.setItem('keywordde', keywordde);
        var getkeywordde = localStorage.getItem('keywordde');      
		
   if(localStorage.getItem('university') !== null ){
     var university = localStorage.getItem('university');
     $('#university').val(university).attr("selected", "selected");
   }else{
    var university = '';
   }

   if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
          $('#location').val(location).attr("selected", "selected");
        }else{
          var location="";
        }

        if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
          $('#scope').val(scope).attr("selected", "selected");
        }else{
          var scope="";
        }

        if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
          $('#subscope').val(subscope).attr("selected", "selected");
        }else{
          var subscope="";
        }

        if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
          $('#uutype').val(uutype).attr("selected", "selected");
        }else{
          var uutype="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
          $('#type').val(type).attr("selected", "selected");
        }else{
          var type="";
        }

     $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&location="+location+"&scope="+scope+"&subscope="+subscope+"&uutype="+uutype+"&type="+type+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		  // alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })
//    // $("#university").val(localStorage.getItem('university'));
//    // alert(localStorage.getItem('university'));
});
</script>
<script>
   /* $('#keywordde').on('input',function(e){
        var selected_element5 = $(e.currentTarget);
        var keywordde = selected_element5.val(); */
		$('#keywordde').on("keyup", function() {   
        //var selected_element5 = $(e.currentTarget);
        //var keywordde = selected_element5.val();
		var keywordde = $(this).val();
        var setkeywordde=localStorage.setItem('keywordde', keywordde);
        var getkeywordde = localStorage.getItem('keywordde');      
		
      
        if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
        }else{
          var subscope="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
        $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		  // alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })
    });

   function first(university){		
        var selected_element1 = university;
        var university = selected_element1;		
        var setuniversity=localStorage.setItem('university', university);
        var getuniversity = localStorage.getItem('university');
		//alert(university);
				
        if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
        }else{
          var subscope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		

        $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		  // alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
         //$('.pagination12').css('display','none');
          }
        })		
     }


    function second(location){		
        var selected_element1 = location;
        var location = selected_element1;		
        var setlocation=localStorage.setItem('location', location);
        var getlocation = localStorage.getItem('location');
		
		//alert(location);
		
        if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
        }else{
          var subscope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		

        $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		  // alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })		
   }

   function third(scope){		
        var selected_element1 = scope;
        var scope = selected_element1;		
        var setscope=localStorage.setItem('scope', scope);
        var getscope = localStorage.getItem('scope');
		
		//alert(location);
		
        if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
			
		if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
        }else{
          var subscope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		

        $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		   //alert(data.message2);   
          //alert(data.message1);
          //$(".hiddendiv").css('display', 'none');
		  $("#searchfield").html('');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })		
   }

    function fourth(subscope){		
        var selected_element1 = subscope;
        var subscope = selected_element1;		
        var setsubscope=localStorage.setItem('subscope', subscope);
        var getsubscope = localStorage.getItem('subscope');
		
		//alert(location);
		
        if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		

        $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&subscope="+subscope+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		   //alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })		
   }	

function utype(uutype){
	var selected_element1 = uutype;
        var uutype = selected_element1;		
        var setuutype=localStorage.setItem('uutype', uutype);
        var getuutype = localStorage.getItem('uutype');
		
		//alert(location);
		
        if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }

        $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		   //alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })	
}   
	
function selectcat(id)
	  {	
		$.ajax({
		  headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 	
		url: "{{ url('/') }}"+'/selesucat',
        type: "POST",
        data:{'id':id},
        success: function(returncat){ 
         //alert(returncat);
		  $("#subscope").html(returncat);
		}
		 });
	  }	
	
	
$(document).ready(function() {
  $('input[type=radio][name="type"]').change(function() {
    
    var type = 	$(this).val();
	
	var settype=localStorage.setItem('type', type);
    var gettype = localStorage.getItem('type');
	
	  
	 if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
	
	    if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }  
    //alert(type); // or this.value
	 $.ajax({
          type: 'POST',
          url: '{{ url("/searchunversity") }}',
          //data:"type="+type+"&_token="+"{{ csrf_token() }}",
          data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		   //alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
          //$('.pagination').css('display','none');
          }
        })	
		
  });
});

/* function favunersity(un_id)
{
// replaceClass("#hard"+un_id, "fa fa-heart-o", "fa fa-heart");
 //$("#hard").replaceClass('fa fa-heart-o fa fa-heart');
 $('#hard'+un_id).removeClass('fa fa-heart-o').addClass('fa fa-heart');
 //alert(un_id);	
} */


function fetch_data(page, sort_type, sort_by, query)
 {	 
      if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
        }else{
          var subscope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }

         $.ajax({
		  headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }, 	
          type: 'POST',
          //url: '{{ url("/searchunversity") }}',
		  url:"{{ url('/') }}"+"/searchunversity?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype,
		  //url: '{{ url("/searchunversity") }}',
          //data:"keywordde="+keywordde+"&university="+university+"&type="+type+"&location="+location+"&scope="+scope+"&uutype="+uutype+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){
		  // alert(data.message2);   
          //alert(data.message1);
          $(".hiddendiv").css('display', 'none');
          $("#searchfield").html(data.message1);
          $("#pagination12").html(data.message2);
         //$('.pagination12').css('display','none');
          }
        })			 
	 

  /* $.ajax({
   url:"/pagination/fetch_data?page="+page+"&sortby="+sort_by+"&sorttype="+sort_type+"&query="+query,
   success:function(data)
   {
    $('tbody').html('');
    $('tbody').html(data);
   }
  }) */
 }


$(document).on('click', '.pagination a', function(event){
  event.preventDefault();
  var page = $(this).attr('href').split('page=')[1];
  $('#hidden_page').val(page);
  var column_name = $('#hidden_column_name').val();
  var sort_type = $('#hidden_sort_type').val();

   if(localStorage.getItem('keywordde') !== null ){
          var keywordde = localStorage.getItem('keywordde');
        }else{
          var keywordde="";
        }
		
		if(localStorage.getItem('location') !== null ){
          var location = localStorage.getItem('location');
        }else{
          var location="";
        }
		
		if(localStorage.getItem('scope') !== null ){
          var scope = localStorage.getItem('scope');
        }else{
          var scope="";
        }
		
		if(localStorage.getItem('subscope') !== null ){
          var subscope = localStorage.getItem('subscope');
        }else{
          var subscope="";
        }
		
		if(localStorage.getItem('type') !== null ){
          var type = localStorage.getItem('type');
        }else{
          var type="";
        }
		
		if(localStorage.getItem('uutype') !== null ){
          var uutype = localStorage.getItem('uutype');
        }else{
          var uutype="";
        }
		
		if(localStorage.getItem('university') !== null ){
          var university = localStorage.getItem('university');
        }else{
          var university="";
        }

  $('li').removeClass('active');
        $(this).parent().addClass('active');
  fetch_data(page, sort_type, column_name, keywordde,location,scope,subscope,type,uutype,university);
 });


 function favunersity(un_id){	
	    $.ajax({
			 headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }, 
        url:"{{ url('/') }}"+'/favunersityuser',
        type: "POST",
        data: {"un_id": un_id},
        dataType: 'json',
        success: function(returnData){
		//alert(returnData.message2);
        if(returnData.message2==1){			
		$('#hard'+un_id).removeClass('fa fa-heart-o').addClass('fa fa-heart');
	    $("#accdata").html(returnData.message1);
		$("#accdatas").html(returnData.message1);		
		}
		if(returnData.message2==2){
		$('#hard'+un_id).removeClass('fa fa-heart').addClass('fa fa-heart-o');	
		$("#accdata").html(returnData.message1);
		$("#accdatas").html(returnData.message1);
		}
		}	 
     }); 	
   }
</script>

<style>
.fa-heart {
    color: red;
}
</style>

