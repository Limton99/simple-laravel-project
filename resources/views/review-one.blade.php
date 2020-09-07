@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{$review->subject}}</h1>

  <h6>{{ $review->email}}</h6>
  <p >{{ $review->message}}</p>
  <a href="{{route('update', $review->id)}}" class="btn btn-warning">Обнавить</a>
  <a href="{{route('delete', $review->id)}}" class="btn btn-warning">Удалить</a>
</div>
@endsection
