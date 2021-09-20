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
          //the loop
            while ( have_posts() ) : the_post(); ?>
            
                <div class="col-row">
                    
                    <div class="boende-col">
                        <a href="<?php the_permalink() ?>">
                        <?= the_post_thumbnail(array('300', '300', 'true')); ?>
                        <div class="boende-text">
                            <h3><?= the_title(); ?></h3>
                            <p><?php $content = get_the_content();
                            //max 150 characters
                            echo substr($content, 0, 150); ?></p>
                                <div class="button-container-small">
                                    <button class="booking-btn-small popmake-206">Boka</button>
                                </div>
                        </div>
                        </a>
                    </div>
                  
                </div>
        <?php endwhile; ?>
</section>   


<?php get_footer(''); ?>