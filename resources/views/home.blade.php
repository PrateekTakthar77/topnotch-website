@extends('layout.layout')
@section('content') 

<!-- services-area -->
            <section class="slider__area  new_image">
                            <div class="swiper-container slider__active hero-home">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide slider__single">
                                        <div class="slider__bg" data-background="assets/img/slider/slider_bg01.jpg"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="slider__content">
                                                        <!-- <span class="sub-title">We Are Expert In This Field</span> -->
                                                        <h2 class="title">Top Notch Energy Solutions</h2>
                                                        <p>A leading professional group in the Power Sector. TOP Notch Energy Solutions is a dynamic ENERGY Consultancy Group in the Northern India region and has been serving more than 50+ industries.</p>
                                                        <a href="{{route('services')}}" class="btn">Our Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="slider__shape">
                                            <img src="assets/img/slider/slider_shape01.png" alt="Top Notch" />
                                            <img src="assets/img/slider/slider_shape02.png" alt="TOP NOTCH" />
                                        </div> --}}
                                    </div>
                                    <div class="swiper-slide slider__single">
                                        <div class="slider__bg" data-background="assets/img/slider/slider_bg02.jpg"></div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="slider__content">
                                                        <!-- <span class="sub-title">We Are Expert In This Field</span> -->
                                                        <h2 class="title">Top Notch Energy Solutions</h2>
                                                        <p>A leading professional group in the Power Sector. TOP Notch Energy Solutions is a dynamic ENERGY Consultancy Group in the Northern India region and has been serving more than 50+ industries.</p>
                                                        <a href="{{route('services')}}" class="btn">Our Services</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="slider__shape">
                                            <img src="assets/img/slider/slider_shape01.png" alt="Top Notch" />
                                            <img src="assets/img/slider/slider_shape02.png" alt="Top Notch" />
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
            </section>
<!-- banner-area-end -->

<!-- counter-area -->
			<section class="counter-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="counter-item">
								<div class="icon">
									<i class="flaticon-trophy"></i>
								</div>
								<div class="content">
									<h2 class="count"><span class="odometer" data-count="55"></span>+</h2>
									<p>
										Successfully <br />
										Completed Projects
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="counter-item">
								<div class="icon">
									<i class="flaticon-happy"></i>
								</div>
								<div class="content">
									<h2 class="count"><span class="odometer" data-count="50"></span>+</h2>
									<p>
										Satisfied <br />
										100% Our Clients
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="counter-item">
								<div class="icon">
									<i class="flaticon-china"></i>
								</div>
								<div class="content">
									<h2 class="count"><span class="odometer" data-count="70"></span>+</h2>
									<p>
										Services over <br />
										the world
									</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-sm-6">
							<div class="counter-item">
								<div class="icon">
									<i class="flaticon-time"></i>
								</div>
								<div class="content">
									<h2 class="count"><span class="odometer" data-count="15+"></span>+</h2>
									<p>
										Years of Experiences <br />
										To Run This Company
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="counter-shape-wrap">
					<img src="assets/img/images/counter_shape01.png" alt="Top Notch" data-aos="fade-right" data-aos-delay="400" />
					<img src="assets/img/images/counter_shape02.png" alt="Top Notch" data-parallax='{"x" : 100 , "y" : -100 }' />
					<img src="assets/img/images/counter_shape03.png" alt="Top Notch" data-aos="fade-left" data-aos-delay="400" />
				</div>
			</section>
<!-- counter-area-end -->
			
