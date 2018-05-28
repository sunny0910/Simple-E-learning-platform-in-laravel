@extends('layouts.index')
@section('content')
    <div class="container">
        {!! Form::open(['method' => 'POST', 'action' => 'UserController@store', 'id' => 'user_create_form']) !!}
        @include('users.form')
    </div>
@endsection