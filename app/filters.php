<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter( 'block_categories_all' , function( $categories ) {
	$categories[] = array(
		'slug'  => 'ototak-gutenberg-blocks',
		'title' => 'OTOTAK'
	);
	return $categories;
} );


add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if(isset($args->item_class)) {
        $atts['class'] = $args->item_class;
    }
    return $atts;
}, 1, 3);

add_filter( 'image_size_names_choose', function() {
	return [
		'thumbnail'    => __( 'Thumbnail', 'text-domain' ),
		'medium'       => __( 'Medium', 'text-domain' ),
		'medium_large' => __( 'Medium Large', 'text-domain' ),
        'hero' => __( 'Hero (1920:1080)', 'text-domain' ),
        'services' => __( 'Services (655:525)', 'text-domain' ),
		'large'        => __( 'Large', 'text-domain' ),
		'full'         => __( 'Full Size', 'text-domain' ),
	];
} );