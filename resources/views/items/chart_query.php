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