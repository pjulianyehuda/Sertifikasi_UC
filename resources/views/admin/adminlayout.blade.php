@extends('layouts.app')
@section('content')
    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <a href="{{ route('loan.create') }}" class="btn btn-danger btn-sm"

                       title="Loan Book">
                        <i class="fa fa-plus" aria-hidden="true"></i> Input Loan Book

                        <a href="{{ route('loan.index') }}" class="btn btn-success btn-sm" title="List Lend Books">
                            <i class="fa fa-plus" aria-hidden="true"></i> List Lend Books
                        </a>
                    <div class="card">
                        <div class="card-header">Library</div>

                        <div class="card-body">
                                <a href="{{ url('/admin/adminc') }}" class="btn btn-success btn-sm" title="Add New Book">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New Book
                            </a>
                            <br/>
                            <br/>
                            <div class="table-responsive ">
                                <table class="table table-hover ">
                                    <thead>
                                    <tr>

                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Language</th>
                                        <th>Year Publicated</th>
                                        <th>ISBN</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($books as $book)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $book->title }}</td>
                                            <td>{{ $book->author }}</td>
                                            <td>{{ $book->pages }}</td>
                                            <td>{{ $book->year_publicated }}</td>
                                            <td>{{ $book->isbn }}</td>

                                            <td>

                                                <a href="{{ url('/admin/admine/' . $book->id ) }}" title="Edit Book"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <form method="POST" action="{{ url('/admin/adminlayout/' . $book->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
