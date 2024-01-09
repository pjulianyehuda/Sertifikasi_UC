@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">Edit Books</div>
        <div class="card-body">

            <form action="{{ url('admin/admine/' .$books->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$books->id}}" id="id" />
                <label>Title</label></br>
                <input type="text" name="title" id="title" value="{{$books->title}}" class="form-control"></br>
                <label>Author</label></br>
                <input type="text" name="author" id="author" value="{{$books->author}}" class="form-control"></br>
                <label>Language</label></br>
                <input type="text" name="pages" id="pages" value="{{$books->pages}}" class="form-control"></br>
                <label>Year Publicated</label></br>
                <input type="text" name="year_publicated" id="year_publicated" value="{{$books->year_publicated}}" class="form-control"></br>
                <label>ISBN</label></br>
                <input type="text" name="isbn" id="isbn" value="{{$books->isbn}}" class="form-control"></br>
                <input type="submit" value="Ubah" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@stop
