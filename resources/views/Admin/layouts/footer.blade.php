 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" data-backdrop="static">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 class="modal-title">Delete Confirmation</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body delete_user_sec">
               <p>Are you sure, you want to delete?</p> 
           </div>
           <div class="modal-footer">
               <button type="button" class="btn btn-secondary"  id="close" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-danger" id="cancel" data-dismiss="modal">Delete</button>
           </div>
       </div>
   </div>
</div>
<!-- Jquery Core Js -->
<script src="{{ url('resources/Admin') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap Core Js -->
<script src="{{ url('resources/Admin') }}/plugins/bootstrap/js/bootstrap.js"></script>
<!-- Select Plugin Js -->
<!--  <script src="{{ url('resources/Admin') }}/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->
<!-- Slimscroll Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- Waves Effect Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/node-waves/waves.js"></script>
<!-- Jquery CountTo Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/jquery-countto/jquery.countTo.js"></script>
<!-- Morris Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/morrisjs/morris.js"></script>
<!-- ChartJs -->
<script src="{{ url('resources/Admin') }}/plugins/chartjs/Chart.bundle.js"></script>
<!-- Flot Charts Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/flot-charts/jquery.flot.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/flot-charts/jquery.flot.resize.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/flot-charts/jquery.flot.pie.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/flot-charts/jquery.flot.categories.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/flot-charts/jquery.flot.time.js"></script>
<!-- Sparkline Chart Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/jquery-sparkline/jquery.sparkline.js"></script>    
<!-- signin script -->
<!-- Validation Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/node-waves/waves.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-validation/jquery.validate.js"></script>
<script src="{{ url('resources/Admin') }}/js/pages/forms/form-validation.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-validation/jquery.validate.js"></script>
<script src="{{ url('resources/Admin') }}/js/pages/examples/sign-in.js"></script>
<!-- Jquery DataTable Plugin Js -->
<!-- Jquery DataTable Plugin Js -->
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
<script src="{{ url('resources/Admin') }}/js/pages/tables/jquery-datatable.js"></script>
<script src="{{ url('resources/Admin') }}/js/admin.js"></script>
<script src="{{ url('resources/Admin') }}/js/pages/index.js"></script>
<!-- Demo Js -->
<script src="{{ url('resources/Admin') }}/js/demo.js"></script>
<script src="{{ url('resources/Admin') }}/js/pages/forms/basic-form-elements.js"></script>
<script src="{{ url('resources/Admin') }}/plugins/bootstrap-notify/bootstrap-notify.js"></script>
<script src="{{ url('resources/Admin') }}/js/pages/examples/profile.js"></script>
<script src="{{ url('resources/Admin') }}/js/choosen.js"></script>
<script type="text/javascript">
$(".chosen").chosen();
</script>
<script type="text/javascript">
    $('[data-icon]').click(function(e){
        var icon = $(this).data("icon");
      $.ajax({
          type: 'POST',
          url: '{{ url("/admin/geticon") }}',
          data: "icon_id="+icon+"&_token="+"{{ csrf_token() }}",
          dataType: 'json',
          success:function(data){ 
            var message1 = data.message1;
            $('#icons').html(message1.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, ''));
        }
      })
    });

     $('[data-form]').click(function(e)
    {
        var forms = $(this).attr("data-form");
        localStorage.setItem("form_id", forms);
    });

   $('[data-iconedit]').click(function(e)
    { 
      var iconedit = $(this).data("iconedit"); 
      var form_id = localStorage.getItem("form_id");
      $.ajax({
            type: 'POST',
            url: '{{ url("/admin/geticon") }}',
            data: "icon_id="+iconedit+"&form_id="+form_id+"&_token="+"{{ csrf_token() }}",
            dataType: 'json',
            success:function(data){ 
              var message1 = data.message1;
              $('#icons'+form_id).html(message1.replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&quot;/g, ''));
          }
        })
    });

    $('#edit_course').on('click', function() {
          var check_edit_course = '';
          $('[name="check_edit_course"]').each(function(i,e) {
          if ($(e).is(':checked')) {
             var comma = check_edit_course.length===0?'':',';
             check_edit_course += (comma+e.value);
      }
     });
        if(check_edit_course!=""){
            $("#edit_btn_show").show();
        } else {
          alert("Please select Cource first."); return false;
        }
        $('#hiddn_check_edit_course').val(check_edit_course);
      });

    $('#edit_institute').on('click', function() {
          var check_edit_institute = '';
          $('[name="check_edit_institute"]').each(function(i,e) {
          if ($(e).is(':checked')) {
             var comma = check_edit_institute.length===0?'':',';
             check_edit_institute += (comma+e.value);
      }
     });
          if(check_edit_institute!=""){
              $("#edit_btn_show").show();
          } else {
            alert("Please select institute first."); return false;
          }
          $('#hiddn_check_edit_institute').val(check_edit_institute);
      });
