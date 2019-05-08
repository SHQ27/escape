<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('site/index.html.twig');
    }

     /**
     * @Route("/reservas", name="reservas")
     */
    public function reservasAction(Request $request)
    {
        return $this->render('site/reservas.html.twig');
    }
}
