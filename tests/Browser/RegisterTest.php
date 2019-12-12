<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('註冊')
                    ->type('name', '林至明')
                    ->type('email', 'world_houseware@gmail.com')
                    ->type('password', '+%4Gf:dnZ>Z23]Cb')
                    ->type('password_confirmation', '+%4Gf:dnZ>Z23]Cb')
                    ->press('註冊')
                    ->assertPathIs('/home');
        });
    }
}
