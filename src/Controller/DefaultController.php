<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Default site controller.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class DefaultController extends AbstractController
{
    /**
     * Home page.
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }
}
