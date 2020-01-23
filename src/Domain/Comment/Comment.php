<?php

namespace StKevich\Blog\Domain\Comment;

use StKevich\Blog\Domain\Comment\ValueObject\Author;
use StKevich\Blog\Domain\Comment\ValueObject\Rating;

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

    /** @var Rating */
    protected $rating;

    /**
     * Comment constructor.
     * @param int $postId
     * @param Author $author
     * @param string $text
     * @param Rating $rating
     */
    public function __construct(int $postId, Author $author, string $text, Rating $rating)
    {
        $this->postId = $postId;
        $this->author = $author;
        $this->text = $text;
        $this->rating = $rating;
    }

    /**
     * @return int
     */
    public function getId(): ?int
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

    /**
     * @return Rating
     */
    public function getRating(): Rating
    {
        return $this->rating;
    }

}
