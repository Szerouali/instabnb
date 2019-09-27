<?php
namespace App\Controller;

use App\Entity\Annoncement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePage extends AbstractController
{
    /**
     * @Route("/{_locale}", name="home", requirements={"_locale"="fr|en"})
     */
    /**
     * @Route(
     *     "/{_locale}",
     *     name="home"
     * )
     */
    public function index()

    {
        //$annonces=[["id"=>1,"title"=>"blabla","content"=>"off","price"=>10,"createDate"=>new\DateTime()],
         //   ["id"=>2,"title"=>"blabla","content"=>"on","price"=>8,"createDate"=>new\DateTime()]];
        $annonces = $this->getDoctrine()->getManager();
        $tableau=$annonces->getRepository(Annoncement::class)->findByAnnonces(2);

        return $this->render('style/home.html.twig', [
            'controller_name' => 'HomePage',
            'tableau'=>$tableau
        ]);
    }
}
