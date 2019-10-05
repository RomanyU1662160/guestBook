@extends('layouts.app')

@section('title', 'Add new event' )

@section('content')

<div class="section ">
    <div class="section">

        <h1 class="title has-text-primary has-text-centered"> Add New Event </h1>
    </div>

    <form action="{{route('event.addNew')}}" method="post" class="">
        @csrf
        <div class="field">
            <label class="label">Event Title </label>
            @if ($errors->has('title'))
            <p class="label has-text-danger"> {{$errors->first('title')}}</p>
            @endif
            <div class="control">
                <input class="input" type="text" name="title" id="title" placeholder="Event title " value="{{old('title')}}">
            </div>
        </div>
        <div class="field">
            <label class="label">Event Date</label>
            @if ($errors->has('date'))
            <p class="label has-text-danger"> {{$errors->first('date')}}</p>
            @endif
            <div class="control has-icons-left has-icons-right">
                <input class="input" type="date" name="date" id="date" value="{{old('date')}}">
            </div>
        </div>

        <div class="field">
            <label class="label">About this event </label>
            @if ($errors->has('body'))
            <p class="label has-text-danger"> {{$errors->first('body')}}</p>
            @endif
            <div class="control">
                <textarea class="textarea" name="body" id="body" placeholder="Write a short brief about your event">{{old('body')}}</textarea>
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
</div>


@endsection