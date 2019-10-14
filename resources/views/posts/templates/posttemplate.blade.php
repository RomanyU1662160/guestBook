<div class="columns">
    <div class="column is-6">{{$post->message}}</div>
    <div class="column">{{$post->created_at->diffForHumans()}}</div>
    <div class="column">{{$post->user->fname}}</div>
    <div class="column"> <button class="button is-primary"> Like</button> </div>
</div>