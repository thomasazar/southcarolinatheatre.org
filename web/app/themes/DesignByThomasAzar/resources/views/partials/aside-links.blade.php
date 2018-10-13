@if (have_rows('links'))
  @while (have_rows('links'))
    @php the_row() @endphp
    @php $post_id = get_sub_field('link', false, false) @endphp
    <li class="links__item">
      <a href="{{ get_the_permalink($post_id) }}">
        {{ apply_filters('the_title', get_the_title($post_id)) }}
      </a>
    </li>
  @endwhile
@endif
