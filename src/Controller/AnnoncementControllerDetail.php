<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementControllerDetail extends AbstractController
{
    /**
     * @Route(
     *     "/annonce/{id}/detail",
     *     name="detail",
     *     defaults={"id"=1},
     *     requirements={"id" = "\d+"}
     * )
     */
    public function index( int $id)

    {
        $annonces=[];
        for($i=0; $i<10; $i++){
            $annonces[]=[
                'id'=>$i,
                "title"=>"blabla",
                "content"=>"on",
                "price"=>$i**3,
                "createDate"=>new \DateTime()
            ];
        }
        return $this->render('style/annoncementDetaill.html.twig', [
        'controller_name' => 'AnnoncementControllerDetail',
            'annonces'=>$annonces
        ]);

    }
}