
<?php
if(!empty( get_sub_field('custom_class'))){

    $class = get_sub_field('custom_class');
    $class = join(' ' , $class);  
}

?> 
<section id="service_cards" class="<?= $class ?>">
 <div class="container">
    <div class="row ">
dasdasdasd
        <?php 
    if(have_rows('columns')){
        while(have_rows('columns')){
            the_row();
            $image = get_sub_field('image');
            $title = get_sub_field('title')
            
            ?>
              
              


            <?php   
        }
    }    
    ?>
</div>
</div>
</section>