<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 2018-12-20
 * Time: 15:08
 */

namespace App\Controller;


use App\Service\CacheHelper;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="admin_home")
     */
    public function index()
    {
        return new Response('hey this is the homepage controller');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function news($slug, CacheHelper $cache)
    {
        $data = <<<EOF
This is going to be data for testing cache. Some new data is added to check caching. 
EOF;

        $data = $cache->viacache($data);

        return $this->render('homepage/news.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'data' => $data,
        ]);
    }

}