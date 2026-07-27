---
name: wordpress-acf-tailwind-audit
description: Comprehensive security, performance, accessibility, and responsive design audit guidelines for WordPress websites built with Advanced Custom Fields (ACF) and Tailwind CSS. Use this skill whenever auditing, reviewing, developing, or optimizing WordPress + ACF + Tailwind CSS themes and plugins.
---

# WordPress + ACF + Tailwind CSS Audit Checklist
## Security & Performance Optimization Guide (Claude Opus) & Responsive Checklist

This skill provides a comprehensive checklist and standard for developing, auditing, and optimizing a WordPress website built with:
- WordPress Core & Theme Architecture
- Advanced Custom Fields (ACF) Pro / Free
- Tailwind CSS

---

# PART 1: WordPress Security Checklist

## Core Security

- [ ] WordPress is updated to the latest stable version.
- [ ] PHP version is supported (8.2+ recommended).
- [ ] All plugins are updated.
- [ ] All themes are updated.
- [ ] Remove unused plugins.
- [ ] Remove unused themes.
- [ ] Delete inactive plugins instead of simply deactivating them.
- [ ] Disable file editing from the WordPress admin.

```php
define('DISALLOW_FILE_EDIT', true);
```

---

## Admin Security

- [ ] Strong passwords enforced.
- [ ] Two-Factor Authentication enabled.
- [ ] Limit login attempts.
- [ ] Change default admin username.
- [ ] CAPTCHA on login form.
- [ ] Hide WordPress version.

---

## File Permissions

Recommended:

```
Folders: 755
Files: 644
wp-config.php: 600 or 640
```

- [ ] Verify permissions.

---

## wp-config.php

- [ ] Security keys updated.
- [ ] Database prefix changed from `wp_`.
- [ ] Debug disabled on production.

```php
define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', false);
```

---

## Server Security

- [ ] HTTPS enabled.
- [ ] HSTS enabled.
- [ ] Security headers configured.

Required headers:

```
Content-Security-Policy
X-Frame-Options
X-Content-Type-Options
Permissions-Policy
Referrer-Policy
Strict-Transport-Security
```

---

## User Roles

- [ ] Remove unnecessary administrators.
- [ ] Principle of least privilege followed.
- [ ] Editors do not have admin capabilities.

---

## Database

- [ ] Remove spam comments.
- [ ] Remove revisions if excessive.
- [ ] Optimize database.
- [ ] Remove orphaned metadata.

---

## XML-RPC & REST API

- [ ] Disable XML-RPC if unused.
- [ ] Restrict sensitive REST API endpoints.

---

## ACF Security Checklist

### Escaping Output

Never output directly:

```php
echo get_field('title');
```

Use:

```php
// Plain text
echo esc_html(get_field('title'));

// URLs
echo esc_url(get_field('link'));

// Rich text
echo wp_kses_post(get_field('content'));

// HTML Attributes
echo esc_attr(get_field('class'));
```

---

### ACF Validation & Flexible Content

- [ ] Validate all input.
- [ ] Sanitize before saving (`update_field()`).
- [ ] Escape before rendering.
- [ ] Validate layouts in flexible content loops.
- [ ] Prevent arbitrary file includes (always use whitelisted template part names or `locate_template()`).

---

## Theme & Upload Security

- [ ] Escape every output.
- [ ] Sanitize every input (`sanitize_text_field()`, `sanitize_email()`).
- [ ] Include Nonces on forms (`wp_nonce_field()`) and verify before processing (`check_admin_referer()`).
- [ ] Restrict MIME types.
- [ ] Disable PHP execution inside `/wp-content/uploads/`.
- [ ] Validate uploaded images.

---

# PART 2: Performance Optimization Checklist

## Image Optimization

### Convert Images to WebP

- [ ] JPG → WebP
- [ ] PNG → WebP where appropriate
- [ ] Preserve transparency if needed.

Target:
- 70–85% quality
- Significant size reduction (<150 KB for hero banners, <80 KB for content images)

### Responsive Images & Lazy Loading

Use `srcset`, `sizes="100vw"`, and explicit `width=""` and `height=""` attributes to prevent Cumulative Layout Shift (CLS).

```html
<img src="image.webp" srcset="image-480.webp 480w, image-768.webp 768w, image-1200.webp 1200w" sizes="100vw" width="1200" height="800" loading="lazy" />
```

### Largest Contentful Paint (LCP) Optimization

Do **NOT** lazy-load hero images, top banners, or above-the-fold images. Instead, use:

```html
<img src="hero.webp" fetchpriority="high" loading="eager" />
```

---

