<div class="relative group">
    <button class="flex items-center space-x-2 rtl:space-x-reverse px-3 py-2 rounded-lg hover:bg-gray-200 transition duration-300">
        <i class="fas fa-globe text-gray-700"></i>
        <span
            class="text-gray-700 font-medium">
            {{ config('languages.languages.' . app()->getLocale() . '.name') }}
        </span>
        <i class="fas fa-chevron-down text-gray-600 text-sm"></i>
    </button>

    <!-- Dropdown Menu -->
    <div
        class="absolute right-0 mt-0 w-40 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 z-50">
        @foreach (config('languages.languages') as $key => $language)
            @if ($key !== app()->getLocale())
                <a href="{{ route('language.switch', $key) }}"
                    class="block px-4 py-2 text-gray-700 hover:bg-blue-500 hover:text-white rounded-lg transition duration-200
                    {{ $loop->first ? 'rounded-t-lg' : '' }}
                    {{ $loop->last ? 'rounded-b-lg' : '' }}">
                    {{-- <span class="text-lg mr-2 rtl:ml-2">{{ $language['native'] }}</span> --}}
                    <span class="text-sm text-gray-500">{{ $language['name'] }}</span>
                </a>
            @else
                <div
                    class="px-4 py-2 text-gray-700 bg-blue-100 font-semibold
                    {{ $loop->first ? 'rounded-t-lg' : '' }}
                    {{ $loop->last ? 'rounded-b-lg' : '' }}">
                    {{-- <span class="text-lg mr-2 rtl:ml-2">✓ {{ $language['native'] }}</span> --}}
                    <span class="text-sm text-gray-500">{{ $language['name'] }}</span>
                </div>
            @endif
        @endforeach
    </div>
</div>
