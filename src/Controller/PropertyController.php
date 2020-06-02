<?php
namespace App\Controller;

use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;

class PropertyController extends AbstractController
{

    /**
     * @Route("/gestion", name="gestion")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('gestion/index.html.twig');
    }

}