<?php

namespace App\Http\Controllers\Threads;

use App\Http\Controllers\Controller;
use App\Thread;
use Illuminate\Http\Request;

class ThreadsIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('threads.index')
            ->withThreads(Thread::latest()->get());
    }
}
