<?php

namespace StKevich\Blog\Domain\Comment;

/**
 * Interface CommentSpecificationInterface
 * @package StKevich\Blog\Domain\Comment
 */
interface CommentSpecificationInterface
{

    /**
     * @param Comment $candidate
     * @return bool
     */
    public function isSatisfiedBy(Comment $candidate): bool;

    /**
     * @return mixed
     */
    public function toExpression();

}
