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
        $response->assertJson(['url' => 'http://placekitten.com/200/300']);
        print("\e[1;37;41mWARNING! return_cat_json is coupled to the code, refactor or continue at your own risk\e[0m\n");
    }

    /**
     * @test
     */
    public function return_dog_json()
    {
        $response = $this->get('/api/dog');
        $response->assertStatus(200);
        $response->assertJson(['url' => 'https://placedog.net/500/280']);
        print("\e[1;37;41mWARNING! return_dog_json is coupled to the code, refactor or continue at your own risk\e[0m\n");

    }

    /**
     * @test
     */
    public function return_empty_json()
    {
        $response = $this->get('/api/whatever');
        $response->assertStatus(200);
        $response->assertJson(['url' => '']);
        print("\e[1;37;41mWARNING! return_empty_json is coupled to the code, refactor or continue at your own risk\e[0m\n");
    }
}
