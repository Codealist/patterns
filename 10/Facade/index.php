<?php

include "noodles.php";

$facade = new ProductFacade(__DIR__."/test.txt");
print_r($facade->getProducts());