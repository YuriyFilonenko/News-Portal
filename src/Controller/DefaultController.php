<?php

namespace App\Controller;

use App\Service\ContactPageServiceInterface;
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
    /**
     * Home page.
     *
     * @param HomePageServiceInterface $service
     *
     * @return Response
     */
    public function index(HomePageServiceInterface $service): Response
    {
        return $this->render('default/index.html.twig', [
            'page' => $service->getData(),
            'categories' => $service->getCategories(),
            'latest_posts' => $service->getLatestPosts(),
        ]);
    }

    /**
     * Contact page.
     *
     * @param ContactPageServiceInterface $service
     *
     * @return Response
     */
    public function contact(ContactPageServiceInterface $service): Response
    {
        return $this->render('default/contact.html.twig', [
            'page' => $service->getContact(),
        ]);
    }
}
