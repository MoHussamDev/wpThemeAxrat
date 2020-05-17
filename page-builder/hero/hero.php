<?php 
    $image = get_sub_field('image');
    $title = get_sub_field('title');
    $paragraph = get_sub_field('paragraph');
?>
<section id="hero" style="
    --background-image:url('<?= $image  ?>');">
<div class="container">
    <div class="hero-data">

        <h1><?=$title ?></h1>
        <p><?=$paragraph ?></p>
    </div>
</div>


</section>