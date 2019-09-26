<?php
namespace App\Controller;

use App\DTO\Add;
use App\Entity\Annoncement;
use App\Form\AddType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementControllerAdd extends AbstractController
{
    /**
     * @Route(
     *     "/add",
     *     name="add",
     *     methods={"GET", "POST"},

     * )
     */
    public function index(Request $request)

    {
        $add = new Add();
        $form=$this->createForm(AddType::class, $add);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $a = new Annoncement($add);
           // $a->setTitle($add->title);
           // $a->setPrice($add->price);
           // $a->setContent($add->content);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($a);
            $entityManager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('style/annoncementAdd.html.twig', [
            'controller_name' => 'AnnoncementControllerAdd',
            'form'=>$form->createView(),
            ]);
    }
}