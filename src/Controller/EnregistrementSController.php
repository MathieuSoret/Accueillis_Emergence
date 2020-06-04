<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementSController extends AbstractController
{


    /**
     * @Route("/EnregistrementS", name="page.enregistrementS")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('page/enregistrementS.html.twig');
    }

}