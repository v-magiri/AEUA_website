@extends('layouts.web')
@section('Web_page','ABOUT US | AEUA')

@section('PageTitle','About Us')

@section('content')

@include('partials/carousel',['pageTitle'=>'About Us'])
       <!-- START OF ABOUT US -->
       <section class="ftco-section">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-2">About Us</h2>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
          </div>
        </div>
        <div class="row mx-5 px-5 work-sect">
            <p>The Alliance of Entrepreneurial Universities in Africa (AEU) was launched at the 
            <a target="_blank" href="https://www.uneca.org/eighth-session-of-the-africa-regional-forum-on-sustainable-development/fourth-africa-science%2C">
            Fourth African Regional Science, Technology and Innovation Forum (ARFSD) held 
              from 01 - 02 March 2022 in Kigali, Rwanda
            </a>following a call to transform universities to 
              become providers of goods and services 
            <a target="_blank" href="https://www.unesco.org/en/articles/africa-regional-science-technology-and-innovation-forum-kicks-victoria-falls">
                made at the 2020 STI Forum in Victoria Falls, Zimbabwe.
            </a>
            </p>
            <p>The purpose of the Alliance is to encourage universities to promote, nurture and drive entrepreneurship and business
               development within the institution, in the region and beyond. The Alliance also envisions the successful development
                of entrepreneurial universities in the African continent through collective and aligned engagement, partnerships,
                 and support in encouraging universities to become entrepreneurial in nature.
            </p>
        </div>
    	</div>
    </section>
    <!-- END OF ABOUT US -->

    <!-- START OF MEMBERS -->
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Members</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
              @foreach ( $members as $member )
	    				<div class="member-item">
                <span class="member-name">{{$member ->university_name}}</span>
                <span class="member-location mb-3"><i class="fa-solid fa-location-dot mr-1"></i> 
                  {{$member -> city}},{{$member -> country}}
                </span>
	    				</div>
              @endforeach
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- END OF MEMBERS -->

    <!-- START OF PARTNERS -->
    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Partners</h2>
          </div>
        </div>
        <div class="row partner-sect">
          <div class="partner-item">
                <div class="partner-logo">
                  <img src="{{asset('assets/uneca.png')}}" alt="UNECA LOGO" class="">
                </div>
                <span>United Nations Economic Commission for Africa</span>
          </div>
          <div class="partner-item">
              <div class="partner-logo">
                  <img src="{{asset('assets/unesco.png')}}" alt="UNESCO  LOGO">
              </div>
              <span>United Nations Educational Scientific
                 and Cultural Organization</span>
          </div>
        </div>
      </div>
    </section>
    <!-- END OF PARTNERS -->
@endsection