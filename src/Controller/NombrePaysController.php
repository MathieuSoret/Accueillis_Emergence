<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Repository \TAccueillisRepository;
use Doctrine \ORM \EntityManagerInterface;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;


class NombrePaysController extends AbstractController
{


    /**
     * @var TAccueillisRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(TAccueillisRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/nombrePays", name="page.pageRecherche.nombrePays")
     * @param TAccueillisRepository $repository
     * @return Response
     */

    // Permet de récupérer les informations de la table TAcueillis pour les utiliser sur la page nombrePays
    public function index(): Response
    {
        $property = $this->repository->findAll();
        return $this->render('page/pageRecherche/nombrePays.html.twig', [
            'property' => $property
        ]);
    }

}