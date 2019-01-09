

@extends('layouts.template')

@section('content')
<!-- Map
============================================ -->

<div class="map-container home-map-container margin-bottom-100" style="margin-top: 150px;">
 

<!-- Breadcrumbs
============================================ -->
<!-- <div class="breadcrumbs ">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><span>Business Page</span></li>
				</ul>
			</div>
		</div>
	</div>

</div> -->

<!-- Business img
============================================ -->
<div class="business-img-area margin-top-200">
	<div class="container">
		<div class="row">
			<div class="business-img-wrapper col-xs-12">
				<img src="img/business/business-logo.png" alt="" class="logo float-left" />
				<div class="content fix">
					<h3 id = "laundryName">{{ $laundryData->name }}</h3>
					
					<!-- <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                     
						</p>
						 -->
				</div>
				<div class="business-social">
					<img src="img/business/social.png" alt="" />
				</div>
			</div>
		</div>
	</div>

 </div>
<div id= "lat" style="display: none;">{{ $laundryData->latitude }}</div>
<div id= "lon" style="display: none;">{{ $laundryData->longitude }}</div>

<div class="business-tab-area margin-bottom-100 margin-top-50">
	<div class="container">
		<div class="row">
			<!-- Business Tab List -->
			<div class="business-tab-list col-xs-12">
				<ul>
					<li class="active wall"><a href="#wall" img-toggle="tab">wall</a></li>
					<li class="photo"><a href="#photo" img-toggle="tab">photo</a></li>
					<li class="message"><a href="#message" img-toggle="tab">message</a></li>
				</ul>
			</div>
			<!-- Business Sidebar Content Area -->
			<div class="business-sidebar-content-area margin-top-50">
				<!-- Business Sidebar -->
				<div class="business-sidebar col-md-3 col-xs-12">
					<!-- About Business Sidebar -->
					<div class="sin-busi-sidebar">
						<div class="about-business-sidebar fix">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris </p>
							<a href="#">read more</a>
						</div>
					</div>
					<!-- Opening Hours Business Sidebar -->
					<div class="sin-busi-sidebar">
						<h4 class="sidebar-title">Services</h4>
						<div class="opening-hours-sidebar fix">
                            @foreach($services as $service)
	

							<p><span class="day">{{ $service->name }}</span></p>
							@endforeach
						</div>
					</div>
					<div class="sin-busi-sidebar">
						<h4 class="sidebar-title">opening hours</h4>
						<div class="opening-hours-sidebar fix">
							@foreach($openingHours as $hours)
	

							<p><span class="day">{{ $hours->days }}</span><span class="time">8:00 AM  -  2:00 PM</span></p>
							@endforeach
							
						</div>
					</div>
					<!-- Contact Business Sidebar -->
					<div class="sin-busi-sidebar">
						<h4 class="sidebar-title">contact information</h4>
						<div class="contact-info-sidebar fix">
							<p class="phone">+49 123456789  /  +49 123456789</p>
							<p class="address">{{$laundryData->address}}</p>
							<p class="address">{{$laundryData->City}}</p>
							<p class="email"><a href="#">info@email.com</a></p>
							<p class="website"><a href="#">www.website.com</a></p>
						</div>
					</div>
					<!-- Social Business Sidebar -->
					<div class="sin-busi-sidebar">
						<h4 class="sidebar-title">social media</h4>
						<div class="sidebar-social fix">
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
							<a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a>
							<a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a>
							<a href="#" class="google"><i class="fa fa-google"></i></a>
							<a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
							<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
					<!-- Ratings Business Sidebar -->
					<div class="sin-busi-sidebar">
						<h4 class="sidebar-title">ratings</h4>
						<div class="ratings-sidebar fix">
							<p><span>Rated by users</span>  orem ipsum dolor sit et, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
							<div class="ratings">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<span>5/5</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-9 col-xs-12">
					<!-- Business Tab Content -->
					<div class="tab-content">
						<!-- Business Tab Wall -->
						<div class="tab-pane active row" id="wall">
							<!-- Business Post Area -->
							<div class="business-post-area col-lg-8 col-md-7 col-xs-12">
							
								<!-- Single Business Post -->
						
								<!-- Single Business Post -->
						        
									
									<!-- Post Content -->
									
							
								<!-- Single Business Post -->
								<div class="sin-busi-post">
									<!-- Post Head -->
									<div class="head fix">
										<a href="#" class="post-logo"><img src="img/business-post/logo.png" alt="" /></a>
										<h2>{{ $laundryData->name }}</h2>
									</div>
									<!-- Post Content -->
									<div class="content content-text">
										
										<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
										<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te ui blandit praesent luptatum zzril delenit</p>
										<a href=""><img src="{{asset('storage/'.$laundryData->image) }}" alt="" /></a>

										<a href="#">ream more</a>
									</div>
									<!-- Post Footer -->
									<div class="footer fix">
										<div class="post-like">
											<button class="disabled"><i class="fa fa-check"></i>like</button>
											<span>60k</span>
										</div>
										<div class="post-comment">
											<a href="#">comment</a>
											<span>34 comments</span>
										</div>
										<span class="date">14th Jan, 2016</span>
									</div>
								</div>
								<div>
								<div class="content content-text">
										<div id="map" style="height: 400px; margin-top: 20px;"></div>
									</div>
								</div>
								<a href="#" class="show-more-busi-post">Show More</a>
							</div>
							<!-- Sidebar Container -->
							<div class="sidebar-container col-lg-4 col-md-5 col-xs-12">
								<!-- Search Sidebar -->
								<div class="search-sidebar fix">
									<form action="#" class="search-form">
										<input type="text" placeholder="search here" />
									</form>
								</div>
								<!-- Tab Sidebar -->
								<div class="sin-sidebar fix">
									<div class="tab-sidebar">
										<!-- Sidebar Tab List -->
										<ul class="sidebar-tab-list fix">
											<li class="active"><a href="#popular-post" img-toggle="tab">popular</a></li>
											<li><a href="#recent-post" img-toggle="tab">recent</a></li>
											<li><a href="#latest-post" img-toggle="tab">latest</a></li>
										</ul>
										<!-- Sidebar Tab Content -->
										<div class="tab-content sidebar-tab-content fix">
											<!-- Popular Post -->
											<div class="tab-pane active" id="popular-post">
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
											</div>
											<!-- Recent Post -->
											<div class="tab-pane" id="recent-post">
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
											</div>
											<!-- Latest Post -->
											<div class="tab-pane" id="latest-post">
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
												<div class="sin-tab-sidebar-post fix">
													<a href="#" class="image"><img src="img/sidebar-tab-post/1.jpg" alt="" /></a>
													<div class="content fix">
														<a href="#">Nemo enim ipsam voltur magni dolores</a>
														<span>January 15th, 2016</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- Newsletter Sidebar -->
							<!-- 	<div class="sin-sidebar fix">
									<h4 class="sidebar-title">subscribe to newsletter</h4>
									<div class="newsletter-sidebar">
										<div class="subscribe-form">
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempo:</p>
											<form action="#">
												<input type="text" placeholder="enter your email address" />
												<input type="submit" value="go" />
											</form>
										</div>
									</div>
								</div> -->
								<!-- Comment Sidebar -->
								<div class="sin-sidebar fix">
									<h4 class="sidebar-title">comments</h4>
									<div class="comments-sidebar">
										<div class="sin-sidebar-comments fix">
											<a href="#" class="image"><img src="img/sidebar-comments/1.jpg" alt="" /></a>
											<div class="content fix">
												<a href="#">Stet clita ea et degren...</a>
												<span class="date">14th Jan, 2016</span>
											</div>
										</div>
										<div class="sin-sidebar-comments fix">
											<a href="#" class="image"><img src="img/sidebar-comments/1.jpg" alt="" /></a>
											<div class="content fix">
												<a href="#">Stet clita ea et degren...</a>
												<span class="date">14th Jan, 2016</span>
											</div>
										</div>
										<div class="sin-sidebar-comments fix">
											<a href="#" class="image"><img src="img/sidebar-comments/1.jpg" alt="" /></a>
											<div class="content fix">
												<a href="#">Stet clita ea et degren...</a>
												<span class="date">14th Jan, 2016</span>
											</div>
										</div>
									</div>
								</div>
								<!-- Advertising Sidebar -->
								<div class="sin-sidebar fix">
									<h4 class="sidebar-title">advertising</h4>
									<a class="sidebar-add" href="#"><img src="/images/sidebar-add.jpg" alt="" /></a>
								</div>
							</div>
						</div>
						<!-- Business Tab Photo -->
						<div class="tab-pane" id="photo">
							<div class="busi-bank-photos">
								<div class="head fix">
									<h3>Photos</h3>
									<a href="#">remove images</a>
									<a href="#">add images</a>
								</div>
								<div class="busi-photos-wrapper">
									<div class="sin-photo">
									<a href=""><img src="{{asset('storage/'.$laundryData->image) }}" alt="" /></a></div><!-- <a href="img/business-photo/1.jpg"><img src="img/business-photo/1.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/2.jpg"><img src="img/business-photo/2.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/3.jpg"><img src="img/business-photo/3.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/4.jpg"><img src="img/business-photo/4.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/5.jpg"><img src="img/business-photo/5.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/6.jpg"><img src="img/business-photo/6.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/7.jpg"><img src="img/business-photo/7.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/8.jpg"><img src="img/business-photo/8.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/9.jpg"><img src="img/business-photo/9.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/10.jpg"><img src="img/business-photo/10.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/11.jpg"><img src="img/business-photo/11.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/12.jpg"><img src="img/business-photo/12.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/13.jpg"><img src="img/business-photo/13.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/14.jpg"><img src="img/business-photo/14.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/15.jpg"><img src="img/business-photo/15.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/16.jpg"><img src="img/business-photo/16.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/17.jpg"><img src="img/business-photo/17.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/18.jpg"><img src="img/business-photo/18.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/19.jpg"><img src="img/business-photo/19.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/20.jpg"><img src="img/business-photo/20.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/21.jpg"><img src="img/business-photo/21.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/22.jpg"><img src="img/business-photo/22.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/23.jpg"><img src="img/business-photo/23.jpg" alt="" /></a></div>
									<div class="sin-photo"><a href="img/business-photo/24.jpg"><img src="img/business-photo/24.jpg" alt="" /> --></div>
								</div>
							</div>
						</div>
						<!-- Business Tab Message -->
						<div class="tab-pane" id="message">
							<!-- Business Contact -->
							<div class="busi-contact-wrapper">
								<div class="head fix">
									<h3>send us a message</h3>
								</div>
								<!-- Business Contact Form -->
								<div class="busi-contact-form">
									<form action="#">
										<div class="input-three">
											<div class="input-box">
												<label for="name">name<span>*</span></label>
												<input type="text" id="name" placeholder="enter your name" />
											</div>
											<div class="input-box">
												<label for="email">email address<span>*</span></label>
												<input type="text" id="email" placeholder="enter your email" />
											</div>
											<div class="input-box">
												<label for="phone">phone number</label>
												<input type="text" id="phone" placeholder="enter your phone number" />
											</div>
										</div>
										<div class="input-box">
											<label for="form-message">message<span>*</span></label>
											<textarea id="form-message" placeholder="write a message" ></textarea>
										</div>
										<input type="submit" value="send message" />
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>


<!-- Google Map APi
============================================ -->
<script src="/js/wallMap.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCO8WIGpCttR6bydhWF1rQ8gUjKpRmYTu4&libraries=places&callback=initMap"></script>
</script>
<!-- <script src="/js/map-script.js"></script> -->
<!-- Main JS
============================================ -->
@endsection

