<?php

namespace App\Service;

use App\Dto\HomePage;
use EmptyIterator;
use Faker\Factory;

/**
 * Service provides fake data for home page.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
final class FakeHomePage implements HomePageServiceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getData(): HomePage
    {
        $faker = Factory::create();

        return new HomePage(
            'News Portal',
            $faker->words(25, true),
            'Read News',
            'Suggest news'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getCategories(): iterable
    {
        return new EmptyIterator();
    }

    /**
     * {@inheritdoc}
     */
    public function getLatestPosts(): iterable
    {
        return new EmptyIterator();
    }
}
