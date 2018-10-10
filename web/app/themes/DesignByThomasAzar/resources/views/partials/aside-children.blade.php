@php
  $args = [
    'post_type'   => 'any',
    'post_parent' => $post->ID,
    'post_status' => 'publish',
    'order'       => 'ASC',
    'orderby'     => 'menu_order',
  ];
  $children = new WP_Query($args);
@endphp

@if ($children->have_posts())
  @while ($children->have_posts())
    @php $children->the_post() @endphp
    <li class="aside-list__item">
      <a href="{{ the_permalink() }}">
        @php the_title() @endphp
      </a>
    </li>
  @endwhile
@endif
@php wp_reset_postdata(); @endphp
