<?php

namespace StKevich\Blog\Infrastructures;

/**
 * Class Collection
 * @package StKevich\Blog\Infrastructures
 */
abstract class Collection implements \Iterator, \Countable
{
    /** @var mixed[] */
    protected array $items = [];

    /**
     * @return mixed
     */
    public function current()
    {
        $current = current($this->items);
        return $current ? $current : null;
    }

    /**
     * @return mixed|void
     */
    public function next()
    {
        $next = next($this->items);
        return $next ? $next : null;
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

    /**
     * @param $item
     */
    protected function protectedAdd($item)
    {
        $this->items[] = $item;
    }

}