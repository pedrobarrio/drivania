<?php
declare (strict_types=1);

namespace App\Domain\ValueObject;

class Location
{
    private string $name;
    private float $latitude;
    private float $longitude;

    private function __construct() { }

    public static function create(string $name, float $latitude, float $longitude): self
    {
        $location = new self();
        $location->name = $name;
        $location->latitude = $latitude;
        $location->longitude = $longitude;

        return $location;
    }



}