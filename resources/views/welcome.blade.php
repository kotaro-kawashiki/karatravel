@extends('layouts.app')

@section('content')

    @if (Auth::check())
       @include('items.items')
    @else
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Make everyday Happiest;)</div>
          <div class="intro-heading text-uppercase">CHECK YOUR WALLET</div>
          {!! link_to_route('register','Register',null,['class' => 'btn btn-primary']) !!}
          {!! link_to_route('login','Login',null,['class' => 'btn btn-success']) !!}
          
        </div>
      </div>
    </header>
    @endif  
     
@endsection

