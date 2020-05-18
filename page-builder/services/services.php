<?php 

if(!empty(get_sub_field('custom_class'))){

  $custom_class = implode(" ", get_sub_field('custom_class'));
}else{
  $custom_class = '';
};

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
 



?>

<section id="serviceCards" class="<?php $custom_class ?> <?=  $spacing  ?>">
 <div class="container">
    <div class="row">
        <?php 
        $cols = get_sub_field('columns');

        while(have_rows('card')){
            the_row();
            $image = get_sub_field('image');
            $hover = get_sub_field('image');
            $title = get_sub_field('title');
            $para = get_sub_field('paragraph');
            $type = get_sub_field('type');
            if(get_sub_field('hover_image')){

                $hover = get_sub_field('hover_image');
            }
            
            if($type){
            $link = get_sub_field('link');
            }
 
            ?>  

        <div class="col-md-<?= $cols['value']?>">
        <?php
        if(!$type){
    ?> 
            <div class="card">
                <div class="image"><div style="--icon:url('<?= $image['url']?>'); --icon-hover:url('<?= $hover['url']  ?>');" alt=""></div></div>
                <div class="content">
                    <div class="title"><h3><?= $title ?></h3> </div>
                    <div class="paragra"><p><?=  $para ?></p></div>
                </div>
            </div>
            <?php }else{?>

                <a href="<?= $link ?>" class="card">
                <div class="image"><div style="--icon:url('<?= $image['url']  ?>'); --icon-hover:url('<?= $hover['url']  ?>');" alt=""></div></div>
                <div class="content">
                    <div class="title"><h3><?= $title ?></h3> </div>
                    <div class="paragra"><p><?=  $para ?></p></div>
                </div>
            </a>

            <?php }?>
</div>
        

        <?php
        }

    ?>
</div>
</div>
</section>