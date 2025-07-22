<nav x-data="{ open: false }" class="bg-green-600 border-b border-green-700 text-white">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <!-- Left: Title -->
            <div class="flex items-center">
                <span class="text-2xl font-bold">📚 Book Management System</span>
            </div>

            <!-- Right: Navigation + Settings -->
            <div class="flex items-center space-x-6">
                <!-- Navigation Links -->
                <div class="hidden sm:flex space-x-6 text-white font-medium">
                    <a href="{{ url('student/dashboard') }}" class="hover:text-green-100 {{ request()->is('student/dashboard') ? 'underline' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ url('student/books') }}" class="hover:text-green-100 {{ request()->is('student/books') ? 'underline' : '' }}">
                        View Book List
                    </a>
                    <a href="{{ url('student/issued-books') }}" class="hover:text-green-100 {{ request()->is('student/issued-books') ? 'underline' : '' }}">
                        Issued Books
                    </a>
                </div>

                <!-- Settings Dropdown -->
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-white text-sm leading-4 font-medium rounded-md text-white bg-green-700 hover:bg-green-800 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-2">
                                <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="url('student/profile')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden bg-green-700 text-white">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="url('student/dashboard')" :active="request()->is('student/dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="url('student/books')" :active="request()->is('student/books')">
                {{ __('View Book List') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="url('student/issued-books')" :active="request()->is('student/issued-books')">
                {{ __('Issued Books') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings -->
        <div class="pt-4 pb-1 border-t border-green-500">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-green-100">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="url('student/profile')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
