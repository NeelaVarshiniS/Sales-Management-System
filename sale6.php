<?php
include("dbconnection1.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title> SalesPlanning Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>
  <?php
$query = mysqli_query($con,"SELECT * from sales_activity");
$rows_count = mysqli_num_rows($query);
       $data = array();
       if ($rows_count > 0)
        while ($data = mysqli_fetch_array($query)) {
        $pietable2[] = '{val: "' . $data['val'].'",other:' . $data['other'] . ',prep:' . $data['prep'] . ',meeting:' . $data['meeting'] . ',mail:' . $data['mail'] . ',call:' . $data['call1'] . '},';
        
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
      var chart6 = am4core.create("chartdiv2", am4charts.XYChart);

      // Add data
      chart6.data = [<?php 
             for ($i=0; $i<=5; $i++){
                    echo $pietable2[$i];
                 }
             ?>
      ];

      chart6.legend = new am4charts.Legend();
      chart6.legend.position = "bottom";

      // Create axes
      var categoryAxis = chart6.yAxes.push(new am4charts.CategoryAxis());
      categoryAxis.dataFields.category = "val";
      categoryAxis.renderer.grid.template.opacity = 0;
      categoryAxis.renderer.cellStartLocation = 0.2;
      categoryAxis.renderer.cellEndLocation = 0.9;

      // ...


      var valueAxis = chart6.xAxes.push(new am4charts.ValueAxis());
      valueAxis.min = 0;
      valueAxis.renderer.grid.template.opacity = 0;
      valueAxis.renderer.ticks.template.strokeOpacity = 0.5;
      valueAxis.renderer.ticks.template.stroke = am4core.color("#495C43");
      valueAxis.renderer.ticks.template.length = 1;
      valueAxis.renderer.line.strokeOpacity = 0;
      valueAxis.renderer.baseGrid.disabled = true;
      valueAxis.renderer.minGridDistance = 80;

      // Create series
      function createSeries(field, name) {
        var series = chart6.series.push(new am4charts.ColumnSeries());
        series.dataFields.valueX = field;
        series.dataFields.categoryY = "val";
        series.stacked = true;
        series.name = name;
        series.columns.template.width = am4core.percent(50);

        var labelBullet = series.bullets.push(new am4charts.LabelBullet());
        labelBullet.locationX = 0.5;
        labelBullet.label.text = "{valueX}";
        labelBullet.label.fill = am4core.color("#fff");
      }
      
      createSeries("other", "Other");
      createSeries("prep", "Prep");
      createSeries("meeting", "Meeting");
      createSeries("email", "Email");
      createSeries("call", "Call");

    }); // end am4core.ready()
  </script>
  <?php
           $dataPoints = array();
           $query = mysqli_query($con,"SELECT * from sales_plan");
           $rows_count = mysqli_num_rows($query);
           $data = array();
           if ($rows_count > 0)
              while ($data = mysqli_fetch_array($query)) {
                   $pietable4[] =  $data['score'];
           }
               else echo "Got nothing !!";
  ?>
  <?php 
             for ($i=0; $i<1; $i++){
                    $pie4= $pietable4[$i];
                 }
             ?>
  
  <script>
    am4core.ready(function () {

      // Themes begin
      am4core.useTheme(am4themes_animated);
      // Themes end
      am4core.addLicense("ch-custom-attribution");
      var chartMin = 0;
      var chartMax = 100;
  

   
      var data = {
        score:<?php echo "$pie4";?> ,
        gradingData: [
          {
            title: "",
            color: "#ee1f25",
            lowScore: 0,
            highScore: 50
          },
          {
            title: "",
            color: "#f04922",
            lowScore: 50,
            highScore: 80
          },
          {
            title: "",
            color: "#fdae19",
            lowScore: 80,
            highScore: 100
          }
        ]
      };

      /**
      Grading Lookup
       */
      function lookUpGrade(lookupScore, grades) {
        // Only change code below this line
        for (var i = 0; i < grades.length; i++) {
          if (
            grades[i].lowScore < lookupScore &&
            grades[i].highScore >= lookupScore
          ) {
            return grades[i];
          }
        }
        return null;
      }

      // create chart
      var chart = am4core.create("chartdiv", am4charts.GaugeChart);
      chart.hiddenState.properties.opacity = 0;
      chart.fontSize = 11;
      chart.innerRadius = am4core.percent(80);
      chart.resizable = true;

      /**
       * Normal axis
       */

      var axis = chart.xAxes.push(new am4charts.ValueAxis());
      axis.min = chartMin;
      axis.max = chartMax;
      axis.strictMinMax = true;
      axis.renderer.radius = am4core.percent(75);
      axis.renderer.inside = true;
      axis.renderer.line.strokeOpacity = 0.1;
      axis.renderer.ticks.template.disabled = false;
      axis.renderer.ticks.template.strokeOpacity = 1;
      axis.renderer.ticks.template.strokeWidth = 0.5;
      axis.renderer.ticks.template.length = 5;
      axis.renderer.grid.template.disabled = true;
      axis.renderer.labels.template.radius = am4core.percent(15);
      axis.renderer.labels.template.fontSize = "1.0em";

      /**
       * Axis for ranges
       */

      var axis2 = chart.xAxes.push(new am4charts.ValueAxis());
      axis2.min = chartMin;
      axis2.max = chartMax;
      axis2.strictMinMax = true;
      axis2.renderer.labels.template.disabled = true;
      axis2.renderer.ticks.template.disabled = true;
      axis2.renderer.grid.template.disabled = false;
      axis2.renderer.grid.template.opacity = 0.9;
      axis2.renderer.labels.template.bent = true;
      axis2.renderer.labels.template.fill = am4core.color("#000");
      axis2.renderer.labels.template.fontWeight = "bold";
      axis2.renderer.labels.template.fillOpacity = 0.8;



      /**
      Ranges
      */

      for (let grading of data.gradingData) {
        var range = axis2.axisRanges.create();
        range.axisFill.fill = am4core.color(grading.color);
        range.axisFill.fillOpacity = 0.8;
        range.axisFill.zIndex = -1;
        range.value = grading.lowScore > chartMin ? grading.lowScore : chartMin;
        range.endValue = grading.highScore < chartMax ? grading.highScore : chartMax;
        range.grid.strokeOpacity = 0;
        range.stroke = am4core.color(grading.color).lighten(-0.1);
        range.label.inside = true;
        range.label.text = grading.title.toUpperCase();
        range.label.inside = true;
        range.label.location = 0.5;
        range.label.inside = true;
        range.label.radius = am4core.percent(10);
        range.label.paddingBottom = -5; // ~half font size
        range.label.fontSize = "0.9em";
      }

      var matchingGrade = lookUpGrade(data.score, data.gradingData);

      /**
       * Label 1
       */

      var label = chart.radarContainer.createChild(am4core.Label);
      label.isMeasured = false;
      label.fontSize = "3em";
      label.x = am4core.percent(50);
      label.paddingBottom = 15;
      label.horizontalCenter = "middle";
      label.verticalCenter = "bottom";
      //label.dataItem = data;
      label.text = data.score.toFixed(1);
      //label.text = "{score}";
      label.fill = am4core.color(matchingGrade.color);

      /**
       * Label 2
       */

      var label2 = chart.radarContainer.createChild(am4core.Label);
      label2.isMeasured = false;
      label2.fontSize = "2em";
      label2.horizontalCenter = "middle";
      label2.verticalCenter = "bottom";
      label2.text = matchingGrade.title.toUpperCase();
      label2.fill = am4core.color(matchingGrade.color);


      /**
       * Hand
       */

      var hand = chart.hands.push(new am4charts.ClockHand());
      hand.axis = axis2;
      hand.innerRadius = am4core.percent(55);
      hand.startWidth = 8;
      hand.pin.disabled = true;
      hand.value = data.score;
      hand.fill = am4core.color("#444");
      hand.stroke = am4core.color("#000");

     

      
    }); // end am4core.ready()
  </script>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', { 'packages': ['bar'] });
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
      var data = new google.visualization.arrayToDataTable([
        ['', ''],
        <?php 
        $select_query = "SELECT * FROM month_over";
        $query_result = mysqli_query($con,$select_query);
        while($row_val = mysqli_fetch_array($query_result)){
        echo "['".$row_val['data']."',".$row_val['value']."],";
        }
        ?>
      ]);

      var options = {
        colors: ['#ff6600'],
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
        ['', ''],
        <?php 
        $select_query1 = "SELECT * FROM forecast_month";
        $query_result1 = mysqli_query($con,$select_query1);
        while($row_val1 = mysqli_fetch_array($query_result1)){
        echo "['".$row_val1['data']."',".$row_val1['value']."],";
        }
        ?>
      ]);
      var options1 = {
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
      var chart1 = new google.charts.Bar(document.getElementById('top_x_div1'));
      chart1.draw(data1, options1);
    };
    google.charts.setOnLoadCallback(drawStuff2);
    function drawStuff2() {
      var data2 = new google.visualization.arrayToDataTable([
        ['', ''],
        <?php 
        $select_query1 = "SELECT * FROM sales_rep_pipeline";
        $query_result1 = mysqli_query($con,$select_query1);
        while($row_val1 = mysqli_fetch_array($query_result1)){
        echo "['".$row_val1['data']."',".$row_val1['value']."],";
        }
        ?>
      ]);

      var options2 = {
        colors: ['#008ae6'],
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
    google.charts.setOnLoadCallback(drawStuff3);
    function drawStuff3() {
      var data3 = new google.visualization.arrayToDataTable([
        ['', ''],
        <?php 
        $con1 = mysqli_connect("localhost","root","","aa_sales");
        if (!$con1)
        {
          die('Could not connect: ' . mysqli_error());
        }
        $select_query1 = "SELECT * FROM sales_pipeline";
        $query_result1 = mysqli_query($con,$select_query1);
        while($row_val1 = mysqli_fetch_array($query_result1)){
        echo "['".$row_val1['data']."',".$row_val1['value']."],";
        }
        ?>
      ]);

      var options3 = {
        colors: ['#008ae6'],
        legend: { position: 'none' },
        bars: 'horizontal', // Required for Material Bar Charts.
        axes: {
          x: {
            0: { side: 'top' } // Top x-axis.

          }
        },
        bar: { groupWidth: "90%" }

      };

      var chart3 = new google.charts.Bar(document.getElementById('top_x_div3'));
      chart3.draw(data3, options3);
    };
  </script>
  <style>
    body {
      border-style: solid;
      border-color: white;
      border-width: 6px;
    }

    #chartdiv {
      width: 110%;
      height: 300px;
    }

    #chartdiv2 {
      width: 100%;
      height: 350px;
    }

    h4 {
      font-family: arial;
    }
  </style>
</head>
<body>
  <br />
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3">
        <div class="well">
          <h4>Closed Business</h4>
          <center>
            <div id="chartdiv"></div>
          </center><br /><br />
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="well">
          <h4>Sales Pipeline</h4>
          <div id="top_x_div3" style="width: 100%; height: 350px;"></div>
        </div>
      </div>
      <div class="col-sm-5 ">
        <div class="well">
          <h4>Sales Activity by Sales Rep</h4>
          <div id="chartdiv2"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 ">
        <div class="well">
          <h4>Month Over Month Growth</h4>
          <div id="top_x_div" style="width: 100%; height: 350px;"></div>
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="well">
          <h4>Forecast by Month</h4>
          <div id="top_x_div1" style="width: 100%; height: 350px;"></div>
        </div>
      </div>
      <div class="col-sm-4 ">
        <div class="well">
          <h4>Sales Pipeline by Sales Rep</h4>
          <div id="top_x_div2" style="width: 100%; height: 350px;"></div>
        </div>
      </div>
    </div>
  </div><br><br>
</body>

</html>