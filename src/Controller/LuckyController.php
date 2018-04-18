<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-17
 * Time: 15:47
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);
        return new Response('<html><body>Lucky number: ' . $number . '</body></html>');
    }
}