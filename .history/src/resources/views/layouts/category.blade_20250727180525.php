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
  <div class="category__alert--dan"