</script>
<script type="text/javascript">    
    function deletecourse(id, attr){
    $("#deleteModal").modal('show');
        $("#cancel").click(function(){
          $.ajax({
            url: '{{ url('') }}/'+attr,
            type: "POST",
            data:{'id':id,"_token": "{{ csrf_token() }}"},
            success: function(data){
            console.log(data);
              var dec = JSON.parse(data);
              alert(dec.msg); 
              setTimeout(function(){
                location.reload(); 
              }, 1000);
            },error: function(){  
             alert(dec.msg);
              $("div.status-cng").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+dec.msg);
              setTimeout(function(){
                location.reload(); 
              }, 1000);
            }
          });
        });  
    }

    function deletefee(id, attr){
   
    $("#deleteModal").modal('show');
        $("#cancel").click(function(){
          $.ajax({
            url: '{{ url('') }}/'+attr,
            type: "POST",
            data:{'id':id,"_token": "{{ csrf_token() }}"},
            success: function(data){
            console.log(data);
              var dec = JSON.parse(data);
              alert(dec.msg); 
              setTimeout(function(){
                location.reload(); 
              }, 1000);
            },error: function(){  
             alert(dec.msg);
              $("div.status-cng").html('<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'+dec.msg);
              setTimeout(function(){
                location.reload(); 
              }, 1000);
            }
          });
        });  
    }
    /* course status chnage*/
function status_change(id,status,attr){
$.ajax({
  url: '{{ url('') }}/'+attr,
  type: "POST",
  data:{'id':id,'status':status,"_token": "{{ csrf_token() }}"},
  dataType: "json",
  success: function(data){
    alert(data.msg);
    setTimeout(function(){
      location.reload(); 
    }, 1000);
  },error: function(){
   alert(data.msg);
    setTimeout(function(){
      location.reload(); 
    }, 1000);
  }
});
} 

/* campus dropdown*/
function Add_Institute(institute_id)
{
  var results= $.ajax({
    type: "POST",
    url: '{{ url('/get_campus_by_institute') }}',
    data: {"institute_id":institute_id,"_token": "{{ csrf_token() }}"},
    dataType:"json",
    async: false
    }).responseText;
    $('#course_campus').html('');
    obj = JSON.parse(results);
    $('#course_campus').html('<option value="">Select Campus</option>');
    if(obj.campuslist != '')
    {
       $.each(obj.campuslist, function(k, v) { 
       // alert(v.campus_name);
        var rowHtml='<option value="'+v.campus_id+'" style="text-transform:capitalize;">'+v.campus_name+'</option>';
        //alert(rowHtml);
        $('#course_campus').append(rowHtml);
      });
    }else{
      alert('No Campus type');
    } 
}

/* course dropdown*/
function Add_Course(campus_id)
{
  //alert(campus_id)
  var results= $.ajax({
    type: "POST",
    url: '{{ url('/get_course_by_campus') }}',
    data: {"campus_id":campus_id,"_token": "{{ csrf_token() }}"},
    dataType:"json",
    async: false
    }).responseText;
    $('#course_name').html('');
    obj = JSON.parse(results);
    $('#course_name').html('<option value="">Select Course</option>');
    if(obj.courselist != '')
    {
       $.each(obj.courselist, function(k, v) { 
       // alert(v.campus_name);
        var rowHtml='<option value="'+v.course_id+'" style="text-transform:capitalize;">'+v.course_name+'</option>';
        //alert(rowHtml);
        $('#course_name').append(rowHtml);
      });
    }else{
      alert('No Course Available');
    } 
}

function EditInstitute(institute_id)
{
    var results= $.ajax({
    type: "POST",
    url: '{{ url('/get_campus_by_institute') }}',
    data: {"institute_id":institute_id,"_token": "{{ csrf_token() }}"},
    dataType:"json",
    async: false
    }).responseText;
    $('#course_campus').html('');
    obj = JSON.parse(results);
    $('#course_campus').html('<option value="">Select Campus</option>');
    if(obj.campuslist != '')
    {
      $.each(obj.campuslist, function(k, v) { 
        var rowHtml='<option value="'+v.campus_id+'" style="text-transform:capitalize;">'+v.campus_name+'</option>';
          $('#course_campus').append(rowHtml);
      });
    }  else{
        alert('No campus available');
    } 
}

