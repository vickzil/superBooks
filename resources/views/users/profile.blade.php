@extends('layouts.app')

	@section('content')

{{-- Set Default Profile Image if it is empty --}}
<?php  if ($user->profile_image == '') {$userProfileImage = 'profile-cover.jpg';} else { $userProfileImage = $user->profile_image;}?>

	<div class="header pb-6 d-flex align-items-center" style="min-height: 430px; background-image: url(../storage/profile_images/{{$userProfileImage}}); background-size: cover; background-position: center top;">
      	<!-- Mask -->
      	<span class="mask bg-gradient-default opacity-8"></span>
      	<!-- Header container -->
      	<div class="container-fluid d-flex align-items-center">
        	<div class="row">
          		<div class="col-lg-10 col-md-11">
					<h1 class="display-2 text-white">
						Hello  {{explode(" ", $user->name )[0]}}
					</h1>
					@if($user->highlight)
						<p class="text-white mt-0">{{$user->highlight}}</p>
					@else
						<p class="text-white mt-0">Please Click the update button bellow to update your profile.</p>
					@endif
            			
          		</div>
        	</div>
      	</div>
    </div>
  
	<div class="container-fluid mt-6">
  		<div class="mb-5">
			<a href="/profile/{{$user->name}}/edit" class="btn btn-primary mt-5 text-right">Edit profile</a>
		</div>
 
  		<div class="row">
    		<div class="col-xl-12 order-xl-1">
          		<div class="card">
            		<div class="card-header">
              			<div class="row align-items-center">
                			<div class="col-8">
                  				<h3 class="mb-0">{{$user->name}} </h3>
                			</div>
              			</div>
            		</div>
            		<div class="card-body">
                		<div class="pl-lg-4">
                  			<div class="row">
                    			<div class="col-lg-6">
                      				<div class="form-group">
                        				<label class="form-control-label"><b class="mr-3">Fullname:</b> {{$user->name}}</label>
                      				</div>
                      				<div class="form-group mt-4">
                        				<label class="form-control-label"><b class="mr-3">E-mail:</b> {{$user->email}}</label>
									</div>
									  
									@if($user->age)
										<div class="form-group mt-4">
											<label class="form-control-label"><b class="mr-3">Age:</b> {{$user->age}}</label>
										</div>
									@endif
									@if($user->address)
										<div class="form-group mt-4">
											<label class="form-control-label"><b class="mr-3">Address:</b> {{$user->address}}</label>
										</div>
									@endif
									@if($user->city)
										<div class="form-group mt-4">
											<label class="form-control-label"><b class="mr-3">City:</b> {{$user->city}}</label>
										</div>
									@endif
									@if($user->country)
										<div class="form-group mt-4">
											<label class="form-control-label"><b class="mr-3">Country:</b> {{$user->country}}</label>
										</div>
									@endif
                      				<div class="form-group mt-4">
                        				<label class="form-control-label"><b class="mr-3">Joined On:</b> {{$user->created_at}}</label>
                      				</div>
                    			</div>
                			</div>
            			</div>
          			</div>
        		</div>
  			</div>
		</div>
	</div>
@endsection
