@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Forum Threads') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @forelse($threads as $thread)
                    <article>
                        <h4><a href="{{ $thread->path() }}">{{ $thread->title }}</a></h4>
                        <div class="body">
                            {{ $thread->body }}
                        </div>
                    </article>
                    <hr>
                    @empty
                    <p>Oops, no threads found. <a href="/threads/create" class="btn btn-success">Create a Thread</a></p>
                    @endforelse

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
