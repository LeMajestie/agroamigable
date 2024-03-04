<div class="bg-white shadow-lg rounded-xl m-2 text-md lg:text-lg flex flex-col gap-2 px-4 py-2 border-2 border-lime-c100">
    <div class="flex flex-row justify-between">
        <p class="font-bold text-lime-c500">
            {{$name}}:
        </p>
        <p class="font-bold text-orange-c500 text-sm">
        {{ substr($date, 0, 10) }}
        </p>
    </div>
    <p class="px-2">
        {{$comment}}
    </p>
</div>