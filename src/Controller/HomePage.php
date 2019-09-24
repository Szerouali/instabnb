<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends AbstractController
{
    /**
     * @Route(
     *     "/",
     *     name="home"
     * )
     */
    public function index()

    {
        $annonces=[["id"=>1,"title"=>"blabla","content"=>"off","price"=>10,"createDate"=>new\DateTime()],
            ["id"=>2,"title"=>"blabla","content"=>"on","price"=>8,"createDate"=>new\DateTime()]];
        return $this->render('style/home.html.twig', [
            'controller_name' => 'HomePage',
            'annonces'=>$annonces
        ]);
    }
}
