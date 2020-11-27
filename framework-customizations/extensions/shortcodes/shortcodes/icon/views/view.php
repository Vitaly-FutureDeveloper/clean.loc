<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<?php if ( isset( $atts['url'] ) && $atts['url'] ): ?>
    <a href="<?php echo $atts['url']; ?>" class="<?php echo ( isset( $atts['link_class'] ) && $atts['link_class'] ) ? $atts['link_class'] : ''; ?>">
<?php endif; ?>
        <span class="fw-icon">
            <i class="<?php echo esc_attr($atts['icon']); ?> <?php echo ( isset( $atts['icon_class'] ) && $atts['icon_class'] ) ? $atts['icon_class'] : ''; ?>"></i>
            <?php if (!empty($atts['title'])): ?>
                <br/>
                <span class="list-title"><?php echo $atts['title'] ?></span>
            <?php endif; ?>
        </span>
<?php if ( isset( $atts['url'] ) && $atts['url'] ): ?>
    </a>
<?php endif; ?>