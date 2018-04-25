<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-25
 * Time: 17:07
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class GenerateURL extends Controller
{
    /**
     * @Route("/generateURL", name="generate_url")
     *
     * @param $placeholder
     */
    public function show() {
        // ...

        // /blog/my-blog-post
        $url = $this->generateUrl(
            'blog_show',
            array('placeholder' => 'my-blog-post')
        );

        return $this->redirect($url, 308);
    }
}