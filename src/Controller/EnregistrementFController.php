<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Repository \TAccueillisRepository;
use App \Repository \TFamilleRepository;
use Doctrine \ORM \EntityManagerInterface;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

class EnregistrementFController extends AbstractController
{
    /**
     * @var TAccueillisRepository
     */
    private $repository;    
    
    /**
     * @var TFamilleRepository
     */
    private $familly;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(TAccueillisRepository $repository, EntityManagerInterface $em, TFamilleRepository $familly)
    {
        $this->repository = $repository;
        $this->familly = $familly;
        $this->em = $em;
    }


    /**
     * @Route("/Enregistrement Famille", name="page.enregistrementF")
     * @param TAccueillisRepository $repository
     * @return Response
     */
    public function index(): Response
    {
        $property =$this->repository->findAll();
        return $this->render('page/enregistrementF.html.twig', [
            'property' => $property
        ]);
    }

    /**
     * @Route("/Enregistrement Famille", name="page.enregistrementF")
     * @param TFamilleRepository $familly
     * @return Response
     */
    //public function famille(): Response
    //{
        //$property = $this->familly->findAll();
        //return $this->render('page/enregistrementF.html.twig', [
            //'property' => $property
        //]);
    //}

}