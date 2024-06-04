<div class="w-full lg:w-1/3 bg-white shadow-lg rounded-xl border-2 border-black flex flex-col p-2 lg:p-4 justify-center place-items-center gap-2 lg:gap-4">
    <img class="h-20 rounded-full w-auto" src="{{ url($imageUrl) }}" alt="">
    <div class="text-lg">
        {{ $name }}
    </div>
    <div class="text-xs">
        {{ $description }}
    </div>
    <x-agroamigable.buttons.profile href="route('dashboard')" label="Ver Perfil" bgColor="bg-black" borderColor="border-black" hoverBgColor="hover:bg-opacity-0" hoverTextColor="hover:text-lime-c900" textColor="text-white"></x-agroamigable.buttons.profile>
</div>