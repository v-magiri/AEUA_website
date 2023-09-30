@extends('layouts.master')
@section('title','Concerns | AEUA')

@section('page_title','Concerns')

@section('content')
    <div class="listing">
        <div class="table-wrapper">
            <span>Concerns</span>
        </div>
        <div class="table_listing">
            <table class="tbl_listing">
                <thead>
                    <tr>
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Member Name</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($concerns as $concern)
                    <tr>
                        <td>{{$concern-> name}}</td>
                        <td>{{$concern -> email}}</td>
                        <td>{{$concern -> member_name}}</td>
                        <td>{{$concern -> message}}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @if(!empty($concerns))
            <div class="paginationWrapper">
                {{$concerns->links('pagination::bootstrap-4')}}
            </div>
            @endif
        </div>
    </div>
@endsection