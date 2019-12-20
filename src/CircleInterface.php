<?php

namespace App;

interface CircleInterface
{
    public function __construct($radius);
    public function getRadius();
    public function setRadius($radius);
    public function getArea();
    public function getCircumference();
}