<?php get_header(); ?>


<section style="background-image:url(<?php the_field('main_background'); ?>)" id="hero-section" class="cover dt rem-35 vh-80-l w-100">


    <div class="dtc v-mid pa4 tc">

        <div class="mw6 center ph5 pt4-ns pt1">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/main-logo.svg" alt="no man's grace logo" class="w-40-l w4" />

            <h1 class="pt3 nmg-heading white f3 f2-ns fw3"><?php the_field('main_heading'); ?></h1>

            <a class="mt4 f4 link ph4 pv3 dn dib-ns white bg-nmg-accent" href="#0">Book a Table</a>

        </div>



    </div>


</section>


<section id="intro">


    <div class="mw8 center pa4 tc-ns tl mv5-ns mv4">


        <h2 class="nmg-heading nmg-header f1-ns f2 fw2 mb2 tc mt1"><?php the_field('intro_heading'); ?></h2>
        <h3 class="nmg-heading nmg-header f3 fw2 mt0 tc"><?php the_field('intro_sub'); ?></h3>

        <p class="avenir f4 lh-copy pt4 ph3-ns fw4">
            <?php the_field('intro_text'); ?>
        </p>


    </div>




</section>



<section style="background-image:url(<?php the_field('menu_background'); ?>)" id="menus" class="mw-100">


    <div class="mh5-ns mh3 pv4">


        <h2 class="f1-ns f2 fw4 nmg-heading white tc mt1">Menus</h2>

        <div class="tabs bg-white-90 mw8-ns mw9 center tc mb5">


            <ul class="pl0 dib mw9 center mh5-ns mt4 mb3 list">

                <li class="dib-ns"><a href="#tasting" class="db dib-ns no-underline gray f3-ns f4 pv2 ph2 ph3-ns">Tasting</a></li>
                <li class="dib-ns"><a href="#dinner" class="db dib-ns no-underline gray f3-ns f4 pv2 ph2 ph3-ns">Dinner</a></li>
                <li class="dib-ns"><a href="#lunch" class="db dib-ns no-underline gray f3-ns f4 pv2 ph2 ph3-ns">Lunch</a></li>
                <li class="dib-ns"><a href="#sunday" class="db dib-ns no-underline gray f3-ns f4 pv2 ph2 ph3-ns">Sunday</a></li>
                <li class="dib-ns"><a href="#wine" class="db dib-ns no-underline gray f3-ns f4 pv2 ph2 ph3-ns">Wine</a></li>

                <?php if( get_field('extra_menu') ): ?>

                <li class="dib-ns"><a href="#<?php echo str_replace(' ', '', get_field('extra_menu_title')); ?>" class="db dib-ns no-underline gray f3-ns f4 pv2 ph2 ph3-ns"><?php the_field('extra_menu_title'); ?></a></li>

                <?php endif; ?>


            </ul>

            <hr class="bw1 b--solid light-gray dn-ns" />

            <div id="tasting" class="animated fadeIn mw7-ns mw8 center tc pb2 gray pa3 menu-header menu-body">

                <?php the_field('tasting_menu'); ?>

            </div>

            <div id="dinner" class="animated fadeIn mw7-ns mw8 center tc pb2 gray pa3 menu-header menu-body">

                <?php the_field('dinner_menu'); ?>

            </div>

            <div id="lunch" class="animated fadeIn mw7-ns mw8 center tc pb2 gray pa3 menu-header menu-body">

                <?php the_field('lunch_menu'); ?>

            </div>

            <div id="sunday" class="animated fadeIn mw7-ns mw8 center tc pb2 gray pa3 menu-header menu-body">

                <?php the_field('sunday_menu'); ?>

            </div>


            <div id="wine" class="animated fadeIn mw7-ns mw8 center tc pb2 gray pa3 menu-header menu-body">

                <?php the_field('wine_menu'); ?>

            </div>

            <?php if( get_field('extra_menu') ): ?>

            <div id="<?php echo str_replace(' ', '', get_field('extra_menu_title')); ?>" class="animated fadeIn mw7-ns mw8 center tc pb2 gray pa3 menu-header menu-body">

                <?php the_field('extra_menu_content'); ?>

            </div>

            <?php endif; ?>



            <p class="avenir i fw3 f5 gray pb5 pt3 ph3">
                Please note, as our food is seasonal and local, these menus are intended as a sample only.
            </p>





        </div>


    </div>



</section>



<section id="seen-in">


    <div class="mw8 center pa4 pt2 tc mv5">


        <h2 class="avenir gray fw3 f4 pb2">SEEN IN</h2>

        <div class="dib-l">

            <img class="w-25-ns w5 ph3-ns pv4 pv0-ns" alt="the times logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/times-logo.png" />
            <img class="w-25-ns w5 ph3-ns pv4 pv0-ns" alt="the telegraph logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/telegraph-logo.png" />
            <img class="w-25-ns w5 ph3-ns pv4 pv0-ns" alt="the times logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/michelin-logo.png" />


        </div>


    </div>




