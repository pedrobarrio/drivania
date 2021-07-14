<?php
declare (strict_types=1);

namespace App\Domain\ValueObject;


use App\Domain\Exceptions\InvalidVehicleType;

class VehicleType
{
    const VALID_TAGS = ['sedan','van','suv'];

    private $tag;

    private function __construct(string $tag)
    {
        $this->validateTag($tag);
        $this->tag = $tag;
    }

    private function validateTag(string $tag)
    {
        if (!\in_array($tag, self::getValidTags())) {
            throw new InvalidVehicleType($tag);
        }
    }

    public static function getValidTags(): array
    {
        return self::VALID_TAGS;
    }

    public static function fromString(string $tag): self
    {
        return new self($tag);
    }

    public static function modelName(): string
    {
        return 'vehicle_tags';
    }

    public static function jsonValues(): array
    {
        return array_map(static function ($value) {
            return ['tag' => $value];
        }, array_values(self::getValidTags()));
    }

    public function tag(): string
    {
        return $this->tag;
    }
}