@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <ul class="aside">
    @while (have_posts()) @php the_post() @endphp
      @include('partials.aside-posts')
    @endwhile
  </ul>
@endsection
