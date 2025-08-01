@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="todo__alert">
      @csrf
  <input type="text" name="content" />
  <button type="submit">
  </button>
</form>
<div class="todo__content">
  <div class="todo" __heading>
    <h2>todoリスト</h2>

  </div>
  <form class="form" action="
</div>