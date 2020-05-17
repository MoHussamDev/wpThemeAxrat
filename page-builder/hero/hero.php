<?php 
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');

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
       $spacing = implode(" ", array($margin_top,$margin_bottom, $padding_top,$padding_bottom ) )
?>
<section id="hero" class="<?=  $custom_class ?> <?=  $spacing ?>"style="
    --background-image:url('<?= $image  ?>');">
<div class="container">
    <div class="hero-data">

        <h1><?=$title ?></h1>
        <p><?=$paragraph ?></p>
    </div>
</div>


</section>