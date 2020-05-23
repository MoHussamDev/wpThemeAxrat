<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fiveh
 */

get_header();
?>

	<div id="primary" class="content-area">
	<main id="main" class="site-main">
     
    

    <section id="allProjects">
        <div class="container">
            <div class="row">
            <?php if ( have_posts() ) : ?>
                <?php
			/* Start the Loop */
			while ( have_posts() ) :
                the_post();
                $id = get_the_ID() ;
                $category = get_service_cat($id);
            
?>
                <div class="col-md-4">
                <a href="<?= get_post_permalink($id)?>">

                    <img src="<?= get_the_post_thumbnail_url($id)?>"/>
                    <h3><?php the_title() ?></h3>
                    <?= $category ?>
                </a>   
                </div>
                    <?php

endwhile;


endif;
?>
    </div>
    
</div>
</section>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
