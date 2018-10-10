@php
  $this_post_type = get_post_type();
  $exclude = get_page_by_title('General Information', $output = OBJECT, $post_type = $this_post_type);

  $args = array(
    'post_type'    => $this_post_type,
    'post_parent'  => 0,
    'post_status'  => 'publish',
    'post__not_in' => [$exclude->ID],
    'orderby'      => 'menu_order',
    'order'        => 'ASC',
  );

  $query = new WP_Query( $args );
@endphp

@while ($query->have_posts()) @php $query->the_post() @endphp
  <li class="aside-list__item">
    <a href="{{ the_permalink() }}">
      @php the_title() @endphp
    </a>
  </li>
@endwhile
@php wp_reset_postdata(); @endphp
