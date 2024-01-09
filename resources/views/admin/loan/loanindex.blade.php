@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">


            <div class="card-body">
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-hover ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>User</th>
                            <th>Loan Date</th>
                            <th>Return Date</th>
                            <th>Status</th>
                            <th>Operation</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            @foreach($loans as $loan)
                                @foreach ($books as $book)
                                    <td>{{ $loop->iteration }}</td>
                                    @if ($loan->book_id == $book->id)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $book->title }}
                                        </td>
                                    @endif
                                @endforeach

                                @foreach ($users as $user)
                                    @if ($loan->user_id == $user->id)
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                            {{ $user->email }}
                                        </td>
                                    @endif
                                @endforeach
                                <td>{{ $loan->loan_date }}</td>
                                <td>{{ $loan->return_date }}</td>
                                <td>
                                    @if($loan->status == 0)
                                        Finished Loan
                                    @endif
                                    @if($loan->status == 1)
                                            Active Loan
                                    @endif
                                        @if($loan->status == 1)
                                            <form method="POST" action="{{ url('/admin/loan/loanindex/'. $loan->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('Patch') }}
                                                {{ csrf_field() }}
                                                <input type="hidden"  name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                                       value= 0 />
                                                <button type="submit" class="btn btn-danger btn-sm" title="Finished" onclick="return"><i class="fa fa-trash-o" aria-hidden="true"></i> Finished</button>
                                            </form>
                                        @endif
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
