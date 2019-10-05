<div class="container is-fluid">

    <section class="section">
        <div class="container">
            <div class="column is-full"></div>
            <div class="columns is-desktop is-vcentered">

                <div class="column is-6-desktop ">
                    <h2 class="title has-text-danger">{{$event->title}}</h2>
                    <p class="subtitle">{{$event->user->fname. ' '.$event->user->lname }}</p>
                    <p class="subtitle">{{$event->body}} </p>
                    @include('posts.addnew')

                    @foreach($posts as $post)
                    @include('posts.templates.posttemplate')
                    @endforeach

                    </tbody>

                </div>

                <div class="column is-6-desktop"><img src="https://bulma.dev/placeholder/pictures/bg_4-3.svg?primary=00d1b2" alt="">
                    <div class="level is-mobile">
                        <div class="level-item"><img src="https://bulma.dev/placeholder/pictures/bg_4-3.svg?primary=00d1b2" alt=""></div>
                        <div class="level-item"><img src="https://bulma.dev/placeholder/pictures/bg_4-3.svg?primary=00d1b2" alt=""></div>
                        <div class="level-item"><img src="https://bulma.dev/placeholder/pictures/bg_4-3.svg?primary=00d1b2" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>