/* course dropdown*/
function Edit_Course(campus_id)
{
  //alert(campus_id)
  var results= $.ajax({
    type: "POST",
    url: '{{ url('/get_course_by_campus') }}',
    data: {"campus_id":campus_id,"_token": "{{ csrf_token() }}"},
    dataType:"json",
    async: false
    }).responseText;
    $('#course_name').html('');
    obj = JSON.parse(results);
    $('#course_name').html('<option value="">Select Course</option>');
    if(obj.courselist != '')
    {
       $.each(obj.courselist, function(k, v) { 
       // alert(v.campus_name);
        var rowHtml='<option value="'+v.course_id+'" style="text-transform:capitalize;">'+v.course_name+'</option>';
        //alert(rowHtml);
        $('#course_name').append(rowHtml);
      });
    }else{
      alert('No Course Available');
    } 
}

$('select#country_id').on('change',function(e){
    var val = $(this).val();
    
    $.ajax({
      type: "POST",
      url: '{{ url("/getstatesbycountry") }}',
      data:"country_id="+val+"&_token="+"{{ csrf_token() }}",
      dataType: 'json',
      success: function(data){
        $("#state_id").html(data.message1);
      }
    });
    });


$('select#course_category_id').on('change',function(e){
    var val = $(this).val();
    
    $.ajax({
      type: "POST",
      url: '{{ url("/getsubjectareabycoursecat") }}',
      data:"category_id="+val+"&_token="+"{{ csrf_token() }}",
      dataType: 'json',
      success: function(data){
        $("#subject_area_id").html(data.message1);
      }
    });
    });


$('select#client_institution_id').on('change',function(e){
    var val = $(this).val();
    
    $.ajax({
      type: "POST",
      url: '{{ url("/getcoursebyinstitute") }}',
      data:"institution_id="+val+"&_token="+"{{ csrf_token() }}",
      dataType: 'json',
      success: function(data){
        $("#client_course_id").html(data.message1);
      }
    });
    });

$('select#client_course_id').on('change',function(e){
    var val = $(this).val();
    
    $.ajax({
      type: "POST",
      url: '{{ url("/getcampusbycourseid") }}',
      data:"course_id="+val+"&_token="+"{{ csrf_token() }}",
      dataType: 'json',
      success: function(data){
        $("#client_campus").html(data.message1);
      }
    });
    });


</script>
<script src="{{ url('resources/Admin') }}/js/yearpicker.js" async></script>
<script>
$(document).ready(function() {
  $(".yearpicker").yearpicker({
    year: 2017,
    startYear: 2012,
    endYear: 2030
  });
});
</script>
<!-- Ckeditor -->
<script src="{{ url('resources/Admin') }}/plugins/ckeditor/ckeditor.js"></script>

<!-- TinyMCE -->
<script src="{{ url('resources/Admin') }}/plugins/tinymce/tinymce.js"></script>

<!-- Custom Js -->
<script src="{{ url('resources/Admin') }}/js/pages/forms/editors.js"></script>



    <!-- ckeditor for scholarship form -->
<script type="text/javascript">
      CKEDITOR.replace( 'scholarship_description' );
      CKEDITOR.add            
</script>
<script type="text/javascript">
      CKEDITOR.replace( 'eligibility_description' );
      CKEDITOR.add            
</script>
<script type="text/javascript">
      CKEDITOR.replace( 'benefits_description' );
      CKEDITOR.add            
</script>
<script type="text/javascript">
      CKEDITOR.replace( 'application_description' );
      CKEDITOR.add            
</script>

<!-- end schollar editor -->
<!--- Destination editor --->
<script type="text/javascript">
      CKEDITOR.replace( 'destination_description' );
      CKEDITOR.add            
</script>
<!-- end Destination editor -->
<!--- Notes editor --->
<script type="text/javascript">
      CKEDITOR.replace( 'note_description' );
      CKEDITOR.add            
</script>
<!-- end Notes editor -->
<!--- Notes editor --->
<script type="text/javascript">
      CKEDITOR.replace( 'blog_description' );
      CKEDITOR.add            
</script>
<!-- end Notes editor -->
<!--- About editor --->
<script type="text/javascript">
      CKEDITOR.replace( 'description' );
      CKEDITOR.add            
