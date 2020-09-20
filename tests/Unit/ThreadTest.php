<?php

namespace Tests\Unit;

use App\Thread;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ThreadTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->thread = factory(Thread::class)->create();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testAThreadHasReplies()
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->thread->replies);
    }

    public function testAThreadBelongsToAUser()
    {
        $this->assertInstanceOf('App\User', $this->thread->user);
    }
}
