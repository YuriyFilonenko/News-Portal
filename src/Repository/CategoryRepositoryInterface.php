<?php

namespace App\Repository;

/**
 * Contract for category repository.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface CategoryRepositoryInterface
{
    /**
     * Finds all categories in storage.
     *
     * @return iterable
     */
    public function findAllCategories(): iterable;
}
