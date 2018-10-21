<?php

declare(strict_types=1);

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_home")
     */
    public function indexAction(Request $request): Response
    {
        return $this->render('@App/homepage.html.twig');
    }
}
