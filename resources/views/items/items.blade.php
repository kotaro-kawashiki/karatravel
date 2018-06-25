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
        <div class="col-xl-3" style="height:100px;">
　　　　
            </div>
            </div>
            </div>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </body>
        </div>
    </div>
</div>
<script type="text/javascript">
       　
        google.load("visualization", "1", {packages:["corechart"]});
        google.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([ //グラフデータの指定
        ['Task', 'Hours per Day'],
        ['Work',     11],
        ['Eat',      2],
        ['Commute',  2],
        ['Watch TV', 2],
        ['Sleep',    7]
        ]);
        var options = { //オプションの指定
            pieSliceText: 'label',
            title: 'お札は頭を下にしていれる派です。',
            'width': 800,
			'height': 600
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart')); 
        //グラフを表示させる要素の指定
        chart.draw(data, options);
        }
        </script>
        
        


<br>
{!! link_to_route('items.show', 'show') !!}

