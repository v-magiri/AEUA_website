@extends('layouts.web')
@section('Web_page','AEUA')

@section('content')

@include('partials/carousel',['pageTitle'=>'Alliance for Entrepreneurial Universities in Africa']);
<section class="ftco-counter ftco-intro" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
              <div class="text">
              <h3 class="mb-4 text-white">Members</h3>
              <strong class="number" data-number="{{$memberCount}}">45</strong>
              <p><a href="{{url('/member-register')}}" 
                 class="btn btn-white px-3 py-2 mt-2">Become a member</a>
              </p>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text overlay-box">
              	<h3 class="mb-4 text-white">Get Involved</h3>
              	<p class="involvement-txt mb-3">Sign up to send your entrepreneurship questions and challenge.</p>
              	<p class="signupBtn mt-1"><a href="{{url('/entreprenuership')}}" 
                  class="btn btn-white px-3 py-2 mt-2">Sign up now</a></p>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <!-- START OF OUR WORK -->
    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-2">Our Work</h2>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
          </div>
        </div>
        <div class="row mx-5 px-5 work-sect">
            <p>The main objective of the AEUA is to encourage universities to promote, 
                nurture, and drive entrepreneurship and business development within the institution, 
                in the region, and beyond.
            </p>
            <p>Through collective and aligned engagement, partnerships, and support in encouraging 
                universities to become entrepreneurial, the Alliance envisions the successful development 
                of entrepreneurial universities in the African continent by:
            </p>
            <ul>
                <li>Advancing university initiatives that promote innovation and entrepreneurship, including entrepreneurship curriculum.</li>
                <li>Creating a conducive environment for universities to embark on initiatives whereby income could be generated through innovative businesses.</li>
                <li>Sharing relevant knowledge, resources, experience, and good practice.</li>
                <li> Forming strategic partnerships.</li>
            </ul>
            <p>The Alliance is gaining momentum with 22 members registered from October 2022 to January
                 2023 across Africa and several Global partners. The African Science, Technology, and 
                 Innovation (STI) Forum and Africa Regional Forum on Sustainable Development, 26 February – 
                 2 March 2023, Niger was an opportunity to showcase AEUA members, a Youth Bootcamp, 
                 and Innovation Challenges.
            </p>
            <p>One action plan identified to boost our student entrepreneurship initiatives is the 
                creation of a Student’s Entrepreneurship Hub which is student-led. The Hub would 
                be an interest and idea-sharing platform to connect people and function as a directory 
                of resources to help navigate the entrepreneurial ecosystem. 
            </p>
        </div>
    	</div>
    </section>
    <!-- END OF OUR WORK -->

    <!-- LATEST NEWSLETTERS -->
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent Newsletters</h2>
          </div>
        </div>
        <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
          	  <div class="align-self-stretch">
                <div class="newletter-entry">
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="https://sdgs.un.org/events/science-technology-and-innovation-africa-day-2023-50188">Science Technology and Innovation in Africa Day 2023</a></h3>
                    <div class="newsletter-box my-2">
                      <div class="issue-entry"><span>Issued On:</span> February 2023 </div>
                      <div class="issue-entry"><span>Issued By:</span> Author Name </div>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    <div class="newsletter-actions">
                      <div class="download-btn"><a href="#">Download Newsletter<i class="fa-solid fa-cloud-arrow-down ml-2"></i></a></div> 
                    </div>
		    					</div>
		    				</div>
              </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	  <div class="align-self-stretch">
                <div class="newletter-entry">
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="https://sdgs.un.org/events/science-technology-and-innovation-africa-day-2023-50188">Science Technology and Innovation in Africa Day 2023</a></h3>
                    <div class="newsletter-box my-2">
                      <div class="issue-entry"><span>Issued On:</span> February 2023 </div>
                      <div class="issue-entry"><span>Issued By:</span> Author Name </div>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    <div class="newsletter-actions">
                      <div class="download-btn"><a href="#">Download Newsletter<i class="fa-solid fa-cloud-arrow-down ml-2"></i></a></div> 
                    </div>
		    					</div>
		    				</div>
              </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	  <div class="newletter-entry align-self-stretch">
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="https://sdgs.un.org/events/science-technology-and-innovation-africa-day-2023-50188">Science Technology and Innovation in Africa Day 2023</a></h3>
                    <div class="newsletter-box my-2">
                      <div class="issue-entry"><span>Issued On:</span> February 2023 </div>
                      <div class="issue-entry"><span>Issued By:</span> Author Name </div>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    <div class="newsletter-actions">
                      <div class="download-btn"><a href="#">Download Newsletter<i class="fa-solid fa-cloud-arrow-down ml-2"></i></a></div> 
                    </div>
		    					</div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END OF NEW LETTERS -->

    <!-- LATEST EVENTS -->
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Latest Events</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
                <a href="{{url('events')}}" class="block-20" style="background-image: url('assets/event-item.jpg');">
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
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
                <a href="{{url('events')}}" class="block-20" style="background-image: url('assets/event-item.jpg');">
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
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
                <a href="{{url('events')}}" class="block-20" style="background-image: url('assets/event-item.jpg');">
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
    </section>
        <!-- END OF EVENTS -->
@endsection