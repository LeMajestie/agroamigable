<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 CRUD Example Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('publications.create') }}"> Create publication</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Pub</th>
                    <th>Name</th>
                    <th>Slugs</th>
                    <th>body</th>
                    <th>abstract</th>
                    <th>image</th>
                    <th>minimage</th>
                    <th>published</th>
                    <th>color</th>
                    <th>author</th>
                    <th width="280px">options</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publications as $publication)
                    <tr>
                        <td>{{ $publication->id }}</td>
                        <td>{{ $publication->name }}</td>
                        <td>{{ $publication->slug }}</td>
                        <td>{{ $publication->body }}</td>
                        <td>{{ $publication->abstract }}</td>
                        <td>{{ $publication->image }}</td>
                        <td>{{ $publication->minimage }}</td>
                        <td>{{ $publication->published }}</td>
                        <td>{{ $publication->color }}</td>
                        <td>{{ $publication->author }}</td>
                        <td>
                            <form action="{{ route('publications.destroy',$publication->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('publications.edit',$publication->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $publications->links() !!}
    </div>
</body>
</html>
