@extends('layouts.master')
@section('title','Member | AEUA')

@section('page_title','Member')

@section('content')
    <div class="member-container">
        <h2>Member Details</h2>
        <div class="section-container">
            <div class="detail-container uni-container">
                <div class="container-title">
                    <span>University Details</span>
                </div>
                <div class="attr-container">
                    <div class="attr-item">
                        <span>University Name</span>
                        <span>{{$member->university_name}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Year Founded</span>
                        <span>{{$member->year_founded}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Email</span>
                        <span>{{$member->university_email}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Website</span>
                        <span>{{$member->website}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Number of Schools</span>
                        <span>{{$member->number_of_schools}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Number of Students</span>
                        <span>{{$member->number_of_students}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Number of Lecturers</span>
                        <span>{{$member->number_of_lecturers}}</span>
                    </div>
                    <div class="attr-item">
                        <span>City</span>
                        <span>{{$member->city}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Country</span>
                        <span>{{$member->country}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Address</span>
                        <span>{{$member->address}}</span>
                    </div>
                </div>
            </div>
            <div class="detail-container leader-container">
                <div class="container-title">
                    <span>University Leadership</span>
                </div>
                <div class="attr-container">
                    <div class="attr-item">
                        <span>Title</span>
                        <span>{{$leader->title}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Year Appointed</span>
                        <span>{{$leader->year_appointed}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Name</span>
                        <span>{{$leader->name}}</span>
                    </div>
                </div>
            </div>
            <div class="detail-container contact-container">
                <div class="container-title">
                    <span>University Contact Person</span>
                </div>
                <div class="attr-container">
                    @foreach($persons as $person)
                    <div class="attr-item">
                        <span>Position</span>
                        <span>{{$person -> position}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Name</span>
                        <span>{{$person -> name}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Title</span>
                        <span>{{$person -> title}}</span>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="detail-container entreprenuership-container">
                <div class="container-title">
                    <span>Entrepreneurship Strategy</span>
                </div>
                <div class="attr-container">
                    <div class="attr-item">
                        <span>Strategy</span>
                        <span>{{$entreprenuership->strategy}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Number of Support infrastructures</span>
                        <span>{{$entreprenuership->support_frameworks}}</span>
                    </div>
                    <div class="attr-item">
                        <span>Entrepreneurship Proportion</span>
                        <span>{{$entreprenuership->entre_proportion}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection