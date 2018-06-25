@extends('layouts.app')


@section('content')
<div class="createblade"style="background-color:#EDFEFF;" >
        
        <div style="padding-top:5%;">
        <center><h1>Input New Spending</h1></center>
        </div>
        
        <div class="form" style="background-color:#C4E7FF; margin:5% 30% 10% 30%;">
        {!! Form::open(['route' => 'items.store']) !!}
        <br>
        <br>
        
        <center>
        <div class="form-group padding-top:5%;">
        <div class="col-3">
        <h4>Genre</h4>
        {!! Form::select('genre',['class' =>'A','B','C']) !!}
        </div>
        </div>
        </center>
        
        <center>
        <div class="form -group">
        <div class="col-4">
        <h4>Price</h4>{!! Form::text('kinngaku',null, ['class' => 'form-control form-control-lg mb-3']) !!}<br>
        </div>
        </div>
        </center>



<a href="/" >戻る</a>



@endsection
