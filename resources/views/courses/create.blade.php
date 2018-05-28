@extends('layouts.index')
@section('content')
    <div class="container">
        {!! Form::open(['method' => 'POST', 'action' => 'CourseController@store', 'id' => 'course_create_form', 'files' => 'true']) !!}
        @include('courses.form')
    </div>
@endsection