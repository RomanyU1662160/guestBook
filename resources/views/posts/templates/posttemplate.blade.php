<div class="columns">
    <div class="column is-8">{{$post->message}}</div>
    <div class="column">{{$post->created_at->diffForHumans()}}</div>
    <div class="column">{{$post->user->fname}}</div>
</div>