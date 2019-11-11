<?php

namespace StKevich\Blog\Domain\Post\ValueObject;

/**
 * Class Author
 * @package StKevich\Blog\Domain\Post\ValueObject
 */
class Author
{
    /** @var int */
    protected $id;

    /** @var string */
    protected $name;

    /** @var Rating */
    protected $rating;

    /** @var string */
    protected $thumbnail;

    /**
     * Author constructor.
     * @param int $id
     * @param string $name
     * @param Rating $rating
     * @param string|null $thumbnail
     */
    public function __construct(int $id, string $name, Rating $rating, string $thumbnail = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->rating = $rating;
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Rating
     */
    public function getRating(): Rating
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getThumbnail(): ?string
    {
        return $this->thumbnail;
    }

}
