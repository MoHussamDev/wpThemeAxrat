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


<section class=" fh_slider <?php $custom_class; ?> <?=  $spacing ?>" >

<div class="swiper-container">
          <div class="swiper-wrapper">
<?php 
  if( have_rows('slider') ):

  while(have_rows('slider')){

  the_row();
  
  $image = get_sub_field('image');
  $head_line = get_sub_field('head_line');
  $paragraph = get_sub_field('paragraph');
  // $paragraph = Strip_tags($paragraph);
 
?>
<div class="swiper-slide" style="background-image:url(<?=$image?>);">
      <div class="slideing  center">
            <div class="fh-contentBox">
                <h1><?=$head_line?></h1>
                <?= $paragraph?>
            </div>

      </div>
</div>

<?php
  }	
  ?>
  </div>
  </div>
  </section>
  <script>
var swiper = new Swiper('.swiper-container',{
autoplay: {
delay: 3000,
},
});
</script> 
<?php 
endif;
?>