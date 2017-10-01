<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body <?php body_class("avenir nmg-body "); ?>>

    <header>

      <nav id="main-nav" class="bg-white mw-100 dn db-l">

        <div id="social-top" class="bg-nmg-top-nav mw-100 dn db-l pv1">

          <div class="cf mh5">
            <div class="fr flex">
              <p class="f6 ph3 black-40 mv2">
                Find us on Social Media
              </p>
                <a href="https://www.facebook.com/nomansgrace/"><img class="ph2 mt1" alt="link to no mans grace facebook page" src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook.svg" /></a>
                <a href="https://www.instagram.com/nomansgrace/"><img class="ph2 mt1" alt="link to no mans grace instagram page" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" /></a>
                <a href="https://twitter.com/nomansgrace?lang=en"><img class="ph2 mt1" alt="link to no mans grace twitter page" src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" /></a>
            </div>
          </div>

        </div>

        <div class="cf mh5 pv2">

          <div class="w-30-ns fl h3 dt">
            <div class="dtc v-mid">
              <a href="<?php bloginfo('url'); ?>"><img alt="no mans grace logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" class="w-60 dib v-mid" /></a>
            </div>
          </div>

          <div class="w-70-ns fr tr dt h3">


              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' , 'items_wrap' => '<div class="v-mid dtc">%3$s</div>' , 'container' => 'false' ) ); ?>



          </div>

        </div>

      </nav>

      <nav id="mobile-nav" class="dn-l bg-transparent pv2 absolute left-0 right-0 mw-100">

        <div class="cf">

          <div class="w-100 fl tc dt h3">


              <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu' , 'items_wrap' => '<div class="v-mid dtc">%3$s</div>' , 'container' => 'false' ) ); ?>


          </div>

        </div>

      </nav>

      <aside id="mobile-bottom-bar">

        <div class="z-999 fixed bottom-0 dn-l bg-nmg-block-4 pv3 tc w-100">

          <a style="border-thickness:2px;" class="ba b--white v-mid f6 fw4 link dim ph3 fw6 mh2 pv2 dib white bg-nmg-header" href="#0">Book Online</a>
          <a style="border-thickness:2px;" class="ba b--white v-mid f6 fw4 link dim ph4 fw6 mh2 pv2 dib white bg-nmg-accent" href="#0">Call Us</a>


        </div>

      </aside>

    <aside id="to-top" class="dn fixed bottom-1 right-1 bg-nmg-block-1 w2 h2 z-5 tc">

        <a href="#hero-section"><img class="w1 pa2" alt="back to top link" src="<?php echo get_template_directory_uri(); ?>/assets/img/up-arrow.svg" /></a>

    </aside>



    </header>
