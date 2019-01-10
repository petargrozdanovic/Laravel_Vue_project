<!DOCTYPE html>
<html lang="en">
@include ('layouts.header')	
  <body>
	@include ('layouts.nav')

	<!-- signin-page -->
	<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="user-account">
						<h2>User Login</h2>
						<!-- form -->
						
						<form class="form-horizontal" method="POST" action="{{ route('login') }}">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" class="form-control" placeholder="email" id="email" name="email" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" id="password" name="password" >
							</div>
							<button type="submit" href="#" class="btn">Login</button>
						</form><!-- form -->
						
						@include ('layouts.errors')
						<!-- forgot-password -->
						<div class="user-option">
							<div class="checkbox pull-left">
								<label for="logged"><input type="checkbox" name="logged" id="logged"> Keep me logged in </label>
							</div>
							<div class="pull-right forgot-password">
								<a href="#">Forgot password</a>
							</div>
						</div><!-- forgot-password -->
					</div>
					<a href="/register" class="btn-primary">Create a New Account</a>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signin-page -->	
	@include ('layouts.footer')
  </body>
</html>