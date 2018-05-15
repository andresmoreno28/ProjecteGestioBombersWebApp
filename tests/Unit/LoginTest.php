<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLogin()
    {
      $unUsuario =User::findOrFail(1);
      $this->browse(function ($browser) use ($unUsuario) {
          $browser->visit('/')
              ->type('identity', $unUsuario->name)
              ->type('password', 'secret')
              ->press('Accedeix')
              ->assertTrue(true);
      });
    }
}
