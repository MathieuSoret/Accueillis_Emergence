<?php
namespace App\Controller;

use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementFController extends AbstractController
{


    /**
     * @Route("/Enregistrement Famille", name="page.enregistrementF")
     * @Route("/Enregistrement Acceuilli", name="page.enregistrementA")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('page/enregistrementF.html.twig');
        return $this->render('page/enregistrementA.html.twig');
    }

}