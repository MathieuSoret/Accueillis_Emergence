<?php

namespace App\Controller\Edit;

use App\Entity\TFamilleDetails;
use App\Form\TFamilleDetailType;
use App\Repository\TFamilleDetailsRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditTFamilleController extends AbstractController
{
    /**
     * @var TFamilleDetailsRepository
     */
    private $repository;

    public function __construct(TFamilleDetailsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/Enregistrement Famille", name="page.enregistrementF")
     * @return \Symfony\Component\HttpFoundation\Responce
     */
    public function index()
    {
        $property = $this->repository->findAll();
        return $this->render('page/EnregistrementF.html.twig', compact('property'));
    }

    /**
     * @Route("/edit/{id}", name="page.pageEditFamille.editFamille")
     * @param Property $property
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(TFamilleDetails $property)
    {
        $form = $this->createForm(TFamilleDetailType::class, $property);
        return $this->render('page/pageEditFamille/editFamille.html.twig', [
            'property' => $property,
            'form' => $form->createView()
        ]);
    }
}