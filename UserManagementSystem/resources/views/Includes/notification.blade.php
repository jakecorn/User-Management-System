<div id="notification_container">
    @if (count($errors) > 0)
        <div class="alert alert-danger message-container">
            <b>Below errors are detected: </b>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))
            <div class="alert alert-success message-container">
                <p><span>Success</span>{{ $message }}</p>
            </div>
    @endif
</div>