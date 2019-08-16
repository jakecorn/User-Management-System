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
                <div id="registrationForm" data-input="{{json_encode(session()->getOldInput())}}"></div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>                        
            </form>
        </div>
    </div>
@endsection