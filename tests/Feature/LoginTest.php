<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class LoginTest extends TestCase
{
    public function testUserCanSeeLoginForm() {
        $response = $this->get('/login');

        $response->assertSuccessful()
                 ->assertViewIs('auth.login');
    }
    public function testUserCanSeeRegisterForm() {
        $response = $this->get('/register');

        $response->assertSuccessful()
                 ->assertViewIs('auth.register');
    }
    public function testUserCannotSeeLoginFormWhenLoggedIn() {
        $user = Factory(User::class)->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/dashboard');
    }
    public function testUserCannotSeeRegisterFormWhenLoggedIn() {
        $user = Factory(User::class)->make();

        $response = $this->actingAs($user)->get('/register');

        $response->assertRedirect('/dashboard');
    }
    public function testGuestCannotSeeDashboard() {
        $response = $this->get('/dashboard');

        $response->assertRedirect('/login');
    }
}
