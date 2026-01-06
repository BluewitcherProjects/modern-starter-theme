<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Ecommerce Store'))</title>
    <meta name="description" content="@yield('meta_description', 'Welcome to our online store')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#EEF2FF',
                            100: '#E0E7FF',
                            200: '#C7D2FE',
                            300: '#A5B4FC',
                            400: '#818CF8',
                            500: '{{ theme_setting("primary_color", "#4F46E5") }}',
                            600: '#4F46E5',
                            700: '#4338CA',
                            800: '#3730A3',
                            900: '#312E81',
                        },
                        secondary: {
                            500: '{{ theme_setting("secondary_color", "#10B981") }}',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Theme Styles -->
    <style>
        [x-cloak] { display: none !important; }

        .product-card {
            @apply bg-white dark:bg-gray-800 rounded-xl shadow-sm hover:shadow-lg transition-all duration-300;
        }

        .btn-primary {
            @apply inline-flex items-center justify-center px-6 py-3 bg-primary-500 text-white font-medium rounded-lg hover:bg-primary-600 transition-colors;
        }

        .btn-secondary {
            @apply inline-flex items-center justify-center px-6 py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #c1c1c1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #a1a1a1;
        }

        /* Custom CSS from theme settings */
        {!! theme_setting('custom_css', '') !!}
    </style>

    @stack('styles')
</head>
<body class="font-sans antialiased bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        @include('theme::partials.header')

        <!-- Main Content -->
        <main class="flex-1">
            @yield('content')
        </main>

        <!-- Footer -->
        @include('theme::partials.footer')
    </div>

    <!-- Mobile Menu Overlay -->
    <div x-data="{ open: false }"
         @toggle-mobile-menu.window="open = !open"
         x-show="open"
         x-cloak
         class="fixed inset-0 z-50 lg:hidden">
        <div class="fixed inset-0 bg-black/50" @click="open = false"></div>
        <div class="fixed inset-y-0 left-0 w-80 bg-white dark:bg-gray-800 shadow-xl" x-show="open" x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full">
            @include('theme::partials.mobile-menu')
        </div>
    </div>

    <!-- Cart Drawer -->
    <div x-data="{ open: false }"
         @toggle-cart.window="open = !open"
         x-show="open"
         x-cloak
         class="fixed inset-0 z-50">
        <div class="fixed inset-0 bg-black/50" @click="open = false"></div>
        <div class="fixed inset-y-0 right-0 w-96 max-w-full bg-white dark:bg-gray-800 shadow-xl" x-show="open" x-transition:enter="transform transition ease-in-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
            @include('theme::partials.cart-drawer')
        </div>
    </div>

    <!-- Toast Notifications -->
    <div x-data="{ toasts: [] }"
         @toast.window="toasts.push({id: Date.now(), message: $event.detail.message, type: $event.detail.type || 'success'}); setTimeout(() => toasts.shift(), 3000)"
         class="fixed bottom-4 right-4 z-50 space-y-2">
        <template x-for="toast in toasts" :key="toast.id">
            <div x-show="true"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-8"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 :class="toast.type === 'error' ? 'bg-red-500' : toast.type === 'warning' ? 'bg-yellow-500' : 'bg-green-500'"
                 class="px-4 py-3 rounded-lg text-white shadow-lg">
                <span x-text="toast.message"></span>
            </div>
        </template>
    </div>

    @stack('scripts')

    @if(theme_setting('custom_js'))
    <script>{!! theme_setting('custom_js') !!}</script>
    @endif
</body>
</html>
