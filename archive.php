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
                $title = the_title();
                $thumb = the_post_thumbnail();
                $id = get_the_ID() ;
                $category = get_service_cat($id);
                var_dump(  $category);
             
?>
                <div class="col-md-4">
                    <h1><?=$title ?></h1>
                    <img src="<?=$thumb?>" alt="">
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
