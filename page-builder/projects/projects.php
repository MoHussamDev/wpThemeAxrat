<?php  
if(!empty(get_sub_field('custom_class'))){

  $custom_class = implode(" ", get_sub_field('custom_class'));
}else{
  $custom_class = '';
}

$margin_top ='xr-margin-top_';
$margin_bottom = 'xr-margin-bottom_';
$padding_top ='xr-padding-top_';
$padding_bottom = 'xr-padding-bottom_';

  
if(have_rows('spacing')){
    while(have_rows('spacing')){
      the_row();
      $margin_top =  $margin_top.get_sub_field('margin_top');
      $margin_bottom = $margin_bottom.get_sub_field('margin_bottom');
      $padding_top = $padding_top.get_sub_field('padding_top');
      $padding_bottom = $padding_bottom.get_sub_field('padding_bottom');

      };
      
  };
 $spacing = implode(" ", array($margin_top,$margin_bottom, $padding_top,$padding_bottom ) );
 global $wp_query;

$the_query = new WP_Query( array(
    'posts_per_page'    => 6,
    'post_type'         => 'projects',
) );

$cols = get_sub_field('columns');
?>


<section id="projects" class=" <?php $custom_class; ?> <?=  $spacing ?>" >
<div class="container">
    <div class="row">

        <?php

while ( $the_query->have_posts() ) : $the_query->the_post();


?>
<a href="<?=the_permalink()?>"class='projectCard col-md-<?= $cols['value']?>'>
<div class="card-block">
<img src="<?=the_post_thumbnail_url()?>" alt="">
</div>
<h5><?php the_title(); ?></h5>
</a>

<?php endwhile;  wp_reset_postdata();?>


</div>

</div>
</section>
