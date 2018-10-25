<?php

namespace Greeflas\Bundle\NewsletterBundle\Service;

use Greeflas\Bundle\NewsletterBundle\Dto\Subscriber;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

final class NewsletterSubscriber implements NewsletterSubscriberInterface, ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function save(Subscriber $subscriber)
    {
        $subscribersEmailsStorage = $this->container->getParameter('app.subscribers_emails_storage');
        $fp = \fopen($subscribersEmailsStorage, 'a');

        if (!$fp) {
            throw new \RuntimeException('File not exist!');
        }

        \fputcsv($fp, [$subscriber->getEmail()]);
        \fclose($fp);
    }
}
