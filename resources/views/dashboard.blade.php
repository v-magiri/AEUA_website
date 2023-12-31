@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="stats-board">
        <div class="item">
            <a href="{{url('admin/members')}}">
                <i class="fa-solid fa-users"></i>
                <span class="item_count">{{$members}}</span> 
                <span class="item_title">Total Members</span> 
            </a>           
        </div>
        <div class="item">
            <a href="{{url('admin/events')}}">
                <i class="fa-solid fa-calendar"></i>          
                <span class="item_count">{{$eventsCount}}</span>
                <span class="item_title">Upcoming Events</span> 
            </a>             
        </div>
        <div class="item">
            <a href="{{url('admin/concerns')}}">
                <i class="fa-solid fa-message"></i>
                <span class="item_count">{{$concernCount}}</span>   
                <span class="item_title">Inquiries</span> 
            </a>
        </div>
        <!-- <div class="item">
            <i class="fa-solid fa-square-rss"></i>
            <span class="item_count">14</span>   
            <span class="item_title">Newsletters</span> 
        </div> -->
        <div class="item">
            <a href="{{url('admin/inquiries')}}">
                <i class="fa-solid fa-circle-question"></i>
                <span class="item_count">{{$involvementCount}}</span>   
                <span class="item_title">Member Questions</span> 
            </a>
        </div>
    </div>
    <div class="listing">
        <div class="table-wrapper">
            <span>Upcoming Events</span>
        </div>
        <div class="table_listing">
            <table class="tbl_listing">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$events->isEmpty())
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
                                </div>
                                <div class="popupMenu" id="popUpMenu">
                                    <div class="menu-item">
                                        <a href="{{route('event.show',['id'=>$event->id])}}">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            <span>View Event</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="{{route('event.edit',['id'=>$event->id])}}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <span>Edit Event</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <form action="{{ route('event.destroy', $event->id) }}" method="POST" class="item-delete">
                                                @csrf
                                                @method('DELETE') 
                                            <i class="fa-solid fa-trash"></i>
                                            <span>Delete Event</span>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    @else
                            <tr>
                                <td colspan="4">
                                    No Upcoming Events Found. 
                                </td>
                            </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>
    <div class="dialog" id="deleteModal">
        <div class="dialog-content">
            <div class="dialog-header">
                <span class="dialog-title">Delete Event</span>
                <span class="close" id="hideDialog">&times;</span>
            </div>
            <div class="dialog-body">
                @if(isset($event))
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
                @endif
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
@stop