<?php

require __DIR__ . "/../config/bootstrap.php";

$myVar = "hello world!";

var_dump($myVar);
print_r($myVar);

$allVars = get_defined_vars();
print_r($allVars);
debug_zval_dump($allVars);

sayHello($myVar);