</script>
<!-- end About editor -->

<!--- CMS Page editor --->
<script type="text/javascript">
      CKEDITOR.replace( 'page_description' );
      CKEDITOR.add            
</script>

<!--- document Page editor --->
<script type="text/javascript">
      CKEDITOR.replace( 'document_description' );
      CKEDITOR.add            
</script>
<!-- end CMS Page editor -->

<script type="text/javascript">
      CKEDITOR.replace( 'description[]' );
      CKEDITOR.add            
</script>
<script>
 
    $('#Degree').change(function(){ 
      var value = $(this).val();
      if(value==1){
        $('#academic-requirement').show();
        $('#english-requirement').hide();
      }else{
        $('#academic-requirement').hide();
        $('#english-requirement').show();
      }
    });
  
</script>
 <script>
  //Acadmic requirement form formvalidation
  
  $('#acadamicrequirement').submit(function(e) {
    e.preventDefault();
    var degree_institute = $('#degree_institute').val();
    var degree_courses = $('#degree_courses').val();
    var Degree = $('#Degree').val();

    if(Degree=='1'){
        var Degree_level = $('#Degree_level').val();
        var score_type = $("input[name='score_type']:checked").val();
        var score = $('#score').val();

       
          $.ajax({
          type: "POST",
          url: '{{ url("/requirement_save") }}',
          data: "degree_institute="+degree_institute+"&degree_courses="+degree_courses+"&Degree="+Degree+"&Degree_level="+Degree_level+"&score_type="+score_type+"&score="+score+"&_token="+"{{ csrf_token() }}",
          dataType:"json",
          success: function(data){ 
              alert(data.msg);
                setTimeout(function(){
                  location.reload(); 
                }, 1000);
              }

        });
      

    }else{
        var score_type = 'pointer';
        var english_degree1 = $('#english_degree1').val();
        var english_degree2 = $('#english_degree2').val();
        var english_degree3 = $('#english_degree3').val();
        var listening1 = "";
        var reading1 = "";
        var writing1 = "";
        var speaking1 = "";
        var speaking1 = "";
        var overall1 = "";

        var listening2 = $('#listening2').val();
        var reading2 = $('#reading2').val();
        var writing2 = $('#writing2').val();
        var speaking2 = $('#speaking2').val();
        var overall2 = $('#overall2').val();

        var listening3  = $('#listening3').val();
        var reading3 = $('#reading3').val();
        var writing3 = $('#writing3').val();
        var speaking3 = $('#speaking3').val();
        var overall3 = $('#overall3').val();

         $.ajax({
        type: "POST",
        url: '{{ url("/requirement_save") }}',
        data: "degree_institute="+degree_institute+"&degree_courses="+degree_courses+"&Degree="+Degree+"&Degree_level="+Degree_level+"&score_type="+score_type+"&english_degree1="+english_degree1+"&english_degree2="+english_degree2+"&english_degree3="+english_degree3+"&listening1="+listening1+"&reading1="+reading1+"&writing1="+writing1+"&speaking1="+speaking1+"&overall1="+overall1+"&listening2="+listening2+"&reading2="+reading2+"&writing2="+writing2+"&speaking2="+speaking2+"&overall2="+overall2+"&listening3="+listening3+"&reading3="+reading3+"&writing3="+writing3+"&speaking3="+speaking3+"&overall3="+overall3+"&_token="+"{{ csrf_token() }}",
         dataType:"json",
         success: function(data){ 
              alert(data.msg);
                setTimeout(function(){
                  location.reload(); 
                }, 1000);
              }
      });
    }
    
         
  });

