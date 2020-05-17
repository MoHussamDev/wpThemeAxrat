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
 



;?>


<section id="primaryContent" class="<?= $custom_class ?> <?= $spacing ?>">
 <div class="container">
    <div class="row ">

        <?php 
    if(have_rows('columns')){
        while(have_rows('columns')){
            the_row();
            $contentType = get_sub_field('content_type');
            $width = get_sub_field('width');
            $custom_class = get_sub_field('custom_class');
            $wysiwyg = get_sub_field('wysiwyg');
            $image = get_sub_field('image');
            
            ?>
                <div id="inner-wrapper"class="col-md-<?=$width?> ">
                <?php
                if($contentType === "wysiwyg"){   
               ?>
<div class="primary-content--wysiwyg">
    <?= $wysiwyg; ?>
</div>
                     <?php
                }else{
                  ?>
                  <img src="<?=$image['url']?>" alt="">
                  <?php
                }
                
                ?>
                </div>
              


            <?php   
        }
    }    
    ?>
</div>
</div>
</section>