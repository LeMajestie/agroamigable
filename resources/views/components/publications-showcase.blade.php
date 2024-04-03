<a href="/blog/{{ $slug }}" class="w-full rounded-xl overflow-hidden shadow-lg bg-white">
    <div class="w-full">
        <div class="h-48">
            <img class="object-cover h-full w-full" src="/images/publications_images/{{ $image }}">
        </div>
        <div class="h-auto">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $name }}</div>
                <p class="text-gray-700 text-base line-clamp-3">
                    {{ $abstract }}
                </p>
            </div>
        </div>
    </div>
</a>