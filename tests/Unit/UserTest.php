<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    public function testAUserHasThreads(): void
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->threads);
    }

    public function testAUserHasReplies(): void
    {
        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $this->user->replies);
    }
}
