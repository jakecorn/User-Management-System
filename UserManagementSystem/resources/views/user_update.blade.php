@extends('BaseLayout.main_layout')

@section('content')  
    @include('Includes.notification')    

    <div id="main_container">
        <div id="header">
            User Registration
        </div>
        <div id="content">
            <form method="post">  
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>    
                <div id="updateForm" data-name="{{$user->name}}" data-username="{{$user->username}}" data-email="{{$user->email}}"  data-contact_number="{{$user->contact_number}}"  data-address="{{$user->address}}"></div>

                <div class="form-group">
                    <button class="btn btn-primary" style="margin-right:12px;">Update</button>                    
                    <a class="btn btn-secondary" href="{{route("user_list")}}">Cancel</a>
                </div>                        
            </form>
        </div>
    </div>
@endsection