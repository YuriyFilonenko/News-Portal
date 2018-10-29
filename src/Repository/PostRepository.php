<?php

namespace App\Repository;

use App\Entity\Post;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\ORMException;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @method null|Post find($id, $lockMode = null, $lockVersion = null)
 * @method null|Post findOneBy(array $criteria, array $orderBy = null)
 * @method Post[]    findAll()
 * @method Post[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostRepository extends ServiceEntityRepository implements PostRepositoryInterface
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Post::class);
    }

    /**
     * {@inheritdoc}
     */
    public function save(Post $post): void
    {
        // TODO: Implement save() method.
    }

    /**
     * {@inheritdoc}
     */
    public function saveAll(iterable $posts): void
    {
        $em = $this->getEntityManager();
        $em->beginTransaction();

        try {
            foreach ($posts as $post) {
                $em->persist($post);
            }

            $em->flush();
            $em->commit();
        } catch (ORMException $e) {
            $em->rollback();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLatest(int $count = 3): iterable
    {
        return $this->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->setMaxResults($count)
            ->orderBy('p.id', 'desc')
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function getPost($id): Post
    {
        $post = $this->find($id);

        if (!$post) {
            throw new NotFoundHttpException('Post not found!');
        }

        return $post;
    }

    /**
     * {@inheritdoc}
     */
    public function getPostsByCategory(int $categoryId): iterable
    {
        $postsByCategory = $this->findBy(['categoryId' => $categoryId]);

        if (!$postsByCategory) {
            throw new NotFoundHttpException('Category not found!');
        }

        return $postsByCategory;
    }
}
