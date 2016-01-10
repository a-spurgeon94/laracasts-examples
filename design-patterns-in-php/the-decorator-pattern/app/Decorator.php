<?php

interface CarService {
    public function getCost();
    public function getDescription();
}

class BasicInspection implements CarService {
    public function getCost()
    {
        return 25;
    }

    public function getDescription()
    {
        return 'Basic Inspection';
    }
}

class OilChange implements CarService
{
    // Inject Decorator
    protected $carService;

    // Accept instance of the service/contract
    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and an Oil Change';
    }
}

echo (new OilChange(new BasicInspection()))->getCost();


class TireRotation implements CarService
{
    protected $carService;

    public function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost();
    }

    public function getDescription()
    {
        return $this->carService->getDescription() . ', and a Tire Rotation';
    }
}

echo (new TireRotation(new OilChange(new BasicInspection())))->getCost();

$service = new OilChange(new TireRotation(new BasicInspection));

echo $service->getDescription();