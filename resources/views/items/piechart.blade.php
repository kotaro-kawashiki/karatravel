<?php
        $shokuhi=['genre'=>'食費','kinngaku'=>0];
        $koteihi=['genre'=>"固定費",'kinngaku'=>0];
        $kousaihi=['genre'=>"交際費",'kinngaku'=>0];
        $biyouhi=['genre'=>"美容費",'kinngaku'=>0];
        $sonota=['genre'=>"その他",'kinngaku'=>0];
        
        
        
        foreach($items as $item){
            if($item->genre=="食費"){
                $shokuhi["kinngaku"]+=$item->kinngaku;
            }
            elseif($item->genre=="固定費"){
                $koteihi["kinngaku"]+=$item->kinngaku;
            }
            elseif($item->genre=="交際費"){
                $kousaihi["kinngaku"] +=$item->kinngaku;
            }
            elseif($item->genre=="美容費"){
                $biyouhi["kinngaku"] +=$item->kinngaku;
            }
            else{
                $sonota["kinngaku"] +=$item->kinngaku;
            }
        }
        
        $total=[$shokuhi,$koteihi,$kousaihi,$biyouhi,$sonota];
        
        $table = [];
        $table['cols'] = [
        //Labels for the chart, these represent the column titles
        ['id' => '', 'label' => 'genre', 'type' => 'string'],
        
        ['id' => '', 'label' => 'kinngaku', 'type' => 'number']
        ];
        
        
        $rows = [];
         foreach($total as $row){
         $temp = [];
        
         // the following line will be used to slice the Pie chart
         $temp[] = ['v' => (string) $row['genre']];
        // Values of each slice
         $temp[] = ['v' => (int) $row['kinngaku']];
         $rows[] = ['c' => $temp];
         }
        

         $table['rows'] = $rows;
        
         $jsonTable = json_encode($table, true);

        ?>


<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
          
          
        // Create the data table.
         var data = new google.visualization.DataTable(<?= $jsonTable?>)

        // Set chart options
        google.charts.load('current', {'packages':['corechart'], 'language': 'ja'});
        var options = {
                       'width':800,
                       'height':600,
                       pieHole: 0.4,
                       colors:[
                           '#247BA0',
                           '#70C1B3',
                           '#B2DBBF',
                           '#F3FFBD',
                           '#f4617f']
                       
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

        
    <div id="chart_div"></div>
    