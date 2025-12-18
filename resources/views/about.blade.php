@extends('layout.layout')
@section('content') 
    		
<!-- breadcrumb-area -->
			<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="breadcrumb__content">
								<h2 class="title">About Us</h2>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">About</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="breadcrumb__shape">
					<img src="assets/img/images/breadcrumb_shape01.png" alt="Apexa" />
					<img src="assets/img/images/breadcrumb_shape02.png" alt="Apexa" class="rightToLeft" />
					<img src="assets/img/images/breadcrumb_shape03.png" alt="Apexa" />
					<img src="assets/img/images/breadcrumb_shape04.png" alt="Apexa" />
					<img src="assets/img/images/breadcrumb_shape05.png" alt="Apexa" class="alltuchtopdown" />
				</div>
			</section>
<!-- breadcrumb-area-end -->

<!-- about-area -->
			<section class="about__area-six">
				<div class="container">
					<div class="row align-items-center justify-content-center">
						<div class="col-lg-6 col-md-8">
							<div class="about__img-wrap-six">
								<img src="assets/img/images/about_hero.jpg" alt="Apexa" />
								<!-- <img src="assets/img/images/h4_about_img02.jpg" alt="Apexa" data-parallax='{"x" : 40}' /> -->
								<div class="experience__box-four">
									<h2 class="title">15</h2>
									<p>
										Years Experience <br />
										in This Field
									</p>
								</div>
								<div class="shape">
									<img src="assets/img/images/h4_about_img_shape.png" alt="Apexa" class="alltuchtopdown" />
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about__content-six">
								<div class="section-title mb-25">
									<span class="sub-title">About Us</span>
									<h2 class="title">
                                    Committed to serve <br />
                                    our clients for profit
                                    maximization. <br />
									</h2>
								</div>
								<p>We create and put up electrical systems that satisfy your requirements. We also provide you with all your alternatives so you can choose wisely. This means that if you have any questions before, during, or following the installation of your system, you will only need to contact one team and one phone number.</p>
								<div class="about__content-inner-four">
									<div class="about__list-box">
										<ul class="list-wrap">
											<li><i class="flaticon-arrow-button"></i>Exclusive Portfolio Managers</li>
											<li><i class="flaticon-arrow-button"></i>
                                            Dynamic commencement of services</li>
											<li><i class="flaticon-arrow-button"></i>Regulatory support</li>
                                            <li><i class="flaticon-arrow-button"></i>Sound knowledge</li>
                                            <li><i class="flaticon-arrow-button"></i>Economical</li>
										</ul>
									</div>
									<!-- <div class="about__list-img-three">
										<img src="assets/img/images/about_list_img03.png" alt="Apexa" />
										<a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="play-btn popup-video"><i class="fas fa-play"></i></a>
									</div> -->
								</div>
								<a href="{{ route('services')}}" class="btn btn-two">Our Services</a>
							</div>
						</div>
					</div>
				</div>
				<div class="about__shape-wrap-four">
					<img src="assets/img/images/h4_about_shape01.png" alt="Apexa" />
					<img src="assets/img/images/h4_about_shape02.png" alt="Apexa" data-parallax='{"x" : -80 , "y" : -80 }' />
				</div>
			</section>
<!-- about-area-end -->

