@extends('layouts.app')

	@section('content')
    
	<div class="container-fluid mt-6">
  		<div class="mb-5">
    		<a href="javascript:window.history.back();" class="btn btn-default text-left "><span style="margin-right: 5px;">&#8592</span>Back</a>
  		</div>
 
  		<div class="row">
    		<div class="col-xl-12 order-xl-1">
          		<div class="card">
            		<div class="card-header">
              			<div class="row align-items-center">
							<div class="col-8">
								<h3 class="mb-0">Edit {{$user->name}} </h3>
							</div>
              			</div>
            		</div>
            		<div class="card-body">
              			<form action="{{route('users.update', $user->id)}}" method="post" enctype="multipart/form-data">
                			@csrf
                			<div class="pl-lg-4">
                  				<div class="row">
                    				<div class="col-lg-6">
										<div class="form-group">
											<label class="form-control-label" for="input-name">Fullname</label>
											<input type="text" id="input-name" name="name" readonly class="form-control" value="{{$user->name}}">
										</div>
                    				</div>
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-email">E-mail</label>
                        					<input type="text" id="input-email" name="email" class="form-control" readonly value="{{$user->email}}">
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-age">Age</label>
                        					<input type="text" id="input-age" name="age" class="form-control" value="{{$user->age}}">
                      					</div>
                                    </div>
                                    <div class="col-lg-6">
										<div class="form-group">
											<label class="form-control-label" for="input-address">Address</label>
											<input type="text" id="input-address" name="address" class="form-control" value="{{$user->address}}">
										</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-city">City</label>
                        					<input type="text" id="input-city" name="city" class="form-control" value="{{$user->city}}">
                      					</div>
                    				</div>
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-country">Country</label>
                        					<input type="text" name="country" id="input-country" class="form-control" value="{{$user->country}}">
                      					</div>
                    				</div>

                    				<div class="col-lg-12">
                      					<div class="form-group">
                                              <h3>Add Profile Image</h3>
                                            <input name="profile_image" class="form-control-file" type="file" id="file_input">
                      					</div>
                                    </div>

                    				<div class="col-lg-12">
                      					<div class="form-group">
                                            <label class="form-control-label">Highlight</label>
                                            <input type="text" name="highlight" id="input-highlight" class="form-control" value="{{$user->highlight}}">
                      					</div>
                                    </div>
                                    
                    				<div class="col-lg-12">
                      					<div class="form-group">
                        					<label class="form-control-label">About Me</label>
                        					<textarea rows="5" name="bio" class="form-control">{{$user->bio}}</textarea>
                      					</div>
                    				</div>
                    				@method('PUT')
                    				<div class="col-lg-12">
                        				<div class="form-group">
                            				<button type="submit" class="btn btn-info">Update Book</button>
                        				</div>
                    				</div>
                  				</div>
                			</div>
              			</form>
            		</div>
          		</div>
        	</div>
  		</div>
	</div>
@endsection
