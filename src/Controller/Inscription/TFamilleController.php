<?php

namespace App\Controller\Inscription;


use App \Entity \TFamille;
use App \Form \TFamilleType;
use App \Repository \TFamilleRepository;

use App \Entity \TFamilleDetails;
use App \Form \TFamilleDetailType;
use App \Repository \TFamilleDetailsRepository;

use Doctrine \ORM \EntityManagerInterface;

use Symfony \Component \HttpFoundation \Request;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;

class TFamilleController extends AbstractController
{
    /**
     * @var TFamilleRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;


    /**
     * @var TFamilleDetailsRepository
     */
    private $repositoryd;

    /**
     * @var EntityManagerInterface
     */
    private $emd;

    public function __construct(TFamilleRepository $repository, EntityManagerInterface $em, TFamilleDetailsRepository $repositoryd, EntityManagerInterface $emd)
    {
        $this->repository = $repository;
        $this->em = $em;

        $this->repositoryd = $repositoryd;
        $this->emd = $emd;
    }

    /**
     * @Route("EnregistrementF", name="page.enregistrementF")
     */
    public function new(Request $request)
    {

        $newd = new TFamilleDetails();
        $famd = $this->createForm(TFamilleDetailType::class, $newd);
        $famd->handleRequest($request);

        if ($famd->isSubmitted() && $famd->isValid()) {
            $this->emd->persist($newd);
            $this->emd->flush();
            $this->addFlash('success', 'Bien créé avec succès');
            return $this->redirectToRoute('page.enregistrementF');
        }

        return $this->render('page/enregistrementF.html.twig', [
            
            'new' => $newd,
            'famd' => $famd->createView()
        ]);
    }

}