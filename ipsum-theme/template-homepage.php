<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(''); ?>
<section class="hero-row">
    <div class="hero-img">
        <?php echo wp_get_attachment_image( 23, array('750') );?>
    </div>
    <div class="hero-h1">
        <h1>Bo och upplev</h1>
    </div>
    <div class="button-container">
        <button id="hero-button" class="booking-btn popmake-206">Boka</button>
    </div>
</section>

<div class="row">
    <div class="one-col">
        <div class="one-col-text">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?> 
                            <?php endwhile; endif; 
                             wp_reset_postdata();?>
                <div class="button-container">
                    <button onclick="location.href='https://wendinskan.se/miun/ipsum/om-ipsum-spa-resort/'" class="booking-btn-red">Läs mer</button>
                </div>
        </div>
    </div>
</div>

<section class="row">
    <div class="boende-row">
        <h3 class="boende-h3">Våra boenden</h3>
        <div class="col-row">
            
                <div class="boende-col">
                    <a href="https://wendinskan.se/portfolio/ipsum/category/boende/hotel/">
                        <?php echo wp_get_attachment_image( 18, array('300', '300', 'true') );?>
                        <div class="boende-text">
                            <h3>Hotel</h3>
                            <p>Fyrstjärnigt hotel med unika rum inredda av lokala formgivare. Bo rustikt men bekvämt med tillgång till room service dygnet runt.</p>
                            <p class="read-more">Läs mer</p>
                        </div>
                    </a>
                </div>
           <div class="boende-col">
                    <a href="https://wendinskan.se/miun/ipsum/category/boende/cottage/">
                        <?php echo wp_get_attachment_image( 140, array('300', '300', 'true') );?>
                        <div class="boende-text">
                            <h3>Cottage</h3>
                            <p>Våra fullt utrustade stugor är inspirerade av de fäbodar som förr användes under sommaren här i trakten.</p>
                            <p class="read-more">Läs mer</p>
                        </div>
                    </a>
                </div>
            <div class="boende-col">
                    <a href="https://wendinskan.se/miun/ipsum/category/boende/camping/">
                        <?php echo wp_get_attachment_image( 25, array('300', '300', 'true') );?>
                        <div class="boende-text">
                            <h3>Camping</h3>
                            <p>Kom nära naturen med en övernattning i ett av våra bekväma tält. Utrustning för enklare matlagning och bäddlinne ingår.</p>
                            <p class="read-more">Läs mer</p>
                        </div>
                    </a>
                </div>
        </div>
    </div>
</section>

<section class="row">
    <div class="col-row">
        <div class="two-col">
            <h3>En aktiv vila</h3>
            <p>Återhämtning och vila innebär inte att ligga stilla. Hos oss fyller du på dina energinivåer med hjälp av spännande aktiviteter och naturupplevelser i precis lagom takt.</p>
            <div class="button-container">
                <button onclick="location.href='https://wendinskan.se/miun/ipsum/category/upplevelser/'" class="booking-btn-red">Läs mer</button>
            </div>
        </div>
        <div class="two-col right-aligned-img">
            <?php echo wp_get_attachment_image( 92, array('450', '675', true) );?>
        </div>
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
    <div class="restaurant-row">
        <div class="transparent-background">
            <h3>Mat med extra allt</h3>
            <p>Välkommen till lunch, middag eller afternoon tea i vår restaurang. Våra kockar tillagar mat med de råvaror som årstiden bjuder på.</p>
            <div class="button-container">
                <button onclick="location.href='https://wendinskan.se/miun/ipsum/category/mat-dryck/'" class="booking-btn-red">Meny</button>
            </div>
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