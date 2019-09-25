<?php
namespace App\Controller;

use App\DTO\Add;
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
    dump($add);die;
            return $this->redirectToRoute('home');
        }

        return $this->render('style/annoncementAdd.html.twig', [
            'controller_name' => 'AnnoncementControllerAdd',
            'form'=>$form->createView(),
            ]);
    }
}