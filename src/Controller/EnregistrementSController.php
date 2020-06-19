<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Entity \TSessionDetails;

use App \Repository \TAccueillisRepository;
use App \Repository \TSessionDetailsRepository;

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

    public function __construct(TAccueillisRepository $repository, EntityManagerInterface $em, TSessionDetailsRepository $session)
    {
        $this->session = $session;
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("/Enregistrement Session", name="page.enregistrementS")
     * @param TAccueillisRepository $repository
     * @param TSessionDetailsRepository $session
     * @return Response
     */
    public function accueilli(): Response
    {
        $property = $this->repository->findAll();
        return $this->render('page/enregistrementS.html.twig', [
            'property' => $property
        ]);
    }


    /**
     * @var TSessionDetailsRepository
     */
    private $session;

    public function nombre(): Response
    {
        $dsession = $this->session->findAll();
        return $this->render('page/enregistrementS.html.twig', [
            'dsession' => $dsession
        ]);
    }
}
