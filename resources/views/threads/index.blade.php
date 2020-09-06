<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Threads</title>
</head>
<body>
    @forelse($threads as $thread)
    <p>{{ $thread->title }}</p>
    @empty
    <p>Oops, no threads found. <a href="/threads/create" class="btn btn-success">Create a Thread</a></p>
    @endforelse
</body>
</html>