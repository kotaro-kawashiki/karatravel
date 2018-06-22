<?php
$mysqli = new mysqli("localhost", "root", "", "karatravel");
$result = $mysqli->query('SELECT * FROM items');

/*
---------------------------
example data: Table (Chart)
--------------------------
weekly_task     percentage
Sleep           30
Watching Movie  40
work            44
*/

//flag is not needed
$flag = true;
$table = [];
$table['cols'] = [

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    ['label' => 'Kinngaku', 'type' => 'number'],
    ['label' => 'Genre', 'type' => 'number']

];

$rows = [];
 foreach($result as $r) {
    $temp = [];
    // the following line will be used to slice the Pie chart
    $temp[] = ['v' => (int) $r['genre']]; 

    // Values of each slice
    $temp[] = ['v' => (int) $r['kinngaku']]; 
    $rows[] = ['c' => $temp];
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
?>
<!--Load the Ajax API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?php $jsonTable?>);
      var options = {
           title: 'My Weekly Plan',
          is3D: 'true',
          width: 800,
          height: 600
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
















<div class="container">
    
    <div class="col-xl-12"style="margin-bottom:50px;"></div>
    
    <div class="row" style="width:1300px; padding-left:10px;">
        <div class="col-xl-7">
            <div id="piechart"　class="col-xl-7"></div>
        </div>
        <div class="col-xl-5" style="background-color:pink; height:550px;">
        lists
        </div>
    </div>
    <div class="row" style="width:1300px;">
        <div class="col-xl-9" style="background-color:purple; height:100px;">
            total amount of this month
        </div>
        <div class="col-xl-3" style="background-color:red; height:100px;">
            shinnki-nyuuryoku
        </div>
    </div>
    
</div>
 
        
        

{!! link_to_route('items.create', 'create') !!}
<br>
{!! link_to_route('items.show', 'show') !!}

