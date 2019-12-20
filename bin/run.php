#!/usr/bin/env php
<?php

namespace App;

require "__DIR__/../vendor/autoload.php";

use App\Circle;

$c1 = new Circle(20);

print_r($c1);
print_r($c1->setRadius(10));
print_r("\n");
print_r($c1->getRadius());
print_r("\n");
print_r($c1->getArea());
print_r("\n");
print_r($c1->getCircumference());
print_r("\n");