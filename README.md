# Modern Starter Theme

A clean, modern starter theme for the Ecommerce Platform. Features responsive design, dark mode support, and extensive customization options.

## Features

- **Responsive Design**: Looks great on all devices from mobile to desktop
- **Dark Mode**: Built-in dark mode toggle with user preference persistence
- **Customizable Colors**: Easy-to-change primary and secondary color schemes
- **Modern UI**: Clean, professional design with smooth animations
- **Tailwind CSS**: Utility-first CSS framework for easy customization
- **Alpine.js**: Lightweight JavaScript for interactive components
- **SEO Optimized**: Proper meta tags and semantic HTML structure

## Screenshots

![Homepage](screenshots/homepage.png)
![Product Page](screenshots/product-page.png)
![Cart](screenshots/cart.png)

## Requirements

- Ecommerce Platform v1.0.0 or higher
- PHP 8.2 or higher

## Installation

### Via Admin Panel

1. Go to **Admin > Themes**
2. Click **Add New Theme**
3. Search for "Modern Starter"
4. Click **Install**
5. Click **Activate** to make it your active theme

### Via GitHub URL

1. Go to **Admin > Themes**
2. Click **Install from GitHub**
3. Enter: `https://github.com/your-username/modern-starter-theme`
4. Click **Install**

## Configuration

After installation, customize the theme from **Admin > Themes > Modern Starter > Settings**:

### Color Settings

| Setting | Description | Default |
|---------|-------------|---------|
| Primary Color | Main brand color | `#4F46E5` |
| Secondary Color | Accent color | `#10B981` |

### Hero Banner

| Setting | Description | Default |
|---------|-------------|---------|
| Show Hero Banner | Toggle hero display | `true` |
| Hero Title | Main heading | "Welcome to Our Store" |
| Hero Subtitle | Subheading text | "Discover amazing products..." |
| Hero Image | Background image | - |

### Layout Settings

| Setting | Description | Default |
|---------|-------------|---------|
| Dark Mode | Enable dark mode toggle | `true` |
| Products Per Row | Grid columns | `4` |
| Footer Columns | Footer layout | `4` |
| Show Newsletter | Newsletter section | `true` |

### Custom Code

| Setting | Description |
|---------|-------------|
| Custom CSS | Add custom styles |
| Custom JavaScript | Add custom scripts |

## Template Structure

```
modern-starter-theme/
├── theme.json              # Theme manifest
├── assets/
│   └── css/
│       └── theme.css       # Custom styles
├── views/
│   ├── layouts/
│   │   └── app.blade.php   # Main layout
│   ├── partials/
│   │   ├── header.blade.php
│   │   ├── footer.blade.php
│   │   ├── mobile-menu.blade.php
│   │   └── cart-drawer.blade.php
│   ├── home.blade.php
│   └── products/
│       └── index.blade.php
└── screenshots/
```

## Customization

### Creating Child Themes

To customize without modifying the core theme, create a child theme:

1. Create a new theme folder
2. Set `"parent": "modern-starter"` in your `theme.json`
3. Override only the templates you need to change

### Available Regions

The theme defines these customizable regions:

- `header` - Site header area
- `main-content` - Primary content area
- `sidebar` - Sidebar widgets
- `footer` - Site footer
- `hero-banner` - Homepage hero section
- `featured-products` - Featured products area
- `newsletter` - Newsletter signup section

### Supported Widgets

- Search
- Categories
- Recent Products
- Featured Products
- Newsletter
- Social Links

## Helper Functions

The theme uses these helper functions:

```php
// Get a theme setting with default fallback
theme_setting('primary_color', '#4F46E5');

// Get the current theme
current_theme();

// Check if dark mode is enabled
theme_setting('dark_mode', true);
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Changelog

### v1.0.0
- Initial release
- Responsive homepage with hero banner
- Product listing with filters
- Dark mode support
- Mobile-friendly navigation
- Cart drawer
- Newsletter section

## License

MIT License - see LICENSE file for details.

## Support

For issues and feature requests, please use the GitHub issue tracker.
