<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-18
 * Time: 13:36
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        return new Response("<body>blog_list</body>");
    }

    /**
     * Metches /blog/*
     *
     * @Route("/blog/{placeholder}", name="blog_show")
     * @param $placeholder
     * @return Response
     */
    public function show($placeholder)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        return new Response('<body>placeholder parameter: ' . $placeholder . '</body>');
    }
}