<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * Tests that the threads page loads correctly
     *
     * @return void
     */
    public function testAUserCanBrowseThreads()
    {
        $response = $this->get('/threads');

        $response->assertStatus(200);
    }
}
