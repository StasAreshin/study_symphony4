<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018-04-19
 * Time: 16:34
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
{
    /**
     * @Route(
     *     "articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *          "year": "\d+"
     *      }
     * )
     */
    public function show($_locale, $year, $slug, $_format)
    {
        return new Response("<body><h1>Article</h1><ul>"
            . "<li>_locale: " . $_locale . "</li>"
            . "<li>year: " . $year . "</li>"
            . "<li>slug: " . $slug . "</li>"
            . "<li>_format: " . $_format . "</li></ul></body>"
        );
    }
}