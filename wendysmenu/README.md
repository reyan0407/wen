# WendyssMenu WordPress Theme

A fully SEO and speed optimized WordPress theme for browsing menu items with detailed information and pricing.

## Features

- **Complete Menu System**: Browse menu items organized by categories
- **Search & Filter**: Find specific items quickly with search and category filtering
- **Mobile Responsive**: Optimized for all devices
- **SEO Optimized**: Built-in structured data, meta tags, and performance optimization
- **Accessibility**: WCAG compliant with proper ARIA labels and keyboard navigation
- **Performance**: Lazy loading, caching, and optimized assets

## Installation

1. Download the theme files
2. Upload the `wendysmenu` folder to your WordPress `/wp-content/themes/` directory
3. Activate the theme in your WordPress admin panel
4. Customize the menu items in `functions.php` if needed

## File Structure

```
wendysmenu/
├── style.css                 # Main stylesheet with theme information
├── index.php                 # Main template file
├── header.php                # Header template
├── footer.php                # Footer template
├── functions.php             # Theme functions and menu data
├── assets/
│   └── js/
│       └── menu.js           # JavaScript functionality
└── template-parts/
    ├── hero-section.php      # Homepage hero section
    ├── menu-section.php      # Menu page template
    ├── about-section.php     # About page template
    └── contact-section.php   # Contact page template
```

## Customization

### Menu Items
Edit the `get_menu_items()` function in `functions.php` to add, remove, or modify menu items.

### Categories
Modify the `get_menu_categories()` function in `functions.php` to change menu categories.

### Styling
The theme uses Tailwind CSS for styling. You can customize colors and styles in `style.css`.

### Images
Replace image URLs in the menu items array with your own images. Recommended size: 400x300px in WebP format.

## SEO Features

- Structured data (JSON-LD) for menu items, organization, and FAQ
- Optimized meta tags and Open Graph data
- Automatic robots.txt generation
- Breadcrumb navigation
- Performance optimizations

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers

## Performance

The theme is optimized for Core Web Vitals:
- Lazy loading images
- Optimized JavaScript
- Efficient CSS
- Caching support

## License

This theme is released under the GPL v2 or later license.

## Support

For support and customization, please refer to the WordPress documentation or contact a WordPress developer.