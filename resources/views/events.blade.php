@extends('layouts.master')
@section('title','Events | AEUA')

@section('page_title','Events')

@section('content')
    <div class="listing">
        <div class="table-wrapper">
            <span>Events</span>
            <div class="addBtn" id="openForm" data-toggle="modal" data-target="#eventModalCreate">
                <i class="fa-solid fa-plus"></i>
                <span>Add Event</span>
            </div>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button> -->
        </div>
        <div class="table_listing">
            <table class="tbl_listing">
                <thead>
                    <tr>
                        <th>Theme</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{$event->theme}}</td>
                        <td>{{$event->event_date}}</td>
                        <td>{{$event->location}}</td>
                        <td class="actionsContainer">
                            <div class="dropdown">
                                <button class="actionsBtn" onclick="togglePopMenu()">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <div class="popupMenu" id="popUpMenu">
                                    <div class="menu-item">
                                        <a href="#">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            <span>View Event</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <span>Edit Event</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#">
                                            <i class="fa-solid fa-trash"></i>
                                            <span>Delete Event</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!empty($events))
            <div class="paginationWrapper">
                {{$events->links('pagination::bootstrap-4')}}
            </div>
            @endif
        </div>

    </div>

    @include('modals.create')
@endsection