@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  @include('partials.aside')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-single-'.get_post_type())
  @endwhile
@endsection
