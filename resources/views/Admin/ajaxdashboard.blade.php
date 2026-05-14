
            <div class="col-md-5">
                <canvas id="myChart"></canvas>
            </div>
               <canvas id="myChart" style="max-width: 500px;"></canvas>
        </div>
        </div>
    </section>


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