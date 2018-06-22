
@extends('layouts.app')


@section('content')
<div style="background-color:red;">
        
        {!! Form::open(['route' => 'items.store']) !!}
        
        ジャンル{!! Form::select('genre',['あ','い','う']) !!}<br>
        
        しょうさい{!! Form::text('namae') !!}<br>
        
        金額{!! Form::text('kinngaku') !!}円<br>
        
        {!! Form::submit('Post') !!}

        {!! Form::close() !!}



<a href="/" >戻る</a>


</div>
@endsection