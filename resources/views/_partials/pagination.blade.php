@if ($paginator->hasPages())
    <nav aria-label="Pagination">
        <nav aria-label="Pagination">
            <ul class="uk-flex-center uk-pagination" uk-margin>
                <li>
                    <a href="#"><span uk-pagination-previous></span></a>
                </li>
                <li><a href="#">1</a></li>
                <li class="uk-disabled"><span>…</span></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span aria-current="page">7</span></li>
                <li><a href="#">8</a></li>
                <li>
                    <a href="#"><span uk-pagination-next></span></a>
                </li>
            </ul>
        </nav>
    </nav>
@endif
