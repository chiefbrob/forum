<?php

namespace Tests\Unit;

use App\Reply;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ReplyTest extends TestCase
{
    use DatabaseMigrations;
    public function setUp(): void
    {
        parent::setUp();
        $this->reply = factory(Reply::class)->create();
    }

    public function testAReplyBelongsToAThread(): void
    {
        $this->assertInstanceOf('App\Thread', $this->reply->thread);
    }

    public function testAReplyBelongsToAUser(): void
    {
        $this->assertInstanceOf('App\User', $this->reply->user);
    }
}
