<?php
namespace App\Controller;



use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

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
     * @Route("/biens", name="property.index")
     * @return Response
     */

    public function index () :Response
    {
        return new Response($this->twig->render('pages/index.html.twig'));

    }
    /**
     * @Route("/maison1", name="test1.index")
     * @return Response
     */
    public function test1 () :Response
    {
        return new Response($this->twig->render('pages/maison1.html.twig'));
    }

}

