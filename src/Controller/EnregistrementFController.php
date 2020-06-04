<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementFController extends AbstractController
{


    /**
     * @Route("/Enregistrement Famille", name="page.enregistrementF")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('page/enregistrementF.html.twig');
    }

}