@extends('layouts.web')
@section('Web_page','Get Involved | AEUA')

@section('head')
    <link rel="stylesheet" href="{{asset('styles/registration.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
        crossorigin="anonymous">
@endsection

@section('content')
  <!-- START OF FORM -->
  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

  @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @endif

  <form method="post" action="{{route('involvement.store')}}" class="form my-4">
    @csrf
    @method('post')
    <h1 class="text-center">Get Involved</h1>
    <p class="text-center">Send your entrepreneurship ideas</p>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email"  id="email" name="email" class="form-control" placeholder="Your Email" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" id="address" name="address" class="form-control" placeholder="Your Address" required>
        </div>
        <div class="form-group">
            <label for="ideaDescription">Drop your ideas</label> 
            <textarea name="ideaDescription" id="ideaDescription" cols="30" rows="7" class="form-control" required></textarea>
        </div>
        <div class="form-group formBtn">
            <input type="submit" value="Submit" class="btn submitBtn width-50 mx-auto mt-5" />
        </div>
    </form>
  <!-- END OF FORM -->
@endsection