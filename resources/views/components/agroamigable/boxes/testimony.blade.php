<div class="bg-white max-w-xl mx-auto shadow-lg rounded-lg overflow-hidden">
    <div class="sm:flex sm:items-center px-8 py-4">
        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0 px-2" src="{{ url($imageUrl) }}"
            alt="">
        <div class="text-center sm:text-left sm:flex-grow">
            <div class="mb-4 py-2">
                <p class="py-4 text-xl leading-tight">{{ $witness }}</p>
                <p class="py-2 text-sm leading-tight text-gray-600">{{ $location }}</p>
                <p class="text-sm leading-tight text-gray-400">{{ $body }}</p>
            </div>
            <div class="flex justify-center">
                <x-button-popup-video videoUrl="{{ $videoUrl }}">
                </x-button-popup-video>
            </div>
        </div>
    </div>
</div>
