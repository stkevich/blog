<?php

namespace StKevich\Blog\Domain\Post;

use StKevich\Blog\Infrastructures\ExpressionTree\ExpressionInterface;

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
    public function toExpression(): ExpressionInterface;

}
