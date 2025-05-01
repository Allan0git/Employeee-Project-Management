<?php
include("header.php");
include("../dboperation.php");
$obj = new dboperation();

$sql = "SELECT `status`,count(`status`) as 'count' from tbl_empprojectstatus group by`status`";
$result = $obj->query($sql);
?>

<head>
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     <script type="text/javascript">
          google.charts.load('current', { 'packages': ['corechart'] });
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
               var data = google.visualization.arrayToDataTable([
                    ['Status', 'Count'],
                    <?php
                    while ($display = mysqli_fetch_array($result)) {
                         echo "['" . $display["status"] . "', " . $display["count"] . "],";
                    }
                    ?>
               ]);
               var options = {
                    title: 'Percentage ',
                    //is3D:true,  
                    pieHole: 0.4
               };
               var chart = new google.visualization.PieChart(document.getElementById('piechart'));
               chart.draw(data, options);
          }  
     </script>
</head>
<div class="clearfix"></div>

<div class="content-wrapper">
     <div class="container-fluid">

          <div class="row mt-3">
               <div class="col-lg-12">
                    <div class="card">
                         <div class="card-body">
                              <div class="card-title">Project Report</div>
                              <div class="logo">
                                   <a href="./index.php">
                                        <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                              </div>
                              <div style="width:900px; margin-top:6%">
                                   <h3 align="center">Pie Chart showing the Count of Products</h3>
                                   <br />
                                   <div id="piechart" style="width: 900px; height: 500px;"></div>
                              </div>

                         </div>
                    </div>




               </div>
          </div>
          <!-- Form End -->
     </div>
</div>

          <?php
          include("footer.php");
          ?>