<?php

namespace StKevich\Blog\Domain\Comment;

use StKevich\Blog\Infrastructures\Collection;

/**
 * Class CommentCollection
 * @package StKevich\Blog\Domain\Comment
 */
class CommentHeap extends \SplHeap
{
    public function extract(): Comment
    {
        return parent::extract();
    }

    public function current(): Comment
    {
        return parent::current();
    }

    public function key(): Comment
    {
        return parent::key();
    }

    public function top(): Comment
    {
        return parent::top();
    }


    protected function compare($value1, $value2)
    {

    }


}