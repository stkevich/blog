<?php

namespace StKevich\Blog\Domain\Post;

use StKevich\Blog\Infrastructures\Collection;

/**
 * Class PostCollection
 * @package StKevich\Blog\Domain\Post
 */
class PostCollection extends Collection
{
    /** @var Post[] */
    protected $items;

    /**
     * @param Post $item
     * @return $this;
     */
    public function add(Post $item)
    {
        $this->items[] = $item;
        return $this;
    }

    /**
     * @return Post
     */
    public function current(): Post
    {
        return current($this->items);
    }

    /**
     * @return Post
     */
    public function next(): Post
    {
        return next($this->items);
    }

}