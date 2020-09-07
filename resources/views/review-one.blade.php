@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-white">{{$review->subject}}</h1>

  <h6 class="text-white">{{ $review->email}}</h6>
  <p class="text-white">{{ $review->message}}</p>
</div>
@endsection
