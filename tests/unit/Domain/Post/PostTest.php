<?php

namespace StKevich\Blog\Tests\Domain;

use PHPUnit\Framework\TestCase;
use StKevich\Blog\Domain\Post\Post;
use StKevich\Blog\Domain\Post\ValueObject\Author;
use StKevich\Blog\Domain\Post\ValueObject\Rating;

final class PostTest extends TestCase
{

    public function testCreatePostObject()
    {
        $post = new Post(
            'Title',
            'slug',
            'Description',
            'Full text',
            new Author(1, 'PutIn', new Rating(10,0,0), null),
            new Rating(
                5,
                10,
                0
            )
        );

        $this->assertEquals('Title', $post->getTitle());
        $this->assertEquals('slug', $post->getSlug());
        $this->assertEquals('Description', $post->getDescription());
        $this->assertEquals('Full text', $post->getFullText());
        $this->assertEquals(5, $post->getRating()->getLike());
        $this->assertEquals(10, $post->getRating()->getDislike());
        $this->assertEquals(0, $post->getRating()->getFun());
    }

}