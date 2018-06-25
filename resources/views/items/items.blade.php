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
        <div class="col-lg-3" style="height:100px;">
        
            <body>
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        新規出費の入力!
        </button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
            </div>
            <div class="modal-body">
                <h4>👑新規出費の入力👑</h4>
                {!! Form::open(['route' => 'items.store']) !!}
        
        ジャンル{!! Form::select('genre',['あ','い','う']) !!}<br>
        
        詳細{!! Form::text('namae',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
        
        金額{!! Form::text('kinngaku',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
        
        {!! Form::submit('Post',['class' => "btn btn-info"]) !!}

        {!! Form::close() !!}
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

<canvas id="canvas" height="280" width="600"></canvas>



<br>
{!! link_to_route('items.show', 'show') !!}






        