@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<form action="{{ route('todo.store') }}" method="POST">
  @csrf
  <input type="text" name="content" />
  <button type="submit">
  </button>
</form>
<div class="todo__content">
  <div class="todo" __heading>
    <h2>

  </div>
  <form class="form" action="
</div>