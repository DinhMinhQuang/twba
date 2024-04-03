<footer>
  <div class="row grid-container" id="footer-menus">
    <div class="columns large-3 large-offset-1 medium-10 medium-offset-2 small-14 small-offset-0 mobile-hide"
      id="footer-logo-container">
      <a href="https://www.tbwa.com.vn/" id="footer-logo">
        <img src="<?php echo get_theme_mod('footer_logo_setting'); ?>">
      </a>
    </div>
    <div class="columns large-2 large-offset-1 medium-7 medium-offset-0 small-0 end">
      <div id="footer-main-menu">
        <div id="main-menu">
          <ul>
            <?php
            wp_nav_menu(
              array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'menu_class' => 'menu',
                'fallback_cb' => false,
                'walker' => new Custom_Walker_Nav_Menu()
              )
            );
            ?>
          </ul>
        </div>
        <!--/#main-menu-->
      </div>
      <!--/#footer-main-menu-->
      <div id="footer-secondary-menu">
        <div id="secondary-menu">
          <ul>
            <?php
            wp_nav_menu(
              array(
                'menu' => 'secondary',
                'theme_location' => 'secondary',
                'container' => 'container',
                'menu_class' => 'menu',
                'fallback_cb' => false,
                'walker' => new Custom_Walker_Nav_Menu()
              )
            );
            ?>
          </ul>
        </div>
        <!--/#secondary-menu-->
      </div>
      <!--/#footer-main-menu-->

    </div>
    <!--/.columns-->

    <div class="columns large-6 large-offset-0 medium-14 medium-offset-0 small-14">
      <div class="row">
        <div class="columns large-7 large-offset-0">
          <span class="block inquiries">
            <h3>
              <?php echo esc_html(get_theme_mod('business_inquiries_first_title', '')) ?>
            </h3>
            <p class="name small">
              <?php echo esc_html(get_theme_mod('business_inquiries_first_name', '')) ?>
            </p>
            <a class="email" href="mailto:<?php echo esc_html(get_theme_mod('business_inquiries_first_email', '')) ?>">
              <?php echo esc_html(get_theme_mod('business_inquiries_first_email', '')) ?>
            </a>
          </span>
          <!--/.block-->
          <span class="block inquiries">
            <h3>
              <?php echo esc_html(get_theme_mod('business_inquiries_second_title', '')) ?>
            </h3>
            <p class="name small">
              <?php echo esc_html(get_theme_mod('business_inquiries_second_name', '')) ?>
            </p>

            <a class="email" href="mailto:<?php echo esc_html(get_theme_mod('business_inquiries_second_email', '')) ?>">
              <?php echo esc_html(get_theme_mod('business_inquiries_second_email', '')) ?>
            </a>
          </span>
          <!--/.block-->
        </div>
        <!--/.columns-->
        <div class="columns large-6 large-offset-1">
          <span class="block contact">

            <p class="small">
            </p>
            <p>
              <?php echo esc_html(get_theme_mod('extra_data_address_first_line', '')) ?><br>
            </p>
            <p>
              <?php echo esc_html(get_theme_mod('extra_data_address_second_line', '')) ?>
            </p>
            <p>
              <?php echo esc_html(get_theme_mod('extra_data_address_third_line', '')) ?>
            </p>
            <p>
              <?php echo esc_html(get_theme_mod('extra_data_address_fourth_line', '')) ?>
            </p>
            <p></p>
            <a class="phone" href="tel:<?php echo esc_html(get_theme_mod('extra_data_phone', '')) ?>">
            <?php echo esc_html(get_theme_mod('extra_data_phone', '')) ?>
          </a>
            <a class="email" href="mailto:<?php echo esc_html(get_theme_mod('extra_data_email', '')) ?>">
            <?php echo esc_html(get_theme_mod('extra_data_email', '')) ?>
          </a>
          </span>


        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.columns-->
    <div class="columns large-6 large-offset-0 medium-14 medium-offset-0 end">
      <div class="row">
        <div class="columns large-6 large-offset-8">
          <span class="block footer-social-share">
            <ul class="social-share-buttons">
              <li><a href="<?php echo esc_html(get_theme_mod('extra_data_facebook', '')) ?>" data-share-channel="" id="facebook" class="share-btn"
                  target="_blank">Facebook</a></li>
              <li><a href="<?php echo esc_html(get_theme_mod('extra_data_linkedin', '')) ?>" data-share-channel="" id="linkedin"
                  class="share-btn" target="_blank">Linkedin</a></li>
              <li><a href="<?php echo esc_html(get_theme_mod('extra_data_instagram', '')) ?>" data-share-channel="" id="instagram"
                  class="share-btn" target="_blank">Instagram</a></li>
            </ul>
          </span>
        </div>
      </div>
      <!--/.rows-->
    </div>
    <!--/.columns-->
    <div id="footer-language-toggle">
      <ul>
        <li class="nav__item current"><a href="https://www.tbwa.com.vn/">EN</a></li>
        <li class="divider"> \ </li>
        <li class="nav__item "><a href="https://www.tbwa.com.vn/vi/">VI</a></li>
      </ul>
    </div>
    <!--/#footer-language-toggle-->

  </div>
  <!--/.row-->

  <div class="grid-container" id="legal">
    <div class="row">
      <div class="columns large-offset-1 large-6">
        <span>
          © TBWA 2018 all rights reserved<br>TBWA and Disruption are registered trademarks of TBWA
        </span>
      </div>
      <div class="columns large-6 end medium-14 medium-offset-0">
        <!-- <a href="https://www.tbwa.com.vn/terms-of-service">Terms of Service</a>
        <a href="https://www.tbwa.com.vn/privacy-policy">Privacy Policy</a>
        <a href="https://www.tbwa.com.vn/cookie-policy">Cookie Policy</a>
        <a href="https://tbwa.com/" target="_blank">TBWA\Worldwide</a> -->
        <?php
        $menu_items = wp_get_nav_menu_items('footer');

        if ($menu_items) {
          foreach ($menu_items as $menu_item) {
            echo '<a href="' . esc_url($menu_item->url) . '">' . esc_html($menu_item->title) . '</a>';
          }
        }
        ?>
      </div>
    </div>
  </div>



</footer>