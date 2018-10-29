<?php

namespace App\Repository;

use App\Entity\Post;

/**
 * Contract for post repository.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
interface PostRepositoryInterface
{
    /**
     * Saves given post to the storage.
     *
     * @param Post $post
     */
    public function save(Post $post): void;

    /**
     * Saves all given posts to the storage.
     *
     * @param iterable $posts
     */
    public function saveAll(iterable $posts): void;

    /**
     * Gets needed count of latest posts.
     *
     * @param int $count
     *
     * @return iterable
     */
    public function getLatest(int $count): iterable;

    /**
     * Get one post by id.
     *
     * @param int $id post id
     *
     * @return Post
     */
    public function getPost($id): Post;

    /**
     * Gets posts by category.
     *
     * @param int $categoryId
     *
     * @return iterable
     */
    public function getPostsByCategory(int $categoryId): iterable;
}