</script>
<script type="text/javascript">
    //$("#listening1, #reading1, #writing1, #speaking1").on("input", function(){
        // var listening1 = $('#listening1').val();
        // if(listening1==NaN){
        //   var listen1 = 0;
        // }else{
        //   var listen1 = parseInt(listening1);
        // }
        // var reading1 = $('#reading1').val();
        // if(reading1==NaN){
        //   var read1 = 0;
        // }else{
        //   var read1 =  parseInt(reading1);
        // }
        // var writing1 = $('#writing1').val();
        // if(writing1==NaN){
        //   var write1 = 0;
        // }else{
        //   var write1 =  parseInt(writing1);
        // }
        // var speaking1 = $('#speaking1').val();
        // if(speaking1==NaN){
        //   var speak1 = 0;
        // }else{
        //   var speak1 =  parseInt(speaking1);
        // }
        // var add1 = listen1+ read1 + write1 + speak1;
        // if(!Number.isNaN(add1)){
        //   $("#overall1").val(add1);
        // }
    //});

    $("#listening2, #reading2, #writing2, #speaking2").on("input", function(){
        var listening2 = $('#listening2').val();
        if(listening2==NaN){
          var listen2 = 0;
        }else{
          var listen2 = listening2;
        }
        var reading2 = $('#reading2').val();
        if(reading2==NaN){
          var read2 = 0;
        }else{
          var read2 = reading2;
        }
        var writing2 = $('#writing2').val();
        if(writing2==NaN){
          var write2 = 0;
        }else{
          var write2 = writing2;
        }
        var speaking2 = $('#speaking2').val();
        if(speaking2==NaN){
          var speak2 = 0;
        }else{
          var speak2 = speaking2;
        }
        var add2 = parseInt(listen2) + parseInt(read2) + parseInt(write2) + parseInt(speak2);
        // if(!Number.isNaN(add2)){
        //   $("#overall2").val(add2);
        // }
    });
    $("#listening3, #reading3, #writing3, #speaking3").on("input", function(){
        var listening3 = $('#listening3').val();
        if(listening3==NaN){
          var listen3 = 0;
        }else{
          var listen3 = listening3;
        }
        var reading3 = $('#reading3').val();
        if(reading3==NaN){
          var read3 = 0;
        }else{
          var read3 = reading3;
        }
        var writing3 = $('#writing3').val();
        if(writing3==NaN){
          var write3 = 0;
        }else{
          var write3 = writing3;
        }
        var speaking3 = $('#speaking3').val();
        if(speaking3==NaN){
          var speak3 = 0;
        }else{
          var speak3 = speaking3;
        }
        var add3 = parseInt(listen3) + parseInt(read3) + parseInt(write3) + parseInt(speak3);
        // if(!Number.isNaN(add3)){
        //   $("#overall3").val(add3);
        // }
    });
</script>

<script type="text/javascript">
    //$("#elistening1, #ereading1, #ewriting1, #espeaking1").on("input", function(){
        // var elistening1 = $('#elistening1').val();
        // if(elistening1==NaN){
        //   var elisten1 = 0;
        // }else{
        //   var elisten1 = elistening1;
        // }
        // var ereading1 = $('#ereading1').val();
        // if(ereading1==NaN){
        //   var eread1 = 0;
        // }else{
        //   var eread1 = ereading1;
        // }
        // var ewriting1 = $('#ewriting1').val();
        // if(ewriting1==NaN){
        //   var ewrite1 = 0;
        // }else{
        //   var ewrite1 = ewriting1;
        // }
        // var espeaking1 = $('#espeaking1').val();
        // if(espeaking1==NaN){
        //   var espeak1 = 0;
        // }else{
        //   var espeak1 = espeaking1;
        // }
        // var add1 = parseInt(elisten1) + parseInt(eread1) + parseInt(ewrite1) + parseInt(espeak1);
        // if(!Number.isNaN(add1)){
        //   $("#eoverall1").val(add1);
        // }
    //});

    $("#elistening2, #ereading2, #ewriting2, #espeaking2").on("input", function(){
        var elistening2 = $('#elistening2').val();
        if(elistening2==NaN){
          var elisten2 = 0;
        }else{
          var elisten2 = elistening2;
        }
        var ereading2 = $('#ereading2').val();
        if(ereading2==NaN){
          var eread2 = 0;
        }else{
          var eread2 = ereading2;
        }
        var ewriting2 = $('#ewriting2').val();
        if(ewriting2==NaN){
          var ewrite2 = 0;
        }else{
          var ewrite2 = ewriting2;
        }
        var espeaking2 = $('#espeaking2').val();
        if(espeaking2==NaN){
          var espeak2 = 0;
        }else{
          var espeak2 = espeaking2;
        }
        var add2 = parseInt(elisten2) + parseInt(eread2) + parseInt(ewrite2) + parseInt(espeak2);
        // if(!Number.isNaN(add2)){
        //   $("#eoverall2").val(add2);
        // }
    });
    $("#elistening3, #ereading3, #ewriting3, #espeaking3").on("input", function(){
        var elistening3 = $('#elistening3').val();
        if(elistening3==NaN){
          var elisten3 = 0;
        }else{
          var elisten3 = elistening3;
        }
        var ereading3 = $('#ereading3').val();
        if(ereading3==NaN){
          var eread3 = 0;
        }else{
          var eread3 = ereading3;
        }
        var ewriting3 = $('#ewriting3').val();
        if(ewriting3==NaN){
          var ewrite3 = 0;
        }else{
          var ewrite3 = ewriting3;
        }
        var espeaking3 = $('#espeaking3').val();
        if(espeaking3==NaN){
          var espeak3 = 0;
        }else{
          var espeak3 = espeaking3;
        }
        var add3 = parseInt(elisten3) + parseInt(eread3) + parseInt(ewrite3) + parseInt(espeak3);
        // if(!Number.isNaN(add3)){
        //   $("#eoverall3").val(add3);
        // }
    });
