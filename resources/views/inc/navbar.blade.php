<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      	<!-- Brand -->
      	<div class="sidenav-header  align-items-center">
        	<a class="navbar-brand" href="{{route('books.index')}}">
          		<img src="{{ asset('assets/img/brand/logo.png') }}" class="navbar-brand-img" alt="...">
        	</a>
      	</div>
      	<div class="navbar-inner">
        	<!-- Collapse -->
        	<div class="collapse navbar-collapse" id="sidenav-collapse-main">
          		<!-- Nav items -->
          		<ul class="navbar-nav">
            		<li class="nav-item">
              			<a class="nav-link active" href="{{route('books.index')}}">
                			<i class="ni ni-tv-2 text-primary"></i>
                			<span class="nav-link-text">Dashboard</span>
              			</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="{{ route('profile.index') }}">
                			<i class="ni ni-single-02 text-yellow"></i>
                			<span class="nav-link-text">Profile</span>
              			</a>
            		</li>
          		</ul>
          		<!-- Divider -->
          		<hr class="my-3">
        	</div>
      	</div>
    </div>
</nav>