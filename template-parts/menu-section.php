<!-- Menu Section -->
<section class="py-8 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Page Header -->
        <div class="text-center mb-12 animate-fade-in">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Complete Menu</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Browse our complete menu with detailed descriptions, current pricing, and nutritional information. 
                Use the search and filters to find exactly what you're craving.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-2xl mx-auto mb-8 animate-fade-in-delay-1">
            <div class="relative">
                <input type="text" 
                       id="menu-search" 
                       placeholder="Search menu items..." 
                       class="w-full px-6 py-4 text-lg border border-gray-300 rounded-full focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent shadow-lg"
                       autocomplete="off">
                <div class="absolute right-4 top-1/2 transform -translate-y-1/2">
                    <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Category Filter Buttons -->
        <div class="mb-12 animate-fade-in-delay-2">
            <div class="flex flex-wrap justify-center gap-3" id="category-buttons">
                <?php
                $categories = get_menu_categories();
                foreach ($categories as $index => $category) {
                    $active_class = $category['id'] === 'all' 
                        ? 'bg-red-600 text-white shadow-lg transform scale-105' 
                        : 'bg-white text-gray-700 hover:bg-red-50 hover:text-red-600 shadow-md hover:shadow-lg';
                    ?>
                    <button class="category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 <?php echo $active_class; ?>"
                            data-category="<?php echo esc_attr($category['id']); ?>">
                        <?php echo esc_html($category['name']); ?>
                    </button>
                <?php } ?>
            </div>
        </div>

        <!-- Popular Items Section (shown when no search) -->
        <div id="popular-section" class="mb-16 animate-fade-in-delay-3">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Popular Items</h2>
                <p class="text-lg text-gray-600">Customer favorites and trending menu items</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <?php
                $menu_items = get_menu_items();
                $popular_items = array_filter($menu_items, function($item) {
                    return $item['popular'];
                });
                $popular_items = array_slice($popular_items, 0, 4);
                
                foreach ($popular_items as $item) {
                    ?>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden">
                        <div class="relative">
                            <img src="<?php echo esc_url($item['image']); ?>" 
                                 alt="<?php echo esc_attr($item['name']); ?>" 
                                 class="w-full h-48 object-cover" 
                                 loading="lazy">
                            <div class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                                Popular
                            </div>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-900 mb-2"><?php echo esc_html($item['name']); ?></h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-2"><?php echo esc_html($item['description']); ?></p>
                            <div class="flex justify-between items-center">
                                <span class="text-red-600 font-bold text-lg"><?php echo esc_html($item['price']); ?></span>
                                <span class="text-gray-500 text-sm"><?php echo esc_html($item['calories']); ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- All Menu Items Grid -->
        <div class="animate-fade-in-delay-4">
            <div class="text-center mb-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">All Menu Items</h2>
                <p class="text-lg text-gray-600">Complete menu with detailed information</p>
            </div>
            
            <div id="menu-items-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php
                foreach ($menu_items as $item) {
                    ?>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden menu-item menu-item-card"
                         data-category="<?php echo esc_attr($item['category']); ?>"
                         data-name="<?php echo esc_attr(strtolower($item['name'])); ?>"
                         data-description="<?php echo esc_attr(strtolower($item['description'])); ?>">
                        <div class="relative">
                            <img src="<?php echo esc_url($item['image']); ?>" 
                                 alt="<?php echo esc_attr($item['name']); ?>" 
                                 class="w-full h-48 object-cover" 
                                 loading="lazy">
                            <?php if ($item['popular']) { ?>
                                <div class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    Popular
                                </div>
                            <?php } ?>
                        </div>
                        <div class="p-4">
                            <h3 class="font-bold text-lg text-gray-900 mb-2"><?php echo esc_html($item['name']); ?></h3>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-3"><?php echo esc_html($item['description']); ?></p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-red-600 font-bold text-lg"><?php echo esc_html($item['price']); ?></span>
                                <span class="text-gray-500 text-sm"><?php echo esc_html($item['calories']); ?></span>
                            </div>
                            
                            <!-- Ingredients -->
                            <?php if (!empty($item['ingredients'])) { ?>
                                <div class="mb-2">
                                    <p class="text-xs text-gray-500 mb-1">Ingredients:</p>
                                    <div class="flex flex-wrap gap-1">
                                        <?php foreach (array_slice($item['ingredients'], 0, 3) as $ingredient) { ?>
                                            <span class="bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($ingredient); ?>
                                            </span>
                                        <?php } ?>
                                        <?php if (count($item['ingredients']) > 3) { ?>
                                            <span class="text-gray-400 text-xs">+<?php echo count($item['ingredients']) - 3; ?> more</span>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            <!-- Allergens -->
                            <?php if (!empty($item['allergens'])) { ?>
                                <div class="mb-3">
                                    <p class="text-xs text-orange-600 mb-1">Contains:</p>
                                    <div class="flex flex-wrap gap-1">
                                        <?php foreach ($item['allergens'] as $allergen) { ?>
                                            <span class="bg-orange-100 text-orange-600 px-2 py-1 rounded-full text-xs">
                                                <?php echo esc_html($allergen); ?>
                                            </span>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                            
                            <button class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                View Details
                            </button>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <!-- No Results Message -->
        <div id="no-results" class="text-center py-16 hidden">
            <div class="max-w-md mx-auto">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">No items found</h3>
                <p class="text-gray-600 mb-4">Try adjusting your search or filter to find what you're looking for.</p>
                <button id="clear-search-btn" class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg font-medium transition-colors duration-200">
                    Clear Search
                </button>
            </div>
        </div>
    </div>
</section>

<script>
// Menu functionality - Consolidated and fixed
(function() {
    'use strict';
    
    let currentCategory = 'all';
    
    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initializeMenuFunctionality();
    });
    
    function initializeMenuFunctionality() {
        // Set up search functionality
        const searchInput = document.getElementById('menu-search');
        if (searchInput) {
            // Debounce search input
            let searchTimeout;
            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    filterMenuItems();
                }, 300);
            });
        }
        
        // Set up category buttons
        const categoryButtons = document.querySelectorAll('.category-btn');
        categoryButtons.forEach(button => {
            button.addEventListener('click', function() {
                const category = this.dataset.category;
                filterByCategory(category);
            });
        });
        
        // Set up clear search button
        const clearSearchBtn = document.getElementById('clear-search-btn');
        if (clearSearchBtn) {
            clearSearchBtn.addEventListener('click', clearSearch);
        }
    }
    
    // Filter menu items by category
    function filterByCategory(category) {
        currentCategory = category;
        const categoryBtns = document.querySelectorAll('.category-btn');
        
        // Update button styles
        categoryBtns.forEach(btn => {
            if (btn.dataset.category === category) {
                btn.className = 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-red-600 text-white shadow-lg transform scale-105';
            } else {
                btn.className = 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-gray-700 hover:bg-red-50 hover:text-red-600 shadow-md hover:shadow-lg';
            }
        });
        
        filterMenuItems();
    }
    
    // Filter menu items by search and category
    function filterMenuItems() {
        const items = document.querySelectorAll('.menu-item');
        const searchInput = document.getElementById('menu-search');
        const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';
        const noResults = document.getElementById('no-results');
        const popularSection = document.getElementById('popular-section');
        
        let visibleCount = 0;
        
        items.forEach(item => {
            const itemCategory = item.dataset.category;
            const itemName = item.dataset.name || '';
            const itemDescription = item.dataset.description || '';
            
            const matchesCategory = currentCategory === 'all' || itemCategory === currentCategory;
            const matchesSearch = searchTerm === '' || 
                                 itemName.includes(searchTerm) || 
                                 itemDescription.includes(searchTerm);
            
            if (matchesCategory && matchesSearch) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });
        
        // Show/hide no results message
        if (noResults) {
            noResults.style.display = visibleCount === 0 ? 'block' : 'none';
        }
        
        // Show/hide popular section based on search
        if (popularSection) {
            if (searchTerm !== '' || currentCategory !== 'all') {
                popularSection.style.display = 'none';
            } else {
                popularSection.style.display = 'block';
            }
        }
    }
    
    // Clear search function
    function clearSearch() {
        const searchInput = document.getElementById('menu-search');
        if (searchInput) {
            searchInput.value = '';
        }
        
        // Reset to "All Items" category
        currentCategory = 'all';
        filterByCategory('all');
    }
    
    // Make functions globally available for inline onclick handlers (if needed)
    window.filterByCategory = filterByCategory;
    window.clearSearch = clearSearch;
})();
</script>