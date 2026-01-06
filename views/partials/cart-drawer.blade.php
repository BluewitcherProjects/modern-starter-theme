<div class="h-full flex flex-col">
    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-4 border-b border-gray-200 dark:border-gray-700">
        <h2 class="text-lg font-bold text-gray-900 dark:text-white">Shopping Cart</h2>
        <button @click="open = false" class="p-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Cart Items -->
    <div class="flex-1 overflow-y-auto px-6 py-4">
        <!-- Empty Cart State -->
        <div class="text-center py-12" x-show="false">
            <svg class="w-16 h-16 text-gray-300 dark:text-gray-600 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
            <p class="text-gray-500 dark:text-gray-400">Your cart is empty</p>
            <button @click="open = false" class="mt-4 text-primary-500 hover:text-primary-600 font-medium">Continue Shopping</button>
        </div>

        <!-- Cart Items List -->
        <div class="space-y-4">
            <!-- Sample Item 1 -->
            <div class="flex items-start space-x-4 p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                <div class="w-20 h-20 bg-gray-200 dark:bg-gray-600 rounded-lg flex-shrink-0 overflow-hidden">
                    <img src="https://via.placeholder.com/80" alt="Product" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-sm font-medium text-gray-900 dark:text-white truncate">Wireless Bluetooth Headphones</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Color: Black</p>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 dark:border-gray-600 rounded text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            <span class="text-sm font-medium text-gray-900 dark:text-white">1</span>
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 dark:border-gray-600 rounded text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-sm font-bold text-gray-900 dark:text-white">$79.99</span>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-red-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            </div>

            <!-- Sample Item 2 -->
            <div class="flex items-start space-x-4 p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                <div class="w-20 h-20 bg-gray-200 dark:bg-gray-600 rounded-lg flex-shrink-0 overflow-hidden">
                    <img src="https://via.placeholder.com/80" alt="Product" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-sm font-medium text-gray-900 dark:text-white truncate">Smart Watch Series 5</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Size: 44mm</p>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 dark:border-gray-600 rounded text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            <span class="text-sm font-medium text-gray-900 dark:text-white">2</span>
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 dark:border-gray-600 rounded text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-sm font-bold text-gray-900 dark:text-white">$399.98</span>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-red-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            </div>

            <!-- Sample Item 3 -->
            <div class="flex items-start space-x-4 p-3 bg-gray-50 dark:bg-gray-700/50 rounded-lg">
                <div class="w-20 h-20 bg-gray-200 dark:bg-gray-600 rounded-lg flex-shrink-0 overflow-hidden">
                    <img src="https://via.placeholder.com/80" alt="Product" class="w-full h-full object-cover">
                </div>
                <div class="flex-1 min-w-0">
                    <h4 class="text-sm font-medium text-gray-900 dark:text-white truncate">USB-C Charging Cable</h4>
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Length: 2m</p>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 dark:border-gray-600 rounded text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                </svg>
                            </button>
                            <span class="text-sm font-medium text-gray-900 dark:text-white">1</span>
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 dark:border-gray-600 rounded text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-600">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </button>
                        </div>
                        <span class="text-sm font-bold text-gray-900 dark:text-white">$19.99</span>
                    </div>
                </div>
                <button class="text-gray-400 hover:text-red-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="border-t border-gray-200 dark:border-gray-700 px-6 py-4 space-y-4">
        <!-- Promo Code -->
        <div class="flex space-x-2">
            <input type="text" placeholder="Promo code" class="flex-1 px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg bg-white dark:bg-gray-700 text-sm focus:ring-2 focus:ring-primary-500 focus:border-transparent">
            <button class="px-4 py-2 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 text-sm transition-colors">Apply</button>
        </div>

        <!-- Totals -->
        <div class="space-y-2">
            <div class="flex justify-between text-sm">
                <span class="text-gray-500 dark:text-gray-400">Subtotal</span>
                <span class="text-gray-900 dark:text-white font-medium">$499.96</span>
            </div>
            <div class="flex justify-between text-sm">
                <span class="text-gray-500 dark:text-gray-400">Shipping</span>
                <span class="text-green-600 font-medium">Free</span>
            </div>
            <div class="flex justify-between text-lg font-bold border-t border-gray-200 dark:border-gray-700 pt-2 mt-2">
                <span class="text-gray-900 dark:text-white">Total</span>
                <span class="text-gray-900 dark:text-white">$499.96</span>
            </div>
        </div>

        <!-- Actions -->
        <div class="space-y-2">
            <a href="/checkout" class="block w-full py-3 bg-primary-500 text-white font-medium rounded-lg hover:bg-primary-600 transition-colors text-center">Checkout</a>
            <a href="/cart" class="block w-full py-3 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 font-medium rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors text-center">View Cart</a>
        </div>
    </div>
</div>
