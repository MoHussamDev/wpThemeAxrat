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


<section id="logos" class=" <?php $custom_class; ?> <?=  $spacing ?>" >
<div class="container">

    <div class="swiper-container swiper1">
        <div class="swiper-wrapper">
            <?php 
  if( have_rows('slide') ):

  while(have_rows('slide')){

  the_row();
  
  $image = get_sub_field('image');

  // $paragraph = Strip_tags($paragraph);
 
?>
<div class="swiper-slide" >
<img src="<?=$image?>" alt="">

</div>

<?php
  }	
  ?>
            </div>

</div>
  </div>
  </section>
  <script>
var swiper = new Swiper('.swiper1',{
autoplay: {
delay: 3000,
},
slidesPerView: 5,
      spaceBetween: 30,
});
</script> 
<?php 
endif;
?>