@extends('layouts.web')
@section('Web_page','Member Registration | AEUA')

@section('head')
    <link rel="stylesheet" href="{{asset('styles/registration.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
        crossorigin="anonymous">
@endsection

@section('content')
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
  <div class="mt-5">
  <form role="form" method="post" action="{{route('member.store')}}" class="form my-5">
    @csrf
    @method('post')
      <h1 class="text-center">Member Registration</h1>
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Member"
        ></div>
        <div class="progress-step" data-title="University Leadership"></div>
        <div class="progress-step" data-title="Contact Person"></div>
        <div class="progress-step" data-title="Strategy"></div>
      </div>

      <!-- Steps -->
        <div class="form-step form-step-active">
          <div class="input-group">
            <label for="uni_name"> Name of your University</label>
            <input type="text" class="textField" name="uni_name" id="uni_name" required />
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="schools">Number of schools/faculties</label>
            <input type="number" class="valueField" name="schools" id="schools"  min="1" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="students">Number of students</label>
            <input type="number" class="valueField" name="students" id="students"  min="1" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="lecturers">Number of lecturers</label>
            <input type="number" class="valueField" name="lecturers" id="lecturers" min="1" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group yearPicker">
            <label for="year">Year founded</label></br>
            <select class="form-select" name="year" id="year"></select>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="uni_email">Email:</label>
            <input type="email" class="textField" name="uni_email" id="uni_email" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="address">Postal Address:</label>
            <input type="text" class="textField" name="address" id="address" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="city">City</label>
            <input type="text" class="textField" name="city" id="city" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="country">Country</label>
            <input type="text" class="textField" name="country" id="country" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="website">Website:</label>
            <input type="text" class="textField" name="website" id="website" required/>
            <span role="alert"  id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="">
            <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
          </div>
        </div>

        <div class="form-step">
          <div class="input-group yearPicker">
            <label for="title">Title</label>
            <select name="position" class="form-select" name ="title" id="">
                <option selected>Choose Institution Leader</option>
                <option value="Rector">Rector</option>
                <option value="President">President</option>
                <option value="Vice Chancellor">Vice Chancellor</option>
            </select>
            <!-- <input type="text" name="title" id="title" required /> -->
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group yearPicker">
            <label for="year_appointed">Year Appointed</label>
            <select class="form-select" name="year_appointed" id="year_appointed"></select>
            <span role="alert" id="errorMessage" aria-hidden="true">Please select a Value </span>
            <!-- <input type="text" id="yearPicker"> -->
            <!-- <input type="text" class="form-control" name="datepicker" id="datepicker" /> -->
            <!-- <input type="text" name="year_appointed" id="year_appointed" /> -->
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
        </div>
        <div class="form-step">
            <div class="input-group yearPicker">
                <label for="position"> Positions: (e.g. Director; Dean etc)</label>
                <!-- <input type="text" name="position" id="position" required /> -->
                <select class="form-select" name ="title" id="">
                    <option selected>Choose Position of Contact Person</option>
                    <option value="Dean">Dean</option>
                    <option value="Director">Director</option>
                    <!-- <option value="Chancellor">Chancellor</option> -->
                </select>
                <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
            </div>
          <div class="input-group">
            <label for="contact_name">Name</label>
            <input type="text" name="contact_name" id="contact_name" required />
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="contact_title">Title(e.g Prof./Dr.)</label>
            <input type="text" name="contact_title" id="contact_title" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
          </div>
        </div>
        <div class="form-step">
          <div class="input-group">
            <label for="strategy">Overview of your university 
              entrepreneurship strategy or approach: (include key activities)
            </label>
            <textarea name="strategy" required id="strategy" cols="30" rows="7" class="form-control"></textarea>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
            <!-- <input type="text" name="strategy" id="strategy" /> -->
          </div>
          <div class="input-group">
            <label for="support">Number of support infrastructures (e.g. incubators, funds to support entrepreneurial students)
            </label>
            <input type="number" name="support" id="support"   min="0" required/>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
          </div>
          <div class="input-group">
            <label for="entre_proportion"> Proportion of students that learning entrepreneurship (% of total student population)</label>
            <input type="number" name="entre_proportion" id="entre_proportion" min="0" required/>
          </div>
          <div class="input-group">
            <label for="creator">Title and name(your name and title)</label>
            <span role="alert" id="errorMessage" aria-hidden="true">Field Required </span>
            <input type="text" name="creator" id="creator"required />
          </div>
          <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <input type="submit" value="Submit" class="btn btn-submit" />
          </div>
        </div>
    </form>
  </div>
  <script src="{{asset('js/script.js')}}"></script>
@endsection