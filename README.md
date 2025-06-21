# WendysMenu - Complete Menu Website

A beautiful, fully functional menu website built with modern web technologies. No WordPress required!

## 🚀 Features

- **Complete Menu System**: Browse menu items organized by categories
- **Search & Filter**: Find specific items quickly with search and category filtering
- **Mobile Responsive**: Optimized for all devices
- **SEO Optimized**: Built-in structured data, meta tags, and performance optimization
- **Accessibility**: WCAG compliant with proper ARIA labels and keyboard navigation
- **Performance**: Lazy loading, optimized animations, and efficient code
- **Contact Form**: Working contact form with validation
- **Modern Design**: Beautiful UI with smooth animations and hover effects

## 📁 File Structure

```
wendysmenu-website/
├── index.html          # Main HTML file with all sections
├── styles.css          # Custom CSS styles and animations
├── script.js           # JavaScript functionality
├── robots.txt          # SEO robots file
├── sitemap.xml         # XML sitemap for search engines
├── package.json        # Project configuration
└── README.md           # This file
```

## 🛠️ Installation & Setup

### Option 1: Simple Setup (No Build Tools)
1. Download all files
2. Open `index.html` in your web browser
3. That's it! The website is ready to use

### Option 2: Development Setup (With Vite)
1. Download all files
2. Install dependencies:
   ```bash
   npm install
   ```
3. Start development server:
   ```bash
   npm run dev
   ```
4. Build for production:
   ```bash
   npm run build
   ```

## 🎨 Customization

### Menu Items
Edit the `menuItems` array in `script.js` to add, remove, or modify menu items:

```javascript
const menuItems = [
    {
        id: '1',
        name: "Your Item Name",
        description: "Item description",
        price: "$9.99",
        image: "https://your-image-url.com/image.jpg",
        category: 'burgers', // or chicken, breakfast, etc.
        popular: true, // or false
        calories: "500 Cal",
        ingredients: ['ingredient1', 'ingredient2'],
        allergens: ['gluten', 'dairy']
    }
    // Add more items...
];
```

### Categories
Modify the `menuCategories` array in `script.js`:

```javascript
const menuCategories = [
    { id: 'all', name: 'All Items' },
    { id: 'your-category', name: 'Your Category' }
    // Add more categories...
];
```

### Styling
- Edit `styles.css` to change colors, fonts, and layout
- The website uses Tailwind CSS classes for most styling
- Custom animations and components are in the CSS file

### Images
- Replace image URLs in the menu items with your own images
- Recommended size: 400x300px
- Use WebP format for better performance
- Images are loaded from Pexels by default

## 🔧 Technical Features

### SEO Optimization
- Complete meta tags and Open Graph data
- Structured data (JSON-LD) for better search engine understanding
- Robots.txt file for search engine crawling
- XML sitemap for search engines
- Semantic HTML structure

### Performance
- Lazy loading for images
- Optimized animations with GPU acceleration
- Debounced search functionality
- Efficient DOM manipulation
- Core Web Vitals optimization

### Accessibility
- WCAG 2.1 AA compliant
- Proper ARIA labels and roles
- Keyboard navigation support
- Screen reader announcements
- Focus management
- High contrast mode support

### Browser Support
- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## 📱 Mobile Optimization

The website is fully responsive and optimized for:
- Touch interactions
- Mobile navigation
- Optimized images for different screen sizes
- Fast loading on mobile networks

## 🚀 Deployment

### Static Hosting (Recommended)
Deploy to any static hosting service:
- **Netlify**: Drag and drop the files
- **Vercel**: Connect your GitHub repository
- **GitHub Pages**: Upload files to a repository
- **Firebase Hosting**: Use Firebase CLI

### Traditional Web Hosting
Upload all files to your web server's public directory (usually `public_html` or `www`).

## 🔍 SEO Setup

1. Update the canonical URL in `index.html`
2. Replace social media image URLs with your own
3. Update the sitemap.xml with your domain
4. Submit sitemap to Google Search Console
5. Update robots.txt with your domain

## 📊 Analytics

To add Google Analytics:
1. Get your GA4 tracking ID
2. Add the tracking script to the `<head>` section of `index.html`
3. Configure events for menu interactions

## 🛡️ Security

The website includes:
- Content Security Policy headers (when deployed)
- XSS protection
- Secure form handling
- Input validation and sanitization

## 📞 Support

For customization help or questions:
1. Check the code comments in each file
2. Modify the contact form to point to your email
3. Test all functionality after making changes

## 📄 License

This project is open source and available under the MIT License.

## 🎯 Performance Tips

1. Optimize images before uploading
2. Use a CDN for faster loading
3. Enable gzip compression on your server
4. Monitor Core Web Vitals with Google PageSpeed Insights
5. Test on real devices for best user experience

---

**Ready to use!** This website is production-ready and can be deployed immediately to any web hosting service.