<?php

namespace App\Service;

use App\Entity\Post;

/**
 * PostPageServiceInterface.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface PostPageServiceInterface
{
    /**
     * Gets one post.
     *
     * @param int $id post id
     *
     * @return Post
     */
    public function getOnePost(int $id): Post;

    /**
     * Gets posts by category.
     *
     * @param int $categoryId category id
     *
     * @return iterable
     */
    public function getPostsByCategory(int $categoryId): iterable;
}
