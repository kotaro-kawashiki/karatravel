
<div class="container">
    
    <div class="col-xl-12"style="margin-bottom:50px;"></div>
    
    <div class="row" style="width:1300px; padding-left:10px;">
        <div class="col-xl-7">

            <h2>{{$user->name}}さんの家計簿</h2>
            @include('items.piechart')
            
        </div>
        <div class="col-xl-5" style=" height:550px; overflow:auto;">
            <br>
            <br>
            <h4>出費詳細状況</h4>
            {!! link_to_route('items.show', 'さらに詳しく確認') !!}
        　　@include('items.monthlylist')
        　　<h3>今月の出費合計：<h1 style="color:#cb0065;"><?php
            $total = 0;
            foreach($items as $item){
                $total += $item->kinngaku;
            }
            echo $total
            ?></h1><h1>円</h1>
            </h3>
            <div class="kuuhaku" style="color:white;">
                <h1>sukimasukimasukimasukimasukimasu</h1>
            </div>
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="folat:left;">
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
                        <option value="固定費">固定費</option>
                        <option value="交際費">交際費</option>
                        <option value="美容費">美容費</option>
                        <option value="その他">その他</option>
                </select>
                <br>
                詳細{!! Form::text('namae',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
                
                金額{!! Form::text('kinngaku',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
                
                {!! Form::submit('Post',['class' => "btn btn-info"]) !!}
        
                {!! Form::close() !!}
            </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row" style="width:1300px; padding-left:10px;">

        <div class="col-xl-9">
            

        </div>
        <div class="col-lg-2">
        
        
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </body>
        </div>
    </div>
</div>
 
        
        












        