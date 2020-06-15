<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Repository \TAccueillisRepository;
use Doctrine \ORM \EntityManagerInterface;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;


class EnregistrementSController extends AbstractController
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
     * @Route("/Enregistrement Session", name="page.enregistrementS")
     * @param TAccueillisRepository $repository
     * @return Response
     */
    public function index(): Response
    {
        $property = $this->repository->findAll();
        return $this->render('page/enregistrementS.html.twig', [
            'property' => $property
        ]);
    }

}