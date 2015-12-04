<?php

$context = new InterpreterContext();

$myvar = new VariableExpression("input", "four");
$myvar->interpret($context);
echo $context->lookup($myvar) . "<br/>";

$new_var = new VariableExpression("input");
$new_var->interpret($context);
echo $context->lookup($new_var) . "<br/>";

$myvar->setValue("five");
$myvar->interpret($context);
echo $context->lookup($myvar) . "<br/>";
echo $context->lookup($new_var) . "<br/>";

$literal = new LiteralExpression("Four");
$literal->interpret($context);

echo $context->lookup($literal) . "<br/>";