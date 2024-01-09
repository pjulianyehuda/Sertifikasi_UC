<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Carbon;

class LoanController extends Controller
{
    public function index()
    {

        $loans = Loan::all();
        $users = User::all();
        $books = Book::all();

        return view('admin/loan/loanindex', compact('loans', 'users', 'books'));
    }

    public function create()
    {

        $users = User::all();
        $books = Book::all();

        $loan_date = Carbon::now()->format('Y-m-d');
        $return_date = Carbon::now()->addDays(7)->format('Y-m-d');

        return view('admin/loan/loancreate', compact('users', 'books', 'loan_date', 'return_date'));
    }

    public function store(Request $request)
    {
    $input = $request->all();
    Loan::create($input);
    return redirect('admin/loan')->with('flash_message','succeed');
    }

    public function show(Loan $loan)
    {
        //
    }

    public function edit(Loan $loan)
    {


//        $users = User::pluck('email', 'id');
//        $books = Book::pluck('title', 'id');
//
//        $loan->load('users', 'books');
//
//        return view('loan.edit', compact('loan', 'users', 'books'));
    }

    public function update(Request $request, $id)
    {
        $loan = Loan::find($id);
        $input = $request->all();
//        $loan->update($request->validated());
        $loan->update($input);
        return redirect('admin/loan');
    }

    public function destroy(Loan $loan)
    {


        $loan->delete();

        return redirect()->route('loan.index');
    }
}
