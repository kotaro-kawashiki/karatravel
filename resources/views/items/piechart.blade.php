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
          
          
          var jsonData = $.ajax({
            url: "chart_query.php",
            dataType:"json",
            async: true
            }).responseText;

        // Create the data table.
        var data = new google.visualization.DataTable(jsonData);

        // Set chart options
        google.charts.load('current', {'packages':['corechart'], 'language': 'ja'});
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':800,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    
    <?php
        $con = mysqli_connect('localhost','root','','karatravel');
        if (!$con) {
          die('Could not connect: ' . mysqli_error($con));
        }
        
        $qry = "SELECT topping, slices FROM `pizza`";
        
        $result = mysqli_query($con,$qry);
        mysqli_close($con);
        
        $table = [];
        $table['cols'] = [
        //Labels for the chart, these represent the column titles
        ['id' => '', 'label' => 'Topping', 'type' => 'string'],
        ['id' => '', 'label' => 'Slices', 'type' => 'number']
        ];
        
        $rows = [];
        foreach($result as $row){
        $temp = [];
        
        //Values
        $temp[] = ['v' => (string) $row['topping']];
        $temp[] = ['v' => (float) $row['slices']];
        $rows[] = ['c' => $temp];
        }
        
        $result->free();

        $table['rows'] = $rows;
        
        $jsonTable = json_encode($table, true);
        echo $jsonTable;
        ?>
    <div id="chart_div"></div>