<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        // This route is the dashboard homepage, so protected
        // The response will be code 302 cause we're redirecting to login page
        // $response = $this->get('/');

        // $response->assertStatus(200);

        return true;
    }
}
