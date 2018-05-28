@extends('layouts.index')
@section('content')
    @if (session('flash_message'))
        <div class="card-body">
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        </div>
    @endif
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id], 'id' => 'user_create_form']) !!}
    @include('users.form')
@endsection