<?php

namespace App\Service;

use App\Entity\Post;
use App\Repository\PostRepository;

/**
 * Post service that fetch data from database.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
final class DatabasePostPage implements PostPageServiceInterface
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getOnePost($id): Post
    {
        return $this->postRepository->getPost($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getPostsByCategory(int $categoryId): iterable
    {
        return $this->postRepository->getPostsByCategory($categoryId);
    }
}
