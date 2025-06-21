<!-- Hero Section -->
<section class="hero-section bg-gradient-to-br from-red-600 via-red-700 to-red-800 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                Discover the Complete<br>
                <span class="text-yellow-300">Menu</span>
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90">
                Browse detailed menu items with prices, nutritional information, and descriptions. 
                Find your favorites and discover new tastes.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-delay-1">
                <a href="<?php echo esc_url(home_url('?section=menu')); ?>" 
                   class="btn-primary bg-white text-red-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                    Browse Full Menu
                </a>
                <a href="#popular-items" 
                   class="border-2 border-white text-white px-8 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-red-600 transition-all duration-300">
                    Popular Items
                </a>
            </div>
        </div>
    </div>
    
    <!-- Decorative elements -->
    <div class="absolute top-10 left-10 w-20 h-20 bg-yellow-300 rounded-full opacity-20 animate-pulse"></div>
    <div class="absolute bottom-10 right-10 w-32 h-32 bg-yellow-300 rounded-full opacity-10 animate-pulse" style="animation-delay: 1s;"></div>
    <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full opacity-10 animate-bounce" style="animation-delay: 2s;"></div>
</section>

<!-- Time-Based Menu Categories -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Browse by Time</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Find the perfect meal for any time of day with our time-based menu categories
            </p>
        </div>
        
        <div id="main-menu-categories" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 animate-fade-in-delay-1">
            <!-- Categories will be loaded by JavaScript -->
        </div>
    </div>
</section>

<!-- Popular Items Section -->
<section id="popular-items" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Fan Favorites</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover the most popular menu items that keep customers coming back for more
            </p>
        </div>
        
        <div id="popular-items-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 animate-fade-in-delay-1">
            <!-- Popular items will be loaded by JavaScript -->
        </div>
        
        <div class="text-center mt-12 animate-fade-in-delay-2">
            <a href="<?php echo esc_url(home_url('?section=menu')); ?>" 
               class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                View Complete Menu
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- AdSense Ad Section -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- AdSense Ad Container with proper sizing -->
            <div class="adsense-container bg-white rounded-lg shadow-sm p-4 min-h-[250px] min-w-[300px] flex items-center justify-center">
                <ins class="adsbygoogle"
                     style="display:block; width:100%; min-width:300px; min-height:250px;"
                     data-ad-client="ca-pub-XXXXXXXXXX"
                     data-ad-slot="XXXXXXXXXX"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Why Choose Our Menu Guide?</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Get the most comprehensive and up-to-date menu information
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 animate-fade-in-delay-1">
            <div class="text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Current Prices</h3>
                <p class="text-gray-600">Always up-to-date pricing information for all menu items</p>
            </div>
            
            <div class="text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Nutrition Info</h3>
                <p class="text-gray-600">Detailed nutritional information and calorie counts</p>
            </div>
            
            <div class="text-center group">
                <div class="bg-red-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:bg-red-600 transition-colors duration-300">
                    <svg class="w-8 h-8 text-red-600 group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Easy Search</h3>
                <p class="text-gray-600">Find exactly what you're craving with our search and filter tools</p>
            </div>
        </div>
    </div>
</section>

<!-- Latest Blog Posts -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 animate-fade-in">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest Food Stories</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover interesting stories, tips, and insights about your favorite menu items
            </p>
        </div>
        
        <div id="blog-posts-grid" class="grid grid-cols-1 md:grid-cols-3 gap-8 animate-fade-in-delay-1">
            <!-- Blog posts will be loaded by JavaScript -->
        </div>
        
        <div class="text-center mt-12 animate-fade-in-delay-2">
            <a href="/blog/" 
               class="inline-flex items-center bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-full text-lg font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-xl">
                Read More Stories
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
</section>

<script>
// Initialize AdSense after DOM is loaded and container is visible
document.addEventListener('DOMContentLoaded', function() {
    // Wait for the AdSense container to be fully rendered
    setTimeout(function() {
        const adsenseContainer = document.querySelector('.adsense-container');
        if (adsenseContainer && adsenseContainer.offsetWidth > 0) {
            // Only push to adsbygoogle if container has width
            try {
                (adsbygoogle = window.adsbygoogle || []).push({});
            } catch (e) {
                console.log('AdSense initialization delayed due to container sizing');
            }
        } else {
            // Retry after a short delay if container is not ready
            setTimeout(function() {
                if (adsenseContainer && adsenseContainer.offsetWidth > 0) {
                    try {
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    } catch (e) {
                        console.log('AdSense could not initialize - container width issue');
                    }
                }
            }, 1000);
        }
    }, 500);
});
</script>