<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Tamu</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
    <div class="container_field"> </div>
    <a class="btn btn-primary mt-2" href="{{route ('library.form')}}">Tambah Guest</a>

<table class="table table-striped table-bordered-dark mt-3">
<tr>
    <th>Title</th>
    <th>Description</th>
    <th>Page Count</th>
    <th>Author Name</th>
    <th>Author Email</th>
    <th>Published Date</th>
</tr>
@foreach ($libraries as $library)
<tr>
    <td>{{$library->title}}</td>
    <td>{{$library->description}}</td>
    <td>{{$library->page_count}}</td>
    <td>{{$library->author_name}}</td>
    <td>{{$library->author_email}}</td>
    <td>{{$library->published_date}}</td>
</tr>
@endforeach
</table>
@vite(['resources/js/app.js'])
</body>
</html>
