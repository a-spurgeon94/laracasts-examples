<?php

// What are the downsides to this?
// Breaking SOLID principles, Open/Closed Principle (OCP)
// Object or component should be open for extension and closed for modification
// Every time you add a new service, have to add additional methods
// Introduces breakage and bugs

class CarService {
    protected $cost = 25;

    public function getCost()
    {
        return 25;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }

    public function withOilChange()
    {
        $this->cost += 29;
    }

    public function withTireRotation()
    {
        $this->cost += 15;
    }
}
