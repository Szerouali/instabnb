<?php
namespace App\Controller;

use App\Entity\Annoncement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementControllerDetail extends AbstractController
{
    /**
     * @Route(
     *     "/annonce/{id}/detail",
     *     name="detail",
     *     defaults={"id"=1},git
     *     requirements={"id" = "\d+"}
     * )
     */
    public function index( int $id)

    {
        $annonces = $this->getDoctrine()->getManager();
        $tableau=$annonces->getRepository(Annoncement::class)->findByAnnonces(200);
        return $this->render('style/annoncementDetaill.html.twig', [
        'controller_name' => 'AnnoncementControllerDetail',
            'tableau'=>$tableau
        ]);

    }
}