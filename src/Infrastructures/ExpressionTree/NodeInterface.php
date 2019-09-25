<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree;

interface NodeInterface
{
    /**
     * @return mixed
     */
    public function get();

    /**
     * @param NodeInterface $node
     * @return bool
     */
    public function is(self $node): bool;

}
