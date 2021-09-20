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
 <?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<section>
    
        <?php
        
        // The Loop
        while ( have_posts() ) : the_post(); ?>
        <div class="post-content">
            <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <p class="date"><?php the_time('F jS, Y') ?></p>
             
            <div class="one-col">
                <div class="img">
                    <?= the_post_thumbnail(array('300', '300')); ?>
                </div>
                    <?php $content = get_the_content();
                    echo substr($content, 0, 300); ?>
                     <p><a href="<?php the_permalink() ?>">Läs mer</a></p>
            </div>
        </div>
        <?php endwhile; 
        else: ?>
        <p>Sorry, no posts matched your criteria.</p>
  
</section>
 
<?php endif; ?>

<?php get_footer(''); ?>