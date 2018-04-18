<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-17
 * Time: 15:47
 */

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{
    /**
     * @Route("lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }
}