@extends('BaseLayout.main_layout')
@section('content')
    @include('Includes.notification')    
    <div id="main_container">
        <div id="header">
            User List
        </div>
        <div id="content">
            <div  id="user_list" data-user-list ="{{json_encode($users)}}" data-rounte={!array("update" =>route("updateUser",["user_id"=>1]), "delete"=>"b")}}>
            </div>
        </div>
    </div>
@endsection