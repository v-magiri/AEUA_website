@extends('layouts.web')
@section('Web_page','Events | AEUA')

@section('PageTitle','Events & Calls')

@section('content')

@include('partials/carousel',['pageTitle'=>'Events & Calls'])
<!-- START OF EVENTS -->
<section class="ftco-section">
    <div class="container-fluid">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-5 heading-section ftco-animate text-center">
          <h2 class="mb-4">Events</h2>
        </div>
      </div>
      <div class="row">
      <div class="carousel-cause owl-carousel">
        <div class="event">
          <div class="">
            <div class="blog-entry align-self-stretch">
              <a href="{{url('events')}}" class="block-20" style="background-image: url('../assets/event-item.jpg');">
              </a>
              <div class="text p-4 d-block">
                  <div class="meta mb-3">
                  <div class="event-date"><span><i class="fa-solid fa-calendar-days mr-1"></i>May 2,2023</span>
                      <span class="ml-4"><i class="fa-solid fa-location-dot mr-1"></i>New York</span>
                      </div>
                  </div>
                  <h3 class="heading mb-4"><a href="#">STI Forum</a></h3>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
              </div>
              </div>
          </div>
        </div>
        <div class="event">
          <div class="">
            <div class="blog-entry align-self-stretch">
              <a href="{{url('events')}}" class="block-20" style="background-image: url('../assets/event-item.jpg');">
              </a>
              <div class="text p-4 d-block">
                  <div class="meta mb-3">
                  <div class="event-date"><span><i class="fa-solid fa-calendar-days mr-1"></i>May 2,2023</span>
                      <span class="ml-4"><i class="fa-solid fa-location-dot mr-1"></i>New York</span>
                      </div>
                  </div>
                  <h3 class="heading mb-4"><a href="#">STI Forum</a></h3>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
              </div>
              </div>
          </div>
        </div>
        <div class="event">
          <div class="">
            <div class="blog-entry align-self-stretch">
              <a href="{{url('events')}}" class="block-20" style="background-image: url('../assets/event-item.jpg');">
              </a>
              <div class="text p-4 d-block">
                  <div class="meta mb-3">
                  <div class="event-date"><span><i class="fa-solid fa-calendar-days mr-1"></i>May 2,2023</span>
                      <span class="ml-4"><i class="fa-solid fa-location-dot mr-1"></i>New York</span>
                      </div>
                  </div>
                  <h3 class="heading mb-4"><a href="#">STI Forum</a></h3>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
              </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
    <!-- END OF EVENTS -->

    <!-- START OF CALLS -->
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Calls</h2>
          </div>
        </div>
    		<div class="row call-sect">
            <div class="call-box bg-white align-self-stretch">
              <h2>Call for monthly showcasing of entrepreneurship initiatives</h2>
              <p>If you have an entrepreneurship initiative which you would like to
                showcase to members and the community in the next newsletter please contact:
              </p>
              <ul>
                <li>Asfaw Yitna	<a href="mailto:yitna@un.org" class="ml-2"><i class="fa-solid fa-envelope mr-1"></i>yitna@un.org</a></li>
                <li>Asfaw Yitna	<a href="mailto:workneh@un.org" class="ml-2"><i class="fa-solid fa-envelope mr-1"></i>workneh@un.org</a></li>
              </ul>
            </div>
            <div class="call-box bg-white align-self-stretch">
              <h2>Call for student entrepreneurship societies</h2>
              <p>Interested student societies coordinators, please contact:</p>
              <ul>
                <li>Asfaw Yitna	<a href="mailto:yitna@un.org" class="ml-2"><i class="fa-solid fa-envelope mr-1"></i>yitna@un.org</a></li>
                <li>Asfaw Yitna	<a href="mailto:workneh@un.org" class="ml-2"><i class="fa-solid fa-envelope mr-1"></i>workneh@un.org</a></li>
              </ul>
            </div>
    		</div>
    	</div>
    </section>
    <!-- END OF CALLS -->


@endsection