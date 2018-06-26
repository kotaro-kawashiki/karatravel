
<div class="container">
    
    <div class="col-xl-12"style="margin-bottom:50px;"></div>
    
    <div class="row" style="width:1300px; padding-left:10px;">
        <div class="col-xl-7">
            {{$user->name}}
            
            @include('items.piechart')
            
        </div>
        <div class="col-xl-5" style=" height:550px; overflow:auto;">
        @include('items.monthlylist')
        </div>
    </div>
    <div class="row" style="width:1300px;">
        <div class="col-xl-9" style="background-color:purple; height:100px;">
            <?php
            $total = 0;
            foreach($items as $item){
                $total += $item->kinngaku;
            }
            echo $total
            ?>
        </div>
        <div class="col-lg-3" style="height:100px;">
        
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        新規出費の入力!
        </button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header" style="background-color:#FAD4DE;">
                <h4>👑新規出費の入力👑</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
            </div>
            <div class="modal-body" style="background-color:#FEF6F8;">
                
                {!! Form::open(['route' => 'items.store']) !!}
        
                <!--ジャンル{!! Form::select('genre',['食費','交際費','生活費']) !!}<br>-->
                <select name="genre" size="string">
                        <option value="食費"　selected>食費</option>
                        <option value="生活費">生活費</option>
                        <option value="交際費">交際費</option>
                </select>
                
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
 
        
        

<canvas id="canvas" height="280" width="600"></canvas>




{!! link_to_route('items.show', 'show') !!}






        