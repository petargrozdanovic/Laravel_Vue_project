<!DOCTYPE html>
<html lang="en">
@include ('layouts.header')
  <body>
	@include ('layouts.nav')

	<!-- signup-page -->
	<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>Create a Trade Account</h2>
						<form method="POST" action="/register">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" id="name" name="name" >
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email Id" id="email" name="email">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" id="password" name="password">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation">
							</div>
							<!--<div class="form-group">
								<input type="text" class="form-control" placeholder="Mobile Number" id="mobilenumber" name="mobilenumber">
							</div>
							<!-- select -->
							<select class="form-control">
								<option value="#">Select City</option>
								<option value="#" id="London">London UK</option>
								<option value="#" id="US">Newyork, USA</option>
								<option value="#" id="Can">Toronto, Canada</option>
							</select><!-- select

							<div class="checkbox">
								<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
							</div><!-- checkbox -->
							<input type="submit">
							<!--<button type="submit" href="" class="btn">Registration</button>	-->
						</form>
						@include ('layouts.errors')
						<!-- checkbox -->
					</div>
				</div><!-- user-login -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- signup-page -->
	@include ('layouts.footer')
  </body>
</html>
