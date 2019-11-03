<?php

namespace StKevich\Blog\Domain\Comment\ValueObject;

/**
 * Class Rating
 * @package StKevich\Blog\Domain\Comment\ValueObject
 */
class Rating
{

    /** @var int */
    protected $like;

    /** @var int */
    protected $dislike;

    /** @var int */
    protected $fun;

    /**
     * Rating constructor.
     * @param int $like
     * @param int $dislike
     * @param int $fun
     */
    public function __construct(int $like, int $dislike, int $fun)
    {
        $this->like = $like;
        $this->dislike = $dislike;
        $this->fun = $fun;
    }

    /**
     * @return int
     */
    public function getLike(): int
    {
        return $this->like;
    }

    /**
     * @return int
     */
    public function getDislike(): int
    {
        return $this->dislike;
    }

    /**
     * @return int
     */
    public function getFun(): int
    {
        return $this->fun;
    }

}
