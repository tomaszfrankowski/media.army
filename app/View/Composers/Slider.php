<?php
namespace App\View\Composers;
use Roots\Acorn\View\Composer;

class Slider extends Composer{
    public function __construct(){
        wp_enqueue_script( 'swiper', get_template_directory_uri() . '/public/js/swiper.js');
    }
    protected static $views = [
        'blocks.slider',
    ];
}
