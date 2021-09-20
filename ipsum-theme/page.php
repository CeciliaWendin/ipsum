<?php get_header(''); ?>

<div class="row">
    <div class="one-col">
        <h1><?= get_the_title(); ?></h1>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="header-img"><?= the_post_thumbnail(array('700', '470')); ?> </div>
            <?php endwhile; endif; ?>
    </div>
</div>

<section class="row">
    <div class="one-col">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <p> <?php the_content(); ?> </p> 
        <?php endwhile; endif; ?>
    </div>
</section>

<section class="row news">
    <h3 class="boende-h3">Aktuellt</h3>
    <div class="col-row">
        <?php
            $query2 = new WP_Query( array( 'category_name' => 'aktuellt', 'posts_per_page' => 3 ) );

            while ( $query2->have_posts() ) {
            $query2->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <div class="news-col">
                        <?= the_post_thumbnail(array('250', '250')); ?>
                    <div class="news-text">
                        <h3><?= get_the_title(); ?></h3><br>
                        <p><?= get_the_date(); ?></p>
                        <p><?= get_the_excerpt(); ?></p>
                    </div>
                </div>
            </a>
                    <?php
                    }
                    
                     
                    // Restore original Post Data
                    wp_reset_postdata();?>
    </div>
 
</section>

<section class="row">
    <div class="newsletter-row">
            <h2>Nyhetsbrev</h2>
            <div class="post-container">
                <?php echo do_shortcode("[contact-form-7 id='53' title='Nyhetsbrev']"); ?>
            </div>
    </div>
</section>

<?php get_footer(''); ?>