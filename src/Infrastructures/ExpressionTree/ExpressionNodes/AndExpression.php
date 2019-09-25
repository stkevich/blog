<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree\ExpressionNodes;

use StKevich\Blog\Infrastructures\ExpressionTree\NodeInterface;
use StKevich\Blog\Infrastructures\ExpressionTree\Nodes\OperatorNode;

class AndExpression extends AbstractLogicExpression
{

    /**
     * @return NodeInterface
     */
    public function getValue(): NodeInterface
    {
        return OperatorNode::and();
    }

}