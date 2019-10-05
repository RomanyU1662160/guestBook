<div class="tile is-ancestor">
    <div class="tile is-vertical is-6">
        <div class="tile is-parent is-vertical">
            <article class="tile is-child notification is-danger">
                <span class="title"> {{$event->title }}</span>
                <p> <span class="subtitle">Creator: </span><span> {{$event->user->fname." ". $event->user->lname }}</span> </p>
                <div class="content">
                    {{$event->body}}
                </div>
            </article>
        </div>
        <div class="tile">
            <div class="tile is-parent">
                <article class="tile is-child notification is-primary">
                    <p class="title">Middle tile</p>
                    <p class="subtitle">With an image</p>
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/640x480.png">
                    </figure>
                </article>
            </div>
            <div class="tile is-parent is-vertical">


                <article class="tile is-child notification is-primary">
                    <p class="title">Vertical...</p>
                    <p class="subtitle">Top tile</p>
                </article>
                <article class="tile is-child notification is-warning">
                    <p class="title">...tiles</p>
                    <p class="subtitle">Bottom tile</p>
                </article>
            </div>

        </div>

    </div>
    <div class="tile is-parent">
        <article class="tile is-child notification ">
            <div class="content">
                <p class="title">Tall tile</p>
                <p class="subtitle">With even more content</p>
                <div class="content">
                    <!-- Content -->
                </div>
            </div>
        </article>
    </div>
</div>
<div class="tile is-ancestor">
    <div class="tile is-vertical is-6">
        <div class="tile is-parent is-vertical">
            <article class="tile is-child notification is-danger">
                <span class="title"> {{$event->title }}</span>
                <p> <span class="subtitle">Creator: </span><span> {{$event->user->fname." ". $event->user->lname }}</span> </p>
                <div class="content">
                    {{$event->body}}
                </div>
            </article>
        </div>
        <div class="tile">
            <div class="tile is-parent">
                <article class="tile is-child notification is-primary">
                    <p class="title">Middle tile</p>
                    <p class="subtitle">With an image</p>
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/640x480.png">
                    </figure>
                </article>
            </div>
            <div class="tile is-parent is-vertical">


                <article class="tile is-child notification is-primary">
                    <p class="title">Vertical...</p>
                    <p class="subtitle">Top tile</p>
                </article>
                <article class="tile is-child notification is-warning">
                    <p class="title">...tiles</p>
                    <p class="subtitle">Bottom tile</p>
                </article>
            </div>

        </div>

    </div>
    <div class="tile is-parent">
        <article class="tile is-child notification ">
            <div class="content">
                <p class="title">Tall tile</p>
                <p class="subtitle">With even more content</p>
                <div class="content">
                    <!-- Content -->
                </div>
            </div>
        </article>
    </div>
</div>