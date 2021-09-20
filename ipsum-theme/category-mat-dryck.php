<?php get_header(''); ?>

    <h1 class="archive-title">
    				<?php
    				printf( single_cat_title( '', false ) );
    				?>
    </h1>

    <div class="one-col">
        <?php
        	//term description.
        		$term_description = term_description();
        		if ( ! empty( $term_description ) ) :
        		printf( '<div class="taxonomy-description">%s</div>', $term_description );
        		endif;
        ?>
    </div>

 

<section>

        <?php
        while ( have_posts() ) : the_post(); ?>
        <div class="one-col">
                <?= the_post_thumbnail(array('500', '400')); ?>
        </div>
        <div class="one-col" id="food-col">
                <p><?= get_the_content(); ?></p>
        </div>
<?php endwhile; ?>
    <div class="one-col">
        <div class="button-container">
            <button onclick="#'" class="table-booking-btn-red">Kontakta oss för bokning</button>
        </div>
    </div>
</section>   


<?php get_footer(''); ?>