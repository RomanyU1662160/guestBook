@extends('layouts.app')

@section('title', 'All_Posts')

@section('content')
<section class="section">
    <h1 class="title has-text-centered has-text-primary">All Posts </h1>
    @foreach($posts as $post)
    @include('posts.templates.posttemplate')
    @endforeach
</section>
@endsection