<!DOCTYPE html>
<html>
@include('Admin.layouts.head')
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
   @include('Admin.layouts.nav')
    <!-- #Top Bar -->
  @include('Admin.layouts.sidebar')

 
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
 
            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <a href="{{ url('#')}}">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Institute List</div>
                            <div class="number count-to" data-from="0" data-to="50" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     <a href="{{ url('#')}}">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">Course List</div>
                            <div class="number count-to" data-from="0" data-to="40" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                       <a href="{{ url('#')}}">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                     
                        <div class="content">
                            <div class="text">Campus List</div>
                            <div class="number count-to" data-from="0" data-to="30" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                        
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="{{ url('#')}}">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Inquiry List</div>
                            <div class="number count-to" data-from="0" data-to="20" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                 New Inquiry List                              
                            </h2>
                             <ul class="header-dropdown m-r--5">                     

                                <a href="{{ url('#') }}" type="button" class="btn btn-warning waves-effect">More View</a>
                                
                            </ul>
                          
                        </div>
                     
                    </div>
                </div>
            </div>
            <?php 
          $today = date("Y-m-d");
          $enddate = date('Y-m-d',strtotime($today. ' + 1 months'));
?>
            <div>

            <div class="col-md-4">
            <input type="date" id="start" name="created_at"
       value="<?php echo date("Y-m-d");?>" max="<?php echo $enddate;?>" class="form-control divider_rght" placeholder="Start date" onchange="fstartDate(this);" style="border: 0px; border-right: 1px solid rgb(35, 47, 62);">
       </div>

       <div class="col-md-4">
       <input type="date" id="end" name="created_at"
       value="<?php echo date("Y-m-d");?>" max="<?php echo $enddate;?>" class="form-control" placeholder="End date" onchange="fendDate(this);" style="border: 0px;">
       </div>
       <div id="ajaxdatacall">
            <div class="col-md-5">
                <canvas id="myChart"></canvas>
            </div>
               <canvas id="myChart" style="max-width: 500px;"></canvas>
        </div>
        </div>
        </div>
    </section>

   @include('Admin.layouts.footer')
</body>

</html>

<script>

var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ["User Login <?php foreach($user_view as $rr){
        if(!empty($rr)){
           echo $rr->name;
        }else{ 
            }
        }?>", "User Count View"],
      datasets: [{
        data: [<?php echo $usercount;?>,<?php echo $users_ipaddress;?>],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)'       
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
function fstartDate(object)
{
startdatefun(object.value);
}

function fendDate(object)
{

searchKeypbr();
  
}

function startdatefun(fvalue) { 
  
  searchKeypbr();

}
function searchKeypbr() { 

var start = document.getElementById("start");

var xstart = start.value; 

var end = document.getElementById("end");

var xend = end.value; 
//alert(xend); 


$.ajax({

type: "post",

headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') },

data: {

        "_token": "{{ csrf_token() }}",

        "data": {startdate:xstart, enddate:xend},

        },

url: "{{url('/admin/ajaxdashboard')}}",       
     
success: function(msg) { 

$('#ajaxdatacall').html(msg);
   
}

});
}

</script>