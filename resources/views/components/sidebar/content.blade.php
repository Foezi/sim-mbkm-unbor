<x-perfect-scrollbar
    as="nav"
    aria-label="main"
    class="flex flex-col flex-1 gap-4 px-3"
>

    <x-sidebar.link
        title="Dashboard"
        href="{{ route('dashboard') }}"
        :isActive="request()->routeIs('dashboard')"
    >
        <x-slot name="icon">
            <x-icons.dashboard class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Kelola Akun Pengguna
    </div>

    <x-sidebar.link
        title="Administrator"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        href="{{ url('/admin') }}"
    >
        <x-slot name="icon">
            <x-icons.users-manage class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Mitra"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        href="{{ url('/mitra') }}"
    >
        <x-slot name="icon">
            <x-icons.users-manage class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Mahasiswa"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        href="{{ url('/mahasiswa') }}"
    >
        <x-slot name="icon">
            <x-icons.users-manage class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Kaprodi"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        href="{{ url('/kaprodi') }}"
    >
        <x-slot name="icon">
            <x-icons.users-manage class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <x-sidebar.link
        title="Dosen Pembimbing"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        href="{{ url('/dospem') }}"
    >
        <x-slot name="icon">
            <x-icons.users-manage class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>

    <div
        x-transition
        x-show="isSidebarOpen || isSidebarHovered"
        class="text-sm text-gray-500"
    >
        Kelola Sistem
    </div>

    <x-sidebar.link
        title="Backup"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')"
        href="{{ url('/backup') }}"
    >
        <x-slot name="icon">
            <x-icons.copy class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>
    </x-sidebar.link>
    
    {{-- <x-sidebar.dropdown
        title="Buttons"
        :active="Str::startsWith(request()->route()->uri(), 'buttons')">
        <x-slot name="icon">
            <x-heroicon-o-view-grid class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
        </x-slot>

        <x-sidebar.sublink
            title="Text button"
            href="{{ route('buttons.text') }}"
            :active="request()->routeIs('buttons.text')"
        />
        <x-sidebar.sublink
            title="Icon button"
            href="{{ route('buttons.icon') }}"
            :active="request()->routeIs('buttons.icon')"
        />
        <x-sidebar.sublink
            title="Text with icon"
            href="{{ route('buttons.text-icon') }}"
            :active="request()->routeIs('buttons.text-icon')"
        />
    </x-sidebar.dropdown> --}}
    

    

    {{-- @php
        $links = array_fill(0, 20, '');
    @endphp --}}

    {{-- @foreach ($links as $index => $link) --}}
    {{-- @endforeach --}}


</x-perfect-scrollbar>
