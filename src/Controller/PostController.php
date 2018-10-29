<?php

namespace App\Controller;

use App\Service\PostPageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Post controller.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
class PostController extends AbstractController
{
    /**
     * Show one post by id.
     *
     * @param PostPageServiceInterface $service
     * @param int                      $id      post id
     *
     * @return Response
     */
    public function post(PostPageServiceInterface $service, int $id): Response
    {
        return $this->render('post/post.html.twig', [
            'post' => $service->getOnePost($id),
        ]);
    }

    /**
     * Show posts by category.
     *
     * @param PostPageServiceInterface $service
     * @param int                      $categoryId
     *
     * @return Response
     */
    public function postsByCategory(PostPageServiceInterface $service, int $categoryId): Response
    {
        return $this->render('post/posts_by_category.html.twig', [
            'posts_by_category' => $service->getPostsByCategory($categoryId),
        ]);
    }
}
