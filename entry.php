

<article id="post-<?php the_ID(); ?>" <?php post_class( 'pv4' ); ?>>

    <div class="cf">

        <?php if ( has_post_thumbnail() ) { ?>

        <div class="w-40-ns fl">

            <div class="pa3">

                <?php the_post_thumbnail(); ?>

            </div>


        </div>


        <div class="w-60-ns fl">

            <?php  } else { ?>

            <div class="w-100-ns fl">

                <? } ?>


                <div class="pa3">

                    <?php if ( is_singular() ) { echo '<h1 class="entry-title avenir fw3 f2 mt0 mb2">'; } else { echo '<h2 class="entry-title avenir fw3 f2 mt0 mb2">'; } ?><a class="nmg-header no-underline" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> 

                    <div class="fw5 f4"><?php the_date(); ?></div>

                    <div class="f4 lh-copy">

                        <?php the_excerpt(); ?>

                    </div>

                </div>


            </div>





        </div>

        </article>
    
    <hr style="opacity:0.3;"/>
    