<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fiveh
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <div class="container">

        <?php
		while ( have_posts() ) :
            the_post();
            while(have_rows('project_data')){
                the_row();
                $image = get_sub_field('images');    
                $desc = get_sub_field('project_description');    

            ?>
            <h1><?= get_the_title()?></h1>
            <p><?= $desc ?></p>
            <div id="lightgallery" class="row">

             <?php 
              foreach($image as $im){
               ?>     

            <a href="<?=$im['url']?> " class="col-md-3">
                <img src="<?=$im['url']?>" />
            </a>

                    
            <?php
        
              }  
             
             ?>   
            <?php
            }

		endwhile; // End of the loop.
		?>
</div>
</div>
<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery')); 
</script>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
