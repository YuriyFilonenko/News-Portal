<?php

namespace App\Service;

use App\Dto\Contact;
use Faker\Factory;

/**
 * Service provides fake data for contact page.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
final class FakeContactPage implements ContactPageServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getContact(): Contact
    {
        $faker = Factory::create();

        return new Contact(
            $faker->words(20, true),
            $faker->address,
            $faker->email,
            $faker->phoneNumber,
            $faker->words(30, true)
        );
    }
}
