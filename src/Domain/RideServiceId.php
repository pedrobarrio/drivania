<?php
declare (strict_types=1);

namespace App\Domain;


use Assert\Assert;

class RideServiceId
{
    private string $id;

    public function __construct(string $id)
    {
        Assert::that($id)->uuid();
        $this->id = $id;
    }

    public function equals(self $rideServiceId): bool
    {
        return $this->value() === $rideServiceId->value();
    }

    public function value(): string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->value();
    }
}