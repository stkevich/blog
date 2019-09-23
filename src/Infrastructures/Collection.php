<?php

namespace StKevich\Blog\Infrastructures;

/**
 * Class Collection
 * @package StKevich\Blog\Infrastructures
 */
abstract class Collection implements \Iterator, \Countable
{
    /** @var mixed[] */
    protected $items;

    /**
     * @return mixed
     */
    public function current()
    {
        return current($this->items);
    }

    /**
     * @return mixed|void
     */
    public function next()
    {
        return next($this->items);
    }

    /**
     * @return int|null
     */
    public function key()
    {
        return key($this->items);
    }

    /**
     * @return bool
     */
    public function valid()
    {
        $key = key($this->items);
        return ($key !== null && $key !== false);
    }

    /**
     * @return int
     */
    public function count()
    {
        return count($this->items);
    }

    /**
     * @return void
     */
    public function rewind()
    {
        reset($this->items);
    }

}