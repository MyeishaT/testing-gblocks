<?php
/**
 * Template Name: Homepage
 *
 * @package testinggblocks
 */
?>

<!-- Header -->
<?php get_header(); ?>

<div class="homepage">

    <?php

        while ( have_posts() ) :
            the_post();
           
            get_template_part( 'template-parts/content', 'page' );
           
                       
        endwhile; // End of the loop.
    ?>
   
</div>


<!-- Footer -->
<?php get_footer(); ?>