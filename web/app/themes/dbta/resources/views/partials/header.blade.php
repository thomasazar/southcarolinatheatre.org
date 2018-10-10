@if (is_front_page())
  @php $hero = get_field('hero') @endphp
  @php $background = $hero['image']['sizes']['large'] @endphp
  <header class="banner" style="background-image: linear-gradient(to bottom, rgba(0,103,140,0.75) 0%, rgba(61,170,213,0.5) 100%), url('{{ $background }}');">
@else
  <header class="banner">
@endif
  <section class="mobile-only mobile-menu">
    <a class="logo__link mobile-menu__logo" href="{{ home_url('/') }}">
      <img class="logo" src="@asset('images/logo-side-text.svg')" alt="SCTA logo">
    </a>
    <a class="mobile-menu__button">Menu</a>
  </section>
  <section class="banner__menus">
    @if (has_nav_menu('primary'))
      <ul class="nav-menu nav-primary">
        <li>
          <a class="logo__link desktop-only" href="{{ home_url('/') }}">
            <img class="logo logo--nav" src="@asset('images/logo-side-text.svg')" alt="SCTA logo">
          </a>
        </li>
        {!! wp_nav_menu(['theme_location' => 'primary', 'items_wrap' => '%3$s']) !!}
      </ul>
    @endif
    @if (has_nav_menu('secondary'))
      {!! wp_nav_menu(['theme_location' => 'secondary', 'menu_class' => 'nav-menu nav-secondary']) !!}
    @endif
  </section>
  @if (is_front_page())
    <section class="tagline">
      <h1>{{ bloginfo('description') }}</h1>
      <p>SCTA's vision is to transform the lives of all South Carolinians through theatre</p>
    </section>
    @if ($hero['link_text'])
      <section class="photo-credit">
        <a class="photo-credit__link" href="{{ $hero['image']['sizes']['large'] }}" data-caption="{{  $hero['caption'] }}">
          {{ $hero['link_text'] }}
        </a>
      </section>
    @endif
  @endif
</header>
