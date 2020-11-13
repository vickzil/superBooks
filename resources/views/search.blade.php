@extends('layouts.app')

@section('content')
    
    @include('inc.header')
    
    <div class="container-fluid mt--6">
        @include('inc.messages')
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h3 class="mb-0">Book Store</h3>
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
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($books) > 0)
                                @foreach ($books as $book)
                                    <tr>
                                        <th scope="row">
                                            {{$book->title}}
                                        </th>
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
                                            <a class="btn btn-primary btn-sm" href="/books/{{$book->id}}" style="margin-right: 15px;">View</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="5">
                                    <center>No Book Found </center>
                                </td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
