<?php get_header(); ?>

<section id="page-template" >
    <div class="container">

<?php 

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        // Display post content
    endwhile; 
endif;
 
?>


<?php 
the_content();
?>
    </div>

</section >

<?php get_footer(); ?>


