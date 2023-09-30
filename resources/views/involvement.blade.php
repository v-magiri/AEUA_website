@extends('layouts.master')
@section('title','Involvement Questions | AEUA')

@section('page_title','Involvement Questions')

@section('content')
    <div class="listing">
        <div class="table-wrapper">
            <span>Entreprenuership Idea/Involvement Questions</span>
        </div>
        <div class="table_listing">
            <table class="tbl_listing">
                <thead>
                    <tr>
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Sender Address</th>
                        <th>Idea Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ideas as $idea)
                    <tr>
                        <td>{{$idea-> name}}</td>
                        <td>{{$idea -> email}}</td>
                        <td>{{$idea -> address}}</td>
                        <td>{{$idea -> ideaDescription}}</td>
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