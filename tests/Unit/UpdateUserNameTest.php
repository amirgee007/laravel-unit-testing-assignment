<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateUserNameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateUser()
    {
		//just creating a new user in case of no user 
        factory(User::class)->create();

        $data['name'] = 'Steve Smith';

        $user = User::first();
        $user->update($data);

        $this->assertInstanceOf(User::class, $user);

        $this->assertEquals($data['name'], $user->name);

        $this->assertTrue(true);
    }
}
