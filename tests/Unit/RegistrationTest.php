<?php

namespace Tests\Unit;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class RegistrationTest extends TestCase
{
//    /**
//     * A basic unit test example.
//     */
//    public function test_example(): void
//    {
//        $this->assertTrue(true);
//    }

    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('register');

        $response->assertStatus(200);
    }
}
