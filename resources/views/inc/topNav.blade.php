<!-- Topnav -->
<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          	<!-- Search form -->
		<form action="{{URL::to('books/search')}}" method="post" class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
				@csrf
				<div class="form-group mb-0">
					<div class="input-group input-group-alternative input-group-merge">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-search"></i></span>
						</div>
						<input class="form-control" name="query" placeholder="Search" type="text">
					</div>
				</div>
            	<button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              		<span aria-hidden="true">×</span>
            	</button>
          	</form>
          	<!-- Navbar links -->
          	<ul class="navbar-nav align-items-center  ml-md-auto ">
            	<li class="nav-item d-xl-none">
              		<!-- Sidenav toggler -->
              		<div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                		<div class="sidenav-toggler-inner">
                  			<i class="sidenav-toggler-line"></i>
                  			<i class="sidenav-toggler-line"></i>
                  			<i class="sidenav-toggler-line"></i>
                		</div>
              		</div>
            	</li>
          	</ul>
          	<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            	<li class="nav-item dropdown">
              		<a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                		<div class="media align-items-center">
                  			<div class="media-body  ml-2  d-lg-block">
                    			<!-- Authentication Links -->
                        		@guest
                          			<a class="mb-0 text-sm text-white mr-3  font-weight-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                          			@if (Route::has('register'))
                                		<a class="mb-0 text-sm text-white  font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                            		@endif
                        		@else
                          			<a href="{{ route('profile.index') }}" style="text-transform: capitalize" class="mb-0 text-sm text-white mr-3  font-weight-bold"> {{explode(" ", Auth::user()->name )[0]}}</a>
                          			<span style="cursor: pointer;" class="mb-0 text-sm text-white  font-weight-bold"" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                              			{{ __('Logout') }}
                          			</span>
                          			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              			@csrf
                          			</form>
                        		@endguest
                  			</div>
                		</div>
              		</a>
            	</li>
          	</ul>
        </div>
    </div>
</nav>



{{-- Logout Modal --}}
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-lablledby="logoutModalLable" aria-hidden="true">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
      		<div class="modal-header bg-dark text-light">
        		<h3 class="text-light">Logout</h3>
        		<button data-dismiss="modal" class="close text-light" style="color: #fff;">&times;</button>
      		</div>
      		<div class="modal-body">
        		<p>
					<b style="text-transform: capitalize;">{{ Auth::user()->name }}</b> !! Are you sure you want to logout?
        		</p>
        		<div class="btn-list">
          			<a onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary btn-sm text-white">Yes</a>
          			<button class="btn btn-outline-dark btn-sm" data-dismiss="modal" type="button">No, thanks</button>
        		</div>
      		</div>
    	</div>
  	</div>
</div>