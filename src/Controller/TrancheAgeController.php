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
    public function index(): Response
    {
        $property =$this->repository->findAll();
        return $this->render('page/pageRecherche/trancheAge.html.twig', [
            'property' => $property
        ]);
    }
}