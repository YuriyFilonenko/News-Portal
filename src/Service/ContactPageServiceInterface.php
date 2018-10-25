<?php

namespace App\Service;

use App\Dto\Contact;

/**
 * Contract for contact page service.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface ContactPageServiceInterface
{
    /**
     * Gets contact data.
     *
     * @return Contact
     */
    public function getData(): Contact;
}
