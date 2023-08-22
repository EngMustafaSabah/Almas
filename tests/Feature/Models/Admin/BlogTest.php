<?php

namespace Tests\Feature\Models\Admin;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogModelTest extends TestCase
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
