@extends('layouts.master')
@section('title','Member | AEUA')

@section('page_title','Member')

@section('content')
    <div class="member-edit-cont">
        <form action="" method="post" class="edit-form">
            <div class="form-header">
                <span>Edit Member Details</span>
            </div>
            <div class="form-body">
                <div class="section-wrapper">
                    <div class="section-title">
                        <span>Member Details</span>
                    </div>
                    <div class="section-body">
                        <div class="row-group">
                            <div class="input-group">
                                <label for="uni_name"> Name of your University</label>
                                <input type="text" class="form-control" name="uni_name" value="{{$member->university_name}}" id="uni_name" required />
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="schools">Number of schools/faculties</label>
                                <input type="number" class="valueField form-control" name="schools" id="schools" value="{{$member->number_of_schools}}"  min="1" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="students">Number of students</label>
                                <input type="number" class="valueField form-control" value="{{$member->number_of_students}}" name="students" id="students"  min="1" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="lecturers">Number of lecturers</label>
                                <input type="number" class="valueField form-control" name="lecturers" value="{{$member->number_of_lecturers}}" id="lecturers" min="1" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group yearPicker">
                                <label for="year">Year founded</label></br>
                                <select class="form-select" name="year" id="year"></select>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="uni_email">Email:</label>
                                <input type="email" class="textField form-control" name="uni_email" value="{{$member->university_email}}" id="uni_email" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="country">Country</label>
                                <input type="text" class="textField form-control" name="country" id="country" value="{{$member->country}}" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="website">Website:</label>
                                <input type="text" class="textField form-control" name="website" id="website"   value="{{$member->website}}" required/>
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
                                <input type="text" class="form-control" name="title" id="title" value="{{$leader->title}}" required />
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                            <div class="input-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{$leader->name}}"  required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group yearPicker">
                                <label for="year_appointed">Year Appointed</label>
                                <select class="form-select" name="year_appointed" id="year_appointed"></select>
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
                                <input type="number" name="support_frameworks"  class="form-control" id="support_frameworks"  value="{{$entreprenuership->support_frameworks}}"  min="0" required/>
                                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="entre_proportion"> Proportion of students that learning entrepreneurship (% of total student population)</label>
                                <input type="number" class="form-control" name="entre_proportion" id="entre_proportion" value="{{$entreprenuership->entre_proportion}}" min="0" required/>
                            </div>
                        </div>
                        <div class="row-group">
                            <div class="input-group">
                                <label for="strategy">Overview of your university 
                                entrepreneurship strategy or approach: (include key activities)
                                </label>
                                <textarea name="strategy" required id="strategy" cols="30" row-groups="7" class="form-control"></textarea>
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
@endsection