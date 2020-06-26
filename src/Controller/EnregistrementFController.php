<?php
namespace App\Controller;

use App \Entity \TAccueillis;
use App \Repository \TAccueillisRepository;
use App \Repository \TFamilleRepository;
use App \Entity \TFamille;
use Doctrine \ORM \EntityManagerInterface;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \HttpFoundation \Request;
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

    // ce lien permet de nous rediriger vers la page enregistrementF grâce à la navbar
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

     // Ici on récupére les informations de la table TFamille
     
    public function famille(): Response
    {
        $property = $this->familly->findAll();
        return $this->render('page/enregistrementF.html.twig', [
            'property' => $property
        ]);
    }

    /**
     * @Route("/page/delete/{id}", name="page.delete", methods="DELETE")
     * @param TFamille $property
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */

    // Ici on supprime l'id de la famille
    public function delete(TFamille $property, Request $request) {
        if ($this->isCsrfTokenValid('delete' . $property->getId(), $request->get('_token'))) 
        {
            $this->em->remove($property);
            $this->em->flush();
        }
        return $this->redirectToRoute('page.enregistrementF');
    }

}