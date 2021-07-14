<?php
declare (strict_types=1);

namespace App\Tests\Application\Command;

use PHPUnit\Framework\TestCase;

class UpdateRideServiceCommandHandlerTest extends TestCase
{
    public function testGivenAValidDataThenCreateRideSeviceIsUpdated(){
        self::assertTrue(true);
    }

    public function testGivenAnInvalidDataThenThrowException(){
        self::assertTrue(true);
    }

    public function testGivenAnNonExistRideServiceThenThrowException(){
        self::assertTrue(true);
    }


}