<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Wendy's Full Menu
            </h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Fresh, never frozen beef and made-to-order favorites. 
                Browse our complete menu with detailed descriptions and nutritional information.
            </p>
        </div>

        <!-- Search Bar -->
        <div class="max-w-md mx-auto mb-8">
            <div class="relative">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="text" id="menu-search" placeholder="Search menu items..." 
                       class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-wendy-red focus:border-wendy-red transition-colors duration-200">
            </div>
        </div>

        <!-- Popular Items -->
        <div class="mb-12" id="popular-section">
            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center justify-center">
                <svg class="text-yellow-500 mr-2 w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                Most Popular Items
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php
                $menu_items = get_menu_items();
                $popular_items = array_filter($menu_items, function($item) {
                    return isset($item['popular']) && $item['popular'];
                });
                
                foreach($popular_items as $item): ?>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden ring-2 ring-yellow-400 menu-item-card">
                        <a href="#" class="block no-underline">
                            <div class="relative">
                                <img src="<?php echo esc_url($item['image']); ?>" 
                                     alt="<?php echo esc_attr($item['name']); ?>" 
                                     class="w-full h-48 object-cover" loading="lazy">
                                <div class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    Popular
                                </div>
                            </div>
                            <div class="p-4">
                                <h4 class="font-bold text-lg text-gray-900 mb-2"><?php echo esc_html($item['name']); ?></h4>
                                <p class="text-gray-600 text-sm mb-3 line-clamp-3"><?php echo esc_html($item['description']); ?></p>
                                <div class="flex justify-between items-center mb-2">
                                    <span class="text-wendy-red font-bold text-lg"><?php echo esc_html($item['price']); ?></span>
                                    <?php if(isset($item['calories'])): ?>
                                        <span class="text-gray-500 text-sm"><?php echo esc_html($item['calories']); ?></span>
                                    <?php endif; ?>
                                </div>
                                <button class="w-full bg-wendy-red hover:bg-wendy-dark-red text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                    View Details
                                </button>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Category Filter -->
        <div class="mb-8">
            <div class="flex flex-wrap justify-center gap-3">
                <?php
                $categories = get_menu_categories();
                foreach($categories as $category): ?>
                    <button onclick="filterByCategory('<?php echo esc_js($category['id']); ?>')" 
                            class="category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-gray-700 hover:bg-red-50 hover:text-wendy-red shadow-md hover:shadow-lg"
                            data-category="<?php echo esc_attr($category['id']); ?>">
                        <?php echo esc_html($category['name']); ?>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Menu Items -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="menu-items-grid">
            <?php foreach($menu_items as $item): ?>
                <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden menu-item-card menu-item" 
                     data-category="<?php echo esc_attr($item['category']); ?>"
                     data-name="<?php echo esc_attr(strtolower($item['name'])); ?>"
                     data-description="<?php echo esc_attr(strtolower($item['description'])); ?>">
                    <a href="#" class="block no-underline">
                        <div class="relative">
                            <img src="<?php echo esc_url($item['image']); ?>" 
                                 alt="<?php echo esc_attr($item['name']); ?>" 
                                 class="w-full h-48 object-cover" loading="lazy">
                            <?php if(isset($item['popular']) && $item['popular']): ?>
                                <div class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 rounded-full text-xs font-bold flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                    Popular
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="p-4">
                            <h4 class="font-bold text-lg text-gray-900 mb-2"><?php echo esc_html($item['name']); ?></h4>
                            <p class="text-gray-600 text-sm mb-3 line-clamp-3"><?php echo esc_html($item['description']); ?></p>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-wendy-red font-bold text-lg"><?php echo esc_html($item['price']); ?></span>
                                <?php if(isset($item['calories'])): ?>
                                    <span class="text-gray-500 text-sm"><?php echo esc_html($item['calories']); ?></span>
                                <?php endif; ?>
                            </div>
                            <button class="w-full bg-wendy-red hover:bg-wendy-dark-red text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors duration-200">
                                View Details
                            </button>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="no-results" class="text-center py-12 hidden">
            <p class="text-gray-500 text-lg">No items found matching your search.</p>
        </div>

        <!-- Menu Disclaimer -->
        <div class="mt-12 bg-white rounded-lg p-6 shadow-md">
            <h4 class="font-semibold text-gray-900 mb-2">Menu Information</h4>
            <p class="text-sm text-gray-600">
                Prices and availability may vary by location. Nutritional information is approximate and based on standard recipes. 
                Please visit your local Wendy's restaurant for current pricing and to verify nutritional information.
            </p>
        </div>
    </div>
</section>

<script>
let currentCategory = 'all';

function filterByCategory(category) {
    currentCategory = category;
    const items = document.querySelectorAll('.menu-item');
    const categoryBtns = document.querySelectorAll('.category-btn');
    const popularSection = document.getElementById('popular-section');
    const searchInput = document.getElementById('menu-search');
    
    // Update button styles
    categoryBtns.forEach(btn => {
        if (btn.dataset.category === category) {
            btn.className = 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-wendy-red text-white shadow-lg transform scale-105';
        } else {
            btn.className = 'category-btn px-6 py-3 rounded-full font-medium transition-all duration-300 bg-white text-gray-700 hover:bg-red-50 hover:text-wendy-red shadow-md hover:shadow-lg';
        }
    });
    
    // Show/hide popular section
    if (searchInput && searchInput.value === '') {
        if (popularSection) popularSection.style.display = 'block';
    } else {
        if (popularSection) popularSection.style.display = 'none';
    }
    
    filterMenuItems();
}

function filterMenuItems() {
    const items = document.querySelectorAll('.menu-item');
    const searchInput = document.getElementById('menu-search');
    const searchTerm = searchInput ? searchInput.value.toLowerCase() : '';
    const noResults = document.getElementById('no-results');
    
    let visibleCount = 0;
    
    items.forEach(item => {
        const itemCategory = item.dataset.category;
        const itemName = item.dataset.name;
        const itemDescription = item.dataset.description;
        
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
    
    if (noResults) {
        noResults.style.display = visibleCount === 0 ? 'block' : 'none';
    }
    
    // Hide popular section if searching
    const popularSection = document.getElementById('popular-section');
    if (popularSection && searchTerm !== '') {
        popularSection.style.display = 'none';
    } else if (popularSection) {
        popularSection.style.display = 'block';
    }
}

// Initialize with 'all' category selected
document.addEventListener('DOMContentLoaded', function() {
    filterByCategory('all');
    
    // Set up search functionality
    const searchInput = document.getElementById('menu-search');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            filterMenuItems();
        });
    }
});
</script>