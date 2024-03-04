@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
        <span class="relative inline-flex items-center px-4 py-2 text-lg font-medium text-lime-c900 cursor-default leading-5 rounded-md">
            <span class="material-symbols-outlined">
                arrow_circle_left
            </span>
        </span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-lg font-medium text-lime-c900 leading-5 rounded-md hover:text-orange-c500 focus:outline-none focus:ring active:text-orange-c500 transition ease-in-out duration-150">
            <span class="material-symbols-outlined">
                arrow_circle_left
            </span>
        </a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-lg font-medium text-lime-c900 leading-5 rounded-md hover:text-orange-c500 focus:outline-none focus:ring active:text-orange-c500 transition ease-in-out duration-150">
            <span class="material-symbols-outlined">
                arrow_circle_right
            </span>
        </a>
        @else
        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-lg font-medium text-lime-c900 cursor-default leading-5 rounded-md">
            <span class="material-symbols-outlined">
                arrow_circle_right
            </span>
        </span>
        @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <div>
            <p class="text-lg text-lime-c900 leading-5">
                {!! __('Comentarios del') !!}
                @if ($paginator->firstItem())
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                {!! __('al') !!}
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                @else
                {{ $paginator->count() }}
                @endif
                {!! __('de') !!}
                <span class="font-medium">{{ $paginator->total() }}</span>
                {!! __(' -- ') !!}
            </p>
        </div>

        <div>
            <span class="relative z-0 inline-flex shadow-sm rounded-md">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span class="relative inline-flex items-center px-2 py-2 text-lg font-medium text-transparent cursor-default rounded-l-md leading-5" aria-hidden="true">
                        <span class="material-symbols-outlined">
                            arrow_circle_left
                        </span>
                    </span>
                </span>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-lg font-medium text-lime-c900   rounded-l-md leading-5 hover:text-orange-500 focus:z-10 focus:outline-none focus:ring   active:bg-gray-100 active:text-orange-c500 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                    <span class="material-symbols-outlined">
                        arrow_circle_left
                    </span>
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <span aria-disabled="true">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-lg font-medium text-lime-c900   cursor-default leading-5">{{ $element }}</span>
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <span aria-current="page">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-lg font-bold text-orange-500 cursor-default leading-5">{{ $page }}</span>
                </span>
                @else
                <a href="{{ $url }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-lg font-medium text-lime-c900   leading-5 hover:text-orange-c500 focus:z-10 focus:outline-none focus:ring   active:bg-gray-100 active:text-orange-c500 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-lg font-medium text-lime-c900 rounded-r-md leading-5 hover:text-orange-500 focus:z-10 focus:outline-none focus:ring   active:bg-gray-100 active:text-orange-c500 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                    <span class="material-symbols-outlined">
                        arrow_circle_right
                    </span>
                </a>
                @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                    <span class="relative inline-flex items-center px-2 py-2 -ml-px text-lg font-medium text-transparent cursor-default rounded-r-md leading-5" aria-hidden="true">
                        <span class="material-symbols-outlined">
                            arrow_circle_right
                        </span>
                    </span>
                </span>
                @endif
            </span>
        </div>
    </div>
</nav>
@endif