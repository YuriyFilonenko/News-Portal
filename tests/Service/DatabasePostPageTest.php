<?php
namespace App\Tests\Service;

use App\Repository\PostRepository;
use App\Repository\PostRepositoryInterface;
use App\Service\DatabasePostPage;
use App\Service\PostPageServiceInterface;
use PHPUnit\Framework\TestCase;

/**
 * Test case for DatabasePostPage service.
 *
 * @author Yuriy Filonenko <mail@gmail.com>
 */
final class DatabasePostPageTest extends TestCase
{
    private $service;
    
    private function getPostRepository(): PostRepositoryInterface
    {
        return $this->getMockBuilder(PostRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
    
    protected function setUp() 
    {
        $this->service = new DatabasePostPage($this->getPostRepository());
    }
    
    public function testInstanceOfPostPageServiceInterface()
    {
        self::assertInstanceOf(PostPageServiceInterface::class, $this->service);
    }
        
    public function testGetOnePost()
    {
        $postRepository = $this->getPostRepository();
        
        $expected = new \App\Entity\Post;
        
        $postRepository->expects(self::once())
            ->method('getPost')
            ->willReturn($expected)
        ;
        
        $service = new DatabasePostPage($postRepository);
        
        $actual = $service->getOnePost(0);
        
        self::assertEquals($expected, $actual);
    }
}
