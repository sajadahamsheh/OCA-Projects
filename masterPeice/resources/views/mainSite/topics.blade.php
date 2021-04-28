@extends('../mainSite/index2')
@section('content')
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">OUR COURSES</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.html">Home</a>
		                        </li>
		                        <li>Our Courses</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->

		<!-- Courses Start -->
         <div id="rs-learning-objectives" class="rs-learning-objectives pt-100 pb-70 mb-5">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>TESTS TOPICS</h2>
                    <p>I must explain to you how all this mistaken idea of denouncing pleasure.</p>
                </div>
                    <div class="row">
                       @foreach ($topics as $topic)
                        <div class="col-lg-4 col-md-6">
                            <div class="courses-item">
                                <i class="glyph-icon flaticon-book"></i>
                                <h4 class="courses-title"><a href="#">{{$topic['title']}}</a></h4>
                                <p>At vero eos et accusamus et iusto odiodignissimos laborumducimus qui blanditiis voluptatum dolor sit</p>
                                <a href="tests/{{$topic['id']}}">Take the exam now</a>
                            </div>
                        </div>
						@endforeach
                      
                    </div>
                </div>
         </div>
        <!-- Courses End -->
				
        <!-- Partner Start -->
        <!-- <div id="rs-partner" class="rs-partner pt-70 pb-170 sec-color">
            <div class="container">
				<div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/1.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/2.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/3.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/4.png" alt="Partner Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="#"><img src="main/images/partner/5.png" alt="Partner Image"></a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Partner End -->
       
@endsection