<!-- choose-area -->
            <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-7">
                                <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                                    <!-- <span class="sub-title">OUR PROJECTS</span> -->
                                    <h2 class="title tg-element-title">Company's Vision</h2>
                                </div>
                            </div>
                        </div>
            </div>
			<section class="choose-area">
				<div class="container">
					<div class="row align-items-center">
                        
						<div class="col-lg-6 order-0 order-lg-2">
							<div class="choose-img-wrap">
								<img src="assets/img/images/choose_img01.jpg" alt="Apexa" />
								<img src="assets/img/images/choose_img02.jpg" alt="Apexa" data-parallax='{"x" : 50 }' />
								<img src="assets/img/images/choose_img_shape.png" alt="Apexa" class="alltuchtopdown" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-content">
								<div class="section-title white-title mb-30">
									<!-- <span class="sub-title">Why We Are The Best</span> -->
									<h2 class="title">
                                    Dedicated to Keeping Our <br />
                                    Client’s Needs at the Top
									</h2>
								</div>
								<p>Whether a customer has a little or large project, our staff makes sure that the service we provide is thorough and exceeds expectations.</p>
								<div class="choose-list">
                                <div class="section-title white-title mb-30">
                                    <h2 class="title">
                                    Following Best Practices<br />
									</h2>
                                </div>    
									<ul class="list-wrap">
										<li>
											<div class="icon">
												<i class="flaticon-investment"></i>
											</div>
											<div class="content">
												<h4 class="title">Business Solutions</h4>
												
											</div>
										</li>
                                        <li>
											<div class="icon">
												<i class="flaticon-investment"></i>
											</div>
											<div class="content">
												<h4 class="title">Modern Technology</h4>
												
											</div>
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-investment-1"></i>
											</div>
											<div class="content">
												<h4 class="title">Market Analysis</h4>
												
											</div>
										</li>
                                        <li>
											<div class="icon">
												<i class="flaticon-investment-1"></i>
											</div>
											<div class="content">
												<h4 class="title">Latest Designs</h4>
												
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="choose-shape-wrap">
					<img src="assets/img/images/choose_shape01.png" alt="Apexa" data-aos="fade-right" data-aos-delay="400" />
					<img src="assets/img/images/choose_shape02.png" alt="Apexa" data-aos="fade-left" data-aos-delay="400" />
				</div>
			</section>
<!-- choose-area-end -->

<!-- team-area -->
			<section class="team__area-four">
				<div class="container">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-xl-6 col-lg-7">
								<div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
									<!-- <span class="sub-title">OUR PROJECTS</span> -->
									<h2 class="title tg-element-title">Our Team</h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						@foreach ($teams->take(6) as $team)
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="team__item-four shine-animate-item">
									<div class="team__thumb-four shine-animate">
										<img src="{{ asset('uploads/team/' . $team->image) }}" alt="TOP NOTCH" />
									</div>
									<div class="team__content-four">
										<h2 class="title">{{$team->name}}</h2>
										<span>{{$team->profession}}</span>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</section>
<!-- team-area-end -->
			
<!-- client-area -->
<div class="brand-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6 col-lg-7">
				<div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
					<h2 class="title tg-element-title">Our Clients</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="brand-grid">
			@foreach ($logos as $logo)
				<div class="brand-item">
					<img src="{{ asset('uploads/logo/' . $logo->image) }}" alt="Top Notch" />
				</div>
			@endforeach
		</div>
	</div>
</div>
<!-- client-area end-->

<!-- testimonial-area -->
	<section class="testimonial__area-two">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title white-title text-center mb-50">
						<span class="sub-title">Testimonial</span>
						<h2 class="title">What Our Loving Clients Saying</h2>
					</div>
				</div>
			</div>
			<div class="row justify-content-center gutter-24">
				<div class="col-lg-4 col-md-6">
					<div class="testimonial__item-two">
						<!-- <div class="testimonial__avatar">
							<img src="assets/img/images/testi_avatar01.png" alt="Apexa" />
						</div> -->
						<div class="testimonial__info-two">
							<h2 class="title">APPCPL</h2>
						</div>
						<div class="testimonial__rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<p>Top notch has peeked up to the expectations is very short span of time, they have been very diligent in understanding the market and consumers need from scratch to bottom, I wish them a great success and best for there future endeavors.</p>
						<div class="icon">
							<img src="assets/img/icon/quote.svg" alt="Apexa" />
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="testimonial__item-two">
						<!-- <div class="testimonial__avatar">
							<img src="assets/img/images/testi_avatar02.png" alt="Apexa" />
						</div> -->
						<div class="testimonial__info-two">
							<h2 class="title">Good Luck India</h2>
						</div>
						<div class="testimonial__rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						
						<p>The Group has been instrumental in knowledge and dedication towards their Job. They have been managing our complete portfolio of power procurement in long and short run with the required infrastructure upgradation from time-to-time.</p>
					<p> "Highly appreciated for professional intent to provide the maximum benefits to the organization."</p>
						<div class="icon">
							<img src="assets/img/icon/quote.svg" alt="Apexa" />
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="testimonial__item-two">
						<!-- <div class="testimonial__avatar">
							<img src="assets/img/images/testi_avatar03.png" alt="Apexa" />
						</div> -->
						<div class="testimonial__info-two">
							<h2 class="title">Rishik Spinning pvt. Lt</h2>
							
						</div>
						<div class="testimonial__rating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</div>
						<p>Your support is gratifying.I highly appreciate you.
							Your insights are valuable.I am genuinely pleased with your confidence.
							We are grateful for your effort.Your timely submission is appreciated.
							KEEP UP THE GREAT WORK.. WE WISH YOU ALL THE VERY BEST IN FUTURE.
						</p>
						<div class="icon">
							<img src="assets/img/icon/quote.svg" alt="Apexa" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="testimonial__shape-two">
			<img src="assets/img/images/h2_testimonial_shape.png" alt="Apexa" data-aos="fade-up" data-aos-delay="400" />
		</div>
	</section>
