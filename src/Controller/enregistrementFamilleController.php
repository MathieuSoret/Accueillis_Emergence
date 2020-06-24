<?php
namespace App\Controller;

use App \Entity \TFamille;
use App \Repository \TFamilleRepository;
use Doctrine \ORM \EntityManagerInterface;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class enregistrementFamilleController extends AbstractController
{

    /**
     * @var TFamilleRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(TFamilleRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/NouvelleFamille", name="page.pageInscription.enregistrementFamille")
     * @param TFamilleRepository $repository
     * @return Response
     */
    public function index(TFamilleRepository $repository): Response
    {
        $property =$this->repository->findAll();
        return $this->render('page/pageInscription/enregistrementFamille.html.twig', [
            'property' => $property
        ]);
    }
}
