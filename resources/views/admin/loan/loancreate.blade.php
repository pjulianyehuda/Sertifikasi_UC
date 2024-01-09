@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Add Book Page</div>
        <div class="card-body">

            {{--            <form action="{{ url('borrow/borrowadd') }}" method="post">--}}
            <form action="{{ route('loan.store') }}" method="post">
                {!! csrf_field() !!}
                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="book_id" class="block font-medium text-sm text-gray-700">Book</label>
                    <select name="book_id" id="book_id" class="form-control" multiple="multiple">
                        @foreach($books as $book)
                            <option value="{{ $book->id }}">{{$book->title . ' (' . $book->publication_year .')'}}</option>
                        @endforeach
                    </select>
                    @error('book_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="user_id" class="block font-medium text-sm text-gray-700">User</label>
                    <select name="user_id" id="user_id" class="form-control" multiple="multiple">
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{$user->email . ' (' . $user->name .')'}}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="loan_date">Loan Date</label>
                    <input type="date" name="loan_date" id="loan_date" class="form-control"
                           value="{{ $loan_date }}" readonly/>
                    @error('loan_date')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="px-4 py-5 bg-white sm:p-6">
                    <label for="return_date">Return Date</label>
                    <input type="date" name="return_date" id="return_date" class="form-control"
                           value="{{ $return_date }}" readonly/>
                    @error('return_date')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div >
                    <input type="hidden" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                           value=1 />
                    @error('status')
                    <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Save Loan" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
