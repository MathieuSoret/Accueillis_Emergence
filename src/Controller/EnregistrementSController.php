<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;


class EnregistrementSController extends AbstractController
{

    

    /**
     * @Route("/Enregistrement Session", name="page.enregistrementS")
     * @return Response
     */
    public function index(): Response
    {
        $accueillis = new TAccueillis();
        $accueillis->setQualite('Monsieur')
        ->setNom('Soret')
        ->setPrenom('Mathieu')
        ->setIDAccueilli('1');
        $em = $this->getDoctrine()->getManager();
        $em->persist($accueillis);
        $em->flush();
        return $this->render('page/enregistrementS.html.twig');
    }

}