<!-- about-area -->
			<section id="about" class="about-area pt-120 pb-120">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<div class="about-img-wrap">
								<div class="mask-img-wrap">
									<img src="assets/img/images/istockphoto-1150170700-612x612.jpg" alt="TOP NOTCH" />
								</div>
								<div class="shape">
									<img src="assets/img/images/about_shape01.png" alt="TOP NOTCH" />
								</div>
								<div class="experience-year">
									<div class="icon">
										<i class="flaticon-trophy"></i>
									</div>
									<div class="content">
										<h6 class="circle rotateme">Years Of - Experience 15 -</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about-content">
								<div class="section-title mb-35 tg-heading-subheading animation-style3">
									<span class="sub-title">Build Your Dream</span>
									<h2 class="title tg-element-title">
										Energy Portfolio<br />
										Management At all Levels
									</h2>
								</div>
								<!-- <div class="about-list">
									<ul class="list-wrap">
										<li>
											<div class="icon">
												<i class="flaticon-target"></i>
											</div>
											<div class="content">
												<h4 class="title">Business Solutions</h4>
												<p>Semper egetuis tellus urna condi</p>
											</div>
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-profit"></i>
											</div>
											<div class="content">
												<h4 class="title">Quality Services</h4>
												<p>Semper egetuis tellus urna condi</p>
											</div>
										</li>
									</ul>
								</div> -->
								<p>
                                The ally of the group has been serving for more than 15 years in the Power Sector Industry. We provide our services to Power Utilities, Industries, Govt-PSU’s, Hotels, Malls, Hospitals etc.</p>
								<div class="about-bottom">
									<div class="author-wrap">
										<div class="thumb">
											<img src="assets/img/images/author_img.png" alt="Top Notch" />
										</div>
										<div class="content">
											{{-- <img src="assets/img/images/sign.png" alt="Top Notch" /> --}}
											<h4 class="title">Suyash Arya<span>, Founder</span></h4>
										</div>
									</div>
									<a href="{{ route('about') }}" class="btn btn-two">Read More</a>
								</div>
								<div class="about-shape-wrap">
									<img src="assets/img/images/about_shape03.png" alt="Top Notch" />
									<img src="assets/img/images/about_shape04.png" alt="Top Notch" class="ribbonRotate" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-left-shape">
					<img src="assets/img/images/about_shape02.png" alt="Top Notch" />
				</div>
			</section>
<!-- about-area-end -->

<!-- services-area -->
			<section class="services-area services-bg" data-background="assets/img/bg/services_bg.jpg">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-8">
							<div class="section-title text-center mb-40 tg-heading-subheading animation-style3">
								<span class="sub-title">WHAT WE OFFER</span>
								<h2 class="title tg-element-title">We Offer range of quality services in energy sector</h2>
							</div>
						</div>
					</div>
					<div class="services-item-wrap">
						<div class="row justify-content-center">

							@foreach ($services as $service)
								<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
									<div class="services-item shine-animate-item">
										<div class="services-thumb">
											<img src="{{ asset('uploads/service/' . $service->banner_image) }}" alt="TPN" />
										</div>
										<div class="services-content">
											<!-- <div class="icon">
												<i class="flaticon-profit"></i>
											</div> -->
											<h4 class="title">{{$service->title}}</h4>
											{!! $service->long_description !!}
											
										</div>
									</div>
								</div>
							@endforeach
							{{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="services-item shine-animate-item">
									<div class="services-thumb">
										<a href="services-details.html" class="shine-animate"><img src="http://energysolutions.co.in/wp-content/uploads/2022/11/Open-Access-1.jpg" alt="Top Notch" /></a>
									</div>
									<div class="services-content">
										<!-- <div class="icon">
											<i class="flaticon-profit"></i>
										</div> -->
										<h4 class="title">Aprrovals for open access</h4>
										<p>We have equipped with the team and techniques to obtain the related approvals in committed timeline approval. We have framed a time-driven and activity flow approach to complete every project before/within committed time-frame. Our association with the key nodes and ground presence has always given us advantage over to other to get our project delivered in the stipulated time.</p>
										
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="services-item shine-animate-item">
									<div class="services-thumb">
										<a href="services-details.html" class="shine-animate"><img src="http://energysolutions.co.in/wp-content/uploads/2022/11/Power-Trading-1.jpg" alt="Top Notch" /></a>
									</div>
									<div class="services-content">
										<!-- <div class="icon">
											<i class="flaticon-profit"></i>
										</div> -->
										<h4 class="title">Power Trading</h4>
										<p>Power trading refers to purchasing and selling power between participants in the energy industry”. Moving with the core concept of the power trading we have equipped models and framework that are most profitable in todays scenarios. The integrated team approach has provided us the grasp in all the platforms with success rate of 100%. Our collaborations and expert advise has help many of clients to obtain the maximum profit while moving with our combinations of strategies and methodology</p>
										
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="services-item shine-animate-item">
									<div class="services-thumb">
										<a href="services-details.html" class="shine-animate"><img src="http://energysolutions.co.in/wp-content/uploads/2022/11/Solar-Rooftop-1.jpg" alt="Top Notch" /></a>
									</div>
									<div class="services-content">
										<!-- <div class="icon">
											<i class="flaticon-profit"></i>
										</div> -->
										<h4 class="title">Solar Rooftop</h4>
										<p>A solar solution is the best choice for you if you’re looking into renewable energy to reduce your electricity costs or help the environment. We provide you with specialized solar power solutions based on your needs to help you achieve your business goals if your current business location has enough space to install solar. Since solar tariffs are lower than current grid tariffs, installing a solar power plant will significantly reduce your energy costs</p>
										
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="services-item shine-animate-item">
									<div class="services-thumb">
										<a href="services-details.html" class="shine-animate"><img src="http://energysolutions.co.in/wp-content/uploads/2022/11/ABT-Metering.jpg" alt="Top Notch" /></a>
									</div>
									<div class="services-content">
										<!-- <div class="icon">
											<i class="flaticon-profit"></i>
										</div> -->
										<h4 class="title">ABT Metering and Installation</h4>
										<p>We have been instrumental in installation of ABT meter in all the areas of North India and have completed the projects in the no-deviating timeline model. We are the pioneer in creating a bridge between the government and the industries so that smooth business benefits can be obtained and a win-win situation can be formulated.</p>
										
									</div>
								</div>
							</div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="services-item shine-animate-item">
									<div class="services-thumb">
										<a href="services-details.html" class="shine-animate"><img src="http://energysolutions.co.in/wp-content/uploads/2022/11/Grid-Synchronization.jpg" alt="Top Notch" /></a>
									</div>
									<div class="services-content">
										<!-- <div class="icon">
											<i class="flaticon-profit"></i>
										</div> -->
										<h4 class="title">Grid Synchronization Activity</h4>
										<p>In todays age the Grid stability is the top-most important aspect for any commodity in the power sector. Understanding the highly sensitive area we have framed a mechanism where clients can smoothly connected to the grid system and get their plant charged and get their unit integrated in the Indian grid.</p>
										
									</div>
								</div>
							</div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
								<div class="services-item shine-animate-item">
									<div class="services-thumb">
										<a href="services-details.html" class="shine-animate"><img src="http://energysolutions.co.in/wp-content/uploads/2022/11/Billing-Settlement.jpg" alt="Top Notch" /></a>
									</div>
									<div class="services-content">
										<!-- <div class="icon">
											<i class="flaticon-profit"></i>
										</div> -->
										<h4 class="title">Billing Settlement of Open Access</h4>
										<p>Top Notch Energy Solutions Settlement system aids utilities and industries in managing their commercial contracts. Commercial considerations like the tariff agreement rules, charges being levied etc., are taken into account in these bills and reports.</p>
										
									</div>
								</div>
							</div>
                             --}}
						</div>
					</div>
					<div class="services-bottom-content">
						<p>Empowering Businesses through Strategic Consulting With Us</p>
						<a href="{{ route('services')}}" class="btn">See All Services</a>
					</div>
				</div>
			</section>
