<div class="card ">
    <div class="card-content ">
        <article class="">
            <h3 class="title has-text-primary">
                {{$event->title}}
            </h3>
        </article>
        <span class="subtitle">
            {{$event->user->fname. " " .  $event->user->lname}}
        </span>
    </div>
    <footer class="card-footer">
        <p class="card-footer-item">
            <span>
                <a href="{{route('event.show', $event)}}"> Event details </a>
            </span>
        </p>
        <p class="card-footer-item is-warning">
            <span>
                More events from: <a href="{{route('event.show', $event)}}"> {{$event->user->fname. " " .  $event->user->lname}}</a>
            </span>
        </p>
    </footer>
</div>
<hr />