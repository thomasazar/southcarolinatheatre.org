@php $show_only = ['convention', 'divisions', 'events', 'page' ] @endphp
<ul class="aside">
  @if (in_array(get_post_type(), $show_only))
    @include('partials/aside-attachments')
    @include('partials/aside-children')
    @include('partials/aside-links')
  @endif
</ul>
