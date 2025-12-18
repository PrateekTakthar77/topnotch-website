@extends('layout.layout')
@section('content') 

{{-- hero-area --}}
    <section class="slider__area  consultancy-based">
        <div class="swiper-container slider__active consultancy-based2">
            <div class="swiper-wrapper">
                <div class="swiper-slide slider__single">
                    <div class="slider__bg" data-background="assets/img/slider/slider_bg01.jpg"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="slider__content">
                                    <span class="sub-title">Work With Us</span>
                                    <h2 class="title">We Work As Consultancy Based</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, officia. Consequatur earum eligendi animi est laborum, totam aliquam, quaerat aperiam nihil saepe praesentium deserunt soluta placeat repellat explicabo blanditiis ducimus!</p>
                                    <a href="{{ route('contact_us') }}" class="btn">JOIN WITH US</a>
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
                                    <span class="sub-title">Work With Us</span>
                                    <h2 class="title">We Work As Consultancy Based</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, officia. Consequatur earum eligendi animi est laborum, totam aliquam, quaerat aperiam nihil saepe praesentium deserunt soluta placeat repellat explicabo blanditiis ducimus!</p>
                                    <a href="{{ route('contact_us') }}" class="btn">JOIN WITH US</a>
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
{{-- hero-area-end --}}


