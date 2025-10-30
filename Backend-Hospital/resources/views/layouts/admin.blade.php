<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Admin Panel</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-sky-50 text-gray-800">
    <div class="min-h-screen flex">
        <!-- Sidebar with enhanced sky blue theme -->
        <aside class="w-64 bg-gradient-to-b from-sky-700 to-sky-800 text-white flex-shrink-0 shadow-xl relative">
            <div class="p-6 border-b border-sky-600/30">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center shadow-lg backdrop-blur-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white" viewBox="0 0 32 32">
                            <path fill="#FFFFFFFF" d="m6.457 9.894l12.523 5.163l-.456 1.211L6 11.105Zm7.02-3.091L26 11.966l-.457 1.21L13.02 8.015ZM6.465 18.885l12.524 5.163l-.457 1.21L6.01 20.097Zm7.007-3.086l12.524 5.163l-.456 1.21l-12.524-5.162Z"/>
                            <path fill="#FFFFFFFF" d="M6 24.07V30l19.997-3.106V20.96zM6 5.11v5.99l20-3.11V2zm0 9.96v5.03l20-3.11v-5.03z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-xl font-bold tracking-tight text-white">Sastra Hospital</h1>
                        <p class="text-xs text-sky-200/80">Management System</p>
                    </div>
                </div>
            </div>

            <nav class="mt-6 px-4 space-y-1">
                @php
                    $navClasses = 'flex items-center px-4 py-3 rounded-xl transition-all duration-200 group text-sky-100 hover:bg-white/10 hover:text-white';
                    $activeClasses = 'bg-white/15 text-white shadow-lg border-l-4 border-sky-300';
                    $iconClasses = 'w-5 h-5 mr-3 transition-colors';
                @endphp

                <a href="{{ route('admin.dashboard') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.dashboard') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="{{ $iconClasses }} {{ request()->routeIs('admin.dashboard') ? 'text-sky-300' : 'text-sky-200 group-hover:text-sky-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                    <div class="flex-1">
                        <span class="font-medium text-sm block">Dashboard</span>
                    </div>
                </a>

                {{-- User Management link (Visible only to Admin) --}}
                @if(auth()->user()->isAdmin())
                <a href="{{ route('admin.users') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.users') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.users') ? 'text-sky-300' : 'text-sky-200 group-hover:text-sky-300' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.004 9.004 0 0112 15c2.21 0 4.21.805 5.879 2.137M15 11a3 3 0 11-6 0 3 3 0 016 0zM12 3a9 9 0 100 18 9 9 0 000-18z" />
                    </svg>
                    <span class="font-medium text-sm">Users</span>
                </a>
                @endif

                <a href="{{ route('admin.patients') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.patients') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.patients') ? 'text-white' : 'text-medical-200 group-hover:text-white' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="font-medium text-sm">Patients</span>
                </a>

                <a href="{{ route('admin.departments') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.departments') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.departments') ? 'text-white' : 'text-medical-200 group-hover:text-white' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 10h-2V4h1V2H4v2h1v6H3a1 1 0 0 0-1 1v9h20v-9a1 1 0 0 0-1-1m-7 8v-4h-4v4H7V4h10v14z"/>
                    </svg>
                    <span class="font-medium text-sm">Departments</span>
                </a>

                <a href="{{ route('admin.doctors') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.doctors') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.doctors') ? 'text-white' : 'text-medical-200 group-hover:text-white' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    <span class="font-medium text-sm">Doctors</span>
                </a>

                <a href="{{ route('admin.staffs') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.staffs') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.staffs') ? 'text-white' : 'text-medical-200 group-hover:text-white' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                    <span class="font-medium text-sm">Staffs</span>
                </a>

                <a href="{{ route('admin.appointments') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.appointments') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="{{ $iconClasses }} {{ request()->routeIs('admin.appointments') ? 'text-sky-300' : 'text-sky-200 group-hover:text-sky-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-medium text-sm">Appointments</span>
                </a>

                <a href="{{ route('admin.invoices') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.invoices') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="w-5 h-5 mr-3 {{ request()->routeIs('admin.invoices') ? 'text-white' : 'text-medical-200 group-hover:text-white' }} transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="font-medium text-sm">Invoices</span>
                </a>

                <a href="{{ route('admin.documents') }}"
                   class="{{ $navClasses }} {{ request()->routeIs('admin.documents') ? $activeClasses : 'hover:bg-white/10' }}">
                    <svg class="{{ $iconClasses }} {{ request()->routeIs('admin.documents') ? 'text-sky-300' : 'text-sky-200 group-hover:text-sky-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
                    </svg>
                    <span class="font-medium text-sm">Documents</span>
                </a>

                <a href="http://localhost:5174/" target="_blank"
                   class="{{ $navClasses }} hover:bg-white/10">
                    <span class="mr-2 text-xl">🌐</span>
                    <span>Our Public Website</span>
                </a>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col overflow-hidden">
            <header class="bg-white shadow-sm z-10 border-b border-sky-100">
                <div class="px-8 py-4">
                    <div class="flex items-center justify-between">
                        {{-- HEADER TITLE --}}
                        <div class="flex-shrink-0">
                            <h2 class="text-2xl font-bold text-sky-700 tracking-tight">
                                {{ $header ?? 'Admin Panel' }}
                            </h2>
                        </div>

                        {{-- RIGHT SIDE: Notifications, User Info, and Logout --}}
                        <div class="flex items-center space-x-6">

                            {{-- Notification Button --}}
                            <button class="relative p-2 text-gray-500 hover:text-sky-600 hover:bg-sky-50 rounded-full transition-all duration-200">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                </svg>
                                <span class="absolute top-1 right-1 w-2.5 h-2.5 bg-red-500 rounded-full ring-2 ring-white"></span>
                            </button>

                            {{-- User Profile Info --}}
                            <div class="flex items-center space-x-3 border-r pr-6 border-gray-200">
                                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-sky-500 to-sky-600 text-white flex items-center justify-center font-bold text-lg shadow-sm">
                                    {{ strtoupper(substr(auth()->user()->username, 0, 1)) }}
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-gray-900 truncate">Hello, {{ auth()->user()->username }}</p>
                                    <p class="text-sm text-sky-600 font-medium">{{ ucfirst(auth()->user()->role) }}</p>
                                </div>
                            </div>

                            {{-- Logout Button --}}
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="flex items-center space-x-2 text-gray-500 hover:text-red-600 transition-colors duration-200 group">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    <span class="font-medium text-sm hidden sm:inline">Logout</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex-1 overflow-y-auto bg-sky-50/30 p-8">
                <div class="max-w-7xl mx-auto">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </div>

    @livewireScripts
</body>
</html>
