<?php
include("dbconnection1.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SalesPerformance Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
<link href="css/style1.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" >
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  <script src="../jquery.min.js"></script>
  <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
  <script src="gridData.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <?php
$con = mysqli_connect("localhost","root","","aa_sales");
	if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
        $dataPoints = array();
$query="SELECT id,product_name,product_cost 
        FROM sales_product";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result))
{
   $dataPoints[] = array("product"=>$row['product_name'], "y"=>$row['product_cost']);
}
?>
  <script type="text/javascript">
    window.onload = function () {
        CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#00ffff",
                "#33ccff",
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
              toolTipContent: "{y} - #percent %",
              yValueFormatString: "#,##0,,.## Million",
              //legendText: false,
              Plugin:false,
              indexLabel: "{product}  ( ${y} billion)",
              dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }
          ]
        });
      chart3.render();
    }
  </script>
  <script src="../core.js"></script>
  <script src="../charts.js"></script>
  <script src="../animated.js"></script>

  <!-- Chart code -->
  <?php
$user="root";
$pwd="";                              
$db="aa_sales";
$conn =mysqli_connect('localhost',$user,$pwd,$db) or die("unable to connect");
$query = mysqli_query($conn,"SELECT * from sales_overview");
$rows_count = mysqli_num_rows($query);
       $data = array();
       if ($rows_count > 0)
        while ($data = mysqli_fetch_array($query)) {
        $pietable[] = '{target: "' . $data['quater_sales_2'].'",sales:' . $data['quater_sales_1'] . '},';
        $pie = '{target: "' . $data['id'].'",sales:' . $data['quater_sales_1'] . '},';
}
    else echo "Got nothing !!";
  
?>
  <script>
    am4core.ready(function () {

      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end
      am4core.addLicense("ch-custom-attribution");
      // Create chart instance
      var chart = am4core.create("chartdiv", am4charts.PieChart);

      // Add data
      chart.data = [
        <?php 
             for ($i=0; $i<=1; $i++){
                    echo $pietable[$i];
                 }
             ?>
      ];

      // Add and configure Series
      var pieSeries = chart.series.push(new am4charts.PieSeries());
      pieSeries.dataFields.value = "sales";
      pieSeries.dataFields.category = "target";
      pieSeries.innerRadius = am4core.percent(50);
      pieSeries.ticks.template.disabled = true;
      pieSeries.labels.template.disabled = true;

      var rgm = new am4core.RadialGradientModifier();
      rgm.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
      pieSeries.slices.template.fillModifier = rgm;
      pieSeries.slices.template.strokeModifier = rgm;
      pieSeries.slices.template.strokeOpacity = 0.4;
      pieSeries.slices.template.strokeWidth = 0;

      pieSeries.colors.list = [
        am4core.color("#ffffff"),
        am4core.color("#00ffff"),
      ];

      chart.legend = new am4charts.Legend();
      chart.legend.position = "center";

    }); // end am4core.ready()
  </script>
  <?php
$user="root";
$pwd="";                              
$db="aa_sales";
$conn =mysqli_connect('localhost',$user,$pwd,$db) or die("unable to connect");
$query = mysqli_query($conn,"SELECT * from sales_overview");
$rows_count = mysqli_num_rows($query);
       $data = array();
       if ($rows_count > 0)
        while ($data = mysqli_fetch_array($query)) {
        $pietable1[] = '{target: "' . $data['quater_sales_2'].'",sales:' . $data['sales_1'] . '},';
        //$pie = '{target: "' . $data['id'].'",sales:' . $data['quater_sales_1'] . '},';
}
    else echo "Got nothing !!";
  
