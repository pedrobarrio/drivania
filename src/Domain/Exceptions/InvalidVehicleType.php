<?php

declare(strict_types=1);

namespace App\Domain\Exceptions;


class InvalidVehicleType extends \Exception
{
    private $type;

    public function __construct(string $tag)
    {
        parent::__construct();
        $this->type = $tag;
    }

    public function type(): string
    {
        return 'INVALID_TYPE';
    }

    public function details(): string
    {
        return 'Invalid type "'.$this->type.'"';
    }

    public function value(): string
    {
        return $this->type;
    }
}
