<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="antialiased sans-serif bg-gray-200  h-auto">
                    <div class="container mx-auto py-6 px-4">
                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <h1 class="text-3xl py-4 border-b mb-10">Crear publicación</h1>
                                    <div class="pull-right">
                                        <x-agroamigable.buttons.intra-system color="lime-c900"
                                            hoverColor="hover:text-lime-c900"
                                            href="{{ route('publications.index') }}" label="Atrás">
                                        </x-agroamigable.buttons.intra-system>
                                    </div>
                                </div>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success mb-1 mt-1">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('publications.update', $publication->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row p-4">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication name:</strong>
                                            <input type="text" name="name" value="{{ $publication->name }}"
                                                class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="publication name">
                                            @error('name')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication slug:</strong>
                                            <input type="text" name="slug" class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                                placeholder="publication Email" value="{{ $publication->slug }}">
                                            @error('slug')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication body:</strong>
                                            <input type="text" name="body" value="{{ $publication->body }}"
                                                class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="publication body">
                                            @error('body')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication abstract:</strong>
                                            <input type="text" name="abstract"
                                                value="{{ $publication->abstract }}" class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                                placeholder="publication abstract">
                                            @error('abstract')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication image:</strong>
                                            <input type="text" name="image" value="{{ $publication->image }}"
                                                class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="publication image">
                                            @error('image')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication minimage:</strong>
                                            <input type="text" name="minimage"
                                                value="{{ $publication->minimage }}" class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                                placeholder="publication minimage">
                                            @error('minimage')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication published:</strong>
                                            <input type="text" name="published"
                                                value="{{ $publication->published }}" class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                                placeholder="publication published">
                                            @error('published')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication color:</strong>
                                            <input type="text" name="body" value="{{ $publication->color }}"
                                                class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="publication color">
                                            @error('color')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <strong class="block text-sm text-gray-700 capitalize dark:text-gray-200">publication author:</strong>
                                            <input type="text" name="author" value="{{ $publication->author }}"
                                                class="form-control block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="publication author">
                                            @error('author')
                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="rounded-full border-2 bg-lime-c900 border-lime-c900 hover:bg-transparent hover:text-lime-c900 text-white p-2 m-4">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
