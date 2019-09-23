<?php

namespace StKevich\Blog\Domain\Post;

use StKevich\Blog\Domain\Post\ValueObject\Author;
use StKevich\Blog\Domain\Post\ValueObject\Rating;

/**
 * Class Post
 * @package StKevich\Domain\Post
 */
class Post
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $title;

    /** @var string */
    protected $slug;

    /** @var string */
    protected $description;

    /** @var string */
    protected $fullText;

    /** @var Author */
    protected $author;

    /** @var Rating */
    protected $rating;

    /**
     * Post constructor.
     * @param string $title
     * @param string $slug
     * @param string $description
     * @param string $fullText
     * @param Author $author
     * @param Rating $rating
     */
    public function __construct(
        string $title,
        string $slug,
        string $description,
        string $fullText,
        Author $author,
        Rating $rating
    ) {
        $this->title = $title;
        $this->slug = $slug;
        $this->description = $description;
        $this->fullText = $fullText;
        $this->author = $author;
        $this->rating = $rating;
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
     * @return Post
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getFullText(): string
    {
        return $this->fullText;
    }

    /**
     * @return Author
     */
    public function getAuthor(): Author
    {
        return $this->author;
    }

    /**
     * @return Rating
     */
    public function getRating(): Rating
    {
        return $this->rating;
    }

}
