@extends('layouts.web')
@section('Web_page','NEWSLETTER | AEUA')

@section('content')

@include('partials/carousel',['pageTitle'=>'Newsletters']);

<section class="ftco-section">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
            <h2 class="mb-4">Newletters</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
              @foreach($newsletters as $newsletter)
	    				<div class="item">
	    					<div class="newletter-entry">
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="https://sdgs.un.org/events/science-technology-and-innovation-africa-day-2023-50188">{{$newsletter-> title}}</a></h3>
                    <div class="newsletter-box my-2">
                      <div class="issue-entry"><span>Issued On:</span> {{$newsletter ->issued_on}} </div>
                      <div class="issue-entry"><span>Issued By:</span> {{$newsletter -> issued_by}} </div>
                    </div>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
                    <div class="newsletter-actions">
                      <div class="download-btn"><a href="{{route('download.newsletter', $newsletter -> id)}}">Download Newsletter<i class="fa-solid fa-cloud-arrow-down ml-2"></i></a></div> 
                    </div>
		    					</div>
		    				</div>
	    				</div>
              @endforeach
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- END OF NEWSLETTERS -->

    <!-- START OF NEWSLETTER TEMPLATE -->
    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-1 pb-1">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Newsletter Template</h2>
            <p>Please use the following template if you want to contribute an article to the Newsletter.</p>
          </div>
        </div>
        <div class="row newsletter">
          <!-- <div id="pspdfkit" style="height: 100vh; width:100%"></div> -->
          <canvas id="templateCanvas" class="templateCanvas"></canvas>
          <!-- <iframe src="{`{{asset('assets/pdf/Template for article submission.pdf')}}#toolbar=0`}" frameborder="0" width="100%" height="100vh"></iframe> -->
        </div>
      </div>
    </section>
    <!-- END OF NEWLETTER TEMPLATE -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.min.js" integrity="sha512-hoZmP5l0sJQzHzkXQS3ZCj/H7bOn8JKmbHd/s2trPUoMcvPaBfLSE9/92cpwYzcXBaEtVT/aCQ9P97rkTSWqcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
            var canvas=document.getElementById('templateCanvas');

            pdfjsLib.getDocument("{{asset('../assets/pdf/Template for article submission.pdf')}}")
                    .promise.then(function(pdf){
                    return pdf.getPage(1);
                    }).then(function(page){
                    var scale=2;

                    var viewport=page.getViewport({scale:scale});

                    var context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    var renderContext={
                        canvasContext:context,
                        viewport:viewport
                    };

                    return page.render(renderContext);
                    }).catch(function(error){
                    console.error('Error rendering PDF:',error);
                    })
    </script>
@endsection