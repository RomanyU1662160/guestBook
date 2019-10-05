@extends('layouts.app')

@section('title', 'All_Events')

@section('content')
<h1 class="title has-text-centered has-text-primary">All events </h1>
@foreach($events as $event)
@include('events.templates.event-template')

@endforeach

@endsection