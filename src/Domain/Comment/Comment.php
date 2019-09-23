<?php

namespace StKevich\Blog\Domain\Comment;

use StKevich\Blog\Domain\Comment\ValueObject\Author;

/**
 * Class Comment
 * @package StKevich\Blog\Domain\Comment
 */
class Comment
{
    /** @var int */
    protected $id;

    /** @var int */
    protected $postId;

    /** @var Author */
    protected $author;

    /** @var string */
    protected $text;

    /**
     * Comment constructor.
     * @param int $postId
     * @param Author $author
     * @param string $text
     */
    public function __construct(int $postId, Author $author, string $text)
    {
        $this->postId = $postId;
        $this->author = $author;
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

}
