@extends('layouts.app')

@section('content')

    @if (Auth::check())
       weikome
       @include('items.items')
    @else
        
        {!! link_to_route('register', 'Sign up', null, ['class' => 'btn btn-lg btn-primary']) !!}
        {!! link_to_route('login', 'Login', null, ['class' => 'btn btn-lg btn-success']) !!}

    @endif
@endsection

