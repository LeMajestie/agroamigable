<div class="w-full flex justify-center">
    <div class="w-full md:w-1/2 my-10 transition-all transform bg-white rounded-lg shadow-xl p-2 lg:px-6">
        <div class="flex items-center justify-between">
            <h1 class="main-title py-2 text-lime-c900 font-bold text-3xl text-center border-b border-orange-c500">
                Descarga GRATIS nuestro libro.</h1>
            <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="p-2 lg:p-6 flex flex-col justify-center gap-2 lg:gap-4">
            @csrf
            <div class="flex flex-col lg:flex-row items-center gap-1 lg:gap-4">
                <label for="name" class="form-label-text">Nombre
                    completo:</label>
                <input placeholder="Maria Dolores" name="name" value="{{ old('name') }}" class="form-input-field">
                @error('name')
                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                @enderror
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-1 lg:gap-4">
                <label for="email" class="form-label-text">Email:</label>
                <input placeholder="mariadolores@gmail.com" type="email" id="email" name="email" value="{{ old('email') }}" class="form-input-field">
                @error('email')
                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                @enderror
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-1 lg:gap-4">
                <label for="phone" class="form-label-text">Teléfono</label>
                <input placeholder="" type="number" name="phone" value="{{ old('phone') }}" class="form-input-field">
                @error('phone')
                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                @enderror
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-1 lg:gap-4">
                <label for="country" class="form-label-text">País</label>
                <select name="country" id="country" class="form-input-field">
                    <option selected="" value="">Seleccione País</option>
                    @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
                @error('country')
                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                @enderror
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-1 lg:gap-4">
                <label for="state" class="form-label-text">Región</label>
                <select name="region" id="region" class="form-input-field">
                    <option selected="" value="">Seleccione Región</option>
                </select>
                @error('region')
                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                @enderror
            </div>
            <div class="flex flex-col lg:flex-row items-center gap-1 lg:gap-4">
                <label for="ciudad" class="form-label-text">Ciudad</label>
                <input placeholder="" name="city" value="{{ old('city') }}" class="form-input-field">
                @error('city')
                <x-incomplete-form-error :message="$message"></x-incomplete-form-error>
                @enderror
            </div>
            <div class="flex justify-end">
                <button type="submit" class="rounded-full border-2 bg-orange-c500 border-orange-c500 hover:bg-transparent hover:text-orange-c500 text-white text-xl p-4">
                    Descargar Libro
                </button>
            </div>
        </form>
    </div>
</div>
</div>