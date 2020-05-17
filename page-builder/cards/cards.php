<?php  
if(!empty(get_sub_field('custom_class'))){

  $custom_class = implode(" ", get_sub_field('custom_class'));
}else{
  $custom_class = '';
}

;?>
<section id="cards" class="<?php $custom_class ?>">
 <div class="container">
    <div class="row ">
        <?php 
        $cols = get_sub_field('columns');

        while(have_rows('card')){
            the_row();
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            ?>  
        
        <div class="col-md-<?= $cols['value']?>">
            <div class="card">
                <div class="image"><img src="<?=$image['url']?>" alt=""></div>
                <div class="title"><h3><?= $title ?></h3> </div>
            </div>
</div>
        

        <?php
        }

    ?>
</div>
</div>
</section>