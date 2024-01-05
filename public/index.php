<?php

require_once('../vendor/autoload.php');

$developer = new \App\Developer("Vasya", 35, [15, 52, 12]);

$developer->work();

var_dump($developer->getAge());

$developer->rest();

$salary = \App\Salary::count($developer->getHours());
var_dump($salary);

