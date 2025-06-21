<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <?php
    // Dynamic title and meta tags based on current section
    $current_section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'home';
    
    switch($current_section) {
        case 'menu':
            $page_title = 'Complete Menu with Prices & Nutrition | WendyssMenu';
            $meta_description = 'Browse the complete menu with current prices, detailed descriptions, and nutritional information. Find burgers, chicken, breakfast, salads, fries, beverages, Frosty desserts, and kids meals organized by category.';
            $meta_keywords = 'menu, menu prices, burgers, chicken, breakfast menu, Frosty, menu prices, nutritional information, fast food menu';
            break;
        case 'about':
            $page_title = 'About Our Menu Guide | WendyssMenu';
            $meta_description = 'Learn about our comprehensive menu resource. Find out how we help you browse menu items, compare prices, and discover nutritional information for all your favorite foods.';
            $meta_keywords = 'about menu, menu guide, restaurant menu resource, fan site';
            break;
        case 'contact':
            $page_title = 'Contact Us | WendyssMenu';
            $meta_description = 'Get in touch with our menu team. Send us feedback, suggestions, or questions about our menu resource and we\'ll get back to you soon.';
            $meta_keywords = 'contact menu, feedback, suggestions, menu questions';
            break;
        default:
            $page_title = 'WendyssMenu - Complete Menu List with Prices & Nutrition Info';
            $meta_description = 'Browse the complete menu with detailed descriptions, current pricing, and nutritional information. Find burgers, chicken, breakfast, salads, fries, beverages, Frosty desserts, and kids meals - all organized by category for easy browsing.';
            $meta_keywords = 'Menu, menu prices, burgers, chicken, breakfast menu, Frosty, breakfast menu, chicken nuggets, burgers, combos, kids meals, nutritional information';
    }
    ?>
    
    <title><?php echo esc_html($page_title); ?></title>
    <meta name="description" content="<?php echo esc_attr($meta_description); ?>">
    <meta name="keywords" content="<?php echo esc_attr($meta_keywords); ?>">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="author" content="WendyssMenu Fan Site">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://wendyssemenu.com<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo esc_attr($page_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($meta_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://wendyssemenu.com<?php echo esc_url($_SERVER['REQUEST_URI']); ?>">
    <meta property="og:image" content="https://wendyssemenu.com/images/og-image.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Menu Items">
    <meta property="og:site_name" content="WendyssMenu">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($page_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($meta_description); ?>">
    <meta name="twitter:image" content="https://wendyssemenu.com/images/twitter-card.webp">
    <meta name="twitter:image:alt" content="Menu Items">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="theme-color" content="#dc2626">
    <meta name="msapplication-TileColor" content="#dc2626">
    <meta name="application-name" content="WendyssMenu">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://wendyssemenu.com" crossorigin>
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="dns-prefetch" href="//wendyssemenu.com">
    <link rel="dns-prefetch" href="//cdn.tailwindcss.com">
    
    <!-- Favicon and Icons -->
    <link rel="icon" type="image/x-icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🍔</text></svg>">
    <link rel="apple-touch-icon" href="https://wendyssemenu.com/apple-touch-icon.png">
    
    <?php wp_head(); ?>
    
    <!-- Critical CSS for above-the-fold content -->
    <style>
    /* Critical CSS for immediate rendering */
    body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;line-height:1.6;color:#374151}
    .container{max-width:1200px;margin:0 auto;padding:0 1rem}
    header{background:#fff;box-shadow:0 1px 3px rgba(0,0,0,0.1);position:sticky;top:0;z-index:50}
    .header-content{display:flex;justify-content:space-between;align-items:center;padding:1rem 0}
    .logo{font-size:1.5rem;font-weight:700;color:#dc2626;text-decoration:none}
    .nav-desktop{display:none}
    .nav-mobile-btn{display:block;padding:0.5rem;border:none;background:none;cursor:pointer}
    .hero-section{background:linear-gradient(135deg,#dc2626,#b91c1c,#991b1b);color:#fff;padding:5rem 0;text-align:center;min-height:70vh;display:flex;align-items:center}
    .hero-title{font-size:3rem;font-weight:700;margin-bottom:1rem;line-height:1.2}
    .hero-subtitle{font-size:1.25rem;margin-bottom:2rem;opacity:0.9}
    .btn-primary{background:#fff;color:#dc2626;padding:1rem 2rem;border-radius:0.5rem;text-decoration:none;font-weight:600;display:inline-block;transition:all 0.3s ease}
    .btn-primary:hover{background:#f9fafb;transform:translateY(-2px)}
    @media (min-width: 768px){
        .nav-desktop{display:flex;gap:2rem}
        .nav-mobile-btn{display:none}
        .hero-title{font-size:4rem}
        .hero-subtitle{font-size:1.5rem}
    }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Skip to content link for accessibility -->
<a class="sr-only focus:not-sr-only focus:absolute focus:top-0 focus:left-0 bg-red-600 text-white p-2 z-50" href="#main">
    Skip to main content
</a>

<header class="bg-white shadow-lg sticky top-0 z-50" role="banner">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4 header-content">
            <div class="text-2xl font-bold text-red-600">
                <a href="<?php echo esc_url(home_url()); ?>" class="no-underline text-red-600 hover:text-red-700 logo" aria-label="WendyssMenu Home">
                    🍔 WendyssMenu
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8 nav-desktop" role="navigation" aria-label="Main navigation">
                <a href="<?php echo esc_url(home_url()); ?>" 
                   class="font-medium transition-colors duration-200 hover:text-red-600 <?php echo (!isset($_GET['section']) || $_GET['section'] == 'home') ? 'text-red-600' : 'text-gray-700'; ?>"
                   <?php echo (!isset($_GET['section']) || $_GET['section'] == 'home') ? 'aria-current="page"' : ''; ?>>
                    Home
                </a>
                <a href="<?php echo esc_url(home_url('?section=menu')); ?>" 
                   class="font-medium transition-colors duration-200 hover:text-red-600 <?php echo (isset($_GET['section']) && $_GET['section'] == 'menu') ? 'text-red-600' : 'text-gray-700'; ?>"
                   <?php echo (isset($_GET['section']) && $_GET['section'] == 'menu') ? 'aria-current="page"' : ''; ?>>
                    Menu
                </a>
                <a href="<?php echo esc_url(home_url('?section=about')); ?>" 
                   class="font-medium transition-colors duration-200 hover:text-red-600 <?php echo (isset($_GET['section']) && $_GET['section'] == 'about') ? 'text-red-600' : 'text-gray-700'; ?>"
                   <?php echo (isset($_GET['section']) && $_GET['section'] == 'about') ? 'aria-current="page"' : ''; ?>>
                    About
                </a>
                <a href="<?php echo esc_url(home_url('?section=contact')); ?>" 
                   class="font-medium transition-colors duration-200 hover:text-red-600 <?php echo (isset($_GET['section']) && $_GET['section'] == 'contact') ? 'text-red-600' : 'text-gray-700'; ?>"
                   <?php echo (isset($_GET['section']) && $_GET['section'] == 'contact') ? 'aria-current="page"' : ''; ?>>
                    Contact
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button class="md:hidden p-2 nav-mobile-btn" onclick="toggleMobileMenu()" aria-label="Toggle mobile menu" aria-expanded="false" aria-controls="mobile-menu">
                <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <nav id="mobile-menu" class="md:hidden pb-4 hidden" role="navigation" aria-label="Mobile navigation">
            <a href="<?php echo esc_url(home_url()); ?>" 
               class="block w-full text-left py-2 font-medium transition-colors duration-200 hover:text-red-600 <?php echo (!isset($_GET['section']) || $_GET['section'] == 'home') ? 'text-red-600' : 'text-gray-700'; ?>"
               <?php echo (!isset($_GET['section']) || $_GET['section'] == 'home') ? 'aria-current="page"' : ''; ?>>
                Home
            </a>
            <a href="<?php echo esc_url(home_url('?section=menu')); ?>" 
               class="block w-full text-left py-2 font-medium transition-colors duration-200 hover:text-red-600 <?php echo (isset($_GET['section']) && $_GET['section'] == 'menu') ? 'text-red-600' : 'text-gray-700'; ?>"
               <?php echo (isset($_GET['section']) && $_GET['section'] == 'menu') ? 'aria-current="page"' : ''; ?>>
                Menu
            </a>
            <a href="<?php echo esc_url(home_url('?section=about')); ?>" 
               class="block w-full text-left py-2 font-medium transition-colors duration-200 hover:text-red-600 <?php echo (isset($_GET['section']) && $_GET['section'] == 'about') ? 'text-red-600' : 'text-gray-700'; ?>"
               <?php echo (isset($_GET['section']) && $_GET['section'] == 'about') ? 'aria-current="page"' : ''; ?>>
                About
            </a>
            <a href="<?php echo esc_url(home_url('?section=contact')); ?>" 
               class="block w-full text-left py-2 font-medium transition-colors duration-200 hover:text-red-600 <?php echo (isset($_GET['section']) && $_GET['section'] == 'contact') ? 'text-red-600' : 'text-gray-700'; ?>"
               <?php echo (isset($_GET['section']) && $_GET['section'] == 'contact') ? 'aria-current="page"' : ''; ?>>
                Contact
            </a>
        </nav>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const button = document.querySelector('.nav-mobile-btn');
    
    const isExpanded = button.getAttribute('aria-expanded') === 'true';
    
    mobileMenu.classList.toggle('hidden');
    menuIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
    
    button.setAttribute('aria-expanded', !isExpanded);
}

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const menuButton = document.querySelector('.nav-mobile-btn');
    
    if (!menuButton.contains(event.target) && !mobileMenu.contains(event.target)) {
        if (!mobileMenu.classList.contains('hidden')) {
            toggleMobileMenu();
        }
    }
});

// Close mobile menu on escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const mobileMenu = document.getElementById('mobile-menu');
        if (!mobileMenu.classList.contains('hidden')) {
            toggleMobileMenu();
        }
    }
});
</script>