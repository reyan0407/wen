<?php get_header(); ?>

<main id="main" class="site-main">
    <?php
    // Get the current page/section from URL parameter
    $current_section = isset($_GET['section']) ? sanitize_text_field($_GET['section']) : 'home';
    
    switch($current_section) {
        case 'menu':
            get_template_part('template-parts/menu-section');
            break;
        case 'about':
            get_template_part('template-parts/about-section');
            break;
        case 'contact':
            get_template_part('template-parts/contact-section');
            break;
        default:
            get_template_part('template-parts/hero-section');
            break;
    }
    ?>
</main>

<?php get_footer(); ?>