</script>

<script>
  //Acadmic requirement form formvalidation
  
  $('#editacadamicrequirement').submit(function(e) {
    e.preventDefault();
    var aedegree_institute = $('#aedegree_institute').val();
    var aerequirement_id = $('#aerequirement_id').val();
    var aedegree_courses = $('#aedegree_courses').val();
    var aeDegree = $('#aeDegree').val();

    
        var aeDegree_level = $('#aeDegree_level').val();
        var aescore_type = $("input[name='score_type1']:checked").val();
        var aescore = $('#aescore').val();

        alert(aescore_type);
       
        $.ajax({
        type: "POST",
        url: '{{ url("/Edit_academic") }}',
        data: "aerequirement_id="+aerequirement_id+"&aedegree_institute="+aedegree_institute+"&aedegree_courses="+aedegree_courses+"&aeDegree="+aeDegree+"&aeDegree_level="+aeDegree_level+"&aescore_type="+aescore_type+"&aescore="+aescore+"&_token="+"{{ csrf_token() }}",
        dataType:"json",
        success: function(data){ 
            alert(data.msg);
              setTimeout(function(){
                location.reload(); 
              }, 1000);
            }

      });

   
         
  });

</script>

<script>
  //Acadmic requirement form formvalidation
  
  $('#editenglishrequirement').submit(function(e) {
    e.preventDefault();

        var erequirement_id = $('#erequirement_id').val();
        var edegree_institute = $('#edegree_institute').val();
        var edegree_courses = $('#edegree_courses').val();
        var eDegree = $('#eDegree').val();
        var eDegree_level = '0';
        var escore_type = 'pointer';
        var eenglish_degree1 = $('#eenglish_degree1').val();
        var eenglish_degree2 = $('#eenglish_degree2').val();
        var eenglish_degree3 = $('#eenglish_degree3').val();
        var elistening1 ="";
        var ereading1 = "";
        var ewriting1 = "";
        var espeaking1 = "";
        var eoverall1 = "";

        var elistening2 = $('#elistening2').val();
        var ereading2 = $('#ereading2').val();
        var ewriting2 = $('#ewriting2').val();
        var espeaking2 = $('#espeaking2').val();
        var eoverall2 = $('#eoverall2').val();

        var elistening3  = $('#elistening3').val();
        var ereading3 = $('#ereading3').val();
        var ewriting3 = $('#ewriting3').val();
        var espeaking3 = $('#espeaking3').val();
        var eoverall3 = $('#eoverall3').val();

         $.ajax({
        type: "POST",
        url: '{{ url("/Edit_english") }}',
        data: "erequirement_id="+erequirement_id+"&edegree_institute="+edegree_institute+"&edegree_courses="+edegree_courses+"&eDegree="+eDegree+"&eDegree_level="+eDegree_level+"&escore_type="+escore_type+"&eenglish_degree1="+eenglish_degree1+"&eenglish_degree2="+eenglish_degree2+"&eenglish_degree3="+eenglish_degree3+"&elistening1="+elistening1+"&ereading1="+ereading1+"&ewriting1="+ewriting1+"&espeaking1="+espeaking1+"&eoverall1="+eoverall1+"&elistening2="+elistening2+"&ereading2="+ereading2+"&ewriting2="+ewriting2+"&espeaking2="+espeaking2+"&eoverall2="+eoverall2+"&elistening3="+elistening3+"&ereading3="+ereading3+"&ewriting3="+ewriting3+"&espeaking3="+espeaking3+"&eoverall3="+eoverall3+"&_token="+"{{ csrf_token() }}",
         dataType:"json",
         success: function(data){ 
              alert(data.msg);
                setTimeout(function(){
                  location.reload(); 
                }, 1000);
              }
      });
   
         
  });

</script>




