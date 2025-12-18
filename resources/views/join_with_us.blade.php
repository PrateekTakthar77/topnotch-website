@extends('layout.layout')
@section('content') 

<!-- breadcrumb-area -->
		<section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="breadcrumb__content">
								<h2 class="title">Contact With Us</h2>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="{{ route('home')}}">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Contact</li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<div class="breadcrumb__shape">
					<img src="assets/img/images/breadcrumb_shape01.png" alt="Top Notch" />
					<img src="assets/img/images/breadcrumb_shape02.png" alt="Top Notch" class="rightToLeft" />
					<img src="assets/img/images/breadcrumb_shape03.png" alt="Top Notch" />
					<img src="assets/img/images/breadcrumb_shape04.png" alt="Top Notch" />
					<img src="assets/img/images/breadcrumb_shape05.png" alt="Top Notch" class="alltuchtopdown" />
				</div>
			</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
			<section class="contact__area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="contact-map">
								<iframe src="{{Get_Meta_Tag_Value('General_Settings','Map_url')}}" allowfullscreen loading="lazy"></iframe>
							</div>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-5">
							<div class="contact__content">
								<div class="section-title mb-35">
									<h2 class="title">How can we help you?</h2>
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi natus ipsum neque sequi repellendus alias maiores, libero incidunt debitis expedita. Quibusdam inventore facilis repellat officiis suscipit molestiae, possimus obcaecati culpa?</p>
								</div>
								<div class="contact__info">
									<ul class="list-wrap">
										<li>
											<div class="icon">
												<i class="flaticon-pin"></i>
											</div>
											<div class="content">
												<h4 class="title">Address</h4>
												<p>{{Get_Meta_Tag_Value('General_Settings','corp_address')}}</p>
											</div>
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-phone-call"></i>
											</div>
											<div class="content">
												<h4 class="title">Phone</h4>
												<a href="tel:+91 {{Get_Meta_Tag_Value('General_Settings','Contact_One')}}">+91 {{Get_Meta_Tag_Value('General_Settings','Contact_One')}}</a><br>
                                                <a href="tel:+91 {{Get_Meta_Tag_Value('General_Settings','Contact_Two')}}">+91 {{Get_Meta_Tag_Value('General_Settings','Contact_Two')}}</a>
											</div>
                                           
										</li>
										<li>
											<div class="icon">
												<i class="flaticon-mail"></i>
											</div>
											<div class="content">
												<h4 class="title">E-mail</h4>
												<a href="mailto:{{Get_Meta_Tag_Value('General_Settings','Email_One')}}">{{Get_Meta_Tag_Value('General_Settings','Email_One')}}</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="contact__form-wrap">
								<h2 class="title">Give Us a Message</h2>
								<p>Your email address will not be published. Required fields are marked *</p>
								<form id="contact-form" action="{{ route('addContact') }}">
									@csrf
									<div class="row">
										<div class="col-md-6">
											<div class="form-grp">
												<input type="text" name="name" placeholder="Name" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-grp">
												<input type="email" name="email" placeholder="E-mail" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-grp">
												<input type="number" name="number" placeholder="Phone" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-grp">
												<input type="text" name="company_name" placeholder="Company Name" />
											</div>
										</div>
									</div>
									<button type="submit" id="submitButton" class="btn">Submit post</button>
								</form>
								{{-- <p class="ajax-response mb-0"></p> --}}
							</div>
						</div>
					</div>
				</div>
			</section>
<!-- contact-area-end -->

<!-- call-back-area -->
			<!-- <section class="call-back-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="call-back-content">
								<div class="section-title white-title mb-10">
									<h2 class="title">Request A Call Back</h2>
								</div>
								<p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
								<div class="shape">
									<img src="assets/img/images/call_back_shape.png" alt="Top Notch" data-aos="fade-right" data-aos-delay="400" />
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
											<button type="submit" class="btn">Send Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section> -->
<!-- call-back-area-end -->

@endsection

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