</section>


<section id="about">


    <div class="mw-100 cf">

         <div class="cf">


            <div style="background-image:url(<?php the_field('grid_bg_1'); ?>)" id="grid-bg-2" class="dn db-ns fl w-40-ns w-100 rem-30">

            </div>

            <div class="bg-nmg-block-2 fl w-60-ns w-100 rem-30-ns dt">

                <div class="ph6-l ph4 pv4 pv0-ns tl w7 center dtc v-mid">

                    <h2 class="f1-l f2 white fw3 nmg-heading mt1">About Us</h2>

                    <p class="white f4 lh-copy">

                        <?php the_field('about_us'); ?>

                    </p>

                </div>




            </div>


        </div>

        <div class="cf">


            <div class="dt fl w-40-l w-100 bg-nmg-block-1 rem-30">

                <div class="tc-ns tl ph5-l ph4 w7 center dtc v-mid">

                    <?php the_field('featured_item'); ?>

                    <a class="mt4 f4 link ph4 pv3 dib white bg-nmg-accent" target="_blank" href="https://widget.resdiary.com/(S(z2itwcjeliqjki3e0j01hmn3))/CheckAvailability.aspx?sourceKey=rd&id=7487" onClick="window.open(this.href,
                                 'location=yes,
                                  status=no,
                                  menubar=no,
                                  scrollbars=yes,
                                  resizable=yes,
                                  width=300,
                                  height=450');
                                  ">Book a Table</a>

                </div>

            </div>

            <div style="background-image:url(<?php the_field('grid_bg_2'); ?>)" id="grid-bg-1" class="fl w-60-l w-100 pa4 rem-30">

            </div>


        </div>


    </div>


</section>



<section id="contact">


    <div class="mw9 center mv6-ns mv5">


        <div class="cf mh2-ns">


            <div class="w-third-ns fl w-100 ph4">

                <h2 class="f3 fw4 black-70">Contact Us</h2>

                <hr class="bw1 b--solid gray" />
                <br />

                <div class="fw5 f4">

                    <?php the_field('contact_details'); ?>

                </div>

                <div class="pv3">

                    <a href="https://www.facebook.com/nomansgrace/"><img class="w2 pr2" alt="link to no mans grace facebook page" src="<?php echo get_template_directory_uri(); ?>/assets/img/Facebook.svg" /></a>
                    <a href="https://www.instagram.com/nomansgrace/"><img class="w2 ph2" alt="link to no mans grace instagram page" src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" /></a>
                    <a href="https://twitter.com/nomansgrace?lang=en"><img class="w2 ph2" alt="link to no mans grace twitter page" src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter.svg" /></a>


                </div>




            </div>

            <div class="w-third-ns fl w-100 ph4">

                <h2 class="f3 fw4 black-70">Opening Times</h2>

                <hr class="bw1 b--solid gray" />
                <br />

                <?php the_field('opening_times'); ?>


            </div>

            <div class="w-third-ns fl w-100 ph4">

                <h2 class="f3 fw4 black-70">Bookings</h2>

                <hr class="bw1 b--solid gray" />
                <br />

                <div class="fw5 f4 lh-copy">

                    <?php the_field('bookings'); ?>

                </div>

                <a class="f4 link dim ba bw1 ph4 pv3 mb2 dib dark-gray" href="https://widget.resdiary.com/(S(ibobebh1faaddnwvlwtlksse))/CheckAvailability.aspx?sourceKey=rd&id=7487">Book a Table</a>



            </div>


        </div>


    </div>


</section>

<section id="map">

    <div id="map-container" class="rem-35 w-100">

    </div>


</section>


<section id="news">


    <div class="cf bg-nmg-block-3">

        <div class="mh5-ns mh3 tc pv4 pv5-ns">

        <h2 class="white nmg-heading f2 f2-ns fw4 mv3-ns mv1">Latest News</h2>


        <div class="dt mw8 center w-100-ns w-100 pt3-ns ph5-l pt1 ph4 h-100 tc">

            <div class="dtc v-mid">


                <?php $the_query = new WP_Query( 'posts_per_page=1' ); ?>`

                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

                <a class="light-silver f3-ns f4 no-underline tc fw5" href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

            <div class="f5 white fw3 lh-copy">
                <?php the_excerpt(); ?>
            </div>

            <?php endwhile; wp_reset_postdata(); ?>

         <a class="mt4 v-mid f6 fw4 link dim ph4 fw6 mh2 pv3 dib white bg-nmg-header" href="/blog">See more</a>










            <div>


            </div>



        </div>

        </div>




    </div>

    <div class="fl w-100-ns w-100 bg-nmg-block-3 h-100 overflow-hidden">


        <?php echo do_shortcode('[instagram-feed id="1486794074"]'); ?>


    </div>

    </div>




</section>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXlJxmy8oAtpnU2664moZwPhjZ9l3XJWY&callback=initMap"></script>

<?php get_footer(); ?>
