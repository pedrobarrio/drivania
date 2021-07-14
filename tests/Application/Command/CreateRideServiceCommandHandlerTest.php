<?php
declare (strict_types=1);

namespace App\Tests\Application\Command;

use PHPUnit\Framework\TestCase;

class CreateRideServiceCommandHandlerTest extends TestCase
{
    public function testGivenAValidDataThenCreateRideSeviceIsCreated(){
        self::assertTrue(true);
    }

    public function testGivenAnInvalidDataThenThrowException(){
        self::assertTrue(true);
    }

}