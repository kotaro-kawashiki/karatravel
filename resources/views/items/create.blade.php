@extends('layouts.app')

@section('content')


        {!! Form::open(['route' => 'items.store']) !!}
        
        ジャンル{!! Form::select('genre',['あ','い','う']) !!}<br>
        
        詳細{!! Form::text('namae') !!}<br>
        
        金額{!! Form::text('kinngaku') !!}円<br>
        
        {!! Form::submit('Post') !!}

        {!! Form::close() !!}



<a href="/" >戻る</a>



@endsection
