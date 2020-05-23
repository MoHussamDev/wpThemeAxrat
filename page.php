<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fiveh
 */

get_header();

?>
 
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		
				if(!empty(get_field('flexible_content'))){
			
				if(have_rows('flexible_content') ):			
				while(have_rows('flexible_content')):
					the_row();
				switch(get_row_layout()){
					case 'slider':
				    include get_template_directory( ).'/page-builder/slider/slider.php';
					break;
					case 'primary_content':
					include get_template_directory( ).'/page-builder/primary_content/primary_content.php';		
					break;
					case 'cards':
					include get_template_directory( ).'/page-builder/cards/cards.php';		
					break;
					case 'services':
					include get_template_directory( ).'/page-builder/services/services.php';		
					break;
					case 'headline': 
					include get_template_directory( ).'/page-builder/headline/headline.php';
					break;
					case 'hero': 
					include get_template_directory( ).'/page-builder/hero/hero.php';
					break;
					case 'logos': 
					include get_template_directory( ).'/page-builder/logos/logos.php';
					break;
					case 'projects': 
					include get_template_directory( ).'/page-builder/portfolio/portfolio.php';
					break;
					default:
					echo "No Content Here";

					};
				endwhile;
				endif;			
			
		}
		?>
		
	



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
