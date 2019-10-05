@extends('layouts.app')

@section('title', 'Add new event' )

@section('content')

<div class="section ">
    <div class="hero">

        <h1 class="title has-text-primary has-text-centered"> Add New Event </h1>
    </div>

    <form action="{{route('event.addNew')}}" method="post" class="">
        @csrf
        <div class="field">
            <label class="label">Event Title </label>
            <div class="control">
                <input class="input" type="text" name="title" id="title" placeholder="Event title ">
            </div>
        </div>


        <div class="field">
            <label class="label">Event Date</label>
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="date" name="date" id="date">
            </div>
        </div>



        <div class="field">
            <label class="label">About this event </label>
            <div class="control">
                <textarea class="textarea" name="body" id="body" placeholder="Write a short brief about your event"></textarea>
            </div>
        </div>
</div>



<div class="field is-grouped">
    <div class="control">
        <button class="button is-danger">
            <<<-- Cancel</button> </div> <div class="control">
                <button class="button is-primary">Submit -->>></button>
    </div>

</div>


</form>

@endsection