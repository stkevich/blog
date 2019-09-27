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
    protected $authorInfo;

    /** @var int */
    protected $authorId;

    /** @var Rating */
    protected $rating;

    /**
     * Post constructor.
     * @param string $title
     * @param string $slug
     * @param string $description
     * @param string $fullText
     * @param int $authorId
     * @param Rating $rating
     */
    public function __construct(
        string $title,
        string $slug,
        string $description,
        string $fullText,
        int $authorId,
        Rating $rating
    ) {
        $this->title = $title;
        $this->slug = $slug;
        $this->description = $description;
        $this->fullText = $fullText;
        $this->authorId = $authorId;
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
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * @return Rating
     */
    public function getRating(): Rating
    {
        return $this->rating;
    }

    /**
     * @return Author
     */
    public function getAuthorInfo(): Author
    {
        return $this->authorInfo;
    }

    /**
     * @param Author $authorInfo
     */
    public function setAuthorInfo(Author $authorInfo): void
    {
        $this->authorInfo = $authorInfo;
    }

}
