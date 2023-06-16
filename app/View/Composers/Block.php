<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Block extends Composer{
    protected static $views = [
        'components.block',
    ];

    public function __construct(){
    }

    public function with(){
        return [
            'containerBackgroundImage' => get_field('background_image') && is_array(wp_get_attachment_image_src( get_field('background_image')['ID'], 'full' )) ? wp_get_attachment_image_src( get_field('background_image')['ID'], 'full' )[0] : null,
            'containerBackgroundColor' => get_field('background')['color'],
        ];
    }
}
