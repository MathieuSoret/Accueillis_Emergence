<?php
namespace App\Controller;

use Symfony \ Component \HttpFoundation \Response;
use Symfony \Component \Routing \Annotation \Route;

use Twig \ Environment;

class PropertyController 
{

    /**
     * @var Environment
     */

    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    /**
     * @Route("/Enregistrement", name="enregistrementA")
     * @return Response
     */
    public function index(): Response
    {
        return new Response($this->twig->render('page/enregistrementA.html.twig'));;
    }

}