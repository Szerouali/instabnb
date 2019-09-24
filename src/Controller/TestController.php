<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")
     */
    public function index()
    {
        $languages = [['language'=>'symfony', 'version' => '4.3.4'],['language'=>'php','version'=>'7.2']];

        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
            'languages'=>$languages,
            'date'=> new \DateTime()
        ]);
    }
}
