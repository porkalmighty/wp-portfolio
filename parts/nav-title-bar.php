<?php
// Adjust the breakpoint of the title-bar by adjusting this variable
$breakpoint = "medium"; ?>
<div data-sticky-container>
  <div data-sticky data-options="marginTop:0;" style="width:100%">
    <div class="title-bar" data-responsive-toggle="top-bar-menu" data-hide-for="<?php echo $breakpoint ?>">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title"><?php _e( 'Menu', 'jointswp' ); ?></div>
    </div>
    <div class="max-container">
      <div class="top-bar" id="top-bar-menu">
        <div class="top-bar-left show-for-<?php echo $breakpoint ?>">
          <ul class="menu">
            <li><h1><a href="<?php echo home_url(); ?>">
              <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                        echo '<img src="' . esc_url( $logo[0] ) . '" class="mysite__logo" alt="' . get_bloginfo( 'name' ) . '">' . get_bloginfo( 'name' );
                } else {
                        echo get_bloginfo( 'name' );
                }
              ?></a></h1></li>
          </ul>
        </div>
        <div class="top-bar-right">
          <?php
            // loads the alt menu if the page is not the front page
            if(is_front_page()):
              joints_top_nav();
            else:
              joints_top_nav('alt-nav');
            endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
