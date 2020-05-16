
<?php
if(!empty( get_sub_field('custom_class'))){

    $class = get_sub_field('custom_class');
    $class = join(' ' , $class);  
}

?> 
<section id="headline" >
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