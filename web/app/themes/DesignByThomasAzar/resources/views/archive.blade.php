@extends('layouts.app')

@section('content')
  @include ('partials.page-header')
  <ul class="aside">
    @include ('partials.aside-archive-children')
  </ul>
  @include ('partials.content-archive')
@endsection
