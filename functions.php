<?php
// Theme setup
function wendysmenu_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add RSS feed links to head for posts and comments
    add_theme_support('automatic-feed-links');

    // Enable support for Post Formats
    add_theme_support('post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ));

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for editor styles
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'wendysmenu_setup');

// Enqueue styles and scripts with optimization
function wendysmenu_scripts() {
    // Enqueue main stylesheet with version for cache busting
    wp_enqueue_style('wendysmenu-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', 'https://cdn.tailwindcss.com', array(), '3.3.0');
    
    // Enqueue custom JavaScript with defer and version
    wp_enqueue_script('wendysmenu-js', get_template_directory_uri() . '/assets/js/menu.js', array(), filemtime(get_template_directory() . '/assets/js/menu.js'), true);
    wp_script_add_data('wendysmenu-js', 'defer', true);
}
add_action('wp_enqueue_scripts', 'wendysmenu_scripts');

// Add preconnect and DNS prefetch for external resources
function wendysmenu_resource_hints($urls, $relation_type) {
    if (wp_doing_ajax() || is_admin()) {
        return $urls;
    }

    if ('preconnect' === $relation_type) {
        $urls[] = array(
            'href' => 'https://wendyssemenu.com',
            'crossorigin',
        );
        $urls[] = array(
            'href' => 'https://cdn.tailwindcss.com',
            'crossorigin',
        );
    }

    if ('dns-prefetch' === $relation_type) {
        $urls[] = 'https://wendyssemenu.com';
        $urls[] = 'https://cdn.tailwindcss.com';
        $urls[] = 'https://fonts.googleapis.com';
        $urls[] = 'https://fonts.gstatic.com';
    }

    return $urls;
}
add_filter('wp_resource_hints', 'wendysmenu_resource_hints', 10, 2);

// Optimize images with lazy loading and WebP support
function wendysmenu_image_optimization($attr, $attachment, $size) {
    if (!is_admin()) {
        $attr['loading'] = 'lazy';
        $attr['decoding'] = 'async';
    }
    return $attr;
}
add_filter('wp_get_attachment_image_attributes', 'wendysmenu_image_optimization', 10, 3);

// Add WebP support
function wendysmenu_webp_support($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}
add_filter('upload_mimes', 'wendysmenu_webp_support');

// Get menu data with caching
function get_menu_categories() {
    $cache_key = 'wendysmenu_categories';
    $categories = wp_cache_get($cache_key);
    
    if (false === $categories) {
        $categories = array(
            array('id' => 'all', 'name' => 'All Items'),
            array('id' => 'burgers', 'name' => 'Burgers'),
            array('id' => 'chicken', 'name' => 'Chicken'),
            array('id' => 'breakfast', 'name' => 'Breakfast'),
            array('id' => 'salads', 'name' => 'Salads'),
            array('id' => 'fries', 'name' => 'Fries & Sides'),
            array('id' => 'beverages', 'name' => 'Beverages'),
            array('id' => 'combos', 'name' => 'Combos'),
            array('id' => 'frosty', 'name' => 'Frosty & Desserts'),
            array('id' => 'kids', 'name' => 'Kids Meals'),
        );
        wp_cache_set($cache_key, $categories, '', 3600); // Cache for 1 hour
    }
    
    return $categories;
}

