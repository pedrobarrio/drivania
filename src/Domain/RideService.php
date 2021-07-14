<?php
declare (strict_types=1);

namespace App\Domain;


use App\Domain\ValueObject\Location;
use App\Domain\ValueObject\VehicleType;

class RideService
{
    private RideServiceId $id;
    private Location $dropOff;
    private Location $pickUp;
    private VehicleType $vehicleType;

    private function __construct() { }

    public static function create(RideServiceId $id, Location $dropOff, Location $pickUp, VehicleType $vehicleType)
    {
        $rideService = new self();
        $rideService->id = $id;
        $rideService->dropOff = $dropOff;
        $rideService->pickUp = $pickUp;
        $rideService->vehicleType = $vehicleType;

         return $rideService;
    }

    public function id(): RideServiceId
    {
        return $this->id;
    }

    public function dropOff(): Location
    {
        return $this->dropOff;
    }

    public function pickUp(): Location
    {
        return $this->pickUp;
    }

    public function vehicleType(): VehicleType
    {
        return $this->vehicleType;
    }


}