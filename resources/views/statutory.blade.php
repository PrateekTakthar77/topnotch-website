@extends('layout.layout')
@section('content') 
{{-- stat hero section --}}
<section class="slider__area stat-documents">
    <div class="swiper-container slider__active">
        <div class="swiper-wrapper">
            <div class="swiper-slide slider__single">
                <div class="slider__bg" data-background="assets/img/slider/slider_bg01.jpg"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="slider__content">
                                <!-- <span class="sub-title">We Are Expert In This Field</span> -->
                                <h2 class="title">Open Access Power</h2>
                                <p>TOP NOTCH ENERGY SOLUTIONS</p>
                                {{-- <a href="contact.html" class="btn">Our Services</a> --}}
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
                                <h2 class="title">Open Access Power</h2>
                                <p>TOP NOTCH ENERGY SOLUTIONS</p>
                                {{-- <a href="#" class="btn">Our Services</a> --}}
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
{{-- end stat hero setion --}}
{{-- <section>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="..." alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="..." alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
</section> --}}

{{-- Delhi Rules --}}
@foreach ($rules as $rule)
    
<section class="about__area-six">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="about__img-wrap-six">
                    <img src="{{ asset('uploads/rule/'.$rule->banner_image) }}" alt="TOP NOTCH" />
                    <!-- <img src="assets/img/images/h4_about_img02.jpg" alt="Top Notch" data-parallax='{"x" : 40}' /> -->
                    {{-- <div class="experience__box-four">
                        <h2 class="title">15</h2>
                        <p>
                            Years Experience <br />
                            in This Field
                        </p>
                    </div> --}}
                    <div class="shape">
                        <img src="assets/img/images/h4_about_img_shape.png" alt="TOP NOTCH" class="alltuchtopdown" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-six">
                    <div class="section-title mb-25">
                       
                        <h2 class="title">
                           {{$rule->title}}<br />
                        Government Rules
                        </h2>
                    </div>
                    <div class="about__content-inner-four">
                        <div class="about__list-box">
                            <ul class="list-wrap">
                                {{-- <li><i class="flaticon-arrow-button"></i>Delhi Electricity Regulatory Commission Terms and Conditions for Open Access First Amendment Regulations 2017</li>
                                <li><i class="flaticon-arrow-button"></i>Open Access Charges and Related Matters Fourth Amendment Order 2021</li>
                                <li><i class="flaticon-arrow-button"></i>Terms and Conditions for Open Access</li> --}}
                                {!!$rule->long_description!!}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about__shape-wrap-four">
        <img src="assets/img/images/h4_about_shape01.png" alt="Top Notch" />
        <img src="assets/img/images/h4_about_shape02.png" alt="Top Notch" data-parallax='{"x" : -80 , "y" : -80 }' />
    </div>
</section>
@endforeach

{{-- Delhi Rules end --}}

@endsection