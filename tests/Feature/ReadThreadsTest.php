<?php

namespace Tests\Feature;

use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReadThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * Tests that the threads page loads correctly
     *
     * @return void
     */
    public function testAUserCanBrowseThreads()
    {
        $thread = factory(Thread::class)->create();
        $this->get('/threads')
            ->assertOk()
            ->assertViewIs('threads.index')
            ->assertSee($thread->title);
    }

    /**
     * Tests that a user can view a thread
     *
     * @return void
     */
    public function testAUserCanViewThread()
    {
        $thread = factory(Thread::class)->create();
        $this->get(sprintf('/threads/%d', $thread->id))
            ->assertOk()
            ->assertViewIs('threads.show')
            ->assertSee($thread->title)
            ->assertSee($thread->body);
    }
}
