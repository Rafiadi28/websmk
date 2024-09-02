<a {{ $attributes }}
class="{{ $active ? ' bg-gray-900 text-white ' :'hover:bg-gray-700 text-gray-300' }}
    rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a> 