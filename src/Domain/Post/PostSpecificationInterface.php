<?php

namespace StKevich\Blog\Domain\Post;

/**
 * Interface CommentSpecificationInterface
 * @package StKevich\Blog\Domain\Comment
 */
interface PostSpecificationInterface
{

    /**
     * @param Post $candidate
     * @return bool
     */
    public function isSatisfiedBy(Post $candidate): bool;

    /**
     * @return mixed
     */
    public function toExpression();

}
