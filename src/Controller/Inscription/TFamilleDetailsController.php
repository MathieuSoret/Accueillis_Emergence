<?php

namespace App\Controller\Inscription;


use App \Entity \TFamilleDetails;
use App \Form \TFamilleDetailType;
use App \Repository \TFamilleDetailsRepository;

use Doctrine \ORM \EntityManagerInterface;

use Symfony \Component \HttpFoundation \Request;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;

class TFamilleDetailsController extends AbstractController
{
    /**
     * @var TFamilleDetailsRepository
     */
    private $repository;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(TFamilleDetailsRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("EnregistrementF", name="page.enregistrementF")
     */
    public function new(Request $request)
    {
        $new = new TFamilleDetails();
        $famd = $this->createForm(TFamilleDetailType::class, $new);
        $famd->handleRequest($request);

        if ($famd->isSubmitted() && $famd->isValid()) {
            $this->em->persist($new);
            $this->em->flush();
            $this->addFlash('success', 'Bien créé avec succès');
            return $this->redirectToRoute('page.enregistrementF');
        }

        return $this->render('page/enregistrementF.html.twig', [
            'new' => $new,
            'famd' => $famd->createView()
        ]);
    }

}