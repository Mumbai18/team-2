<?php 

$localhost = "localhost";
$username = "root";
$password = ""; 
$connect = mysqli_connect("localhost","root","") or die('CONNECTION ERROR');
 $db = mysqli_select_db($connect,"vcare");

 echo "success";

 if(empty!= $POST[$connect] && empty!=$POST[$db])
 {
  echo "connected";
 }

echo "connection established!";


 $query = "SELECT location, count(*) as id FROM tbl_testing GROUP BY location";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> Google Chart API </title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['region', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["location"]."', ".$row["id"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Location',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  