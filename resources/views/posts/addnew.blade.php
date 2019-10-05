<form action="{{route('post.addNew',$event)}}" method="post" class="">
    @csrf

    <div class="field">
        @if ($errors->has('message'))
        <p class="label has-text-danger"> {{$errors->first('message')}}</p>
        @endif
        <div class="control">
            <textarea class="textarea" name="message" id="message" placeholder="Write a post for this event...." cols="0">{{old('body')}}</textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">

            <button class="button is-primary is-right">Add post -->>></button>
        </div>
    </div>
</form>