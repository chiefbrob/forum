<div class="card mb-1">
    <div class="card-header">
        <a href="#">{{ $reply->user->name }}</a> replied {{ $reply->updated_at->diffForHumans() }}
    </div>

    <div class="card-body">
        <?php print $reply->body; ?>
    </div>
</div>