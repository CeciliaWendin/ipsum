<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(''); ?>

<section class="row">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <h1><?= get_the_title(); ?></h1>
            
                    <?php
                    //display title if team category
                    if (in_category('team')) { ?> 
                    <p class="team-desc"> <? echo get_the_excerpt();  }?>  </p>
                 
            <div class="one-col">
                <?= the_post_thumbnail(array('750', '500')); ?>
            </div>
            <div class="one-col">
                
                    
                <?php the_content(); ?>
                <?php  
                endwhile; endif;
                wp_reset_postdata();?>
            
                <div class="page-wrap">
                    <?php
                    //display bookingform in hotel categories
                    if (in_category('cottage')) {
                    echo do_shortcode('[contact-form-7 id="35" title="Booking"]');
                    } elseif (in_category('hotel')) {
                    echo do_shortcode('[contact-form-7 id="35" title="Booking"]');
                    } elseif (in_category('camping')) {
                    echo do_shortcode('[contact-form-7 id="35" title="Booking"]');
                    } 
                  
                    //display previous and next post in news category
                    if (in_category('aktuellt')) { ?>
                    <div class="prev">
                        <p>Föregående inlägg: <br></p>
                        <?php
                        echo previous_post_link('%link', '%title', 'TRUE'); ?>
                    </div>
                    <div class="next">
                        <p>Nästa inlägg: <br></p>
                        <?php
                        echo next_post_link('%link', '%title', 'TRUE'); ?>
                    </div>
                    <?php } ?>
                    
                     <?php 
                    //display contact info in team category
                    if (in_category('team')) { ?>
                    <p>Telefon: 
                    <a href="#">
                    <?php
                        echo do_shortcode("[acf field='phone']");?> </p></a>
                    <p>E-mail:
                    <a href="#">
                    <?php
                        echo do_shortcode("[acf field='email']"); ?> </p></a>
                   <?php } ?>
                </div>
                
            </div>
        
 
</section>





    <div class="newsletter-row">
            <h2>Nyhetsbrev</h2>
            <div class="post-container">
                <?php echo do_shortcode("[contact-form-7 id='53' title='Nyhetsbrev']"); ?>
            </div>
    </div>

<?php get_footer(''); ?>