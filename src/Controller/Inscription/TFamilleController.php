<?php

namespace App\Controller\Inscription;


use App \Entity \TFamille;
use App \Form \TFamilleType;
use App \Repository \TFamilleRepository;

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

    public function __construct(TFamilleRepository $repository, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->em = $em;
    }

    /**
     * @Route("EnregistrementF", name="page.enregistrementF")
     */
    public function new(Request $request)
    {
        $new = new TFamille();
        $fam = $this->createForm(TFamilleType::class, $new);
        $fam->handleRequest($request);

        if ($fam->isSubmitted() && $fam->isValid()) {
            $this->em->persist($new);
            $this->em->flush();
            $this->addFlash('success', 'Bien créé avec succès');
            return $this->redirectToRoute('page.enregistrementF');
        }

        return $this->render('page/enregistrementF.html.twig', [
            'new' => $new,
            'fam' => $fam->createView()
        ]);
    }

}