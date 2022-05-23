@if (count($breadcrumbs))

<nav class="bg-gray-100 px-5 py-3 mb-3 rounded-md w-full">
    <ol class="list-reset flex">
        @foreach ($breadcrumbs as $breadcrumb)

        @if ($breadcrumb->url && !$loop->last)
        <li><a href="{{ $breadcrumb->url }}" class="text-blue-600 hover:text-blue-700">{{ $breadcrumb->title }}</a></li>
        <li><span class="text-gray-500 mx-2">/</span></li>
        @else
        <li class="active">{{ $breadcrumb->title }}</li>
        @endif

        @endforeach
    </ol>
</nav>

@endif
