<?php

namespace Tests\Feature\Http\Controllers\Site;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserControllerTest extends TestCase
{
    /**
     * A basic test example.
     * */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
