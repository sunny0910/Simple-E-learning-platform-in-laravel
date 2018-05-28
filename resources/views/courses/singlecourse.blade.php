@extends('layouts.index')
@section('content')

@if (session('flash_message'))
    <div class="card-body">
        <div class="alert alert-success">
            {{ session('flash_message') }}
        </div>
    </div>
@endif

@if (Auth::check() && Auth::id() == $author->id)
    <a href="{{ route('course.edit', [$course->id]) }}" class="btn btn-secondary" id= "course_button">Edit Course</a>
    {!! Form::open(['method' => 'delete', 'route' => ['course.destroy', $course->id]]) !!}
    <input type="submit" value="Delete Course" class="btn btn-danger" id= "course_button">
    {!! Form::close() !!}
@endif
<div class="jumbotron">
    <div class="course-title">
        <h1 class = "display-4">{{ $course->title }}</h4>
    </div>

    <div class="course-image">
        {!! Html::image('/storage/'.$course->thumbnail, 'thumbnail') !!}
    </div>

    <div class="published">
        <h6>Published on: {{ $course->created_at->toFormattedDateString() }}</h6>
    </div>
    <div class="author">
        <h6 class= "lead">Author: {{ $author->name }}</h6>
    </div>

    @if ($enroll == true && Auth::user()->role->first()->name == "Student")
        <div class="course-content">
            <p class = "lead">{{ $course->description }}</p>
        </div>
        <div class="course-button">
            <a href="{{ route('course.unenroll', [$course->id]) }}" type="button" class="btn btn-primary btn-lg">Unenroll</a>
            @if ($complete == false)
                <br></br>
                <a href="{{ route('course.complete', [$course->id]) }}" type="button" class="btn btn-primary btn-lg" >Mark as Complete</a>
                <br></br>
            @endif
        </div>
    @else
        @if ($complete == false)
            <a href="{{ route('course.enroll', [$course->id]) }}" type="button" class="btn btn-primary btn-lg" >Enroll</a>
        @endif
    @endif
</div>
@endsection