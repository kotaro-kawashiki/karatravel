
@extends('layouts.app')


<<<<<<< HEAD
@section('content')
<div style="background-color:red;">
        
=======

>>>>>>> origin/nakami
        {!! Form::open(['route' => 'items.store']) !!}
        
        ジャンル{!! Form::select('genre',['あ','い','う']) !!}<br>
        
<<<<<<< HEAD
        しょうさい{!! Form::text('namae') !!}<br>
=======
        詳細{!! Form::text('namae') !!}<br>
>>>>>>> origin/nakami
        
        金額{!! Form::text('kinngaku') !!}円<br>
        
        {!! Form::submit('Post') !!}

        {!! Form::close() !!}
<<<<<<< HEAD
=======

>>>>>>> origin/nakami



<a href="/" >戻る</a>


</div>
@endsection