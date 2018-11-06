<?php

namespace Tests\Unit;

use App\Car;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CheckCarModelTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelType()
    {
        //just creating a new car or we can get from database too
        factory(Car::class)->create();

        $car =  Car::first();

        $this->assertInternalType("string", $car->model);
        $this->assertTrue(true);

    }
}
