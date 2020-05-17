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


<section id="headline" class="<?php $custom_class ?> <?=$spacing?>">
 <div class="container">
    <div class="row ">
        <?php 
        $title = get_sub_field('tittle');
        $type = get_sub_field('tittle_type');
        $sub = get_sub_field('sub_tittle');
        if($type === 'h2'){
            
         $title = "<h2>". $title ."</h2>";
        }else{
            $title = "<h3>". $title ."</h3>";
        }
        ?>
        <div class="col-md-12">
            <?=$title?>
            <P>
            <?=$sub ?> 
            </P>
        </div>
  
</div>
        

</div>
</div>
</section>