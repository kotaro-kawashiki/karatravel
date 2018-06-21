@extends('layouts.app')

@section('content')

@if (Auth::user()->id == $user->id)
        {!! Form::open(['route' => 'items.store']) !!}
        <div class="form-group">
        {!! Form::text('genre', ['class' => 'form-control']) !!}
        {!! Form::text('namae', ['class' => 'form-control']) !!}
        {!! Form::text('kinngaku', ['class' => 'form-control']) !!}
            
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
        </div>
        {!! Form::close() !!}
@endif


<a href="/" >戻る</a>



@endsection
