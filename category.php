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

<?php if ( get_theme_mod('clean_home_category')) : ?>
    <div id="fh5co-portfolio">

        <?php if (have_posts()) : $i = 1; while (have_posts()) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'prewiew'); ?>

            <?php $i++; endwhile; ?>
            <?php the_posts_pagination(array(
                'end_size'     => 1,
                'mid_size'     => 1,
                'type'         => 'list',
            )); ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

<?php endif; ?>



<?php
get_footer();
