<nav class="w-fit flex items-center rounded-md border">
    <div class="p-2 border-r">
        <p class="text-xs text-neutral-950 leading-5">
            @if ($paginator->firstItem())
                <span class="font-medium">
                    {{ $paginator->firstItem() }}-{{ $paginator->lastItem() }}
                </span>
            @else
                {{ $paginator->count() }}
            @endif
            <span class="font-medium text-neutral-950/70">of {{ $paginator->total() }}</span>
        </p>
    </div>
    <ul class="h-full flex items-center p-2">
        @if ($paginator->onFirstPage())
            <li 
                class="paginate-links-disabled" 
                aria-disabled="true" 
                aria-label="@lang('pagination.previous')"
            >
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24"
                        fill="none" 
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-3.5 h-3.5 stroke-black/50 feather feather-chevron-left"
                    >
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </span>
            </li>
        @else
            <li class="paginate-links-enabled">
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24"
                        fill="none" 
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-3.5 h-3.5 feather feather-chevron-left"
                    >
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </a>
            </li>
        @endif

        @if ($paginator->hasMorePages())
            <li class="paginate-links-enabled">
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-3.5 h-3.5 feather feather-chevron-right"
                    >
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </a>
            </li>
        @else
            <li class="paginate-links-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" 
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="w-3.5 h-3.5 stroke-black/50 feather feather-chevron-right"
                    >
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </span>
            </li>
        @endif
    </ul>
</nav>