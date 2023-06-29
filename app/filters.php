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