<?php

namespace App\Controller;

use App\Service\HomePageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Default site controller.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class DefaultController extends AbstractController
{
    private $service;
    
    public function __construct(HomePageServiceInterface $service)
    {
        $this->service = $service;
    }
    
    /**
     * Home page.
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'page' => $this->service->getData(),
        ]);
    }
}
