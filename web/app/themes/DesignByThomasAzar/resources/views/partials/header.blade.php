<header class="banner">
  <nav class="mobile-menu">
    <a href="{{ home_url('/') }}">
      <img class="logo" src="@asset('images/logo-side-text.svg')" alt="SCTA logo">
    </a>
    <button id="mobile-menu__button">Menu</button>
  </nav>
  @if (is_front_page())
    <div class="hero">
      @php the_post_thumbnail('', ['class' => 'hero__image']) @endphp
    </div>
  @endif
  <nav class="navigation">
    @if (has_nav_menu('primary'))
      <ul class="nav-menu nav-menu--primary">
        <li class="logo-item">
          <a href="{{ home_url('/') }}">
            <img class="logo" src="@asset('images/logo-side-text.svg')" alt="SCTA logo">
          </a>
        </li>
        {!! wp_nav_menu(['theme_location' => 'primary', 'items_wrap' => '%3$s']) !!}
      </ul>
    @endif
    @if (has_nav_menu('secondary'))
      {!! wp_nav_menu(['theme_location' => 'secondary', 'menu_class' => 'nav-menu nav-menu--secondary']) !!}
    @endif
  </nav>
  @if (is_front_page())
    @include('partials.tagline')
  @endif
</header>
