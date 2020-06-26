<?php

namespace App\Controller\Inscription;


use App \Entity \TAccueillis;
use App \Form \TAccueillisType;
use App \Repository \TAccueillisRepository;

use Doctrine \ORM \EntityManagerInterface;

use Symfony \Component \HttpFoundation \Request;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;

class TAccueillisController extends AbstractController
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
     * @Route("EnregistrementA", name="page.enregistrementA")
     */

    // Ici on ajoute les information à la base de données
    public function new(Request $request)
    {
        $new = new TAccueillis();
        $form = $this->createForm(TAccueillisType::class, $new);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($new);
            $this->em->flush();
            $this->addFlash('success', 'Bien créé avec succès');
            return $this->redirectToRoute('page.enregistrementA');
        }

        return $this->render('page/enregistrementA.html.twig', [
            'new' => $new,
            'form'     => $form->createView()
        ]);
    }

}