<!-- services-area-end -->

<!-- choose-area -->
			<!-- <section class="choose-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 order-0 order-lg-2">
							<div class="choose-img-wrap">
								<img src="assets/img/images/choose_img01.jpg" alt="Top Notch" />
								<img src="assets/img/images/choose_img02.jpg" alt="Top Notch" data-parallax='{"x" : 50 }' />
								<img src="assets/img/images/choose_img_shape.png" alt="Top Notch" class="alltuchtopdown" />
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-content">
								<div class="section-title white-title mb-30 tg-heading-subheading animation-style3">
									<span class="sub-title">Why We Are The Best</span>
									<h2 class="title tg-element-title">
										We Offer Business Insight <br />
										World Class Consulting
									</h2>
								</div>
								<p>We successfully cope with tasks of varying complexity provide area longerty guarantees and regularly master new Practice Following gies heur portfolio includes dozen.</p>
								<div class="choose-list">
									<ul class="list-wrap">
										<li>
											<div class="icon">
												<i class="flaticon-investment"></i>
											</div>
											<div class="content">
												<h4 class="title">Business Solutions</h4>
												<p>Semper egetuis kelly for tellus urna area condition.</p>
											</div>
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-investment-1"></i>
											</div>
											<div class="content">
												<h4 class="title">Market Analysis</h4>
												<p>Semper egetuis kelly for tellus urna area condition.</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="choose-shape-wrap">
					<img src="assets/img/images/choose_shape01.png" alt="Top Notch" data-aos="fade-right" data-aos-delay="400" />
					<img src="assets/img/images/choose_shape02.png" alt="Top Notch" data-aos="fade-left" data-aos-delay="400" />
				</div>
			</section> -->
