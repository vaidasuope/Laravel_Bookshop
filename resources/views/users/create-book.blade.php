@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center mb-5">
        <h2>Add New Book</h2>
    </div>

    {{--    apsirasom butinai action - kur nukreips po paspaudimo ir jis turi buti aprasytas routes--}}
    <form action="/store" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Book title">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author" placeholder="Auhtor name">
        </div>
        <div class="form-group">
            <label for="content">Genres:</label>

        </div>
        <div class="form-group">
            <label for="category">Description</label>
            <textarea type="text" class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
        </div>
        <div class="form-group">
            <label for="upload">Cover photo:</label>
            <input type="file" class="form-control" id="upload" name="img">
        </div>
        <div class="form-group d-flex justify-content-center m-5">
            <button type="submit" name="submit" class="btn btn-secondary rounded">Publish</button>
        </div>
    </form>
    </div>

@endsection
