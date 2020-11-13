<!-- Footer -->
<footer class="py-5" id="footer-main">
    <div class="container">
      	<div class="row align-items-center justify-content-xl-between">
        	<div class="col-xl-6">
          		<div class="copyright text-center text-xl-left text-muted">
           			 &copy; <?= date('Y') ?> {{ config('app.name', 'Laravel') }}
          		</div>
        	</div>
        	<div class="col-xl-6">
          		<ul class="nav nav-footer justify-content-center justify-content-xl-end">
             		@guest
						<li class="nav-item">
							<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						</li>
               			@if (Route::has('register'))
							<li class="nav-item">
							<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
						  @endif
					@else
					<li class="nav-item">
						<span class="mb-0 text-sm text-white  font-weight-bold"" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
					</li>
                    @endguest
				</ul>
        	</div>
      	</div>
    </div>
</footer>