<!-- services-area -->
    <section class="services__area-seven services__bg-seven">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-title text-center mb-50 tg-heading-subheading animation-style3">
                        
                        <h2 class="title tg-element-title">
                            Why Go With Our Services?<br class="d-none d-lg-block" />
                        </h2>
                    </div>
                </div>
            </div>
            <div class="services__item-wrap-two">
                <div class="row justify-content-center gutter-24">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__item-five services__item-six">
                            <div class="services__icon-five">
                                <div class="icon">
                                    <i class="flaticon-profit"></i>
                                </div>
                                <div class="services__icon-shape">
                                    <div class="shape one">
                                        <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#FEF6E6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href="#">Warranty</a></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam egestas nulla sit amet antea rcu magna tristique mattis</p>
                                {{-- <a href="services-details.html" class="btn">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__item-five services__item-six">
                            <div class="services__icon-five">
                                <div class="icon">
                                    <i class="flaticon-light-bulb"></i>
                                </div>
                                <div class="services__icon-shape">
                                    <div class="shape one">
                                        <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#FEF6E6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href="#">ROI upto 30%</a></h2>
                                <p>Proin ornare iaculis pretium. Cras viverra tempor sem, id tincidunt sem iaculis quis. Cras viverra mauris vel turpis euismod euismod.</p>
                                {{-- <a href="services-details.html" class="btn">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__item-five services__item-six">
                            <div class="services__icon-five">
                                <div class="icon">
                                    <i class="flaticon-startup"></i>
                                </div>
                                <div class="services__icon-shape">
                                    <div class="shape one">
                                        <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#FEF6E6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href="#">Increased Savings</a></h2>
                                <p>Etiam non interdum lorem. Quisque sapien velit, sollicitudin eu eros vel, mollis tincidunt felis. Duis ultrices leo ligula, in ornare sem</p>
                                {{-- <a href="services-details.html" class="btn">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__item-five services__item-six">
                            <div class="services__icon-five">
                                <div class="icon">
                                    <i class="flaticon-target"></i>
                                </div>
                                <div class="services__icon-shape">
                                    <div class="shape one">
                                        <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#FEF6E6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href="#">Best in Class</a></h2>
                                <p>Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                                {{-- <a href="services-details.html" class="btn">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__item-five services__item-six">
                            <div class="services__icon-five">
                                <div class="icon">
                                    <i class="flaticon-light-bulb"></i>
                                </div>
                                <div class="services__icon-shape">
                                    <div class="shape one">
                                        <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#FEF6E6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href="#">Lifetime Support</a></h2>
                                <p>Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                                {{-- <a href="services-details.html" class="btn">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="services__item-five services__item-six">
                            <div class="services__icon-five">
                                <div class="icon">
                                    <i class="flaticon-target"></i>
                                </div>
                                <div class="services__icon-shape">
                                    <div class="shape one">
                                        <svg width="68" height="78" viewBox="0 0 68 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M31.1376 1.6526C32.9089 0.629968 35.0911 0.629967 36.8624 1.6526L64.9126 17.8474C66.6839 18.87 67.775 20.7599 67.775 22.8052V55.1948C67.775 57.2401 66.6839 59.13 64.9126 60.1526L36.8624 76.3474C35.0911 77.37 32.9089 77.37 31.1376 76.3474L3.0874 60.1526C1.31615 59.13 0.22501 57.2401 0.22501 55.1948V22.8052C0.22501 20.7599 1.31614 18.87 3.08739 17.8474L31.1376 1.6526Z" fill="#FEF6E6" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="services__content-five">
                                <h2 class="title"><a href="#">Sustainable Energy​</a></h2>
                                <p>Beauis utter enim amet lacus ornare ullamcorper Praesent neque purus rhoncus.</p>
                                {{-- <a href="services-details.html" class="btn">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- services-area-end -->

<!-- choose-area -->
    <section class="choose__area-five">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9">
                    <div class="choose__img-wrap-five">
                        <img src="assets/img/project_based/image copy.png" alt="Apexa" />
                        <img src="assets/img/project_based/image copy 2.png" alt="Apexa" />
                        {{-- <img src="assets/img/images/h5_choose_shape01.jpg" alt="Apexa" data-parallax='{"x" : 40}' /> --}}
                        <img src="assets/img/images/h5_choose_shape01.png" alt="Apexa" class="alltuchtopdown" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose__content-five">
                        <div class="section-title mb-30 tg-heading-subheading animation-style3">
                            {{-- <span class="sub-title">Why Choose Our Service</span> --}}
                            <h2 class="title tg-element-title">Why Choose Us?</h2>
                        </div>
                        <p>Mauris ut enim sit amet lacus ornare ullamcorper. Praesent plaacerat neque eu purus rhoncus, vel tincidunt odio ultrices. Seed theya are feugiat elis Curabitur posuere tristique.</p>
                        <div class="choose__box-wrap">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="choose__box">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Sustainability</h4>
                                            {{-- <p>
                                                Apexa helps youcona doing <br />
                                                tempor incididunt.
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="choose__box">
                                        <div class="icon">
                                            <i class="flaticon-finance"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Project On Time</h4>
                                            {{-- <p>
                                                Apexa helps youcona doing <br />
                                                tempor incididunt.
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="choose__box">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Modern Technology</h4>
                                            {{-- <p>
                                                Apexa helps youcona doing <br />
                                                tempor incididunt.
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="choose__box">
                                        <div class="icon">
                                            <i class="flaticon-finance"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="title">Latest Designs</h4>
                                            {{-- <p>
                                                Apexa helps youcona doing <br />
                                                tempor incididunt.
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shape">
                            <img src="assets/img/images/h5_choose_shape02.png" alt="Apexa" class="rotateme" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- choose-area-end -->

{{-- <section>
    <div class="sidebar__widget sidebar__widget-three">
        <h4 class="sidebar__widget-title">Send Us Message</h4>
        <div class="sidebar__form">
            <form action="#">
                <div class="form-grp">
                    <input type="text" placeholder="Your Name" />
                </div>
                <div class="form-grp">
                    <input type="email" placeholder="E-mail Address" />
                </div>
                <div class="form-grp">
                    <textarea name="message" placeholder="Type Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-two">Send Message</button>
            </form>
        </div>
    </div>
</section> --}}

<!-- project-area -->
    <section class="project-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-7 col-lg-6 mb-50">
                    <div class="section-title tg-heading-subheading animation-style3">
                        <span class="sub-title">What We offer?</span>
                        <h2 class="title tg-element-title">Some of Our Services</h2>
                    </div>
                </div>
                {{-- <div class="col-xl-5 col-lg-6 mb-50">
                    <div class="section-content mb-0">
                        <p>Our power of choice is untrammelled and when nothing preven tsbeing able to do what we like best every pleasure.</p>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="project-item-wrap">
            <div class="container custom-container-two">
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-xl-4 col-md-6">
                            <div class="project-item">
                                <div class="project-thumb">
                                    <img src="{{ asset('uploads/service/' . $service->banner_image) }}" alt="TOP NOTCH" />
                                </div>
                                <div class="project-content">
                                    <div class="left-side-content">
                                        <h4 class="title">{{$service->title}}</h4>
                                        <span>{!! $service->long_description !!}</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                    
                    {{-- <div class="col-xl-4 col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="assets/img/project_based/image copy 5.png" alt="Apexa" /></a>
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <h4 class="title"><a href="project-details.html">ABT Meter</a></h4>
                                    <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias quo voluptatem officiis reprehenderit cum eius, blanditiis odio soluta itaque doloribus eligendi dolore laborum consectetur totam velit a ea aperiam adipisci?</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="assets/img/project_based/image copy 4.png" alt="Apexa" /></a>
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <h4 class="title"><a href="project-details.html">Transmission Lines</a></h4>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam ducimus eveniet sapiente! Commodi consequatur et illum error, fugiat minima ipsum exercitationem dolorem tenetur, qui fuga nam dicta repudiandae ullam.</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="assets/img/project_based/image copy 6.png" alt="Apexa" /></a>
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <h4 class="title"><a href="project-details.html">Land Acquisition for Solar Plants</a></h4>
                                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae facere repellat cupiditate iusto commodi assumenda officia similique voluptatem labore, beatae illum neque accusamus corrupti? Cupiditate neque aperiam fugit soluta delectus?</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item">
                            <div class="project-thumb">
                                <a href="project-details.html"><img src="assets/img/project_based/image copy.png" alt="Apexa" /></a>
                            </div>
                            <div class="project-content">
                                <div class="left-side-content">
                                    <h4 class="title"><a href="project-details.html">ABT Meter</a></h4>
                                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quaerat similique et at aut ex dolores hic voluptates nihil magnam. Similique perspiciatis sed voluptatum architecto voluptates, reiciendis hic iusto provident.</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>  --}}
                </div>
                {{-- <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="project-content-bottom">
                            <p>
                                We successfully cope with tasks of varying complexity, <br />
                                provide long-term guarantees and regularly
                            </p>
                            <a href="project-details.html" class="btn">See All Projects</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="project-shape-wrap">
            <img src="assets/img/project/project_shape01.png" alt="Apexa" class="alltuchtopdown" />
            <img src="assets/img/project/project_shape02.png" alt="Apexa" class="rotateme" />
        </div>
    </section>
<!-- project-area-end -->

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
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Name *" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" placeholder="E-mail *" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="number" placeholder="Phone *" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Company Name *" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn">Send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- call-back-area-end -->

@endsection