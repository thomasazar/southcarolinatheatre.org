@php $post = get_page_by_title('General Information', $output = OBJECT, $post_type = get_post_type()) @endphp
@php $output =  apply_filters( 'the_content', $post->post_content ) @endphp
<section class="content">
  {!! $output !!}
</section>
