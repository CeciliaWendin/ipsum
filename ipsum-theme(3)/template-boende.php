<?php
/*
Template Name: Boende
*/
?>

<?php get_header(''); ?>
<h1><?= get_the_title(); ?></h1>

<div class="row">
    <div class="one-col">
 
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         
            <p> <?php the_content(); ?> </p> 
                        <?php endwhile; endif; 
                         wp_reset_postdata();?>
    </div>
</div>

<section class="row">
    <div class="boende-row">
        <h3 class="boende-h3">Våra boenden</h3>
        <div class="col-row">
            
                <div class="boende-col">
                    <a href="https://wendinskan.se/miun/ipsum/category/boende/hotel/">
                        <?php echo wp_get_attachment_image( 18, array('300', '300', 'true') );?>
                        <div class="boende-text">
                            <h3>Hotel</h3>
                            <p>Fyrstjärnigt hotel med unika rum inredda av lokala formgivare. Bo rustikt men bekvämt med tillgång till room service dygnet runt.</p>
                            <a class="read-more" href="https://wendinskan.se/miun/ipsum/category/boende/hotel/">Läs mer</a>
                        </div>
                    </a>
                </div>
           <div class="boende-col">
                    <a href="https://wendinskan.se/miun/ipsum/category/boende/cottage/">
                        <?php echo wp_get_attachment_image( 140, array('300', '300', 'true') );?>
                        <div class="boende-text">
                            <h3>Cottage</h3>
                            <p>Våra fullt utrustade stugor är inspirerade av de fäbodar som förr användes under sommaren här i trakten.</p>
                            <a class="read-more" href="https://wendinskan.se/miun/ipsum/category/boende/cottage/">Läs mer</a>
                        </div>
                    </a>
                </div>
            <div class="boende-col">
                    <a href="https://wendinskan.se/miun/ipsum/category/boende/camping/">
                        <?php echo wp_get_attachment_image( 25, array('300', '300', 'true') );?>
                        <div class="boende-text">
                            <h3>Camping</h3>
                            <p>Kom nära naturen med en övernattning i ett av våra bekväma tält. Utrustning för enklare matlagning och bäddlinne ingår.</p>
                            <a class="read-more" href="https://wendinskan.se/miun/ipsum/category/boende/camping/">Läs mer</a>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</section>

<section class="row">
    <h3>Samtliga boenden</h3>
    <div class="one-col">

        <?php 
            $query2 = new WP_Query( array( 'category_name' => 'cottage, hotel, camping' ) );
          
            while ( $query2->have_posts() ) {
            $query2->the_post(); ?>
            <div class="boende-col-small">
                <a href="<?php the_permalink(); ?>">
                        <?= the_post_thumbnail(array('225', '225')); ?>
                    <div class="boende-text-small">
                        <h3><?= get_the_title(); ?></h3><br>
                    </div>
                </a>
            </div>
           
                    <?php
                    }
                    
                     
                    // Restore original Post Data
                    wp_reset_postdata(); ?>
    </div>
 
</section>
       
    <div class="newsletter-row">
            <h2>Nyhetsbrev</h2>
            <div class="post-container">
                <?php echo do_shortcode("[contact-form-7 id='53' title='Nyhetsbrev']"); ?>
            </div>
    </div>



<?php get_footer(''); ?>