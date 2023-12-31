@extends('layouts.web')
@section('Web_page','Contact Us | AEUA')


@section('content')

@include('partials/carousel',['pageTitle'=>'Contact Us'])
     <!-- START OF CONTACT INFORMATION -->

     <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-1 pb-1">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Need to get in touch with us ?</h2>
            <p>Please do not hesistate to contact us. Leave us
              a brief message about your inquiry, and we will get back to you as soon as possible.</p>
          </div>
        </div>
        <div class="row">
            <form method="post" action="{{route('concern.store')}}" class="contact-form">
              @csrf
              @method('post')
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
              <div class="form-group">
                <label for="name">Name(e.g John Doe)</label> 
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <label for="email">Email(e.g johnDoe@gmail.com)</label>
                <input type="text" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <label for="member_name">University Name(e.g Bar University)</label>
                <input type="text" class="form-control" name="member_name" placeholder="Member Name" required>
              </div>
              <div class="form-group">
              <label for="message">Message(inquiry)</label>
                <textarea  cols="30" rows="7" name="message" id="message" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn submit-Btn btn-primary py-3 px-5 ml-auto">
              </div>
            </form>
        </div>
      </div>
    </section>
     <!-- <section class="ftco-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 pr-md-5 contact-box">
            <h4 class="mb-4 contact-title">Contact Us</h4>
            <div>
              <div class="contact-item py-2">
                <p class="contact-text">Need to get in touch with us?</p>
                <p class="contact-txt">Please do not hesistate to contact us. Leave us
                    a brief message about your inquiry, and we will get back to you as soon as possible.
                </p> 
              </div> 
               <div class="contact-item py-2">
                <p><span>Phone:</span> <a href="tel://1234567920">+ 1 235 2355 98</a></p>
              </div>
              <div class="contact-item py-2">
                  <p>
                    <span>Email:</span>
                    <ul>
                      <li><a href="mailto:yitna@un.org">yitna@un.org</a></li>
                      <li><a href="mailto:workneh@un.org">workneh@un.org</a></li>
                    </ul>
                  </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 pr-md-5 contact-box">
          <h4 class="mb-4">Do you have any questions?</h4>
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
            <form method="post" action="{{route('concern.store')}}" class="contact-form">
              @csrf
              @method('post')
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="member_name" placeholder="Member Name" required>
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" name="message" id="message" class="form-control" placeholder="Message" required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn submit-Btn btn-primary py-3 px-5 ml-auto">
              </div>
            </form>
        	</div>
        </div>
      </div>
    </section> -->
    <!-- END OF CONTACT INFORMATION -->
@endsection