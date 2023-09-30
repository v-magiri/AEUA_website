@extends('layouts.master')
@section('title','Events | AEUA')

@section('page_title','Events')

@section('content')
    <div class="event-container">
        <h2>Event Details</h2>
        <div class="event-box">
            <div class="event-item">
                <span>Event Theme</span>
                <span>{{$event->theme}}</span>
            </div>
            <div class="event-item">
                <span>Event Date</span>
                <span>{{$event->event_date}}</span>
            </div>
            <div class="event-item">
                <span>Event Location</span>
                <span>{{$event->location}}</span>
            </div>
            <div class="desc-box">
                <span>Event Description</span>
                <span class="event-desc">{{$event->description}}</span>
            </div>
            <div class="desc-box">
                <span>Event Banner Image</span>
                <img src="{{asset('uploads/events/'.$event->image_path)}}" alt="Event Image" class="event-image">
            </div>
        </div>
    </div>
@endsection