function get_menu_items() {
    $cache_key = 'wendysmenu_items';
    $menu_items = wp_cache_get($cache_key);
    
    if (false === $menu_items) {
        $menu_items = array(
            // Burgers
            array(
                'id' => '1',
                'name' => "Dave's Single®",
                'description' => "A quarter-pound of fresh beef, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion on a toasted bun.",
                'price' => "$6.99",
                'image' => "https://wendyssemenu.com/images/daves-single.webp",
                'category' => 'burgers',
                'popular' => true,
                'calories' => "570 Cal",
                'ingredients' => array('fresh beef', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
            array(
                'id' => '2',
                'name' => "Dave's Double®",
                'description' => "Two quarter-pound patties of fresh beef, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion.",
                'price' => "$8.99",
                'image' => "https://wendyssemenu.com/images/daves-double.webp",
                'category' => 'burgers',
                'popular' => false,
                'calories' => "820 Cal",
                'ingredients' => array('fresh beef', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
            array(
                'id' => '3',
                'name' => "Dave's Triple®",
                'description' => "Three quarter-pound patties of fresh beef, American cheese, crisp lettuce, tomato, pickle, ketchup, mayo, and onion.",
                'price' => "$10.99",
                'image' => "https://wendyssemenu.com/images/daves-triple.webp",
                'category' => 'burgers',
                'popular' => false,
                'calories' => "1070 Cal",
                'ingredients' => array('fresh beef', 'american cheese', 'lettuce', 'tomato', 'pickle', 'ketchup', 'mayo', 'onion'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
            array(
                'id' => '4',
                'name' => "Baconator®",
                'description' => "A half-pound of fresh beef, six strips of Applewood smoked bacon, American cheese, ketchup, and mayo.",
                'price' => "$10.99",
                'image' => "https://wendyssemenu.com/images/baconator.webp",
                'category' => 'burgers',
                'popular' => true,
                'calories' => "950 Cal",
                'ingredients' => array('fresh beef', 'applewood bacon', 'american cheese', 'ketchup', 'mayo'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
            array(
                'id' => '5',
                'name' => "Son of Baconator®",
                'description' => "A quarter-pound of fresh beef, four strips of Applewood smoked bacon, American cheese, ketchup, and mayo.",
                'price' => "$7.99",
                'image' => "https://wendyssemenu.com/images/son-of-baconator.webp",
                'category' => 'burgers',
                'popular' => false,
                'calories' => "630 Cal",
                'ingredients' => array('fresh beef', 'applewood bacon', 'american cheese', 'ketchup', 'mayo'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
            
            // Chicken
            array(
                'id' => '6',
                'name' => "Crispy Chicken Sandwich",
                'description' => "A juicy, lightly breaded crispy chicken breast with crunchy lettuce, tomato, mayo, and pickles.",
                'price' => "$5.99",
                'image' => "https://wendyssemenu.com/images/crispy-chicken.webp",
                'category' => 'chicken',
                'popular' => false,
                'calories' => "480 Cal",
                'ingredients' => array('chicken breast', 'lettuce', 'tomato', 'mayo', 'pickles'),
                'allergens' => array('gluten', 'eggs')
            ),
            array(
                'id' => '7',
                'name' => "Spicy Chicken Sandwich",
                'description' => "A juicy chicken breast marinated and breaded in our unique, fiery blend of peppers and spices.",
                'price' => "$6.49",
                'image' => "https://wendyssemenu.com/images/spicy-chicken.webp",
                'category' => 'chicken',
                'popular' => true,
                'calories' => "510 Cal",
                'ingredients' => array('spicy chicken', 'lettuce', 'tomato', 'mayo'),
                'allergens' => array('gluten', 'eggs')
            ),
            array(
                'id' => '8',
                'name' => "Chicken Nuggets (10 pc)",
                'description' => "Ten pieces of crispy, juicy chicken nuggets made with premium white meat.",
                'price' => "$5.99",
                'image' => "https://wendyssemenu.com/images/chicken-nuggets.webp",
                'category' => 'chicken',
                'popular' => true,
                'calories' => "450 Cal",
                'ingredients' => array('chicken nuggets'),
                'allergens' => array('gluten')
            ),
            
            // Breakfast
            array(
                'id' => '9',
                'name' => "Breakfast Baconator®",
                'description' => "Grilled sausage, Applewood smoked bacon, American cheese, Swiss cheese, and a fresh-cracked egg on a brioche bun.",
                'price' => "$5.99",
                'image' => "https://wendyssemenu.com/images/breakfast-baconator.webp",
                'category' => 'breakfast',
                'popular' => true,
                'calories' => "710 Cal",
                'ingredients' => array('sausage', 'bacon', 'american cheese', 'swiss cheese', 'egg'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
            
            // Fries & Sides
            array(
                'id' => '10',
                'name' => "Natural Cut Fries (Medium)",
                'description' => "Natural cut, sea salt seasoned fries cooked in 100% sunflower oil.",
                'price' => "$2.99",
                'image' => "https://wendyssemenu.com/images/natural-cut-fries.webp",
                'category' => 'fries',
                'popular' => true,
                'calories' => "420 Cal",
                'ingredients' => array('potatoes', 'sunflower oil', 'sea salt'),
                'allergens' => array()
            ),
            
            // Frosty & Desserts
            array(
                'id' => '11',
                'name' => "Chocolate Frosty® (Small)",
                'description' => "The original thick and creamy chocolate Frosty.",
                'price' => "$2.99",
                'image' => "https://wendyssemenu.com/images/chocolate-frosty.webp",
                'category' => 'frosty',
                'popular' => true,
                'calories' => "350 Cal",
                'ingredients' => array('milk', 'sugar', 'cocoa', 'cream'),
                'allergens' => array('dairy')
            ),
            
            // Combos
            array(
                'id' => '12',
                'name' => "Dave's Single® Combo",
                'description' => "Dave's Single with medium fries and medium drink.",
                'price' => "$9.99",
                'image' => "https://wendyssemenu.com/images/daves-single-combo.webp",
                'category' => 'combos',
                'popular' => true,
                'calories' => "980 Cal",
                'ingredients' => array('fresh beef', 'american cheese', 'lettuce', 'tomato', 'fries', 'drink'),
                'allergens' => array('gluten', 'dairy', 'eggs')
            ),
        );
        wp_cache_set($cache_key, $menu_items, '', 3600); // Cache for 1 hour
    }
    
    return $menu_items;
}

// Handle contact form submission with security
function handle_contact_form() {
    if (isset($_POST['contact_form_submit']) && wp_verify_nonce($_POST['contact_nonce'], 'contact_form_action')) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);
        
        // Basic validation
        if (empty($name) || empty($email) || empty($message)) {
            wp_redirect(home_url('?section=contact&error=1'));
            exit;
        }
        
        if (!is_email($email)) {
            wp_redirect(home_url('?section=contact&error=2'));
            exit;
        }
        
        // Here you would typically send an email or save to database
        // For now, we'll just set a success message
        set_transient('contact_form_success', true, 30);
        
        wp_redirect(home_url('?section=contact&success=1'));
        exit;
    }
}
add_action('init', 'handle_contact_form');

// Remove WordPress admin bar for non-admin users
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');

// Add custom body classes
function wendysmenu_body_classes($classes) {
    $current_section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'home';
    $classes[] = 'section-' . $current_section;
    return $classes;
}
add_filter('body_class', 'wendysmenu_body_classes');

// Add security headers
function wendysmenu_security_headers() {
    if (!is_admin()) {
        header('X-Content-Type-Options: nosniff');
        header('X-Frame-Options: SAMEORIGIN');
        header('X-XSS-Protection: 1; mode=block');
        header('Referrer-Policy: strict-origin-when-cross-origin');
    }
}
add_action('send_headers', 'wendysmenu_security_headers');

// Remove unnecessary WordPress features for performance
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_shortlink_wp_head');

// Disable emoji scripts for performance
function disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'disable_emojis');

// Add structured data for menu items
function wendysmenu_structured_data() {
    if (isset($_GET['section']) && $_GET['section'] === 'menu') {
        $menu_items = get_menu_items();
        $structured_data = array(
            '@context' => 'https://schema.org',
            '@type' => 'Menu',
            'name' => 'Complete Menu',
            'description' => 'Complete menu with fresh, never frozen beef burgers, chicken, breakfast, salads, and more',
            'hasMenuSection' => array()
        );
        
        $categories = get_menu_categories();
        foreach ($categories as $category) {
            if ($category['id'] === 'all') continue;
            
            $category_items = array_filter($menu_items, function($item) use ($category) {
                return $item['category'] === $category['id'];
            });
            
            if (!empty($category_items)) {
                $menu_section = array(
                    '@type' => 'MenuSection',
                    'name' => $category['name'],
                    'hasMenuItem' => array()
                );
                
                foreach ($category_items as $item) {
                    $menu_item = array(
                        '@type' => 'MenuItem',
                        'name' => $item['name'],
                        'description' => $item['description'],
                        'offers' => array(
                            '@type' => 'Offer',
                            'price' => str_replace('$', '', $item['price']),
                            'priceCurrency' => 'USD'
                        ),
                        'nutrition' => array(
                            '@type' => 'NutritionInformation',
                            'calories' => str_replace(' Cal', '', $item['calories'])
                        )
                    );
                    
                    if (!empty($item['ingredients'])) {
                        $menu_item['recipeIngredient'] = $item['ingredients'];
                    }
                    
                    $menu_section['hasMenuItem'][] = $menu_item;
                }
                
                $structured_data['hasMenuSection'][] = $menu_section;
            }
        }
        
        echo '<script type="application/ld+json">' . json_encode($structured_data, JSON_UNESCAPED_SLASHES) . '</script>';
    }
}
add_action('wp_head', 'wendysmenu_structured_data');

// Add breadcrumb structured data
function wendysmenu_breadcrumb_schema() {
    $current_section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'home';
    
    $breadcrumb_data = array(
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => array(
            array(
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => 'https://wendyssemenu.com'
            )
        )
    );
    
    if ($current_section !== 'home') {
        $section_names = array(
            'menu' => 'Menu',
            'about' => 'About',
            'contact' => 'Contact'
        );
        
        $breadcrumb_data['itemListElement'][] = array(
            '@type' => 'ListItem',
            'position' => 2,
            'name' => $section_names[$current_section] ?? ucfirst($current_section),
            'item' => 'https://wendyssemenu.com?section=' . $current_section
        );
    }
    
    echo '<script type="application/ld+json">' . json_encode($breadcrumb_data, JSON_UNESCAPED_SLASHES) . '</script>';
}
add_action('wp_head', 'wendysmenu_breadcrumb_schema');

// Add FAQ structured data for about page
function wendysmenu_faq_schema() {
    if (isset($_GET['section']) && $_GET['section'] === 'about') {
        $faq_data = array(
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => array(
                array(
                    '@type' => 'Question',
                    'name' => 'Is this the official website?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'No, this is an unofficial fan-created resource for browsing menu items. We are not affiliated with or endorsed by any restaurant chain.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'Are the prices accurate?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Prices are for reference only and may vary by location. Please check with your local restaurant for current pricing.'
                    )
                ),
                array(
                    '@type' => 'Question',
                    'name' => 'Is the nutritional information accurate?',
                    'acceptedAnswer' => array(
                        '@type' => 'Answer',
                        'text' => 'Nutritional information is approximate and based on standard recipes. For complete and accurate nutritional information, please visit the official restaurant website.'
                    )
                )
            )
        );
        
        echo '<script type="application/ld+json">' . json_encode($faq_data, JSON_UNESCAPED_SLASHES) . '</script>';
    }
}
add_action('wp_head', 'wendysmenu_faq_schema');

// Robots.txt functionality - Multiple detection methods
function wendysmenu_robots_txt() {
    // Check for direct robots.txt access
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    $query_string = $_SERVER['QUERY_STRING'] ?? '';
    
    // Multiple ways to detect robots.txt request
    $is_robots_request = (
        $request_uri === '/robots.txt' ||
        strpos($request_uri, 'robots.txt') !== false ||
        isset($_GET['robots']) && $_GET['robots'] === 'txt' ||
        strpos($query_string, 'robots=txt') !== false
    );
    
    if ($is_robots_request) {
        // Set proper headers
        header('Content-Type: text/plain; charset=utf-8');
        header('Cache-Control: public, max-age=86400'); // 24 hours
        
        $robots_content = "User-agent: *\n";
        $robots_content .= "Allow: /\n";
        $robots_content .= "Disallow: /wp-admin/\n";
        $robots_content .= "Disallow: /wp-includes/\n";
        $robots_content .= "Disallow: /wp-content/plugins/\n";
        $robots_content .= "Disallow: /wp-content/themes/*/\n";
        $robots_content .= "Allow: /wp-content/themes/*/assets/\n";
        $robots_content .= "Allow: /wp-content/themes/*/style.css\n";
        $robots_content .= "Disallow: /*?s=*\n";
        $robots_content .= "Disallow: /search/\n";
        $robots_content .= "Disallow: /author/\n";
        $robots_content .= "Disallow: /wp-login.php\n";
        $robots_content .= "Disallow: /wp-register.php\n";
        $robots_content .= "Disallow: /feed/\n";
        $robots_content .= "Disallow: /comments/feed/\n";
        $robots_content .= "Disallow: /trackback/\n";
        $robots_content .= "Disallow: /xmlrpc.php\n";
        $robots_content .= "\n";
        
        // Bot-specific rules
        $robots_content .= "User-agent: Googlebot\n";
        $robots_content .= "Crawl-delay: 0.5\n";
        $robots_content .= "\n";
        
        $robots_content .= "User-agent: Bingbot\n";
        $robots_content .= "Crawl-delay: 1\n";
        $robots_content .= "\n";
        
        $robots_content .= "User-agent: AhrefsBot\n";
        $robots_content .= "Crawl-delay: 10\n";
        $robots_content .= "\n";
        
        $robots_content .= "User-agent: MJ12bot\n";
        $robots_content .= "Crawl-delay: 10\n";
        $robots_content .= "\n";
        
        $robots_content .= "User-agent: DotBot\n";
        $robots_content .= "Disallow: /\n";
        $robots_content .= "\n";
        
        // Sitemap references
        $robots_content .= "Sitemap: https://wendyssemenu.com/sitemap.xml\n";
        $robots_content .= "Sitemap: https://wendyssemenu.com/sitemap_index.xml\n";
        $robots_content .= "Sitemap: https://wendyssemenu.com/menu-sitemap.xml\n";
        
        echo $robots_content;
        exit;
    }
}

// Hook robots.txt to multiple WordPress actions for better compatibility
add_action('init', 'wendysmenu_robots_txt', 1);
add_action('template_redirect', 'wendysmenu_robots_txt', 1);

// Override WordPress default robots.txt
function wendysmenu_robots_txt_override($output, $public) {
    if ('0' == $public) {
        return $output;
    }
    
    return wendysmenu_robots_txt();
}
add_filter('robots_txt', 'wendysmenu_robots_txt_override', 10, 2);

// Add robots.txt to query vars
function wendysmenu_add_query_vars($vars) {
    $vars[] = 'robots';
    return $vars;
}
add_filter('query_vars', 'wendysmenu_add_query_vars');

// Add rewrite rule for robots.txt
function wendysmenu_rewrite_rules() {
    add_rewrite_rule('^robots\.txt$', 'index.php?robots=txt', 'top');
}
add_action('init', 'wendysmenu_rewrite_rules');

// Flush rewrite rules on theme activation
function wendysmenu_flush_rewrite_rules() {
    wendysmenu_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'wendysmenu_flush_rewrite_rules');
?>