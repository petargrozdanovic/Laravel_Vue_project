
	{{App::setLocale(session('language'))}}
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->

				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="/" class="dropdown-toggle">{{ __('nav.home') }}</a></li>
							<li><a href="categories">{{ __('nav.categories') }}</a></li>
							<!-- Category -->
							<li><a href="contact">{{ __('nav.contactus') }}</a></li>
							<!-- contact -->
							<li><a href="about">{{ __('nav.aboutus') }}</a></li>
							<!-- about -->
							<li><a href="faq">{{ __('nav.help') }}/{{ __('nav.support') }}</a></li>
							<!-- Help/Support -->
						</ul>
					</div>
				</div>

				<!-- nav-right -->
				<div class="nav-right">
					<!-- language-dropdown -->
					<form style="margin-top: 10px; float: left;" method="POST" action="/posts">
						{{csrf_field()}}
  					<input type="hidden" name="mylanguage" value="" id="mylanguage"/>
  					<div class="dropdown language-dropdown">
  						<i class="fa fa-globe"></i>
  						<a data-toggle="dropdown" href="#">
              <span class="change-text">{{ session('language') }}
  					    <a data-toggle="dropdown" href="#">
                  <span class="change-text">{{Lang::get('accueil')}}</span>
                  <i class="fa fa-angle-down"></i>
                </a>
  						<ul class="dropdown-menu language-change">
  							<li><a href="#" data-value="EN">EN</a></li>
  							<li><a href="#" data-value="FR">FR</a></li>
  						</ul>
  					</div><!-- language-dropdown -->
					</form>

					<!-- sign-in -->
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>

						@guest
							<li><a href="login"> {{ __('nav.signin') }}</a></li>
							<!-- Sign In -->
							<li><a href="register">{{ __('nav.register') }}</a></li>
							<!-- Register -->
						@else
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                  {{ Auth::user()->name }}
                  <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                  <li>
                    <div style="float-left; margin-left:30px;">
                      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        {{ __('nav.signout') }}
                      </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                    </form>
                  </li>
                  <li>
                  	<div style=" float-left; margin-left:30px;">
                      <a href="{!! url('/my-profile'); !!}" class="">
                        {{ __('nav.my-profile') }}
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            @endguest

					</ul><!-- sign-in -->

					<a href="{!! url('/add-post'); !!}" class="btn">{{ __('nav.Publishad') }}</a>
					<!-- Post Your Ad -->
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
