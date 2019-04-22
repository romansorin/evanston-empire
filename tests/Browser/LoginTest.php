<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\User;

class LoginTest extends DuskTestCase
{
    public function testUserRegisterForm() {
         $this->browse(function ($browser) {
            $browser->visit('/register')
                    ->type('name', 'John Doe')
                    ->type('email', 'johndoe@johndoeing.com')
                    ->type('password', 'password')
                    ->type('password-confirm', 'password')
                    ->press('Register')
                    ->assertPathIs('/dashboard');
        });
    }
}
