<?php

namespace StKevich\Blog\Domain\Comment;

use StKevich\Blog\Infrastructures\Collection;

/**
 * Class CommentCollection
 * @package StKevich\Blog\Domain\Comment
 */
class CommentCollection extends Collection
{
    /**
     * @param Comment $item
     * @return $this;
     */
    public function add(Comment $item)
    {
        $this->protectedAdd($item);
        return $this;
    }

    /**
     * @return Comment
     */
    public function current(): ?Comment
    {
        return parent::current();
    }

    /**
     * @return Comment
     */
    public function next(): ?Comment
    {
        return parent::next();
    }

}
