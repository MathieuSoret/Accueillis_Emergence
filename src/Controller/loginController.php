<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \ HttpFoundation \ Response;
use Symfony \Component \Routing \Annotation \Route;

use Twig \ Environment;

class loginController extends AbstractController
{
    /**
     * @Route("/Connexion", name="connexion.login")
     * @return Response
     */

    public function index(): Response
    {
        return $this->render('connexion/login.html.twig');
    }

}