<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

final class SubscribeMessageMailer implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    private $mailer;

    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function send(string $clientEmail): bool
    {
        $message = (new \Swift_Message('News Portal | Thank you for subscribe!'))
            ->setFrom($this->container->getParameter('app.support_mail'))
            ->setTo($clientEmail)
            ->setBody('Thank you for subscribe!')
        ;

        return (bool) $this->mailer->send($message);
    }
}
