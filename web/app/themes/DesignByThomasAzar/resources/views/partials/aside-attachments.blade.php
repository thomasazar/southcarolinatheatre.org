@if (have_rows('attachments_repeater'))
  @while (have_rows('attachments_repeater'))
    @php the_row() @endphp
    @php $file = get_sub_field('attachments') @endphp
    <li class="links__item">
      <a href="{{ $file['url'] }}">{{ $file['title'] }}></a>
    </li>
  @endwhile
@endif
