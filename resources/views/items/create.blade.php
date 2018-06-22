<head>
        <style>
                .navbar
                {
                        background-color: #B2F3FF;
                }
        </style>
</head>
<body>
@extends('layouts.app')


@section('content')

        
        {!! Form::open(['route' => 'items.store']) !!}
        
        ジャンル{!! Form::select('genre',['あ','い','う']) !!}<br>
        
        しょうさい{!! Form::text('namae') !!}<br>
        
        金額{!! Form::text('kinngaku') !!}円<br>
        
        {!! Form::submit('Post') !!}

        {!! Form::close() !!}



<a href="/" >戻る</a>



@endsection
</body>