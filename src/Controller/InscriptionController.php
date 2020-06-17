<?php

namespace App\Controller;

use App \ Entity \TAccueillis;
use App \Form \InscriptionType;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;
use Symfony \Component \HttpFoundation \Response;

class InscriptionController extends AbstractController
{
    public function index()
    {
        return $this->render('page/base.html.twig');
    }

    public function add()
    {
        $inscription = new Inscription();
        $form = $this->createForm(ArticleType::class, $inscription);

    	return $this->render('page/enregistrementA.html.twig', [
            'form' => $form->createView()
        ]);
    }

}