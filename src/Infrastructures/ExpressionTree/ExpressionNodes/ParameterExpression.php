<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree\ExpressionNodes;

use StKevich\Blog\Infrastructures\ExpressionTree\ExpressionInterface;
use StKevich\Blog\Infrastructures\ExpressionTree\NodeInterface;
use StKevich\Blog\Infrastructures\ExpressionTree\Nodes\ParameterNode;

class ParameterExpression implements ExpressionInterface
{
    /** @var ParameterNode */
    protected $value;

    /**
     * ParameterExpression constructor.
     * @param ParameterNode $value
     */
    public function __construct(ParameterNode $value)
    {
        $this->value = $value;
    }

    /**
     * @return null
     */
    public function getLeft(): ?ExpressionInterface
    {
        return null;
    }

    /**
     * @return null
     */
    public function getRight(): ?ExpressionInterface
    {
        return null;
    }

    /**
     * @return ParameterNode
     */
    public function getValue(): NodeInterface
    {
        return $this->value;
    }

}
