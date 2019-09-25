<?php

namespace App\Controller;

use App\DTO\Contact;
use App\Form\Contact2Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(Contact2Type::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $entityManager = $this->getDoctrine()->getManager();
            // $entityManager->persist($contact);
            // $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        return $this->render('style/contact.html.twig', [
            'controller_name' => 'ContactController',
            'form'=>$form->createView(),
        ]);
    }
}
