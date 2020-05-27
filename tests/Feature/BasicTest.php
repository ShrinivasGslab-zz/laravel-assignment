<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/products')
                    -> assertSee('Create New');
        });

        //$response = $this->get('/');
        //$response->assertStatus(200);
        /*$response = $this->get('products');
        $response->assertStatus(200);
        $response->assertSee('Product');
        $response->assertDontSee('Student');
        $response = $this->get('/students');
        $response->assertStatus(200);
        $response = $this->get('/products/create');
        $response->assertStatus(200);
        $response = $this->get('/students/create');
        $response->assertStatus(200);*/
    }
}
