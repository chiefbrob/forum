<?php

namespace App\Http\Controllers\Threads;

use App\Http\Controllers\Controller;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ThreadsShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $thread_id
     *
     * @throws \Throwable
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke($thread_id)
    {
        try {
            return view('threads.show')
                ->withThread(Thread::findOrFail($thread_id));
        } catch (\Throwable $th) {
            Log::error($th);
            return response()->json($th->getMessage());
        }
    }
}
