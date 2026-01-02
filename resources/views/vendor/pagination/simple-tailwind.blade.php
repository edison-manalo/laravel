@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex gap-2 items-center justify-between">

        @if ($paginator->onFirstPage())
            <span class="inline-flex items-center gap-1 py-2 font-medium text-white cursor-not-allowed">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="inline-flex items-center gap-1 py-2 font-medium text-white group">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="inline-flex items-center gap-1 py-2 font-medium text-white group">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="inline-flex items-center gap-1 py-2 font-medium text-white cursor-not-allowed">
                {!! __('pagination.next') !!}
            </span>
        @endif

    </nav>
@endif
