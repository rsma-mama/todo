@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}"/>
@endsection

@section('content')
  <from action="{{ route('todo.store') }}" method="POST" />
    @csrf
    <input type="text" name="content" />
    <button type="submit">
    </button>
<div class="todo__content">
  <div class="todo"__heading>
    <

  </div>
  <form class="form" action="
</div>
