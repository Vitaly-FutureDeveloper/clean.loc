<?php
if (has_post_thumbnail()){
    $img_url = get_the_post_thumbnail_url();
}else{
    $img_url = 'https://lh3.googleusercontent.com/proxy/vpzLQRis4oXmLHkgMs6aPQ6prlXRnq5BLrqkIFs3et2gz5eeFuNLKMxmFYJemhhQMxMWsb1f5fk4oA-whRqcwf3DbaMP2bhW2nTSq7eljp4OjW0FeJAi_-oPAjKnVQ0XDlTSX75hEkXzOIlcKHTmwmL4Rt2ZwHkBA3ik5j8ZdU0OM8RAZG_Y4cpRLw';
}

?>
<img src="<?php echo $img_url; ?>" alt="">
<div class="fh5co-portfolio-description">
    <h2><?php the_title(); ?></h2>
    IMAGE
    <p><?php the_content(''); ?></p>
</div>