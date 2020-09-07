@extends('layouts.app')


@section('content')
<h1>Обнавить отзыв</h1>
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
      @endforeach
    </ul>
  </div>
@endif
<form method="post" action="{{route('update-submit', $review->id)}}">
  @csrf
  <input type="email" id="email" name="email" value="{{$review->email}}" placeholder="Введите email" class="form-control"><br>
  <input type="text" id="subject" name="subject" value="{{$review->subject}}" placeholder="Введите Отзыв" class="form-control"><br>
  <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control">{{$review->message}}</textarea><br>
  <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection