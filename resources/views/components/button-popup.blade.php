<script type="text/javascript">
    {
        var debeestarabierto = false;
    }
</script>
@if (session('create_category_error'))
    <script type="text/javascript">
        {
            var debeestarabierto = true;
            console.log("el error existe");
        }
    </script>
@endif
<script type="text/javascript">
    {
        console.log("debe estar abierto es:" + debeestarabierto);
    }
</script>
<div x-data="{ modelOpen: debeestarabierto }">
    <button @click="modelOpen =!modelOpen"
        class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
        <span>Descargar Libro
        </span>
    </button>

    <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
            </div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">
                <div class="flex items-center justify-between space-x-4">
                    <h1
                        class="main-title py-2 text-lime-c900 font-bold text-3xl text-center border-b border-orange-c500">
                        Descarga GRATIS nuestro libro.</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>

                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div>
                            <label for="name"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-200">Nombre
                                completo</label>
                            <input placeholder="Maria Dolores" name="name" value="{{ old('name') }}"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('name')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="email"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-200">Email</label>
                            <input placeholder="mariadolores@gmail.com" type="email" id="email" name="email"
                                value="{{ old('email') }}"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('email')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="phone"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-200">Teléfono</label>
                            <input placeholder="" type="number" name="phone" value="{{ old('phone') }}"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('phone')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="country"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-200">País</label>
                            <select name="country" id="country" class="country block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                placeholder="Seleccione país">
                                <option selected="" value="">Seleccione País</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            @error('country')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="state"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-200">Región</label>
                            <select name="region" id="region" class="region block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                                placeholder="Seleccione región">
                                <option selected="" value="">Seleccione Región</option>
                            </select>
                            @error('region')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mt-4">
                            <label for="ciudad"
                                class="block text-sm text-gray-700 capitalize dark:text-gray-200">Ciudad</label>
                            <input placeholder="" name="city" value="{{ old('city') }}"
                                class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-lime-c100 border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                            @error('city')
                                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                            @enderror
                        </div>

                    </div>
                    <div class="flex justify-end mt-6">
                        <button type="submit"
                            class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                            Descargar Libro
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            var regions = document.querySelectorAll(".region");
            var countries = document.querySelectorAll(".country")

            console.log(regions);
            console.log(countries);

            $(".country").change(function() {
                console.log("Cambió país");
                let country_id = this.value;
                console.log("por:" + country_id);
                $.get('/1?country=' + country_id, function(data) {
                    console.log("sus ciudades son: " + data);
                    $(".region").html(data);
                })
            })
        })
    </script>


</div>
