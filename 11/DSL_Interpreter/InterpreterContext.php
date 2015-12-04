<?php

class InterpreterContext
{
    private $expressions_store = array();

    public function replace(Expression $exp, $value)
    {
        $this->expressions_store[$exp->getKey()] = $value;
    }

    public function lookup(Expression $exp)
    {
        return $this->expressions_store[$exp->getKey()];
    }
}