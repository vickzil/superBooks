@extends('layouts.app')

	@section('content')

    	@include('inc.header')
    
			<div class="container-fluid mt-6 mb-6">
  				@include('inc.messages')
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header border-0">
								<div class="row align-items-center">
									<div class="col">
										<h3 class="mb-0">Book Store</h3>
									</div>
									<div class="row">
										<div class="col-m6 text-right">
											<a href="books/archive" class="btn btn-sm btn-success mr-3">Archive Books</a>
										</div>
										<div class="col-m6 text-right">
											<a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#CreateBookModal">Create Book</a>
										</div>
									</div>
								</div>
							</div>
							<div class="table-responsive">
								<!-- Projects table -->
								<table class="table align-items-center table-flush">
									<thead class="thead-light">
										<tr>
											<th scope="col">Title</th>
											<th scope="col">Author</th>
											<th scope="col">Place of Publication</th>
											<th scope="col">Edition</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>
									<tbody>
										@if (count($books) > 0)
											@foreach ($books as $book)
												<tr>
													<td scope="row">
														<a href="/books/{{$book->id}}">{{$book->title}}</a>
													</td>
													<td>
														{{$book->author}}
													</td>
													<td>
														{{$book->place_of_publication}}
													</td>
													<td>
														{{$book->editon}}
													</td>
													<td colspan="3">
														<form action="{{route('books.destroy', $book->id)}}" method="post" class="form-inline">
															<a class="btn btn-warning btn-sm mb-2" href="/books/{{$book->id}}" style="margin-right: 15px;">View</a>
															<a class="btn btn-primary btn-sm mb-2" href="/books/{{$book->id}}/edit" style="margin-right: 15px;">Edit</a>
															<a class="btn btn-success btn-sm mb-2" href="/books/{{$book->id}}/soft_delete" style="margin-right: 15px;">Archive</a>
															@csrf
															@method('DELETE')
															<button type="submit" class="btn btn-danger btn-sm mb-2"> Delete</button>
														</form>
													</td>
												</tr>
											@endforeach
											{{$books->links()}}
										@else
											<td colspan="5">
												<center>No Book found</center>
											</td>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

    		<!-- Create Book Modal -->
			<div class="modal fade" id="CreateBookModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  				<div class="modal-dialog modal-dialog-centered" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title" id="exampleModalLabel">Create Book</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
      					</div>
      					<form action="{{route('books.create')}}" method="post">
      						<div class="modal-body">
            				@csrf
          						<div class="form-group">
            						<input type="text" name="title" class="form-control" placeholder="Title">
          						</div>
          						<div class="form-group">
            						<input type="text" name="author" class="form-control" placeholder="Author">
          						</div>
								<div class="form-group">
									<input type="text" name="place_of_publication" class="form-control" placeholder="Place of Publication">
								</div>
								<div class="form-group">
									<input type="text" name="editon" class="form-control" placeholder="Edition">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="description" rows="6" placeholder="Book Description"></textarea>
								</div>
      						</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-success">Save</button>
							</div>
      					</form>
    				</div>
  				</div>
			</div>
@endsection
