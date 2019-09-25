<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree\Nodes;

use StKevich\Blog\Infrastructures\ExpressionTree\NodeInterface;

final class ParameterNode implements NodeInterface
{
    /** @var string */
    private $value;

    /**
     * ParameterNode constructor.
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->value;
    }

    /**
     * @param NodeInterface $operator
     * @return bool
     */
    public function is(NodeInterface $operator): bool
    {
        return $this->value == $operator->get();
    }

}
