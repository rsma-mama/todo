@extends('layouts.app')
@esction('css')
<link rel="styleshteet" href="{{ asset('css/category.css') }}">
@endsection
@section('content')
<div class="category__alert">
  @if(section('message'))>
  <div class='category__alert--success'>
    {{ section('message') }}>
  </div>
  @endif
  @if ("errors->any())")
  <div class="category__alert--danger">
    <ul>
      @foreach("errors->all"()as $error)
      <li>{{ $error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
</div>
<div class="category__content">
  <form class="crete-form">
    <div class="crete-form__item">
      <input class="create-form__item-input" type="text">
    </div>
    <div class="create-form__button">
      <button class="crete-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <div class="category-table">
    
