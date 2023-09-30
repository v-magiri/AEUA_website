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
                                    <div class="menu-item" id="viewEventBtn">
                                        <a href="{{route('event.show',['id'=>$event->id])}}">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            <span>View Event</span>
                                        </a>
                                    </div>
                                    <div class="menu-item" id="editEventBtn" >
                                        <a href="{{route('event.edit',['id'=>$event->id])}}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <span>Edit Event</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">  
                                        <a class="deleteBtn" id="deleteBtn" data-id="{{$event->id}}">
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

    <div class="dialog" id="deleteModal">
        <div class="dialog-content">
            <div class="dialog-header">
                <span class="dialog-title">Delete Event</span>
                <span class="close" id="hideDialog">&times;</span>
            </div>
            <div class="dialog-body">
                <form action="{{route('event.destroy',$event->id)}}" method="POST" id="formDelete">
                    @csrf
                    @method('DELETE')
                    <div class="">
                        <span>Are you Sure you Want to delete the Event?</span>
                    </div>
                    <div class="actionBtns">
                        <div class="cancelBtn" id="cancelDelete">
                            Cancel
                        </div>
                        <div class="deleteBtn" id="confirmDelete">
                            Delete
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const deleteBtn=document.getElementById("deleteBtn");
        const popUpMenu=document.getElementById("popUpMenu");
        const hideModal=document.getElementById("cancelDelete");
        const hideDialog=document.getElementById('hideDialog');
        const deleteDialog=document.getElementById('deleteModal');
        const confirmDelete=document.getElementById('confirmDelete');
        const form=document.getElementById('formDelete');


        deleteBtn.addEventListener('click',OpenDeleteDialog);

        confirmDelete.addEventListener('click',function(e){
            e.preventDefault();
            form.submit();
            hideDeleteModal();
        })


        hideModal.addEventListener('click',hideDeleteModal);

        hideDialog.addEventListener('click',hideDeleteModal);

        function OpenDeleteDialog() {
            deleteDialog.style.display = 'block';
            popUpMenu.classList.toggle('menu-visible');
        }

        function hideDeleteModal() {

            deleteDialog.style.display = 'none';

        }
    </script>
@endsection