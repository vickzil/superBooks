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
								<h3 class="mb-0">Edit {{$book->title}} </h3>
							</div>
              			</div>
            		</div>
            		<div class="card-body">
              			<form action="{{route('books.update', $book->id)}}" method="post">
                			@csrf
                			<div class="pl-lg-4">
                  				<div class="row">
                    				<div class="col-lg-6">
										<div class="form-group">
											<label class="form-control-label" for="input-title">Title</label>
											<input type="text" id="input-title" name="title" class="form-control" value="{{$book->title}}">
										</div>
                    				</div>
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-author">Author</label>
                        					<input type="text" id="input-author" name="author" class="form-control" value="{{$book->author}}">
                      					</div>
                    				</div>
                  				</div>
                  				<div class="row">
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-pop">Place of Publication</label>
                        					<input type="text" id="input-pop" name="place_of_publication" class="form-control" value="{{$book->place_of_publication}}">
                      					</div>
                    				</div>
                    				<div class="col-lg-6">
                      					<div class="form-group">
                        					<label class="form-control-label" for="input-edition">Edition</label>
                        					<input type="text" name="editon" id="input-edition" class="form-control" value="{{$book->editon}}">
                      					</div>
                    				</div>

                    				<div class="col-lg-12">
                      					<div class="form-group">
                        					<label class="form-control-label">Description</label>
                        					<textarea rows="5" name="description" class="form-control">{{$book->description}}</textarea>
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
