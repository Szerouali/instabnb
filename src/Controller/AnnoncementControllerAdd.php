<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoncementControllerAdd extends AbstractController
{
    /**
     * @Route(
     *     "/add",
     *     name="add",
     *     methods={"GET", "POST"}
     * )
     */
    public function index()

    {
        return $this->render('style/annoncementAdd.html.twig', [
            'controller_name' => 'AnnoncementControllerAdd']);
    }
}