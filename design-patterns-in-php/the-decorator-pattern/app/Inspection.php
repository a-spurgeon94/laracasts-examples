<?php

// You would very quickly end up with many classes that look the same
// Prices are hard-coded, so if something changes, update in multiple places
// No way of extending inspection without hardcoding new inspections

class BasicInspection
{
    public function getCost() {
        return 19;
    }
}

class BasicInspectionAndOilChange
{
    public function getCost() {
        return 19 + 19;
    }
}

class BasicInspectionAndOilChangeAndTireRotation
{
    public function getCost()
    {
        return 19 + 19 + 10;
    }
}

echo (new BasicInspectionAndOilChangeAndTireRotation())->getCost();