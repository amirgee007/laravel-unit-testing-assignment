<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCarsMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarsMakeType()
    {
        $makeArray = ['ford','honda' ,'toyota'];

        //just creating a new car or we can get from database too
        factory(Car::class)->create();

        $car =  Car::first();

        $this->assertContains( $car->make, $makeArray );

        $this->assertTrue(true);

    }
}
