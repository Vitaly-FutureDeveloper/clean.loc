<?php
if (has_post_thumbnail()){
   the_post_thumbnail();
}
?>
<img src="<?php echo $img_url; ?>" alt="">
<div class="fh5co-portfolio-description">
    <h2><?php the_title(); ?></h2>
    NOW Content
    <p><?php the_content(''); ?></p>
</div>