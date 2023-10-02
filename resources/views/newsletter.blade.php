@extends('layouts.master')
@section('title','Newsletters | AEUA')

@section('page_title','Newsletters')

@section('content')
    <div class="listing">
        <div class="table-wrapper">
            <span>Newsletters</span>
            <div class="addBtn" id="openForm" data-toggle="modal" data-target="#eventModalCreate">
                <i class="fa-solid fa-plus"></i>
                <span>Add Newsletter</span>
            </div>
        </div>
        <div class="table_listing">
            <table class="tbl_listing">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Issued By</th>
                        <th>Issued On</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!$newsletters->isEmpty())
                        @foreach($newsletters as $newsletter)
                            <tr>
                                <td>{{$newsletter -> title}}</td>
                                <td>{{$newsletter -> issued_by}}</td>
                                <td>{{$newsletter -> issued_on}}</td>
                                <td class="actionsContainer">
                                    <div class="dropdown">
                                        <button class="actionsBtn" onclick="togglePopMenu()">
                                            <i class="fa-solid fa-ellipsis"></i>
                                        </button>
                                        <div class="popupMenu" id="popUpMenu">
                                            <div class="menu-item">
                                                <a href="{{route('newsletter.show',['id'=>$newsletter->id])}}">
                                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                    <span>View Newsletter</span>
                                                </a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="deleteBtn" id="deleteBtn" data-id="{{$newsletter->id}}">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span>Delete Newsletter</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">
                                No Newsletters Found. Please create 
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            @if(!empty($newsletters))
            <div class="paginationWrapper">
                {{$newsletters->links('pagination::bootstrap-4')}}
            </div>
            @endif
        </div>

    </div>
    @include('modals.create-newsletter')

    <div class="dialog" id="deleteModal">
        <div class="dialog-content">
            <div class="dialog-header">
                <span class="dialog-title">Delete Newsletter</span>
                <span class="close" id="hideDialog">&times;</span>
            </div>
            <div class="dialog-body">
                @if(isset($newsletter))
                    <form action="{{route('newsletter.destroy',$newsletter -> id)}}" method="POST" id="formDelete">
                        @csrf
                        @method('DELETE')
                        <div class="">
                            <span>Are you Sure you Want to delete the Newsletter?</span>
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
@endsection