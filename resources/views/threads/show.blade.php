@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mb-4">
                <div class="card-header">
                    <b>{{ $thread->title }}</b> by <a href="#">{{ $thread->user->name }}</a> - {{ $thread->updated_at->diffForHumans() }}
                </div>

                <div class="card-body">
                    <?php print $thread->body; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            @forelse($thread->replies as $reply)
            @include('threads.reply')
            @empty
            <p>No replies available</p>
            @endforelse
        </div>
    </div>
</div>
@endsection
