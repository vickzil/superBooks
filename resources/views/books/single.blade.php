@extends('layouts.app')

@section('content')
  
    
	<div class="container-fluid mt-6">
  		<div class="mb-5">
    		<a href="javascript:window.history.back();" class="btn btn-default text-left "><span style="margin-right: 5px;">&#8592</span>Back</a>
			<span class="float-right">
				<form action="{{route('books.destroy', $book->id)}}" method="post" class="form-inline">
					<a class="btn btn-primary" href="/books/{{$book->id}}/edit" style="margin-right: 15px;">Edit</a>
					<a class="btn btn-success" href="/books/{{$book->id}}/soft_delete" style="margin-right: 15px;">Archive</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"> Delete</button>
				</form>
			</span>
		</div>
 
  		<div class="row">
    		<div class="col-xl-12">
      			<div class="card">
        			<div class="card-body">
          				@if ($book)
							<h3> <b class="mr-2">Book Title:</b> {{$book->title}}</h3>
							<h4 class="mt-3"> <b class="mr-2">Book Author:</b> {{$book->author}}</h4>
							<h4 class="mt-3"> <b class="mr-2">Place of Publication:</b> {{$book->place_of_publication}}</h4>
							<h4 class="mt-3"> <b class="mr-2">Book Edition:</b> {{$book->editon}}</h4>
							<h4 class="mt-3"> <b class="mr-2">Book Description:</b> <br> <br> {{$book->description}}</h4>
          				@else
          				@endif
        			</div>
      			</div>
    		</div>
  		</div>
	</div>

@endsection