<!-- testimonial-area-end -->

<!-- FAQ-area -->
	<section class="services__area-seven pt-120 pb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="choose__content-five pe-0">
						<div class="section-title mb-30 tg-heading-subheading animation-style3">
							<span class="sub-title">Frequently Asked questions</span>
							<h2 class="title tg-element-title">Got questions? We’ve got answers</h2>
						</div>
						<p>Quick answers to questions you may have. Can't find what you're looking for? Get in touch with us.</p>
						<a href="{{ route('contact_us') }}" class="btn">Get in touch</a>
						<div class="box-authors mt-65">
							<div class="box-img-author">
								<img src="assets/img/home7/author.png" />
								<img src="assets/img/home7/author2.png" />
								<img src="assets/img/home7/author3.png" />
								<img src="assets/img/home7/author4.png" />
								<span class="item-author-more">+70</span>
							</div>
						</div>
						<div class="text-trusted-author ps-0">Trusted , Happy & Satisfied Businesses</div>
					</div>
				</div>
				<div class="col-lg-7 offset-lg-1 mt-lg-0 mt-5">
					<div class="accordion">
						<div class="px-0 card rounded-3 mb-3 collapse-custom py-2">
							<div class="p-0 card-header border-0 rounded-3 bg-white">
								<a class="text-900v collapsed p-3 text-white fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#collapse1">
									<h5 class="m-0">1. What is Open Access(OA)?</h5>
									<span class="ms-auto arrow me-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
											<path class="stroke-dark" d="M11.5 1L6.25 6.5L1 1" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</a>
							</div>
							<div id="collapse1" class="collapse" data-bs-parent=".accordion">
								<p class="px-3 fs-6 fw-regular">The definition of Open Access in the Electricity Act, 2003, is “the non-discriminatory provision for the use of transmission lines or distribution system or associated facilities with such lines or system by any licensee or consumer or a person engaged in generation in accordance with the regulations specified by the Appropriate Commission”. </p>
							</div>
						</div>
						<div class="px-0 card rounded-3 mb-3 collapse-custom py-2">
							<div class="p-0 card-header border-0 rounded-3 bg-white">
								<a class="text-900 p-3 text-white fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#collapse2">
									<h5 class="m-0">2. What is STOA, MTOA & LTOA? </h5>
									<span class="ms-auto arrow me-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
											<path class="stroke-dark" d="M11.5 1L6.25 6.5L1 1" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</a>
							</div>
							<div id="collapse2" class="collapse show" data-bs-parent=".accordion">
								<p class="px-3 fs-6 fw-regular">STOA or Short Term Open Access means open access for a period up to one month at a time. MTOA or Medium Term Open Access means the right to use the inter-state transmission system or distribution system for a period exceeding three months but not exceeding five years  LTOA or Long Term open Access means the right to use the intra-state transmission system or distribution system for a period exceeding 7 years.</p>
							</div>
						</div>
						<div class="px-0 card rounded-3 mb-3 collapse-custom py-2">
							<div class="p-0 card-header border-0 rounded-3 bg-white">
								<a class="collapsed text-900 p-3 text-white fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#collapse3">
									<h5 class="m-0">3. Minimum requirement for open access power?</h5>
									<span class="ms-auto arrow me-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
											<path class="stroke-dark" d="M11.5 1L6.25 6.5L1 1" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</a>
							</div>
							<div id="collapse3" class="collapse" data-bs-parent=".accordion">
								<p class="px-3 fs-6 fw-regular">Minimum volume of power should be 1 MW i.e. any consumer having connected load of 1 MW and above can avail open access. Thus, industrial and commercial consumers like office complexes, hotels, hospitals, shopping malls and other large establishments can avail Open Access.</p>
							</div>
						</div>
						<div class="px-0 card rounded-3 mb-3 collapse-custom py-2">
							<div class="p-0 card-header border-0 rounded-3 bg-white">
								<a class="collapsed text-900 p-3 text-white fw-bold d-flex align-items-center" data-bs-toggle="collapse" href="#collapse4">
									<h5 class="m-0">4. How much does a solar panel installation cost?</h5>
									<span class="ms-auto arrow me-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
											<path class="stroke-dark" d="M11.5 1L6.25 6.5L1 1" stroke="#111827" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</span>
								</a>
							</div>
							<div id="collapse4" class="collapse" data-bs-parent=".accordion">
								<p class="px-3 fs-6 fw-regular">We start with a comprehensive analysis of your current brand and online presence, followed by a tailored strategy to improve your brand identity, optimize your website for search engines, and create a cohesive branding plan.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="pt-100">
				<div class="item-video-small">
					<div class="video-small-left">
						<div class="video-small-left-inner">
							<div class="video-small-left-1">
								<h3>40+</h3>
								<p>Consulting farm</p>
							</div>
							<div class="video-small-left-2">
								<h2>Trusted , Happy & Satisfied Businesses</h2>
								<p>When you work with HR Solutions, you get the best. We provide adaptable solutions that allow you to be.</p>
							</div>
						</div>
					</div>
					<div class="video-small-right">
						<div class="box-video">
							<img src="assets/img/home6/img-video.png" />
							<a href="https://www.youtube.com/watch?v=6mkoGSqTqFI" class="popup-video bnt-play play-btn"><img src="assets/img/home6/play-sm.svg" /></a>
						</div>
					</div>
				</div>
			</div> --}}
		</div>
	</section>
