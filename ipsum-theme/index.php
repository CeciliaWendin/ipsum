<?php get_header(''); ?>

<section class=row>
    <div class="one-col">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <p> <?php the_content(); ?> </p> 
                    <?php endwhile; endif; ?>
    </div>
</section>
<?php get_footer(''); ?>



