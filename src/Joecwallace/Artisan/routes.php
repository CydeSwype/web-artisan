<?php

use Joecwallace\Artisan\ArtisanRunner as Runner;
use Joecwallace\Artisan\HtmlOutput;

Route::get(Config::get('artisan::handles').'{uri}', function($uri = '')
{
    $args = array();

    if ( ! empty($uri)) {
        $args = explode('+', trim($uri, '/'));
    } else {
        // no specific command passed, so show interactive help/list instead
        include 'ArtisanMenu.php';
        exit;
    }

    Runner::run($args);
})->where('uri', '^($|\/.*)');
