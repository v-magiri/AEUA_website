@extends('layouts.master')
@section('title','Newsletters | AEUA')

@section('page_title','Newsletters')

@section('content')
    <div class="listing">
        <div class="table-wrapper">
            <span>Newsletters</span>
            <div class="addBtn">
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
                                            <a href="#">
                                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                                <span>View Newsletter</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a href="#">
                                                <i class="fa-solid fa-trash"></i>
                                                <span>Delete Newsletter</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!empty($newsletters))
            <div class="paginationWrapper">
                {{$newsletters->links('pagination::bootstrap-4')}}
            </div>
            @endif
        </div>

    </div>
@stop