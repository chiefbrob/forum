<?php

namespace Tests\Feature;

use App\Reply;
use App\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ReplyToThreadsTest extends TestCase
{
    use DatabaseMigrations;

    private $thread;
    /**
     * Preparing to test
     *
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->thread = factory(Thread::class)->create();
    }
    /**
     * Given a user can see a thread , they should be able to reply
     *
     * @return void
     */
    public function testUserCanReadAndReplyToThreads()
    {
        $reply = factory(Reply::class)->create([
            'thread_id' => $this->thread->id
        ]);
        $this->get(route('showThread', $this->thread->id))
            ->assertOk()
            ->assertSee(sprintf(`<b>%s</b> replied %s`, $reply->user->name, $reply->updated_at->diffForHumans()))
            ->assertSee($reply->body);
    }
}
