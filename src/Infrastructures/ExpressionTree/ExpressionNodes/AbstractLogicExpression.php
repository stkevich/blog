<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree\ExpressionNodes;

use StKevich\Blog\Infrastructures\ExpressionTree\ExpressionInterface;

abstract class AbstractLogicExpression implements ExpressionInterface
{
    /** @var ExpressionInterface */
    protected $node1;

    /** @var ExpressionInterface */
    protected $node2;

    /**
     * AndExpression constructor.
     * @param ExpressionInterface $node1
     * @param ExpressionInterface $node2
     */
    public function __construct(ExpressionInterface $node1, ExpressionInterface $node2)
    {
        $this->node1 = $node1;
        $this->node2 = $node2;
    }

    /**
     * @return ExpressionInterface
     */
    public function getLeft(): ExpressionInterface
    {
        return $this->node1;
    }

    /**
     * @return ExpressionInterface
     */
    public function getRight(): ExpressionInterface
    {
        return $this->node2;
    }

}
