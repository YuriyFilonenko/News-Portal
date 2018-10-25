<?php

namespace App\Service;

use App\Dto\HomePage;

/**
 * Contract for home page service.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface HomePageServiceInterface
{
    /**
     * Gets home page data.
     *
     * @return HomePage
     */
    public function getData(): HomePage;
}
