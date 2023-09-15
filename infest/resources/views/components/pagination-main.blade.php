<div class="Page navigation example">
    @if ($paginator->hasPages())
        <ul class="pagination justify-content-center">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a href="{{ $paginator->url($paginator->currentPage()-1) }}" class="page-link" rel="prev">&laquo;</a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled px-2">...</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a href="#" class="page-link">{{ $page }}<span class="sr-only">(current)</span></a>
                            </li>
                        @else
                            <li class="page-item">
                                <a href="{{ $paginator->url($page) }}" class="page-link">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a href="{{ $paginator->url($paginator->currentPage()+1) }}" class="page-link" rel="next">&raquo;</a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @endif
        </ul>
    @endif
</div>
