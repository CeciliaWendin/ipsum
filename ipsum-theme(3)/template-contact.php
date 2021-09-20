<?php
/*
Template Name: Contactpage
*/
?>
<?php get_header(''); ?>

<div class="row">
<h1><?= get_the_title(); ?></h1>
    <div class="one-col">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <p> <?php the_content(); ?> </p> 
                    <?php endwhile; endif; ?>
    </div>
</div>

<div class="row">
    <div class="contact-row">
        <div class="contact-form">
        <h2>Kontaktformulär</h2>
            <?php echo do_shortcode('[contact-form-7 id="90" title="Contact"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(''); ?>