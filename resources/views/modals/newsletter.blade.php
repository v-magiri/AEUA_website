@extends('layouts.master')
@section('title','Newsletter | AEUA')

@section('page_title','Newsletter')

@section('content')
    <div class="newsletter-container">
        <h2>Newsletter Details</h2>
        <div class="newsletter-box">
            <div class="newsletter-item">
                <span>Newsletter Title</span>  
                <span>{{$newsletter->title}}</span> 
            </div>
            <div class="newsletter-item">
                <span>Issued By</span>  
                <span>{{$newsletter->issued_by}}</span> 
            </div>
            <div class="newsletter-item">
                <span>Issued On</span>  
                <span>{{$newsletter-> issued_on}}</span> 
            </div>
            <div class="document-view">
                <span>Newsletter Preview</span>  
                <!-- <span>{{$newsletter-> document_path}}</span> -->
                <canvas id="newsletterCanvas" class="templateCanvas"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.10.111/pdf.min.js" integrity="sha512-hoZmP5l0sJQzHzkXQS3ZCj/H7bOn8JKmbHd/s2trPUoMcvPaBfLSE9/92cpwYzcXBaEtVT/aCQ9P97rkTSWqcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
            var canvas=document.getElementById('newsletterCanvas');

            pdfjsLib.getDocument("{{asset('../uploads/newletters/'.$newsletter->document_path)}}")
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