<!-- FAQ-area-end -->


<!-- call-back-area -->
			<section class="call-back-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="call-back-content">
								<div class="section-title white-title mb-10">
									<h2 class="title">Request a Quote</h2>
								</div>
								<p>Ready to Work Together? Build a project with us!</p>
								<div class="shape">
									<img src="assets/img/images/call_back_shape.png" alt="Apexa" data-aos="fade-right" data-aos-delay="400" />
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="call-back-form">
								<form id="contact-form" action="{{ route('addContact') }}">
									<div class="row">
										@csrf
										<div class="col-md-6">
											<div class="form-grp">
												<input type="text" name="name" placeholder="Name *" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-grp">
												<input type="email" name="email" placeholder="E-mail *" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-grp">
												<input type="number" name="number" placeholder="Phone *" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-grp">
												<input type="text" name="company_name" placeholder="Company Name *" />
											</div>
										</div>
										<div class="col-md-6">
											<button type="submit" id="submitButton" class="btn">Send Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
<!-- call-back-area-end -->

<script>
	$(document).ready(function() {
    $('#contact-form').on('submit', function(e) {
        e.preventDefault(); 
        let formData = $(this).serialize(); 
        $.ajax({
            url: '/add-contact', 
            method: 'POST',
            data: formData,
            dataType: 'json', 
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            },
            success: function(response) {
                alert('Form submitted successfully: ' + response.message);
            },
            error: function(xhr) {
                let errors = xhr.responseJSON.errors;
                alert('Error submitting form');
                console.log(errors); 
            }
        });
    });
});
</script>

<script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
        submitButton.textContent = "Submitting..."; 
    });
</script>
		
@endsection