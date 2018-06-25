<div class="container">
    
    <div class="col-lg-12"style="margin-bottom:50px;"></div>
    
    <div class="row">
        <div class="col-lg-7">
            <div id="piechart"　class="col-lg-7"></div>
        </div>
        <div class="col-lg-5" style="background-color:pink; height:550px;">
        lists
        </div>
    </div>
    <div class="row">
        <div class="col-lg-9" style="background-color:purple; height:100px;">
            total amount of this month
        </div>
        <div class="col-lg-3" style="background-color:red; height:100px;">
            shinnki-nyuuryoku
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
        
        詳細{!! Form::text('namae') !!}<br>
        
        金額{!! Form::text('kinngaku') !!}円<br>
        
        {!! Form::submit('Post') !!}

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

    
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

<script>
        var url = "{{url('item/chart')}}";
        var genre = new Array();
        var namae = new Array();
        var kinngaku = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                genre.push(data.genre);
                namae.push(data.namae);
                kinngaku.push(data.kinngaku);
            });
            var ctx = document.getElementById("canvas").getContext('2d');
                var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels:Genres,
                      datasets: [{
                          label: 'Infosys Price',
                          data: kinngakus, 
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero:true
                              }
                          }]
                      }
                  }
              });
          });
        });
        </script>

<canvas id="canvas" height="280" width="600"></canvas>


{!! link_to_route('items.create', 'create') !!}
<br>
{!! link_to_route('items.show', 'show') !!}






        