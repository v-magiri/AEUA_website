@extends('layouts.master')
@section('title','Events | AEUA')

@section('page_title','Events')

@section('content')
<div class="edit-container">
        <div class="edit-wrapper">
            <span>Update Event</span>
        </div>
    <form action="{{route('event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="theme" class="my-1">Theme:</label>
            <input type="text" class="form-control" name="theme" value="{{$event->theme}}" placeholder="Theme" required>
        </div>
        <div class="form-group">
            <label for="location" class="my-1">Location:</label>
            <input type="text" class="form-control" name="location" value="{{$event->location}}" placeholder="location" required>
        </div>
        <div class="form-group">
            <label for="description" class="my-1">Description:</label>
            <input type="text" class="form-control" name="description" value="{{$event->description}}" placeholder="description" required>
        </div>
        <div class="form-group">
            <label for="event_date" class="my-1">Event Date:</label>
            <input type="date" class="form-control" name="event_date" value="{{$event->event_date}}" placeholder="Event Date" required>
        </div>
        <div class="btns-group my-2">
            <a href="{{route('events')}}" class="closeBtn" id="hideBtn">Back</a>
            <input type="submit" value="Save" class="btn submit-Btn btn-primary ml-auto">
        </div>
    </form>
</div>
@endsection