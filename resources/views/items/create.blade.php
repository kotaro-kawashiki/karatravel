
@extends('layouts.app')


@section('content')
<div style="background-color:#EDFEFF;" >
        
        <div style="padding-top:5%;">
        <center><h2>新規出費を入力</h2></center>
        </div>
        
        <div class="form" style="background-color:pink; margin:5% 30% 10% 30%">
        
        {!! Form::open(['route' => 'items.store']) !!}
        
        <center>
        <div class="form-group padding-top:5%;">
        <div class="col-3">
        genre{!! Form::select('genre',['class' =>'あ','い','う']) !!}<br>
        </div>
        </div>
        </center>
        
        <center>
        <div class="form-group">
        <div class="col-4">
        Price{!! Form::text('kinngaku',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
        </div>
        </div>
        </center>
        
        <center>
        <div class="form-group">
        <div class="col-4">
        Syousai{!! Form::text('namae',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
        </div>
        </div>
        </center>
        
        <center>
        {!! Form::submit('Post',['class' => "btn btn-info"]) !!}
        </center>
        
        {!! Form::close() !!}
        </div>



<div>
<center><a href="/" >戻る</a></center>        
</div>



@endsection
</div>
