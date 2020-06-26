<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \ HttpFoundation \ Response;
use Symfony \Component \Routing \Annotation \Route;

use Twig \ Environment;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     * @return Response
     */

    // Lien vers la page d'accueil grâce à un bouton de la navbar
    public function index(): Response
    {
        return $this->render('page/accueil.html.twig');
    }

}
