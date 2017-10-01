<?php get_header(); ?>

<section style="<?php if ( has_post_thumbnail() ) { ?>background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);" 
         
<?php  } else { ?>

background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/nmg-blog.jpg);"   
                                                                       
<? } ?>

id="hero-section" class="dt rem-30 vh-80-l w-100">


    <div class="dtc v-mid pa4 tc">

      <div class="mw7 center ph5">

        <h1 class="nmg-heading white f-subheadline-ns f1 fw3 mv1"><?php the_title(); ?></h1>

      </div>



    </div>


  </section>
                                                                 


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                

<section id="content" role="main" class="ph4 mt6 mb3 f4 lh-copy nested-img mw7 center nested-header">
    
    
    <?php the_content(); ?>
    
</section>

<?php endwhile; endif; ?>
                                                                                                
 <div class="mw7 mv4 pv4 center ph4">
                                
            <a class="nmg-header f4 gray no-underline" href="/blog">Back to news & blog</a>

                                
</div>



<?php get_footer(); ?>