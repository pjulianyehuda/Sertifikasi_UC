@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Add Book</div>
        <div class="card-body">

            <form action="{{ url('/admin/adminc') }}" method="post">
                {!! csrf_field() !!}
                <label>Title</label></br>
                <input type="text" name="title" id="title" class="form-control"></br>
                <label>Author</label></br>
                <input type="text" name="author" id="author" class="form-control"></br>
                <label>Language</label></br>
                <input type="text" name="pages" id="pages" class="form-control"></br>
                <label>Year Publicated</label></br>
                <input type="text" name="year_publicated" id="year_publicated" class="form-control"></br>
                <label>ISBN</label></br>
                <input type="text" name="isbn" id="isbn" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