?>
  <script>
    am4core.ready(function () {

      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end

      // Create chart instance
      var chart1 = am4core.create("chartdiv1", am4charts.PieChart);

      // Add data
      chart1.data = [
        <?php 
             for ($i=0; $i<=1; $i++){
                    echo $pietable1[$i];
                 }
             ?>
      ];

      // Add and configure Series
      var pieSeries1 = chart1.series.push(new am4charts.PieSeries());
      pieSeries1.dataFields.value = "sales";
      pieSeries1.dataFields.category = "target";
      pieSeries1.innerRadius = am4core.percent(50);
      pieSeries1.ticks.template.disabled = true;
      pieSeries1.labels.template.disabled = true;

      var rgm1 = new am4core.RadialGradientModifier();
      rgm1.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
      pieSeries1.slices.template.fillModifier = rgm1;
      pieSeries1.slices.template.strokeModifier = rgm1;
      pieSeries1.slices.template.strokeOpacity = 0.4;
      pieSeries1.slices.template.strokeWidth = 0;

      pieSeries1.colors.list = [
        am4core.color("#ffffff"),
        am4core.color("#00cccc"),
      ];

      chart1.legend = new am4charts.Legend();
      chart1.legend.position = "center";

    }); // end am4core.ready()
  </script>
  <?php
$user="root";
$pwd="";                              
$db="aa_sales";
$conn =mysqli_connect('localhost',$user,$pwd,$db) or die("unable to connect");
$query = mysqli_query($conn,"SELECT * from sales_overview");
$rows_count = mysqli_num_rows($query);
       $data = array();
       if ($rows_count > 0)
        while ($data = mysqli_fetch_array($query)) {
        $pietable2[] = '{target: "' . $data['quater_sales_2'].'",sales:' . $data['target_sales_1'] . '},';
        $pie = '{target: "' . $data['id'].'",sales:' . $data['quater_sales_1'] . '},';
}
    else echo "Got nothing !!";
  
?>
  <script>
    am4core.ready(function () {

      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end

      // Create chart instance
      var chart2 = am4core.create("chartdiv2", am4charts.PieChart);

      // Add data
      chart2.data = [
        <?php 
             for ($i=0; $i<=1; $i++){
                    echo $pietable2[$i];
                 }
             ?>
      ];

      // Add and configure Series
      var pieSeries2 = chart2.series.push(new am4charts.PieSeries());
      pieSeries2.dataFields.value = "sales";
      pieSeries2.dataFields.category = "target";
      pieSeries2.innerRadius = am4core.percent(50);
      pieSeries2.ticks.template.disabled = true;
      pieSeries2.labels.template.disabled = true;

      var rgm2 = new am4core.RadialGradientModifier();
      rgm2.brightnesses.push(-0.8, -0.8, -0.5, 0, - 0.5);
      pieSeries2.slices.template.fillModifier = rgm2;
      pieSeries2.slices.template.strokeModifier = rgm2;
      pieSeries2.slices.template.strokeOpacity = 0.4;
      pieSeries2.slices.template.strokeWidth = 0;

      pieSeries2.colors.list = [
        am4core.color("#ffffff"),
        am4core.color("#00cccc"),
      ];

      chart2.legend = new am4charts.Legend();
      chart2.legend.position = "center";

    }); // end am4core.ready()
  </script>


  <style>
    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      }
    }

    .he1 {
      background-color: #00cc99;
    }

    body {
      border-style: solid;
      border-color: #f2f2f2;
      border-width: 6px;
    }

    .vl {
      border-left: 6px solid white;
      height: 500px;
    }

    #chartdiv {
      width: 100%;
      height: 270px;
    }

    #chartdiv1 {
      width: 120%;
      height: 270px;
    }

    #chartdiv2 {
      width: 100%;
      height: 270px;
    }

    .leftText {
      font-size: 25px;
      background: #00cc99;
      border-radius: 3px;
      color: #ffffff;
      padding: 10px 5px;
    }

    hr {
      height: 1px;
      background-color: #85adad;
      border: none;
    }

    .div1 {
      width: 120px;
      height: 80px;
      border: 1px solid #00b386;
      box-sizing: border-box;
      background-color: #00b386;
      color:#ffffff;
      margin-left: 1px;
      border-radius: 25px;

    }

    .rightText {
      font-size: 10px;
      border-radius: 3px;
      color:#ffffff;
      padding: 2px 2px;
    }

    .rightText1 {
      font-size: 30px;
      border-radius: 3px;
      color:#ffffff;
      padding: 2px 2px;
    }

    .v1 {
      border-left: 3px solid #00e6b8;
      height: 350px;
    }
	/* Media Queries: Tablet Landscape */
