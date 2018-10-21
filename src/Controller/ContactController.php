<?php

namespace App\Controller;

use App\Service\ContactPageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of ContactController.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class ContactController extends AbstractController
{
    private $service;

    public function __construct(ContactPageServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Contact page.
     *
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('contact/contact.html.twig', [
            'page' => $this->service->getData(),
        ]);
    }
}
