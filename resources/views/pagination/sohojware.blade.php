

        {{-- <li class="ma-page-item deactive-page-item"><a class="ma-page-link " href="#"
                title="Previous Page"><i class="bi bi-chevron-left icon "></i></a></li>
        <li class="ma-page-item active"><a class="ma-page-link " href="#">1 </a>
        </li>
        <li class="ma-page-item  "><a class="ma-page-link " href="#">2 </a></li>
        <li class="ma-page-item  "><a class="ma-page-link " href="#">3 </a></li>
        <li class="ma-page-item  "><a class="ma-page-link " href="#">4 </a></li>
        <li class="ma-page-item  "><a class="ma-page-link " href="#">5 </a></li>
        <li class="ma-page-item  "><a class="ma-page-link " href="#">6 </a></li>
        <li class="ma-page-item"><a class="ma-page-link" href="#" title="Next Page"><i
                    class="bi bi-chevron-right icon "></i></a></li> --}}

<nav class="ma-pagination">
    <ul class="pagination justify-content-center">
        @if ($paginator->onFirstPage())
            <li class="ma-page-item deactive-page-item" aria-disabled="true">
                <span aria-hidden="true"><i class="bi bi-chevron-left icon "></i></span>
            </li>
        @else
        <li class="ma-page-item" aria-disabled="true">
            <a class="ma-page-item" href="{{ $paginator->previousPageUrl() }}"><i class="bi bi-chevron-left icon"></i></a>
        </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="ma-page-item active" aria-current="page"><span>{{ $page }}</span></li>
                    @else
                        <li class="ma-page-item"><a class="ma-page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="ma-page-item">
                <a class="ma-page-link" href="{{ $paginator->nextPageUrl() }}"><i class="bi bi-chevron-right icon "></i></a>
            </li>
        @else
            <li class="ma-page-item deactive-page-item">
                <span aria-hidden="true"><i class="bi bi-chevron-right icon "></i></span>
            </li>
        @endif
    </ul>
</nav>
