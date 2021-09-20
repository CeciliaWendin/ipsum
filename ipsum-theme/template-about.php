<?php
/*
Template Name: About
*/
?>

<?php get_header(''); ?>

<section class="row">
    <div class="one-col">
        <div class="one-col-text">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <p> <?php the_content(); ?> </p> 
                            <?php endwhile; endif; 
                             wp_reset_postdata();?>
        </div>
    </div>
</section>

<section class="row" id='teams'>
      <h3>Det är vi som är Ipsum Spa & Resort</h3>
    <div class="team-row">
      
   <?php
            $query2 = new WP_Query( array( 'category_name' => 'team' ) );

            while ( $query2->have_posts() ) {
            $query2->the_post(); ?>
                <div class="news-col">
                    <a href="<?php the_permalink(); ?>">
                        <?= the_post_thumbnail(array('200', '200')); ?>
                    <div class="news-text">
                        <h3><?= get_the_title(); ?></h3>
                    </a><br>
                        <p class="team-desc"><?= get_the_excerpt(); ?></p>
                        <p>Telefon: <a href="#"> <?php echo do_shortcode("[acf field='phone']"); ?></a></p>
                        <p>Email: <a href="#"> <?php echo do_shortcode("[acf field='email']"); ?></a></p>
                        
                    </div>
                </div>
           
                    <?php
                    }
                    
                     
                    // Restore original Post Data
                    wp_reset_postdata();?>
            
    </div>
</section>
   <div class="newsletter-row">
            <h2>Nyhetsbrev</h2>
            <div class="post-container">
                <?php echo do_shortcode("[contact-form-7 id='53' title='Nyhetsbrev']"); ?>
            </div>
    </div>



<?php get_footer(''); ?>