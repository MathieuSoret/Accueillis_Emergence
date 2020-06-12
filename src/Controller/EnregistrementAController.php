<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Respository \ TAccueillisRepository;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementAController extends AbstractController
{

    /**
     * @var TAccueillisRepository
     */

    private $repository;

    public function __construct(TAccueillisRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/Enregistrement", name="page.enregistrementA")
     * @return Response
     */
    public function index(): Response
    {
        $property = $this->repository->fond(1);
        dump($property);
        return $this->render('page/enregistrementA.html.twig');
    }

}