@media screen and (max-width: 1060px) {
    #primary { width:67%; }
    #secondary { width:30%; margin-left:3%;}  
}

/* Media Queries: Tabled Portrait */
@media screen and (max-width: 768px) {
    #primary { width:100%; }
    #secondary { width:100%; margin:0; border:none; }
}
  </style>
</head>
<body>
<br/>
  <div class="container-fluid ">
    <br>
    <div class="row he1">
      <div class="col-sm-3"><br />
        <div class="row" style="margin: 2px;">
          <div class="col-sm-4 col-md-5 col-lg-5">
            <font color="white" size="8px">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-user">
            </font><br /></span>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-1">
		  <?php

	$query = mysqli_query($con,"SELECT * from sales_overview limit 1");

	while($data = mysqli_fetch_array($query)) { ?>
            <span class="rightText" style="margin-top: 23px; margin-left: 1px;"><span
                class="rightText1"><?php echo $data['new_customer'];?></span><br>NEW CUSTOMER|YTD</span>
	  
          </div>
        </div>
        <hr>
        <div class="row" style="margin: 2px;">
          <div class="col-sm-4 col-md-5 col-lg-5">
            <font color="white" size="8px">&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-signal"></span></font>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-1">
            <span class="rightText" style="margin-top: 23px; margin-left: 1px;"><span
                class="rightText1"><?php echo $data['sales_revenue'];?></span><br>SALES REVENUE|YTD</span>
          </div>
        </div>

        <hr>
        <div class="row" style="margin: 2px;">
          <div class="col-sm-4 col-md-5 col-lg-5">
            <font color="white">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="iconify"
                data-icon="mdi:database" data-width="50"></span></font>
          </div>
          <div class="col-sm-1 col-md-1 col-lg-1">
            <span class="rightText" style="margin-top: 23px; margin-left: 1px;"><span
                class="rightText1"><?php echo $data['sales_profit'];?></span><br>PROFIT|YTD</span>
          </div>
        </div>
      </div>
	      	<?php } ?>
      <center>
        <div class="col-sm-3 v1"><br />
          <font color="white" size="5px">
            <p>QUATER REPORT</p>
          </font>
          <div id="chartdiv"></div>
        </div>
        <div class="col-sm-3 v1"><br />
          <font color="white" size="5px">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SALES</p>
          </font>
          <div id="chartdiv1"></div>
        </div>
        <div class="col-sm-3 v1">
          <font color="white" size="6px">
            <p>247,234
          </font>
          <br />
          <font color="white" size="3px"> ABOVE SALES TARGET | YTD
            </p>
          </font>
          <div id="chartdiv2"></div>
        </div>
      </center>
    </div>
    <div class="container-fluid ">
      <br>
      <div class="row">
        <div class="col-sm-3 well">
          <div class="">
            <center>
              <bold>
                <font color="#00b3b3">
                  <h4>MONTHLY SALES GROWTH</h4>
                </font>
                <center>
                  <div class="div1"><br>
                    <font size="6px">13%</font>
                  </div>
                </center><br />
                <p>
                  <font color="#00cc99">TARGETED SALES GROWTH 12%
                    <br /><br />
                    ACCUMULATED REVENUE | LAST 12 MONTHS
                  </font>
              </bold>
              </p>
            </center><br/>
            <div id="sparkline4" style="height: 150px; width: 100%;"></div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <center>
              <font color="#00b3b3">
                <h4>Sales_ By Product</h4>
              </font>
            </center>
            <div id="chartContainer3" style="height: 350px; width: 100%;"></div>
          </div>
        </div>
        <div class="col-sm-6 well">
          <div class="">
            <div class="row" style="margin: 0 10px 0 10px;">
              <div class="col-sm-3 col-md-2 col-lg-2">
                <font color="#00cc99">
                  <p>Sales Planing</p>
                  <span class="leftText">105</span>
                </font>
              </div>
              <div class="col-sm-9 col-md-10 col-lg-10" style="height: 100px;" id="sparkline3">
              </div>
            </div>
          </div>
          <bold>
            <hr>
          </bold>
          <div class="">
            <div class="row" style="margin: 0 10px 0 10px;">
              <div class="col-sm-3 col-md-2 col-lg-2">
                <font color="#00cc99">
                  <p>Sales Process</p>
                  <span class="leftText">253</span>
                </font>
              </div>
              <div class="col-sm-9 col-md-10 col-lg-10" style="height: 100px;" id="sparkline1">
              </div>
            </div>
          </div>
          <hr>
          <div class="">
            <div class="row" style="margin: 0 10px 0 10px;">
              <div class="col-sm-3 col-md-2 col-lg-2">
                <font color="#00cc99">
                  <p>Sales Analysis</p>
                  <span class="leftText">282</span>
                </font>
              </div>
              <div class="col-sm-9 col-md-10 col-lg-10" style="height: 100px;" id="sparkline2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    
    <script type="text/javascript">
      initializeRatings();
      initializeQR1();
      initializeQR2();
      initializeChart1();
      initializeGrid1();
      initializeProgress1();
      initializeSparkline1();
      initializeSparkline2();
      initializeSparkline3();

      function initializeProgress1() {
        $("#progress1").shieldProgressBar({
          
        });
      }

      function initializeGrid1() {
        $("#grid1").shieldGrid({
          
        });
      }
      jQuery(function ($) {
        $('#files').shieldUpload({
            async: {
                enabled: true,
                save: {
                    url: "/upload/save",
                    field: "files"
                },
                remove: {
                    url: "/upload/remove",
                    method: "DELETE",
                    field: "fileNames"
                }
            }
        });
    });
      function initializeChart1() {

        $("#sparkline4").shieldChart({
          
          theme: "light",
          exportOptions: {
            image: false,
            print: false
          },
          tooltipSettings: {
            chartBound: true,
            axisMarkers: {
              enabled: true,
              mode: 'x'
            },
            customHeaderText: '',
            customPointText: function (point, chart) {
              return shield.format(
                '<span><b>{value}</b></span>',
                {
                  value: point.y
                }
              );
            },
          },
          chartAreaPaddingTop: -7,
          chartLegend: {
            enabled: false
          },
          
          seriesSettings: {
            bar: {
              activeSettings: {
                pointHoveredState: {
                  enabled: false
                }
              },
              pointMark: {
                enabled: false
              },
              color: "#00b386",
              Plugin:{
                enabled:false
              }
            }
          },
          axisX: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0,
            ticksHeight: 0
          },
          axisY: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0
          },
          dataSeries: [{
            seriesType: "bar",
            data: [800, 1000, 1200, 1400, 1600, 1800, 2000, 2200, 2400, 2600, 2800, 3000, 3200, 3400, 3600, 3800, 4000]
          }
          ]
        });
      }


      function initializeSparkline1() {

        $("#sparkline1").shieldChart({
          theme: "light",
          exportOptions: {
            image: false,
            print: false
          },
          tooltipSettings: {
            chartBound: true,
            axisMarkers: {
              enabled: true,
              mode: 'x',
              marker: {
                //Data label for chart series
                dataLabel: { visible: true }
              }
            },
            customHeaderText: '',
            customPointText: function (point, chart) {
              return shield.format(
                '<span><b>{value}</b></span>',
                {
                  value: point.y
                }
              );
            },
          },
          chartAreaPaddingTop: -7,
          chartLegend: {
            enabled: false
          },
          seriesSettings: {
            line: {
              activeSettings: {
                pointHoveredState: {
                  enabled: false
                }
              },
              pointMark: {
                enabled: false
              },
              dataPointText: {
                enabled: true,
                color: "black"
              },
              color: "#00e6e6"
            }
          },
          axisX: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0,
            ticksHeight: 0
          },
          axisY: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0
          },
          dataSeries: [{
            seriesType: "line",
            data: [46, 135, 209, 154, 232, 256, 370, 304, 303, 328, 372, 322]
          }
          ]
        });
      }

      function initializeSparkline2() {
      

        $("#sparkline2").shieldChart({
          theme: "light",
          exportOptions: {
            image: false,
            print: false
          },
          tooltipSettings: {
            chartBound: true,
            axisMarkers: {
              enabled: true,
              mode: 'x'
            },
            customHeaderText: '',
            customPointText: function (point, chart) {
              return shield.format(
                '<span><b>{value}</b></span>',
                {
                  value: point.y
                }
              );
            },
          },
          chartAreaPaddingTop: -7,
          chartLegend: {
            enabled: false
          },
          seriesSettings: {
            bar: {
              activeSettings: {
                pointHoveredState: {
                  enabled: false
                }
              },
              pointMark: {
                enabled: false
              },
              dataPointText: {
                enabled: true,
                color: "black"
              },
              color: "#00e6e6"
            }
          },
          axisX: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0,
            ticksHeight: 0
          },
          axisY: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0
          },
          dataSeries: [{
            seriesType: "bar",
            data: [363, 373, 329, 303, 309, 278, 278, 255, 249, 231, 213, 211]
          }
          ]
        });
      }

      function initializeSparkline3() {
        

        $("#sparkline3").shieldChart({
          theme: "light",
          exportOptions: {
            image: false,
            print: false
          },
          tooltipSettings: {
            chartBound: true,
            axisMarkers: {
              enabled: true,
              mode: 'x'
            },
            customHeaderText: '',
            customPointText: function (point, chart) {
              return shield.format(
                '<span><b>{value}</b></span>',
                {
                  value: point.y
                }
              );
            },
          },

          chartAreaPaddingTop: -7,
          chartLegend: {
            enabled: false
          },
          seriesSettings: {
            area: {
              activeSettings: {
                pointHoveredState: {
                  enabled: false
                }
              },
              pointMark: {
                enabled: false
              },
              dataPointText: {
                enabled: true,
                color: "black"
              },
              color: "#00e6e6"
            }
          },
          axisX: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0,
            ticksHeight: 0
          },
          axisY: {
            axisTickText: {
              enabled: false
            },
            plotStripWidth: 0,
            drawWidth: 0,
            ticksWidth: 0
          },
          dataSeries: [{
            seriesType: "area",
            data: [99, 100, 100, 100, 100, 101, 101, 101, 100, 108, 120, 131]
          }
          ]
        });
      }



      function initializeQR1() {
        $("#qr1").shieldQRcode({
          mode: "byte",
          size: 150,
          value: "Mike Smith",
          style: {
            color: "#1E97E3"
          }
        });
      }

      function initializeQR1() {
        $("#qr1").shieldQRcode({
          mode: "byte",
          size: 150,
          value: "Mike Smith",
          style: {
            color: "#1E97E3"
          }
        });
      }

      function initializeQR2() {
        $("#qr2").shieldQRcode({
          mode: "byte",
          size: 150,
          value: "Avarage: 6.3",
          style: {
            color: "#1E97E3"
          }
        });
      }

      function initializeRatings() {

        $('#rate1').shieldRating({
          max: 7,
          step: 0.1,
          value: 6.3,
          markPreset: false
        });
        $('#rate2').shieldRating({
          max: 7,
          step: 0.1,
          value: 6,
          markPreset: false
        });

      }
    </script>
</body>

</html>