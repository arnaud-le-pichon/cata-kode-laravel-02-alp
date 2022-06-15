<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MeetingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testForm()
    {
        $response = $this->get('/meeting');

        $response->assertStatus(200);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreate()
    {
        $response = $this->post('/meeting');

        $response->assertStatus(302);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNoMeeting()
    {
        $response = $this->get('/meeting/AZ34RFRTYUIIERSHZR');

        $response->assertStatus(404);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testApi()
    {
        $response = $this->get('/api/meetings');

        $response->assertStatus(200);
    }
}
