<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteCar()
    {
		//just creating a new car in case of no car 
        factory(Car::class)->create();
		
        $car = Car::first();

        if($car)
            $car->delete();

        $this->assertTrue(true);
    }
}
