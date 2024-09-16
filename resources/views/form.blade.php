<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    <title>Library</title>
</head>
<body>
    <div class="container-fluid !direction !spacing">
    </div>
<div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
</div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('library.store')}}" method="POST">
        @csrf
        <div class="row">
        <div class="col-4">
        <label for="fore-label" for="title">Title</label>
        <input type="fore-control" id="text" name="title">

        <div class="col-4">
        <label for="fore-label" for="description">Description</label>
        <input type="fore-control" id=description>

        <div class="col-4">
        <label for="fore-label" for="page_count">Page Count</label>
        <input type="fore-control" name="page_count">

        <div class="col-4">
        <label for="fore-label" for="author_name">Author Name</label>
        <input type="fore-control" name="author_name">

        <div class="col-4">
        <label for="fore-label" for="author_email">Author Email</label>
        <input type="fore-control" name="author_email">

        <div class="col-4">
        <label for="fore-label" for="published_date">Publish Date</label>
        <input type="fore-control" name="published_date">

        <button class="btn btn-primary mt-2" type="submit">Submit</button>
        <a class ="btn btn-danger" href="{{route('guest.form')}}">Kembali</a>
        @vite(['resources/js/app.js'])
</body>
</html>
