<?php

namespace StKevich\Blog\Domain\Comment;

use StKevich\Blog\Infrastructures\Collection;

/**
 * Class CommentCollection
 * @package StKevich\Blog\Domain\Comment
 */
class CommentCollection extends Collection
{
    /** @var Comment[] */
    protected $items;

    /**
     * @param Comment $item
     * @return $this;
     */
    public function add(Comment $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return Comment
     */
    public function current(): Comment
    {
        return current($this->items);
    }

    /**
     * @return Comment
     */
    public function next(): Comment
    {
        return next($this->items);
    }

}