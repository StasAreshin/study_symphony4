<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-19
 * Time: 17:38
 */

namespace App\Controller;


class MainController
{
    public function contact() {
        return new Response("<body><h1>Contact</h1>"
//            . "<ul><li>_locale: " . $app.locale . "</li>"
//            . "<li>year: " . $year . "</li>"
//            . "<li>slug: " . $slug . "</li>"
//            . "<li>_format: " . $_format . "</li></ul></body>"
        );
    }
}