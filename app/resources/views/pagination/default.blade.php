@if ($paginator->hasPages())
    <ul class="pagination pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled main-box"><span>الصفحة السابقة</span></li>
        @else
            <li class="main-box" ><a style="color:#d5460a;" href="{{ $paginator->previousPageUrl() }}" rel="prev">الصفحة السابقة</a></li>
        @endif
	
        {{-- Next Page Link --}}
		
        @if ($paginator->hasMorePages())
            <li class="main-box" ><a href="{{ $paginator->nextPageUrl() }}" style="color:#d5460a;" rel="next">الصفحة القادمة</a></li>
        @else
            <li class="disabled main-box"><span>الصفحة القادمة</span></li>
        @endif
    </ul>
@endif