## CSS & Tailwind Optimization

- [ ] Purge unused CSS (`tailwind.config.js` content scanning).
- [ ] Minify CSS output for production builds (`--minify`).
- [ ] Remove duplicate utilities and avoid heavy inline style attributes (`style="..."`).
- [ ] Enable JIT / PostCSS processing.

---

## JavaScript, Fonts & Caching

- [ ] Defer non-critical JS (`defer` or `async`).
- [ ] Self-host Google/custom fonts (`font-display: swap`, preload critical fonts).
- [ ] Enable Browser cache, Object cache (Redis/Memcached), and Page caching.
- [ ] Configure CDN (Cloudflare, BunnyCDN, AWS CloudFront).

---

## ACF & Database Performance

### Avoid Repeated Loop Queries

Avoid calling `get_field()` multiple times inside heavy loops for the same post/item.

Instead:

```php
// Retrieve all fields once per item/post when needed
$fields = get_fields();
$title  = ! empty( $fields['title'] ) ? $fields['title'] : '';
```

- [ ] Avoid deeply nested repeaters when possible (flatten structures for query efficiency).
- [ ] Avoid unnecessary custom `WP_Query` loops; use Transients API (`set_transient()`, `get_transient()`) to cache expensive database queries.

---

# PART 3: Core Web Vitals & Lighthouse Targets

| Metric / Category | Target |
|---|---|
| LCP (Largest Contentful Paint) | < 2.5 s |
| INP (Interaction to Next Paint) | < 200 ms |
| CLS (Cumulative Layout Shift) | < 0.1 |
| TTFB (Time to First Byte) | < 800 ms |
| **Lighthouse Performance** | 95–100 |
| **Lighthouse Accessibility** | 100 |
| **Lighthouse Best Practices** | 100 |
| **Lighthouse SEO** | 100 |

---

# PART 4: Responsive Design Checklist (Mobile, Tablet & Desktop)

## Mobile Responsive (320px – 767px)
- [ ] No horizontal scrolling; content fits cleanly inside viewport.
- [ ] Flexible containers using Tailwind (`w-full`, `max-w-7xl`, `px-4 sm:px-6`).
- [ ] Responsive grids collapse (`grid-cols-1 md:grid-cols-2 lg:grid-cols-3`).
- [ ] Headings and body text scale comfortably (`text-3xl sm:text-5xl`).
- [ ] Minimum touch target size of 44×44px on buttons and navigation items.
- [ ] Inputs span full width (`w-full`) and trigger appropriate mobile keyboard (`type="email"`, `type="tel"`).

## Tablet Responsive (768px – 1023px)
- [ ] 2-column or fluid grid alignments adapt cleanly without awkward wrapping.
- [ ] Hero banners and images preserve proper aspect ratio.

## Desktop Responsive (1024px+)
- [ ] Max content container centered (`container mx-auto max-w-7xl`).
- [ ] Multi-column layouts aligned (`lg:col-span-7` vs `lg:col-span-5`).
- [ ] Interactive hover states (`group-hover:flex`, button shadows) and tooltips function correctly.

## Tailwind Breakpoint Reference
- Default: `< 640px` (Mobile)
- `sm:` `≥ 640px` (Small tablets / large phones)
- `md:` `≥ 768px` (Tablets / portrait)
- `lg:` `≥ 1024px` (Desktop / landscape)
- `xl:` `≥ 1280px` (Large Desktop)
- `2xl:` `≥ 1536px` (Wide Desktop)

---

# PART 5: Project Image Conventions

All placeholder or dummy images should be renamed to proper descriptive filenames for SEO and clarity.

## Homepage Asset Mapping
- `hero-product-mockup.png`: Main hero floating product graphic
- `hero-bg-looper.png`: Green hero looping background wave
- `hero-background-alt.png`: Alternate hero mockup (originally image 10.png)
- `who-we-are-facility.jpg`: Factory interior shot for Who We Are block
- `product-rice-protein.png`: Products Grid - Rice Protein icon
- `product-rice-starch.png`: Products Grid - Rice Starch icon
- `product-maltodextrin.png`: Products Grid - Maltodextrin icon
- `mission-facility-lab.jpg`: Facility lab shot for About Mission block
- `blog-clean-label.jpg`: Blog Insights - Clean label shift
- `blog-texture-performance.jpg`: Blog Insights - Texture performance
- `blog-bakery-systems.jpg`: Blog Insights - Bakery systems
- `blog-cosmetics-purity.jpg`: Blog Insights - Cosmetics purity
- `gallery-extra-1.jpg`, `gallery-extra-2.jpg`: Additional factory shots
