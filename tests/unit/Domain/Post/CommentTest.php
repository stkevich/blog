<?php

namespace StKevich\Blog\Tests\Domain;

use PHPUnit\Framework\TestCase;
use StKevich\Blog\Domain\Comment\Comment;
use StKevich\Blog\Domain\Comment\ValueObject\Author;
use StKevich\Blog\Domain\Comment\ValueObject\Rating;

final class CommentTest extends TestCase
{

    public function testCreatePostObject()
    {
        $comment = new Comment(
            1,
            new Author(1, 'name', new Rating(1,2,3), 'qq'),
            'text',
            new Rating(4,5,6)
        );

        $this->assertEquals(1, $comment->getPostId());
        $this->assertEquals('text', $comment->getText());
        $this->assertEquals('name', $comment->getAuthor()->getName());
        $this->assertEquals(2, $comment->getAuthor()->getRating()->getDislike());
        $this->assertEquals(4, $comment->getRating()->getLike());
    }

}