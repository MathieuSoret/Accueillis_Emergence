<?php
namespace App\Controller;

use App \Entity \User;
use App \Repository \UserRepository;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class TrancheAgeController extends AbstractController
{

    /**
     * @var UserRepository
     */
    private $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/trancheAge", name="page.pageRecherche.trancheAge")
     * @param UserRepository $repository
     * @return Response
     */

     // Permet de récupérer les informations de la table User pour les utiliser sur la page trancheAge
     // utiliseé au debut pour testé l'utilisation des property et donc a modifier pour récupérer les accueillis
    public function index(): Response
    {
        $property =$this->repository->findAll();
        return $this->render('page/pageRecherche/trancheAge.html.twig', [
            'property' => $property
        ]);
    }
}