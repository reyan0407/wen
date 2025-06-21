<section class="relative bg-gradient-to-br from-red-600 via-red-700 to-red-800 text-white py-20 md:py-32 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=%2260%22 height=%2260%22 viewBox=%220 0 60 60%22 xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg fill=%22none%22 fill-rule=%22evenodd%22%3E%3Cg fill=%22%23ffffff%22 fill-opacity=%220.1%22%3E%3Ccircle cx=%2230%22 cy=%2230%22 r=%224%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Floating Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 left-10 w-20 h-20 bg-white bg-opacity-5 rounded-full animate-pulse"></div>
        <div class="absolute top-40 right-20 w-16 h-16 bg-white bg-opacity-5 rounded-full animate-pulse delay-1000"></div>
        <div class="absolute bottom-32 left-1/4 w-12 h-12 bg-white bg-opacity-5 rounded-full animate-pulse delay-2000"></div>
    </div>
    
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            <!-- Main Heading with Animation -->
            <div class="mb-8">
                <h1 class="text-5xl md:text-7xl font-bold mb-4 leading-tight animate-fade-in">
                    WendyssMenu
                </h1>
                <div class="w-24 h-1 bg-white mx-auto rounded-full mb-6"></div>
            </div>
            
            <p class="text-xl md:text-2xl mb-4 text-red-100 max-w-3xl mx-auto leading-relaxed animate-fade-in-delay-1">
                Browse all your favorite menu items in one place
            </p>
            <p class="text-lg md:text-xl mb-10 text-red-200 max-w-2xl mx-auto animate-fade-in-delay-2">
                From signature burgers made with fresh, never frozen beef to creamy Frosty desserts - 
                find everything you're craving right here.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 animate-fade-in-delay-3">
                <a href="<?php echo home_url(); ?>?section=menu" 
                   class="bg-white text-red-600 hover:bg-red-50 font-bold py-4 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl min-w-[200px] no-underline btn-primary flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    View Full Menu
                </a>
                <a href="#popular-items" 
                   class="border-2 border-white text-white hover:bg-white hover:text-red-600 font-bold py-4 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 min-w-[200px] no-underline flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                    Popular Items
                </a>
            </div>
            
            <!-- Quick Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-2xl mx-auto animate-fade-in-delay-4">
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-1">50+</div>
                    <div class="text-red-200 text-sm">Menu Items</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-1">10</div>
                    <div class="text-red-200 text-sm">Categories</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-1">100%</div>
                    <div class="text-red-200 text-sm">Fresh Beef</div>
                </div>
                <div class="text-center">
                    <div class="text-2xl md:text-3xl font-bold text-white mb-1">24/7</div>
                    <div class="text-red-200 text-sm">Updated</div>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-8 h-8 text-red-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- Popular Items Preview Section -->
<section id="popular-items" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Fan Favorites
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                The most loved items on our menu - tried, tested, and approved by food fans everywhere
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <?php
            $menu_items = get_menu_items();
            $popular_items = array_filter($menu_items, function($item) {
                return isset($item['popular']) && $item['popular'];
            });
            $featured_items = array_slice($popular_items, 0, 4);
            
            foreach($featured_items as $item): ?>
                <div class="bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden border border-gray-100 group">
                    <div class="relative overflow-hidden">
                        <img src="<?php echo esc_url($item['image']); ?>" 
                             alt="<?php echo esc_attr($item['name']); ?>" 
                             class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-300" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="absolute top-3 right-3 bg-yellow-500 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center shadow-lg">
                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            Popular
                        </div>
                    </div>
                    <div class="p-5">
                        <h4 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-200">
                            <?php echo esc_html($item['name']); ?>
                        </h4>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                            <?php echo esc_html($item['description']); ?>
                        </p>
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-red-600 font-bold text-xl"><?php echo esc_html($item['price']); ?></span>
                            <?php if(isset($item['calories'])): ?>
                                <span class="text-gray-500 text-sm bg-gray-100 px-2 py-1 rounded-full">
                                    <?php echo esc_html($item['calories']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a href="<?php echo home_url(); ?>?section=menu" 
               class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl no-underline">
                View All Menu Items
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Why Choose Our Menu Guide?
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Everything you need to make the perfect order, all in one place
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-600 group-hover:scale-110 transition-all duration-300">
                    <svg class="text-red-600 group-hover:text-white w-8 h-8 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Complete Menu</h3>
                <p class="text-gray-600 leading-relaxed">
                    Browse every single item from the menu with detailed descriptions, ingredients, and nutritional information.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-600 group-hover:scale-110 transition-all duration-300">
                    <svg class="text-red-600 group-hover:text-white w-8 h-8 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Current Pricing</h3>
                <p class="text-gray-600 leading-relaxed">
                    Get up-to-date pricing information to help you plan your order and budget for your visit.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-600 group-hover:scale-110 transition-all duration-300">
                    <svg class="text-red-600 group-hover:text-white w-8 h-8 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Easy Search</h3>
                <p class="text-gray-600 leading-relaxed">
                    Find exactly what you're craving with our powerful search and category filtering system.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-600 group-hover:scale-110 transition-all duration-300">
                    <svg class="text-red-600 group-hover:text-white w-8 h-8 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Nutrition Info</h3>
                <p class="text-gray-600 leading-relaxed">
                    Make informed choices with detailed calorie counts and nutritional information for every item.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-600 group-hover:scale-110 transition-all duration-300">
                    <svg class="text-red-600 group-hover:text-white w-8 h-8 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Mobile Friendly</h3>
                <p class="text-gray-600 leading-relaxed">
                    Browse the menu on any device with our responsive design that works perfectly on mobile.
                </p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-red-600 group-hover:scale-110 transition-all duration-300">
                    <svg class="text-red-600 group-hover:text-white w-8 h-8 transition-colors duration-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Popular Picks</h3>
                <p class="text-gray-600 leading-relaxed">
                    Discover the most popular menu items loved by food fans and customers nationwide.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-16 bg-red-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Ready to Order?
            </h2>
            <p class="text-xl mb-8 text-red-100">
                Browse our complete menu and find your next favorite meal
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url(); ?>?section=menu" 
                   class="bg-white text-red-600 hover:bg-red-50 font-bold py-4 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl no-underline inline-flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                    Explore Full Menu
                </a>
                <a href="<?php echo home_url(); ?>?section=about" 
                   class="border-2 border-white text-white hover:bg-white hover:text-red-600 font-bold py-4 px-8 rounded-lg text-lg transition-all duration-300 transform hover:scale-105 no-underline inline-flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Learn More
                </a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 0.8s ease-out;
}

.animate-fade-in-delay-1 {
    animation: fade-in 0.8s ease-out 0.2s both;
}

.animate-fade-in-delay-2 {
    animation: fade-in 0.8s ease-out 0.4s both;
}

.animate-fade-in-delay-3 {
    animation: fade-in 0.8s ease-out 0.6s both;
}

.animate-fade-in-delay-4 {
    animation: fade-in 0.8s ease-out 0.8s both;
}

.line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

html {
    scroll-behavior: smooth;
}
</style>