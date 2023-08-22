<?php

namespace Tests\Feature\Models\Site;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagModelTest extends TestCase
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
