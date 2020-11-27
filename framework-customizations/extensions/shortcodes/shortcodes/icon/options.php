<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'icon'       => array(
		'type' => 'icon',
		'label' => __( 'Icon', 'fw' )
	),
	'title'    => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Icon title', 'fw' ),
	),

    /* CUSTOM */
    'icon_class' => array(
        'label' => __('Класс иконки', 'clean'),
        'desc'  => __('Если есть стиль иконки, можно задать ей класс', 'clean'),
        'type'  => 'text',
    ),

    'url' => array(
        'label' => __('URL', 'clean'),
        'desc'  => __('Insert URL', 'clean'),
        'type'  => 'text',
    ),
    'link_class' => array(
        'label' => __('Класс ссылки', 'clean'),
        'desc'  => __('Если есть ссылка, можно задать ей класс', 'clean'),
        'type'  => 'text',
    ),
);