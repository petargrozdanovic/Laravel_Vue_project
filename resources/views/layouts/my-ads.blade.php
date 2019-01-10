<!DOCTYPE html>
<html lang="en">
@include ('layouts.header')
  <body>
	@include ('layouts.nav')
	@if (Auth::check())

	<!-- myads-page
		https://laracasts.com/series/laravel-from-scratch-2017/episodes/13?autoplay=true
	-->

	<section id="main" class="clearfix myads-page">
		<div class="container">

			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Ad Post</li>
				</ol><!-- breadcrumb -->
				<h2 class="title">My Ads</h2>
			</div><!-- banner -->

			<div class="ad-profile section">
					<div class="user-profile">
						<div class="user-images">
							<img src="images/user.jpg" alt="User Images" class="img-responsive">
						</div>
						<div class="user">
							<h2>Hello, <a href="#">{{ $profile[0]->name }}</a></h2>
							<h5>You last logged in at: 14-01-2016 6:40 AM [ USA time (GMT + 6:00hrs)]</h5>
						</div>

						<div class="favorites-user">
							<div class="my-ads">
								<a href="{!! url('/my-ads'); !!}">{{ $countsPost }}<small>My ADS</small></a>
							</div>
							<div class="favorites">
								<a href="#">18<small>Favorites</small></a>
							</div>
						</div>
					</div><!-- user-profile -->

					<ul class="user-menu">
						<li><a href="{!! url('/my-profile'); !!}">Profile</a></li>
						<li class="active"><a href="{!! url('/my-ads'); !!}">My ads</a></li>
						<li><a href="favourite-ads.html">Favourite ads</a></li>
						<li><a href="archived-ads.html">Archived ads </a></li>
						<li><a href="pending-ads.html">Pending approval</a></li>
						<li><a href="delete-account.html">Close account</a></li>
					</ul>

			</div><!-- ad-profile -->

			<div class="ads-info">
				<div class="row">
					<div class="col-sm-8">
						<div class="my-ads section">
							<h2>My ads</h2>
							<!-- ad-item -->
							@if(Session::has('message'))
								<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
							@endif

              <!--Vue component (ads information)-->
              <div id="app">
                <myads-app></myads-app>
              </div>
						</div>

					</div><!-- my-ads -->

					<!-- recommended-cta-->
					<div class="col-sm-4 text-center">
						<!-- recommended-cta -->
						<div class="recommended-cta">
							<div class="cta">
								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="images/icon/13.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Secure Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->


								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="images/icon/14.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->


								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-trading">
										<img src="images/icon/15.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Easy Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
									<p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div><!-- recommended-cta-->

				</div><!-- row -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- my -->
	@endif

	<!-- footer -->
	@include ('layouts.footer')

  <script src="js/app.js">
  </script>

  </body>
</html>
