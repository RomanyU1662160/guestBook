@if(Session('success'))
<div class="section">

    <div class="notification is-success">
        <button class="delete"></button>
        <p> {{session('success')}} </p>
    </div>
</div>
@endif

@if(Session::has('danger'))
<div class="section">
    <div class="notification is-danger">
        <button class="delete"></button>
        <p>{{ @Session::get('danger')}} </p>
    </div>
</div>
@endif

@if(Session::has('primary'))
<div class="section">
    <div class="notification is-primary">
        <button class="delete"></button>
        <p>{{ @Session::get('primary')}} </p>
    </div>
</div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            $notification = $delete.parentNode;
            $delete.addEventListener('click', () => {
                $notification.parentNode.removeChild($notification);
            });
        });
    });
</script>