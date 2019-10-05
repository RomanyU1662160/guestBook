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
                <a href="#">Event Details</a>
            </span>
        </p>
        <p class="card-footer-item is-warning">
            <span>
                More events from: <a href="#"> {{$event->user->fname. " " .  $event->user->lname}}</a>
            </span>
        </p>
    </footer>
</div>
<hr />