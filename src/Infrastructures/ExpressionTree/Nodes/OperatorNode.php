<?php

namespace StKevich\Blog\Infrastructures\ExpressionTree\Nodes;

use StKevich\Blog\Infrastructures\ExpressionTree\NodeInterface;

final class OperatorNode implements NodeInterface
{
    const AND = '&&';
    const OR = '||';
    const GREATER = '>';
    const GREATER_OR_EQUAL = '>=';
    const LESSER = '<';
    const LESSER_OR_EQUAL = '<=';
    const EQUAL = '=';
    const NOT_EQUAL = '!=';

    /** @var string */
    private $operator;

    /**
     * Operator constructor.
     * @param $operator
     */
    private function __construct($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return string
     */
    public function get()
    {
        return $this->operator;
    }

    /**
     * @param NodeInterface $operator
     * @return bool
     */
    public function is(NodeInterface $operator): bool
    {
        return $this->operator == $operator->get();
    }

    /**
     * @return OperatorNode
     */
    public static function and()
    {
        return new self(self::AND);
    }

    /**
     * @return OperatorNode
     */
    public static function or()
    {
        return new self(self::OR);
    }

    /**
     * @return OperatorNode
     */
    public static function greater()
    {
        return new self(self::GREATER);
    }

    /**
     * @return OperatorNode
     */
    public static function greaterOrEqual()
    {
        return new self(self::GREATER_OR_EQUAL);
    }

    /**
     * @return OperatorNode
     */
    public static function lesser()
    {
        return new self(self::LESSER);
    }

    /**
     * @return OperatorNode
     */
    public static function lesserOrEqual()
    {
        return new self(self::LESSER_OR_EQUAL);
    }

    /**
     * @return OperatorNode
     */
    public static function equal()
    {
        return new self(self::EQUAL);
    }

    /**
     * @return OperatorNode
     */
    public static function notEqual()
    {
        return new self(self::NOT_EQUAL);
    }

}
