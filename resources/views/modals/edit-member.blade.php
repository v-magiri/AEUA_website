@extends('layouts.master')
@section('title','Member | AEUA')

@section('page_title','Member')

@section('content')
    <div class="member-edit-cont">
            <div class="form-header mb-4">
                <span>Edit Member Details</span>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger" id="response-alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success" id="response-alert">
                    {{ session('success') }}
                </div>
            @endif
    <form action="{{route('member.update',$member->id)}}" method="POST" class="edit-form">
        @csrf
        @method('PUT')
            <div class="form-body">
                <div class="section-wrapper">
                    <div class="section-title">
                        <span>Member Details</span>
                    </div>
                    <div class="section-body">
                        <div class="row-group">
                            <div class="input-group">
                                <label for="uni_name"> Name of your University</label>
                                <input type="text" class="form-control" name="member[uni_name]" value="{{$member->university_name}}" id="uni_name" required />
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="schools">Number of schools/faculties</label>
                                <input type="number" class="valueField form-control" name="member[schools]" id="schools" value="{{$member->number_of_schools}}"  min="1" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="students">Number of students</label>
                                <input type="number" class="valueField form-control" value="{{$member->number_of_students}}" name="member[students]" id="students"  min="1" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="lecturers">Number of lecturers</label>
                                <input type="number" class="valueField form-control" name="member[lecturers]" value="{{$member->number_of_lecturers}}" id="lecturers" min="1" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group yearPicker">
                                <label for="year">Year founded</label></br>
                                <select class="form-select" name="member[year]" id="year">
                                </select>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="uni_email">Email:</label>
                                <input type="email" class="textField form-control" name="member[uni_email]" value="{{$member->university_email}}" id="uni_email" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="country">Country</label>
                                <input type="text" class="textField form-control" name="member[country]" id="country" value="{{$member->country}}" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="city">City</label>
                                <input type="text" class="textField form-control" name="member[city]" id="city"  value="{{$member->city}}" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="address">Postal Address:</label>
                                <input type="text" class="textField form-control" name="member[address]"   value="{{$member->address}}" id="address" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="website">Website:</label>
                                <input type="text" class="textField form-control" name="member[website]" id="website"   value="{{$member->website}}" required/>
                                <span role="alert"  id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper mt-2">
                    <div class="section-title">
                        <span>University Leadership</span>
                    </div>
                    <div class="section-body">
                        <div class="row-group">
                            <div class="input-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="leader[title]" id="title" value="{{$leader->title}}" required />
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="leader[name]" id="name" value="{{$leader->name}}"  required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group yearPicker">
                                <label for="year_appointed">Year Appointed</label>
                                <select class="form-select" name="leader[year_appointed]" id="year_appointed"></select>
                                <span role="alert" id="errorMessage" aria-hidden="true">Please select a Value </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-wrapper mt-2">
                    <div class="section-title">
                        <span>Entreprenuership</span>
                    </div>
                    <div class="section-body">
                        <div class="row-group">
                            <div class="input-group">
                                <label for="support">Number of support infrastructures (e.g. incubators, funds to support entrepreneurial students)
                                </label>
                                <input type="number" name="entreprenuership[support]"  class="form-control" id="support_frameworks"  value="{{$entreprenuership->support_frameworks}}"  min="0" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="entre_proportion"> Proportion of students that learning entrepreneurship (% of total student population)</label>
                                <input type="number" class="form-control" name="entreprenuership[entre_proportion]" id="entre_proportion" value="{{$entreprenuership->entre_proportion}}" min="0" required/>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="strategy">Overview of your university 
                                entrepreneurship strategy or approach: (include key activities)
                                </label>
                                <textarea name="entreprenuership[strategy]" required id="strategy" cols="30" row-groups="7" class="form-control" >{{$entreprenuership->strategy}}</textarea>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                                <!-- <input type="text" name="strategy" id="strategy" /> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btns-group my-2">
                <a href="{{route('events')}}" class="closeBtn" id="hideBtn">Back</a>
                <input type="submit" value="Save" class="btn submit-Btn btn-primary ml-auto">
            </div>
        </form>
    </div>
    <script src="{{asset('js/script.js')}}"></script>
@endsection