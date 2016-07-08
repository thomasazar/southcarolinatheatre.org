<div class='header-bar desktop-only'>
  <section class='header-bar__tagline'>
    Connect. Create. Cultivate.
  </section>
  <section class='header-bar__social'>
  		<a href='http://www.facebook.com/SCTheatreAssoc?fref=ts'>
  			<svg class='social-icon' viewBox="0 0 16 16" width="24px" height="24px" preserveAspectRatio="xMinYMin meet" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M15.117 0H.883C.395 0 0 .395 0 .883v14.234c0 .488.395.883.883.883h7.663V9.804H6.46V7.39h2.086V5.607c0-2.066 1.262-3.19 3.106-3.19.883 0 1.642.064 1.863.094v2.16h-1.28c-1 0-1.195.476-1.195 1.176v1.54h2.39l-.31 2.416h-2.08V16h4.077c.488 0 .883-.395.883-.883V.883C16 .395 15.605 0 15.117 0" fill-rule="nonzero" style="fill:#3b5998;fill-opacity:1"/></svg>
  		</a>
  		<a href='http://www.twitter.com/SCTheatreAssoc'>
  			<svg class='social-icon' viewBox="0 0 16 16" width="24px" height="24px" preserveAspectRatio="xMinYMin meet" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><path d="M16 3.038c-.59.26-1.22.437-1.885.517.677-.407 1.198-1.05 1.443-1.816-.634.375-1.337.648-2.085.795-.598-.638-1.45-1.036-2.396-1.036-1.812 0-3.282 1.468-3.282 3.28 0 .258.03.51.085.75C5.152 5.39 2.733 4.084 1.114 2.1.83 2.583.67 3.147.67 3.75c0 1.14.58 2.143 1.46 2.732-.538-.017-1.045-.165-1.487-.41v.04c0 1.59 1.13 2.918 2.633 3.22-.276.074-.566.114-.865.114-.21 0-.416-.02-.617-.058.418 1.304 1.63 2.253 3.067 2.28-1.124.88-2.54 1.404-4.077 1.404-.265 0-.526-.015-.783-.045 1.453.93 3.178 1.474 5.032 1.474 6.038 0 9.34-5 9.34-9.338 0-.143-.004-.284-.01-.425.64-.463 1.198-1.04 1.638-1.7z" fill-rule="nonzero" style="fill:#55acee;fill-opacity:1"/></svg>
  		</a>
  		<a href='https://plus.google.com/107479692152474137975/posts'>
  			<svg class='social-icon' viewBox="0 0 16 16" width="24px" height="24px" preserveAspectRatio="xMinYMin meet" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1.414"><g><path d="M5.09 7.273v1.745H7.98c-.116.75-.873 2.197-2.887 2.197-1.737 0-3.155-1.44-3.155-3.215S3.353 4.785 5.09 4.785c.99 0 1.652.422 2.03.786l1.382-1.33c-.887-.83-2.037-1.33-3.41-1.33C2.275 2.91 0 5.184 0 8s2.276 5.09 5.09 5.09c2.94 0 4.888-2.065 4.888-4.974 0-.334-.036-.59-.08-.843H5.09zM16 7.273h-1.455V5.818H13.09v1.455h-1.454v1.454h1.455v1.455h1.455V8.727H16" style="fill:#dc4e41;fill-opacity:1" /></g></svg>
  		</a>
  </section>
  <section class='header-bar__search'>
    <?php get_search_form(); ?>
  </section>
</div>
<div class='logo'>
	<a href='/' title='Return to home page'>
		<img src="/img/scta-logo.jpg" />
	</a>
  <div class='members-only desktop-only'>
    <?php
    if ( is_user_logged_in() ):
      $current_user = wp_get_current_user();
      if ( $current_user->user_firstname ) {
        $first_name = $current_user->user_firstname;
      } else {
        $first_name = 'My Profile';
      } ?>
      <div class='button button--sign-in'><?= $first_name; ?></div>
      <?php
      $args = [
        'theme_location' => 'extra-menu',
        'menu_class' => 'members-only-menu sub-menu',
        'container' => '',
      ];

      wp_nav_menu( $args );
    else: ?>
      <a class="button button--sign-in" href="/member-login">Sign in</a>
    <?php endif; ?>
  </div>
</div>
