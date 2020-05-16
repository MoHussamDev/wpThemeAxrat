
<?php
if(!empty( get_sub_field('custom_class'))){

    $class = get_sub_field('custom_class');
    $class = join(' ' , $class);  
}

?> 
<section id="cards" >
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