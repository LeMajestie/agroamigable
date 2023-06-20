<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit publication Form - Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit publication</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('publications.index') }}" enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('publications.update', $publication->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication name:</strong>
                        <input type="text" name="name" value="{{ $publication->name }}" class="form-control"
                            placeholder="publication name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication slug:</strong>
                        <input type="text" name="slug" class="form-control" placeholder="publication Email"
                            value="{{ $publication->slug }}">
                        @error('slug')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication body:</strong>
                        <input type="text" name="body" value="{{ $publication->address }}" class="form-control"
                            placeholder="publication body">
                        @error('body')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication abstract:</strong>
                        <input type="text" name="abstract" value="{{ $publication->address }}" class="form-control"
                            placeholder="publication abstract">
                        @error('abstract')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication image:</strong>
                        <input type="text" name="image" value="{{ $publication->image }}" class="form-control"
                            placeholder="publication image">
                        @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication minimage:</strong>
                        <input type="text" name="minimage" value="{{ $publication->minimage }}" class="form-control"
                            placeholder="publication minimage">
                        @error('minimage')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication published:</strong>
                        <input type="text" name="published" value="{{ $publication->published }}" class="form-control"
                            placeholder="publication published">
                        @error('published')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication color:</strong>
                        <input type="text" name="body" value="{{ $publication->color }}" class="form-control"
                            placeholder="publication color">
                        @error('color')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>publication author:</strong>
                        <input type="text" name="author" value="{{ $publication->author }}" class="form-control"
                            placeholder="publication author">
                        @error('author')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>
