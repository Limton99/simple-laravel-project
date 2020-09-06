@extends('layouts.app')

@section('content')

@foreach($reviews as $el)
  <div class="alert alert-warning">
    <h3>{{ $el->subject}}</h3>
    <p>{{ $el->message}}</p>
  </div>
@endforeach

<h1>Оставить отзыв</h1>
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
<form method="post" action="/review/check">
  @csrf
  <input type="email" id="email" name="email" placeholder="Введите email" class="form-control"><br>
  <input type="text" id="subject" name="subject" placeholder="Введите Отзыв" class="form-control"><br>
  <textarea name="message" id="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
  <button type="submit" class="btn btn-success">Отправить</button>
</form>
@endsection