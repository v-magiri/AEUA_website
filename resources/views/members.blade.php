@extends('layouts.master')
@section('title','Members | AEUA')

@section('page_title','Members')

@section('content')
    <div class="listing">
        <div class="table-wrapper">
            <span>Alliance Member</span>
        </div>
        <div class="table_listing">
            <table class="tbl_listing">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>City</th>
                        <th>Country</th>
                        <th># of Students</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td>{{\Illuminate\Support\Str::limit($member->university_name,30,' ...')}}</td>
                        <td>{{$member->city}}</td>
                        <td>{{$member->country}}</td>
                        <td>{{$member->number_of_students}}</td>
                        <td>{{$member->website}}</td>
                        <td class="actionsContainer">
                            <div class="dropdown">
                                <button class="actionsBtn" onclick="togglePopMenu()">
                                    <i class="fa-solid fa-ellipsis"></i>
                                </button>
                                <div class="popupMenu" id="popUpMenu">
                                    <div class="menu-item">
                                        <a href="{{route('member.show',['id'=>$member->id])}}">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                            <span>View Member</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="{{route('member.edit',['id'=>$member->id])}}">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            <span>Edit Member</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#">
                                            <i class="fa-solid fa-trash"></i>
                                            <span>Delete Member</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!empty($members))
            <div class="paginationWrapper">
                {{$members->links('pagination::bootstrap-4')}}
            </div>
            @endif
        </div>

    </div>
@stop
