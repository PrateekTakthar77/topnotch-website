<footer>
			<div class="footer-area">
				<div class="footer-top">
					<div class="container">
						<div class="row">
							<div class="col-xl-3 col-lg-4 col-md-6">
								<div class="footer-widget">
									<div class="fw-logo mb-25">
										<a href="{{ route('home') }}"><img src="/assets/img/banner/Top-Notch-Logo-1-250x81.png" alt="Top Energy Solutions" /></a>
									</div>
									<div class="footer-content">
										<p>With the vision of creating sustainable economical source of power procurement. We are happy to introduce TOP Notch Energy Solutions as a leading professional group in Power Sector.</p>
										<div class="footer-social">
											<ul class="list-wrap">
												<li>
													<a href="{{Get_Meta_Tag_Value('General_Settings','Facebook')}}"><i class="fab fa-facebook-f"></i></a>
												</li>
												<li>
													<a href="{{Get_Meta_Tag_Value('General_Settings','Twitter')}}"><i class="fab fa-twitter"></i></a>
												</li>
												<li>
													<a href="j{{Get_Meta_Tag_Value('General_Settings','Instagram')}}"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="{{Get_Meta_Tag_Value('General_Settings','Linkedin')}}"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="{{Get_Meta_Tag_Value('General_Settings','Youtube')}}"><i class="fab fa-youtube"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
								<div class="footer-widget">
									<h4 class="fw-title">Contact us</h4>
									<div class="footer-info-list">
										<ul class="list-wrap">
											<li>
												<div class="icon">
													<i class="flaticon-phone-call"></i>
												</div>
												<div class="content">
													<a href="tel:+91 {{Get_Meta_Tag_Value('General_Settings','Contact_One')}}">+91 {{Get_Meta_Tag_Value('General_Settings','Contact_One')}}</a>
												</div> 
                                            </li> 
                                            <li>  
												
												<div class="icon">
													<i class="flaticon-phone-call"></i>
												</div>
												<div class="content">
													<a href="tel:+91 {{Get_Meta_Tag_Value('General_Settings','Contact_Two')}}">+91 {{Get_Meta_Tag_Value('General_Settings','Contact_Two')}}</a>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="flaticon-envelope"></i>
												</div>
												<div class="content">
													<a href="mailto:{{Get_Meta_Tag_Value('General_Settings','Email_One')}}">{{Get_Meta_Tag_Value('General_Settings','Email_One')}}</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
								<div class="footer-widget">
									<h4 class="fw-title">Our Services</h4>
									<div class="footer-link-list">
										<ul class="list-wrap">
											<li><a href="{{ route('project_based')}}">Project Based</a></li>
											<li><a href="{{ route('consultancy_based')}}">Consultancy Based</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-4 col-md-6">
								<!-- <div class="footer-widget">

									<h4 class="fw-title">Instagram Posts</h4>
									<div class="footer-instagram">
										<ul class="list-wrap">
											<li>
												<a href="javascript:void(0)"><img src="assets/img/images/footer_insta01.jpg" alt="Top Notch" /></a>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="assets/img/images/footer_insta02.jpg" alt="Top Notch" /></a>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="assets/img/images/footer_insta03.jpg" alt="Top Notch" /></a>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="assets/img/images/footer_insta04.jpg" alt="Top Notch" /></a>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="assets/img/images/footer_insta05.jpg" alt="Top Notch" /></a>
											</li>
											<li>
												<a href="javascript:void(0)"><img src="assets/img/images/footer_insta06.jpg" alt="Top Notch" /></a>
											</li>
										</ul>
									</div>
								</div> -->
								<div class="footer-widget">
									<h4 class="fw-title">Our Loactions</h4>
									<div class="footer-link-list">
										<ul class="list-wrap">
											<li>
												<div class="icon">
													<i class="flaticon-pin">Corporate Address
													</i>
												</div>
												<br/>
												<div class="content">
													<p>{{Get_Meta_Tag_Value('General_Settings','corp_address')}}</p>
												</div>
											</li>
											<li>
												<div class="icon">
													<i class="flaticon-pin">Residential Address</i>
												</div>
												<br/>
												<div class="content">
													<p>{{Get_Meta_Tag_Value('General_Settings','resd_address')}}</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row align-items-center">
							{{-- <div class="col-lg-7 order-0 order-lg-2">
								<div class="footer-newsletter">
									<h4 class="title">Newsletter SignUp!</h4>
									<form action="#">
										<input type="text" placeholder="e-mail Type . . ." />
										<button class="btn btn-two" type="submit">Subscribe</button>
									</form>
								</div>
							</div> --}}
							<div class="col-lg-5">
								<div class="copyright-text">
									<p>Copyright © <a href="{{ route('home') }}">{{Get_Meta_Tag_Value('General_Settings','Copyright_Name')}}.</a> | All Right Reserved</p>
									<a href="">Support Terms & Conditions Privacy Policy.</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-shape">
					<img src="assets/img/images/footer_shape01.png" alt="Top Notch" data-aos="fade-right" data-aos-delay="400" />
					<img src="assets/img/images/footer_shape02.png" alt="Top Notch" data-aos="fade-left" data-aos-delay="400" />
					<img src="assets/img/images/footer_shape03.png" alt="Top Notch" data-parallax='{"x" : 100 , "y" : -100 }' />
				</div>
			</div>
		</footer>