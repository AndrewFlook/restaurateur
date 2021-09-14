<a
    href="{{ $href == '#' ? '#' : route($href) }}"
    class="{{ Route::currentRouteName() == $href ? 'bg-gray-100 text-gray-900 hover:text-gray-900 hover:bg-gray-100' : 'text-gray-600 hover:text-gray-900 hover:bg-gray-50' }} group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <i class="fal {{ $icon }} fa-fw fa-2x text-gray-500 group-hover:text-gray-500 mr-3 flex-shrink-0 h-6 w-6"></i>
    <span class="flex-1">
        {{ $slot }}
    </span>
</a>