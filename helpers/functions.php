<?php

function sayHello(string $hello): void
{
    echo $hello;
    debug_print_backtrace();
}
