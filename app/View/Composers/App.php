<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use Roots\Acorn\View\Composers\Concerns\AcfFields;


class App extends Composer{
    use AcfFields;
    protected static $views = [
        '*',
    ];

    public function with(){
        return [
            'siteName' => $this->siteName(),
            'fields' => collect($this->fields())->toArray()
        ];
    }

    public function siteName(){
        return get_bloginfo('name', 'display');
    }
}
