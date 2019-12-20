<?php

namespace App;

use App\CircleInterface;

class Circle implements CircleInterface
{
    
    public $radius;
    
    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    
    public function getRadius()
    {
        return $this->radius;
    }
    
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    
    public function getArea()
    {
        return M_PI * pow($this->getRadius(), 2);
    }
    
    public function getCircumference()
    {
        return 2 * M_PI * $this->getRadius();
    }
}