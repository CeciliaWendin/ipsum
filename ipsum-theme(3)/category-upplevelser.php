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
        <div class="upplevelse-container">
            <div class="one-col">
                <?= the_post_thumbnail(array('450', '300')); ?>
            </div>
        
            <div class="one-col" id="upplevelse-text">
                <h3><?= the_title(); ?></h3>
                <p><?php $content = get_the_content();
                echo substr($content, 0, 150); ?></p>
          
                <p><a href="<?php the_permalink() ?>">Läs mer</a></p>
           
            </div>
        </div>
<?php endwhile; ?>
</section>   


<?php get_footer(''); ?>