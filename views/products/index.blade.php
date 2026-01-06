@extends('theme::layouts.app')

@section('title', 'Products - ' . config('app.name'))
@section('meta_description', 'Browse our wide selection of products.')

@section('content')
    <div class="bg-gray-50 dark:bg-gray-900 min-h-screen">
        <!-- Breadcrumb -->
        <div class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
            <div class="container mx-auto px-4 py-4">
                <nav class="flex text-sm">
                    <a href="/" class="text-gray-500 dark:text-gray-400 hover:text-primary-500">Home</a>
                    <span class="mx-2 text-gray-400">/</span>
                    <span class="text-gray-900 dark:text-white font-medium">Products</span>
                </nav>
            </div>
        </div>

        <div class="container mx-auto px-4 py-8">
            <div class="flex flex-col lg:flex-row gap-8">
                <!-- Sidebar Filters -->
                <aside class="lg:w-64 flex-shrink-0">
                    <div x-data="{ filtersOpen: false }" class="lg:sticky lg:top-24">
                        <!-- Mobile Filter Toggle -->
                        <button @click="filtersOpen = !filtersOpen" class="lg:hidden w-full flex items-center justify-between p-4 bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 mb-4">
                            <span class="font-medium text-gray-900 dark:text-white">Filters</span>
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"/>
                            </svg>
                        </button>

                        <div :class="{ 'hidden lg:block': !filtersOpen }" class="space-y-6">
                            <!-- Categories -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-4">
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-4">Categories</h3>
                                <ul class="space-y-2">
                                    @foreach(['All Products', 'Electronics', 'Clothing', 'Home & Garden', 'Sports', 'Books'] as $cat)
                                    <li>
                                        <a href="#" class="flex items-center justify-between text-gray-600 dark:text-gray-400 hover:text-primary-500 {{ $loop->first ? 'text-primary-500 font-medium' : '' }}">
                                            <span>{{ $cat }}</span>
                                            <span class="text-xs bg-gray-100 dark:bg-gray-700 px-2 py-1 rounded">{{ rand(10, 500) }}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Price Range -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-4">
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-4">Price Range</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center space-x-2">
                                        <input type="number" placeholder="Min" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-sm">
                                        <span class="text-gray-400">-</span>
                                        <input type="number" placeholder="Max" class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-gray-50 dark:bg-gray-700 text-sm">
                                    </div>
                                    <button class="w-full py-2 bg-primary-500 text-white text-sm font-medium rounded-lg hover:bg-primary-600 transition-colors">Apply</button>
                                </div>
                            </div>

                            <!-- Brands -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-4">
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-4">Brands</h3>
                                <div class="space-y-2">
                                    @foreach(['Apple', 'Samsung', 'Sony', 'Nike', 'Adidas'] as $brand)
                                    <label class="flex items-center">
                                        <input type="checkbox" class="w-4 h-4 text-primary-500 border-gray-300 rounded focus:ring-primary-500">
                                        <span class="ml-2 text-gray-600 dark:text-gray-400">{{ $brand }}</span>
                                    </label>
                                    @endforeach
                                </div>
                            </div>

                            <!-- Ratings -->
                            <div class="bg-white dark:bg-gray-800 rounded-lg border border-gray-200 dark:border-gray-700 p-4">
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-4">Rating</h3>
                                <div class="space-y-2">
                                    @for($r = 5; $r >= 1; $r--)
                                    <label class="flex items-center cursor-pointer">
                                        <input type="radio" name="rating" class="w-4 h-4 text-primary-500 border-gray-300 focus:ring-primary-500">
                                        <span class="ml-2 flex items-center">
                                            @for($s = 0; $s < 5; $s++)
                                            <svg class="w-4 h-4 {{ $s < $r ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            @endfor
                                            <span class="ml-1 text-sm text-gray-500 dark:text-gray-400">& up</span>
                                        </span>
                                    </label>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

                <!-- Products Grid -->
                <main class="flex-1">
                    <!-- Header -->
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6">
                        <div>
                            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">All Products</h1>
                            <p class="text-gray-500 dark:text-gray-400 mt-1">Showing 1-24 of 256 products</p>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 sm:mt-0">
                            <select class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-800 text-sm focus:ring-2 focus:ring-primary-500">
                                <option>Sort by: Featured</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                                <option>Newest First</option>
                                <option>Best Rating</option>
                            </select>
                            <div class="hidden sm:flex items-center space-x-2 border border-gray-300 dark:border-gray-600 rounded-lg p-1">
                                <button class="p-2 bg-primary-500 text-white rounded">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                                    </svg>
                                </button>
                                <button class="p-2 text-gray-400 hover:text-gray-600 rounded">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Products -->
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-{{ theme_setting('products_per_row', '4') - 1 }} gap-6">
                        @for($i = 1; $i <= 12; $i++)
                        <div class="product-card group">
                            <div class="relative overflow-hidden rounded-t-xl">
                                <div class="aspect-square bg-gray-100 dark:bg-gray-700">
                                    <img src="https://via.placeholder.com/400" alt="Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                </div>
                                @if($i % 5 == 0)
                                <span class="absolute top-3 left-3 px-2 py-1 bg-red-500 text-white text-xs font-bold rounded">-20%</span>
                                @endif
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-2">
                                    <button class="p-3 bg-white rounded-full text-gray-900 hover:bg-primary-500 hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                        </svg>
                                    </button>
                                    <button class="p-3 bg-white rounded-full text-gray-900 hover:bg-primary-500 hover:text-white transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4">
                                <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Category</p>
                                <h3 class="font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-primary-500 transition-colors truncate">
                                    <a href="/product/{{ $i }}">Product Name {{ $i }}</a>
                                </h3>
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400">
                                        @for($s = 0; $s < 5; $s++)
                                        <svg class="w-3 h-3 {{ $s < 4 ? 'fill-current' : 'text-gray-300' }}" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @endfor
                                    </div>
                                    <span class="text-xs text-gray-500 dark:text-gray-400 ml-1">({{ rand(5, 200) }})</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <span class="text-lg font-bold text-gray-900 dark:text-white">${{ rand(29, 299) }}.99</span>
                                    @if($i % 5 == 0)
                                    <span class="text-sm text-gray-400 line-through">${{ rand(300, 399) }}.99</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>

                    <!-- Pagination -->
                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center space-x-2">
                            <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Previous</button>
                            <button class="px-4 py-2 bg-primary-500 text-white rounded-lg">1</button>
                            <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">2</button>
                            <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">3</button>
                            <span class="px-2 text-gray-400">...</span>
                            <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">12</button>
                            <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Next</button>
                        </nav>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
