<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Repository \TAccueillisRepository;
use Doctrine \ORM \EntityManagerInterface;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementAController extends AbstractController
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
     * @Route("/Enregistrement", name="page.enregistrementA")
     * @param TAccueillisRepository $repository
     * @return Response
     */

    public function index(TAccueillisRepository $repository): Response
    {
        $property =$this->repository->findAll();
        return $this->render('page/enregistrementA.html.twig', [
            'property' => $property
        ]);
    }

}