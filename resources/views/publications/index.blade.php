<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="antialiased sans-serif bg-gray-200  h-screen">
                    <div class="container mx-auto py-6 px-4">
                        <h1 class="text-3xl py-4 border-b mb-10">Administración del Blog y sus Publicaciones</h1>
                        <div class="container mt-2">
                            <div class="row">
                                <div class="col-lg-12 margin-tb">
                                    <div class="p-8">
                                        <x-agroamigable.buttons.intra-system color="lime-c900"
                                            hoverColor="hover:text-lime-c900" href="{{route('publications.create')}}"
                                            label="Atrás">
                                        </x-agroamigable.buttons.intra-system>
                                        <x-agroamigable.buttons.intra-system color="lime-c900"
                                            hoverColor="hover:text-lime-c900" href="{{route('publications.create')}}"
                                            label="Crear nueva publicación">
                                        </x-agroamigable.buttons.intra-system>

                                    </div>
                                </div>
                            </div>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table
                                class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
                                <thead>
                                    <tr>
                                        <th
                                            class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider text-sm">
                                            Nombre</th>
                                        <th
                                            class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider text-sm">
                                            Resumen</th>
                                        <th
                                            class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider text-sm">
                                            Publicado</th>
                                        <th
                                            class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider text-sm">
                                            Autor</th>
                                        <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider text-sm"
                                            width="280px">options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publications as $publication)
                                        <tr>
                                            <td class="border-dashed border-t border-gray-200">{{ $publication->name }}
                                            </td>
                                            <td class="border-t border-gray-200 gender">
                                                <span
                                                    class="text-gray-700 px-6 py-3 flex items-center">{{ $publication->abstract }}</span>
                                            </td>
                                            <td class="border-t border-gray-200 gender">{{ $publication->published }}
                                            </td>
                                            <td class="border-t border-gray-200 gender">{{ $publication->author }}</td>
                                            <td class="border-t border-gray-200 gender flex ">
                                                <form action="{{ route('publications.destroy', $publication->id) }}"
                                                    method="Post">
                                                    <x-agroamigable.buttons.intra-system color="lime-c900"
                                                        hoverColor="hover:text-lime-c900"
                                                        href="{{route('publications.edit', $publication->id)}}"
                                                        label="Editar">
                                                    </x-agroamigable.buttons.intra-system>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="rounded-full border-2 bg-lime-c900 border-lime-c900 hover:bg-transparent hover:text-lime-c900 text-white p-2 btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $publications->links() !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</x-app-layout>
