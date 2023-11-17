<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VeggiesRouteTest extends TestCase
{
    /** @test */
    public function it_displays_baigan_on_veggies_baigan_route()
    {
        $response = $this->get('/veggies/baigan');

        $response->assertStatus(200); // Assert the HTTP status code
        $response->assertSeeText('Baigan'); // Assert the response body contains 'Baigan'
    }
}

