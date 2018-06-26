<?php
        $table = [];
        $table['cols'] = [
        //Labels for the chart, these represent the column titles
        ['id' => '', 'label' => 'genre', 'type' => 'string'],
        
        ['id' => '', 'label' => 'kinngaku', 'type' => 'number']
        ];
        
        $rows = [];
         foreach($items as $row){
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
        var options = {'title':'How much i spent this month',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    
    
    <div id="chart_div"></div>
    