<?php
        $con = mysqli_connect('postgres://hrxpycspeffdoc:1b7e460a790d0bb8cc8595fd1fc6fc8440011518dbe1cb4b0447a7b9d0bd4d19@ec2-54-204-2-26.compute-1.amazonaws.com:5432/da868mtamo9qol',
                              'hrxpycspeffdoc',
                              '1b7e460a790d0bb8cc8595fd1fc6fc8440011518dbe1cb4b0447a7b9d0bd4d19',
                              'da868mtamo9qol');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        
        $qry = "SELECT genre, kinngaku FROM `items` WHERE DATE_FORMAT(created_at, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')";
        
        $result = mysqli_query($con,$qry);
        mysqli_close($con);
        
        $table = [];
        $table['cols'] = [
        //Labels for the chart, these represent the column titles
        ['id' => '', 'label' => 'genre', 'type' => 'string'],
        
        ['id' => '', 'label' => 'kinngaku', 'type' => 'number']
        ];
        
        $rows = [];
        foreach($result as $row){
        $temp = [];
        
        //Values
        $temp[] = ['v' => (string) $row['genre']];
        $temp[] = ['v' => (float) $row['kinngaku']];
        $rows[] = ['c' => $temp];
        }
        
        $result->free();

        $table['rows'] = $rows;
        
        $jsonTable = json_encode($table, true);
       // echo $jsonTable;
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
        var data = new google.visualization.DataTable(<?=$jsonTable ?>)

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