<!-- choose-area-end -->

<!-- project-area -->
			<section class="project-area">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-6 col-lg-7">
							<div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
								<span class="sub-title">OUR PROJECTS</span>
								<h2 class="title tg-element-title">Let’s Discover All Our Clients Recent Project</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="project-item-wrap">
					<div class="container custom-container-two">
						<div class="row">
						@foreach ($projects as $project)
							<div class="col-xl-3 col-md-6">
								<div class="project-item">
									<div class="project-thumb">
										<img src="{{ asset('uploads/project/' . $project->image) }}" alt="Top Notch" />
									</div>
									<div class="project-content">
										<div class="left-side-content">
											<h4 class="title">{{$project->title}}</h4>
											<span>{{$project->sub_title}}</span>
										</div>
										
									</div>
								</div>
							</div>
						@endforeach
							{{-- <div class="col-xl-3 col-md-6">
								<div class="project-item">
									<div class="project-thumb">
										<a href="project-details.html"><img src="assets/img/project/cremica.jpg" alt="Top Notch" /></a>
									</div>
									<div class="project-content">
										<div class="left-side-content">
											<h4 class="title"><a href="project-details.html">Cremica</a></h4>
											<span>Mr. Brector's</span>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6">
								<div class="project-item">
									<div class="project-thumb">
										<a href="project-details.html"><img src="assets/img/project/rishik.jpg" alt="Top Notch" /></a>
									</div>
									<div class="project-content">
										<div class="left-side-content">
											<h4 class="title"><a href="project-details.html">Rishik Spinning</a></h4>
											<span></span>
										</div>
										
									</div>
								</div>
							</div> --}}
						</div>
						<!-- <div class="row justify-content-center">
							<div class="col-12">
								<div class="project-content-bottom">
									<p>
										We successfully cope with tasks of varying complexity, <br />
										provide long-term guarantees and regularly
									</p>
									<a href="project-details.html" class="btn">See All Projects</a>
								</div>
							</div>
						</div> -->
					</div>
				</div>
				<div class="project-shape-wrap">
					<img src="assets/img/project/project_shape01.png" alt="Top Notch" class="alltuchtopdown" />
					<img src="assets/img/project/project_shape02.png" alt="Top Notch" class="rotateme" />
				</div>
			</section>
<!-- project-area-end -->
			
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
									<img src="assets/img/images/testi_avatar01.png" alt="Top Notch" />
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
									<img src="assets/img/icon/quote.svg" alt="Top Notch" />
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="testimonial__item-two">
								<!-- <div class="testimonial__avatar">
									<img src="assets/img/images/testi_avatar02.png" alt="Top Notch" />
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
									<img src="assets/img/icon/quote.svg" alt="Top Notch" />
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="testimonial__item-two">
								<!-- <div class="testimonial__avatar">
									<img src="assets/img/images/testi_avatar03.png" alt="Top Notch" />
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
									<img src="assets/img/icon/quote.svg" alt="Top Notch" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="testimonial__shape-two">
					<img src="assets/img/images/h2_testimonial_shape.png" alt="Top Notch" data-aos="fade-up" data-aos-delay="400" />
				</div>
			</section>
<!-- testimonial-area-end -->

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
	<div id="message-container" style="margin-top: 20px; display: none;">
		<div id="success-message" style="color: green; display: none; font-size: 14px;"></div>
		<div id="error-message" style="color: red; display: none; font-size: 14px;"></div>
	</div>

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
									<img src="assets/img/images/call_back_shape.png" alt="Top Notch" data-aos="fade-right" data-aos-delay="400" />
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

<style>
	.count span {
    margin-right: 2px;
}

</style>
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
					$('#message-container').show();
					$('#success-message').html('Form submitted successfully: ' + response.message).show();
					$('#error-message').hide();
					$('#contact-form')[0].reset();
				},
				error: function(xhr) {
					$('#message-container').show();
					$('#error-message').html('Error submitting form:<br>' + formatErrors(xhr.responseJSON.errors)).show();
					$('#success-message').hide();
				}
			});
		});

		
		function formatErrors(errors) {
			let errorMessages = '';
			for (let field in errors) {
				errorMessages += errors[field].join('<br>') + '<br>';
			}
			return errorMessages;
		}
	});
</script>

<script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
        const submitButton = document.getElementById('submitButton');
        submitButton.disabled = true;
    });
</script>
             
@endsection