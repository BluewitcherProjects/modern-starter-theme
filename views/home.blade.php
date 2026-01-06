@extends('theme::layouts.app')

@section('title', 'Home - ' . config('app.name'))
@section('meta_description', 'Welcome to our store. Discover amazing products at great prices.')

@section('content')
    <!-- Hero Banner -->
    @if(theme_setting('show_hero_banner', true))
    <section class="relative bg-gradient-to-r from-primary-600 to-primary-800 text-white overflow-hidden">
        @if(theme_setting('hero_image'))
        <div class="absolute inset-0">
            <img src="{{ theme_setting('hero_image') }}" alt="Hero" class="w-full h-full object-cover opacity-20">
        </div>
        @endif
        <div class="container mx-auto px-4 py-20 lg:py-32 relative z-10">
            <div class="max-w-2xl">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6">{{ theme_setting('hero_title', 'Welcome to Our Store') }}</h1>
                <p class="text-xl text-primary-100 mb-8">{{ theme_setting('hero_subtitle', 'Discover amazing products at great prices') }}</p>
                <div class="flex flex-wrap gap-4">
                    <a href="/products" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 font-bold rounded-lg hover:bg-gray-100 transition-colors">
                        Shop Now
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a href="/deals" class="inline-flex items-center justify-center px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white/10 transition-colors">
                        View Deals
                    </a>
                </div>
            </div>
        </div>
        <!-- Decorative elements -->
        <div class="absolute bottom-0 right-0 w-1/2 h-full hidden lg:block">
            <svg class="absolute bottom-0 right-0 w-full h-auto text-white/5" viewBox="0 0 400 400" fill="currentColor">
                <circle cx="300" cy="300" r="200"/>
            </svg>
        </div>
    </section>
    @endif

    <!-- Features -->
    <section class="py-12 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Free Shipping</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">On orders over $50</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Easy Returns</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">30-day return policy</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">Secure Payment</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">100% secure checkout</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-primary-100 dark:bg-primary-900/30 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-primary-600 dark:text-primary-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">24/7 Support</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">Dedicated support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-16 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">Shop by Category</h2>
                <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Browse our wide selection of products across various categories</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                @foreach(['Electronics', 'Clothing', 'Home & Garden', 'Sports', 'Books', 'Toys'] as $category)
                <a href="/category/{{ \Illuminate\Support\Str::slug($category) }}" class="group">
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 text-center hover:shadow-lg transition-all duration-300 border border-gray-200 dark:border-gray-700 group-hover:border-primary-500">
                        <div class="w-16 h-16 bg-primary-100 dark:bg-primary-900/30 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-primary-500 transition-colors">
                            <svg class="w-8 h-8 text-primary-600 dark:text-primary-400 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <h3 class="font-semibold text-gray-900 dark:text-white group-hover:text-primary-500 transition-colors">{{ $category }}</h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between mb-12">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-2">Featured Products</h2>
                    <p class="text-gray-600 dark:text-gray-400">Handpicked products just for you</p>
                </div>
                <a href="/products" class="hidden md:flex items-center text-primary-500 hover:text-primary-600 font-medium">
                    View All
                    <svg class="w-5 h-5 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-{{ theme_setting('products_per_row', '4') }} gap-6">
                @for($i = 1; $i <= 8; $i++)
                <div class="product-card group">
                    <div class="relative overflow-hidden rounded-t-xl">
                        <div class="aspect-square bg-gray-100 dark:bg-gray-700">
                            <img src="https://via.placeholder.com/400" alt="Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        @if($i % 3 == 0)
                        <span class="absolute top-3 left-3 px-2 py-1 bg-red-500 text-white text-xs font-bold rounded">SALE</span>
                        @elseif($i % 4 == 0)
                        <span class="absolute top-3 left-3 px-2 py-1 bg-green-500 text-white text-xs font-bold rounded">NEW</span>
                        @endif
                        <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center space-x-2">
                            <button class="p-3 bg-white rounded-full text-gray-900 hover:bg-primary-500 hover:text-white transition-colors" title="Add to Cart">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                                </svg>
                            </button>
                            <button class="p-3 bg-white rounded-full text-gray-900 hover:bg-primary-500 hover:text-white transition-colors" title="Quick View">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                            </button>
                            <button class="p-3 bg-white rounded-full text-gray-900 hover:bg-primary-500 hover:text-white transition-colors" title="Add to Wishlist">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-xs text-gray-500 dark:text-gray-400 mb-1">Category Name</p>
                        <h3 class="font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-primary-500 transition-colors">
                            <a href="/product/{{ $i }}">Product Name {{ $i }}</a>
                        </h3>
                        <div class="flex items-center mb-2">
                            <div class="flex text-yellow-400">
                                @for($s = 0; $s < 5; $s++)
                                <svg class="w-4 h-4 {{ $s < 4 ? 'fill-current' : 'text-gray-300' }}" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                @endfor
                            </div>
                            <span class="text-xs text-gray-500 dark:text-gray-400 ml-2">({{ rand(10, 150) }})</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-bold text-gray-900 dark:text-white">${{ rand(19, 299) }}.99</span>
                                @if($i % 3 == 0)
                                <span class="text-sm text-gray-400 line-through">${{ rand(300, 399) }}.99</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="text-center mt-10 md:hidden">
                <a href="/products" class="btn-primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Promotional Banner -->
    <section class="py-16 bg-gradient-to-r from-gray-900 to-gray-800 text-white">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="mb-8 lg:mb-0">
                    <span class="inline-block px-3 py-1 bg-primary-500 text-white text-sm font-bold rounded-full mb-4">Limited Time</span>
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4">Get 25% Off Your First Order</h2>
                    <p class="text-gray-300 text-lg mb-6">Use code <span class="font-bold text-primary-400">WELCOME25</span> at checkout</p>
                    <a href="/products" class="btn-primary">Shop Now</a>
                </div>
                <div class="w-full lg:w-1/3">
                    <div class="bg-white/10 rounded-2xl p-8 text-center">
                        <p class="text-sm text-gray-300 mb-2">Offer ends in</p>
                        <div class="flex justify-center space-x-4">
                            <div>
                                <span class="block text-4xl font-bold">12</span>
                                <span class="text-xs text-gray-400">Days</span>
                            </div>
                            <span class="text-4xl font-bold">:</span>
                            <div>
                                <span class="block text-4xl font-bold">08</span>
                                <span class="text-xs text-gray-400">Hours</span>
                            </div>
                            <span class="text-4xl font-bold">:</span>
                            <div>
                                <span class="block text-4xl font-bold">45</span>
                                <span class="text-xs text-gray-400">Mins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
