@extends('layouts.master')
@section('title','Newsletter | AEUA')

@section('page_title','Newsletter')

@section('content')
    <div class="edit-container">
        <div class="edit-wrapper">
            <span>Update Newsletter</span>
        </div>
        <form action="{{route('newsletter.update' ,$newsletter->id)}}" method="post" role="form" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-1">
                <label for="title" class="my-1">Title:</label>
                <input type="text" class="form-control" name="title" placeholder="title" value="{{$newsletter->title}}" required>
            </div>
            <div class="form-group my-1">
                <label for="issued_by" class="my-1">Issued By:</label>
                <input type="text" class="form-control" name="issued_by" value="{{$newsletter->issued_by}}" placeholder="Author Name" required>
            </div>
            <div class="form-group my-1">
                <label for="issued_on" class="my-1">Issued On:</label>
                <input type="date" class="form-control" name="issued_on" value="{{$newsletter->issued_on}}" placeholder="Date issued" required>
            </div>
            <div class="btns-group my-2">
                <a href="{{route('newsletter')}}" class="closeBtn" id="closeBtn">Back</a>
                <input type="submit" value="Save" class="btn submit-Btn btn-primary ml-auto">
            </div>
        </form>
    </div>
@endsection