<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree;

use StKevich\Blog\Infrastructures\ExpressionTree\ExpressionNodes\ExpressionException;

interface ExpressionInterface
{

    /**
     * @return ExpressionInterface|null
     * @throws ExpressionException
     */
    public function getLeft(): ?ExpressionInterface;

    /**
     * @return ExpressionInterface|null
     * @throws ExpressionException
     */
    public function getRight(): ?ExpressionInterface;

    /**
     * @return NodeInterface
     * @throws ExpressionException
     */
    public function getValue(): NodeInterface;

}
