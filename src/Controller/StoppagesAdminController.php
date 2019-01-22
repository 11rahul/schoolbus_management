<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 2019-01-22
 * Time: 18:34
 */

namespace App\Controller;


use App\Entity\Stoppages;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StoppagesAdminController extends AbstractController
{
    /**
     * @Route("/admin/stoppages/new")
     */
    public function new(EntityManagerInterface $em)
    {
        $stoppage = new Stoppages();
        $stoppage->setName("Venus More")->setCreated(new \DateTime('now'))->setUpdated(new \DateTime('now'));

        $em->persist($stoppage);
        $em->flush();

        return new Response(sprintf(
            'Hiya! New Stoppage id: #%d for %s',
            $stoppage->getId(),
            $stoppage->getName()
        ));
    }

}