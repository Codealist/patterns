<?php

abstract class Expression
{
    private static $keycount = 0;
    private $key;

    abstract public function interpret( InterpreterContext $context);

    public function getKey()
    {
        if (!isset($this->key)) {
            self::$keycount++;
            $this->key = self::$keycount;
        }
        return $this->key;
    }
}


class LiteralExpression extends Expression
{
    private $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        $context->replace($this, $this->value);
    }
}


class VariableExpression extends Expression
{
    private $name;
    private $val;

    public function __construct($name, $value = null)
    {
        $this->name = $name;
        $this->val = $value;
    }

    public function interpret(InterpreterContext $context)
    {
        if (!is_null($this->val)) {
            $context->replace($this, $this->val);
            $this->val = null;
        }
    }

    /**
     * @param mixed $val
     */
    public function setValue($val)
    {
        $this->val = $val;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->name;
    }


}