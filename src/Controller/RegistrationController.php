<?php

namespace App\Controller;


use App\Entity\User;
use App\Form\RegistrationType;
use App\Manager\UserManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @var UserManager
     */
    private $manager;

    public function __construct(UserManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @Route("/registration", name="registration")
     */
    public function index(Request $request) : Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form ->isValid())
        {

            $this->manager->save($user);
            return $this->redirectToRoute();


        }



        return $this->render('registration/index.html.twig',
            [ 'form' =>$form->createView()]);
    }
}