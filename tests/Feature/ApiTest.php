<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * @test
     */
    public function return_cat_json()
    {
        $response = $this->get('/api/cat');

        $response->assertStatus(200);
    }
}
