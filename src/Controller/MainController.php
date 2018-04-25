<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-19
 * Time: 17:38
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class MainController
{
    public function contact() {
        return new Response("<body><h1>Contact</h1></body>");
    }
}