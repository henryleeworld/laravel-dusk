<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        User::factory()->times(1)->create();
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/dashboard')
                    ->waitForText('控制面板')
                    ->assertSee('控制面板');
        });
    }
}
