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
						<form method="POST" action="{{ route('register') }}">
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
							<div class="row form-group select-condition">
								<label class="col-sm-2">Condition<span class="required">*</span></label>
								<div class="col-sm-8">
									<input type="radio" name="type" value="ads" id="type"> 
									<label for="new">Afficher</label>
									<input type="radio" name="type" value="ugo" id="type"> 
									<label for="used">Soyez</label>
								</div>
							</div><!-- checkbox -->								
							<button type="submit" href="" class="btn">Registration</button>
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