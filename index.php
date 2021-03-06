<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Clean
 */

get_header();
?>

<?php if (have_posts()) : $i = 1; while (have_posts()) : the_post(); ?>

    <?php
    if (has_post_thumbnail()){
        $img_url = get_the_post_thumbnail_url();
    }else{
        $img_url = 'https://lh3.googleusercontent.com/proxy/vpzLQRis4oXmLHkgMs6aPQ6prlXRnq5BLrqkIFs3et2gz5eeFuNLKMxmFYJemhhQMxMWsb1f5fk4oA-whRqcwf3DbaMP2bhW2nTSq7eljp4OjW0FeJAi_-oPAjKnVQ0XDlTSX75hEkXzOIlcKHTmwmL4Rt2ZwHkBA3ik5j8ZdU0OM8RAZG_Y4cpRLw';
    }
    ?>

    <div class="fh5co-portfolio-item <?php if ($i % 2 == 0) echo 'fh5co-img-right' ?>">
        <div class="fh5co-portfolio-figure animate-box" style="background-image: url(<?php echo $img_url; ?>);"></div>
        <div class="fh5co-portfolio-description">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(''); ?></p>
            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e('Read the casetudy', 'clean') ?></a></p>
        </div>
    </div>

    <?php $i++; endwhile; ?>
<?php else: ?>
<?php endif; ?>

<?php
get_footer();
