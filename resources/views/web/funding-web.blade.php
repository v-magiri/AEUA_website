@extends('layouts.web')
@section('Web_page','FUNDING | AEUA')

@section('content')

@include('partials/carousel',['pageTitle'=>'Funding & Training Opportunities'])
<section class="ftco-section">
    	<div class="container">
    		<div class="row">
          <div class="funding-box">
            <!-- <img src="{{asset('assets/coming_up.png')}}" alt="Coming Up Image"> -->
            <!-- <h3><a href="#">Coming Up</a></h3> -->
            <p>More information on the Alliance Forum in October 2023 coming soon.</p>
          </div>
    			<!-- <div class=" ftco-animate">
	    				<div class="item">
		    					<div class="text p-3 p-md-4 funding-box">
                    <img src="{{asset('assets/coming_up.png')}}" alt="Coming Up Image">
		    						<h3><a href="#">Coming Up</a></h3>
		    						<p>More information on the Alliance Forum in October 2023 coming soon.</p>
		    					</div>
		    				</div>
    				</div>
    			</div> -->
    		</div>
    	</div>
    </section>
@endsection