<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class RechercheController extends AbstractController
{


    /**
     * @Route("/Recherche", name="page.recherche")
     * @return Response
     */

     // Cette fonction me permet de me rendre sur la page recherche grâce à la navbar
    public function index(): Response
    {
        return $this->render('page/recherche.html.twig');
    }

}