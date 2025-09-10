@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-borders cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-main-text dark:border-gray-600">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-borders leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-borders focus:border-blue-300 active:bg-main-background active:text-gray-700 transition ease-in-out duration-150 dark:bg-main-text dark:border-gray-600 dark:text-borders dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-borders">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-borders leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-borders focus:border-blue-300 active:bg-main-background active:text-gray-700 transition ease-in-out duration-150 dark:bg-main-text dark:border-gray-600 dark:text-borders dark:focus:border-blue-700 dark:active:bg-gray-700 dark:active:text-borders">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-borders cursor-default leading-5 rounded-md dark:text-gray-600 dark:bg-main-text dark:border-gray-600">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
