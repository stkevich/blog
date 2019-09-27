<?php

namespace StKevich\Blog\Domain\Comment\ValueObject;

use StKevich\Blog\Domain\Post\ValueObject\Rating;

/**
 * Class Author
 * @package StKevich\Blog\Domain\Comment\ValueObject
 */
class Author
{

    /** @var string */
    protected $name;

    /** @var Rating */
    protected $rating;

    /** @var string */
    protected $thumbnail;

    /**
     * Author constructor.
     * @param string $name
     * @param Rating $rating
     * @param string $thumbnail
     */
    public function __construct(string $name, Rating $rating, string $thumbnail)
    {
        $this->name = $name;
        $this->rating = $rating;
        $this->thumbnail = $thumbnail;
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
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

}
