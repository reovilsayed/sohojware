@if ($paginator->lastPage() > 1)
    <nav class="ma-pagination">
        <ul class="pagination justify-content-center">
            @if ($paginator->onFirstPage())
                <li class="ma-page-item deactive-page-item" aria-disabled="true">
                    <span aria-hidden="true"><i class="fa fa-chevron-left icon "></i></span>
                </li>
            @else
                <li class="ma-page-item" aria-disabled="true">
                    <a class="ma-page-item" href="{{ $paginator->previousPageUrl() }}"><i
                            class="fa fa-chevron-left icon"></i></a>
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
                            <li class="ma-page-item"><a class="ma-page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="ma-page-item">
                    <a class="ma-page-link" href="{{ $paginator->nextPageUrl() }}"><i
                            class="fa fa-chevron-right icon "></i></a>
                </li>
            @else
                <li class="ma-page-item deactive-page-item">
                    <span aria-hidden="true"><i class="fa fa-chevron-right icon "></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
