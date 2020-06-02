<?php
namespace App\Controller;

use Symfony \ Component \ HttpFoundation \ Response;
use Symfony \Component \Routing \Annotation \Route;
use Symfony \Bundle \FrameworkBundle \Controller \AbstractController;

use Twig \ Environment;

class HomeController extends AbstractController
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
     * @Route("/", name="home")
     * @return Response
     */

    public function index(): Response
    {
        return new Response($this->twig->render('page/acceuil.html.twig'));
    }

}
