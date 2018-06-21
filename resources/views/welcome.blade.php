@extends('layouts.app')

@section('content')

    @if (Auth::check())
       @include('items.items')
    @else
    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Studio!</div>
          <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
          {!! link_to_route('register','Register',null,['class' => 'btn btn-primary']) !!}
        </div>
      </div>
    </header>
    @endif  
     
@endsection

