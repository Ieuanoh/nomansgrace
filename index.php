<?php get_header(); ?>

<section style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/nmg-blog.jpg);" id="hero-section" class="dt rem-30 vh-80-l w-100">


    <div class="dtc v-mid pa4 tc">

      <div class="mw7 center ph5">

        <h1 class="nmg-heading white f-subheadline-ns f1 fw3 mv1">Latest news from the kitchen</h1>

      </div>



    </div>


  </section>

<section id="content" role="main" class="mv5 pv3 mw8 ph2 center">
    
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
<?php get_template_part( 'entry' ); ?>
    
<?php endwhile; endif; ?>
    
<div class="tc pv4">    
<div class="f5 gray dib ph2"><?php next_posts_link( 'Older posts' ); ?></div>
<div class="f5 gray dib ph2"><?php previous_posts_link( 'Newer posts' ); ?></div>
    </div>
        
</section>





<?php echo do_shortcode('[instagram-feed id="1486794074"]'); ?>



<?php get_footer(); ?>