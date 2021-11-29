<?php

include("dbconnection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>DASHBOARD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
  <style>
    
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
   <?php
$dataPoints = array();
$query="SELECT id,proname,cost FROM product";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result))
{
   $dataPoints[] = array("product"=>$row['proname'], "y"=>$row['cost']);
}
?>
  <script type="text/javascript">
    window.onload = function () {
        CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#00ffff",
                "#33ccff",
                "#4da6ff",
                "#00ffff",
                "#33ccff",
                "#4da6ff",
                "#00ffff",
                "#33ccff",
                "#4da6ff",
				"#4da6ff",
                ]);
      var chart3 = new CanvasJS.Chart("chartContainer3",
        {
          colorSet: "greenShades",
          theme: "light2",
          title: {
            text: ""
          },
          data: [
            {
              type: "pie",
              showInLegend: false,
              toolTipContent: "{product}  ( {y} )",
              yValueFormatString: "00,000",
              //legendText: false,
              Plugin:false,
              indexLabel: "{product}  ( {y} )",
              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
          ]
        });
      chart3.render();

      var chart7 = new CanvasJS.Chart("chartContainer7",
        {
          title: {
            text: ""
          },
          data: [
            {
              type: "pyramid",
              toolTipContent: "{label}",
              reversed: true,
              dataPoints: [
                { y: 1475, label: "Target:1,475", color: "#00ff99",exploded: true },
                { y: 659, label: "Achieved:659", color: "#00cccc",exploded: true },
                { y: 358, label: "Old Customer:358", color: "#00ffcc",exploded: true },
                { y: 212, label: "New Customer:212",exploded: true }
              ]
            }
          ]
        });
      chart7.render();
    }
  </script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['bar'] });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
      var data = new google.visualization.arrayToDataTable([
        ['', ''],
        <?php 
		 
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
        $query = "SELECT DISTINCT(repid)   FROM `order_details` ";
	$search = mysqli_query($con,$query);

	while ($data3 = mysqli_fetch_array($search))
		{
			$d1=$data3['repid'];
			
	        $search3 = mysqli_query($con,"SELECT SUM(price)  FROM `order_details` where repid='$d1'");
			$c=mysqli_fetch_array($search3);	
			
	$query1 = "SELECT *  FROM `repdetails` where repid='$d1' ";
	$search1 = mysqli_query($con,$query1);
	while ($data1 = mysqli_fetch_array($search1))
		{	
	
	$query2 = "SELECT *  FROM `target_details` where repid='$d1' ";
	$search2 = mysqli_query($con,$query2);
	while ($data2 = mysqli_fetch_array($search2))
		{	
        echo "['".$data1['repname']."',".$c[0]."],";
        }
		}
		}
        ?>
      ]);

      var options = {
        colors: ['#0033cc'],
        legend: { position: 'none' },
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: { side: 'top' } // Top x-axis.
          }
        },
        bar: { groupWidth: "90%" }
      };

      var chart = new google.charts.Bar(document.getElementById('top_x_div'));
      chart.draw(data, options);
    };
	
	google.charts.setOnLoadCallback(drawStuff1);

    function drawStuff1() {
      var data1 = new google.visualization.arrayToDataTable([
        ['', '',{role: 'tooltip'}],
        <?php 
		$get_order = "select * from order_details order by quantity DESC LIMIT 0,5";
        $run_order = mysqli_query($con,$get_order);

 while($row_order=mysqli_fetch_array($run_order)){
	 $proid=$row_order['proid'];
$get_customer = "select * from product where id='$proid'";
$run_customer = mysqli_query($con,$get_customer);
$row_customer = mysqli_fetch_array($run_customer);
$customer_email = $row_customer['proname'];
        echo "['".$row_order['Date']."',".$row_order['quantity'].",'".$customer_email."'],";
        }
        ?>
      ]);
	  var view = new google.visualization.DataView(data1);
      view.setColumns([0, 1, 2,{ calc: "stringify",
                         sourceColumn: 2,
                         type: "string",
                         role: "annotation" }]);
      var options1 = {
        theme: 'material',
		colors: ['#00cccc'],
        legend: { position: 'none' },
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: { side: 'top' } // Top x-axis.
          }
        },
		tooltip: {
        isHtml: true
      },
        bar: { groupWidth: "90%" }
      };
      var chart1 = new google.charts.Bar(document.getElementById('top_x_div1'));
      chart1.draw(data1, options1);
    };
	
	google.charts.setOnLoadCallback(drawStuff2);

    function drawStuff2() {
      var data2 = new google.visualization.arrayToDataTable([
        ['', ''],
        <?php 
		$res=mysqli_query($con,"select * from order_details ORDER by price DESC LIMIT 5");
if(mysqli_num_rows($res)>0){
		while($row=mysqli_fetch_assoc($res)){
			$cust=$row['cusmail'];
$get_customer1 = "select * from custind where custemail='$cust'";
$run_customer1 = mysqli_query($con,$get_customer1);
$row_customer1 = mysqli_fetch_array($run_customer1);
$customer_email1 = $row_customer1['custname'];
			if($row['proid']>3 && $row['price']>15000)
			{
			echo "['".$customer_email1."',".$row['price']."],";
			}
		}
}
        ?>
      ]);
      var options2 = {
        colors: ['#4da6ff'],
		tooltip: {isHtml: true},
        legend: { position: 'none' },
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: { side: 'top' } // Top x-axis.
          }
        },
        bar: { groupWidth: "90%" }
      };
      var chart2 = new google.charts.Bar(document.getElementById('top_x_div2'));
      chart2.draw(data2, options2);
    };
	</script>


</head>
<body>

  <div class="container text-center">
    <h3>DASHBOARD</h3>      
  </div>
</div>
<div class="container-fluid">    
  <div class="row ">
    <div class="col-sm-4">
	<div class="well">  
<p align="center">SALES FUNNEL</p>
  <div id="chartContainer7" style="height: 300px; width: 100%;"></div>
    </div>
	</div>
    <div class="col-sm-4"> 
	<div class="well">
	<p align="center">SALES BY PRODUCT</p>
     <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
    </div>
	</div>
    <div class="col-sm-4">
	<div class="well">
	<p align="center">SALES REP SALES</p>
 <div id="top_x_div" style="width: 100%; height: 300px;"></div>
        </div>	
	    </div>
  </div>
</div>
<div class="container-fluid">    
  <div class="row">
    <div class="col-sm-4">
      <div class="well">
      <canvas id="myChart" style="width:100%;height:550px"></canvas>
          <script>
            var xValues = ["New Customer", "Old Customer"];
            var yValues = [70, 30];
            var barColors = [
              "#00ff99",
              "#00cccc"
            ];

            new Chart("myChart", {
              type: "pie",
              data: {
                labels: xValues,
                datasets: [{
                  backgroundColor: barColors,
                  data: yValues
                }]
              },
            });
          </script>
		  </div>

    </div>
    <div class="col-sm-4"> 
      <div class="well">
	  <p align="center">PRODUCT DEMAND</p>
	  <div id="top_x_div1" style="width: 100%; height: 280px;"></div>
	  </div>
    </div>
    <div class="col-sm-4"> 
      <div class="well">
	  <p align="center">TOP CUSTOMER</p>
	   <div id="top_x_div2" style="width: 100%; height: 280px;"></div>
	  </div>
    </div>
  </div>
</div><br><br>
</body>
</html>
