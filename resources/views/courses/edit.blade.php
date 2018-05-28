@extends('layouts.index')
@section('content')
    @if (session('flash_message'))
        <div class="card-body">
            <div class="alert alert-success">
                {{ session('flash_message') }}
            </div>
        </div>
    @endif
<div class="container">
        {!! Form::model($course, ['method' => 'PATCH', 'files' => 'true', 'action' => ['CourseController@update',  $course->id], 'id' => 'course_create_form']) !!}
        @include('courses.form')
</div>
@endsection