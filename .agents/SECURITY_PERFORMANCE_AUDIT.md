# WordPress + ACF + Tailwind CSS Audit Checklist
## Security & Performance Optimization Guide (Claude Opus)

This document provides a comprehensive checklist for auditing a WordPress website built with:
- WordPress
- Advanced Custom Fields (ACF)
- Tailwind CSS

---

# 1. WordPress Security Checklist

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

## XML-RPC

Disable if unused.

---

## REST API

Restrict sensitive endpoints.

---

## ACF Security Checklist

### Escaping Output

Never output directly:

```php
echo get_field('title');
```

Use:

```php
echo esc_html(get_field('title'));
```

URLs

```php
echo esc_url(get_field('link'));
```

Rich text

```php
echo wp_kses_post(get_field('content'));
```

Attributes

```php
echo esc_attr(get_field('class'));
```

---

### ACF Validation

- [ ] Validate all input.
- [ ] Sanitize before saving.
- [ ] Escape before rendering.

---

### Flexible Content

- [ ] Validate layouts.
- [ ] Prevent arbitrary includes.
- [ ] Use whitelisted templates.

---

## Theme Security

- [ ] Escape every output.
- [ ] Sanitize every input.
- [ ] Nonces on forms.
- [ ] Verify nonce.

```php
wp_nonce_field();
check_admin_referer();
```

---

## Upload Security

- [ ] Restrict MIME types.
- [ ] Disable PHP execution inside uploads.
- [ ] Validate uploaded images.

---

# 2. Performance Optimization Checklist

---

## Image Optimization

### Convert Images to WebP

- [ ] JPG → WebP
- [ ] PNG → WebP where appropriate
- [ ] Preserve transparency if needed.

Target:

- 70–85% quality
- Significant size reduction

---

### Responsive Images

Use:

```html
<img
src="image.webp"
srcset="
image-480.webp 480w,
image-768.webp 768w,
image-1200.webp 1200w"
sizes="100vw"
>
```

---

### Lazy Loading

```html
loading="lazy"
```

---

### Width & Height

Always specify:

```html
width=""
height=""
```

---

### Largest Contentful Paint (LCP)

Do NOT lazy-load:

- Hero image
- Banner image
- Above-the-fold images

Use:

```html
fetchpriority="high"
```

---

### Image Compression

Recommended tools:

- Imagify
- ShortPixel
- EWWW Image Optimizer
- TinyPNG

Target:

- <150 KB hero
- <80 KB content images

---

## CSS Optimization

Tailwind Checklist

- [ ] Purge unused CSS.
- [ ] Minify CSS.
- [ ] Remove duplicate utilities.
- [ ] Enable JIT mode.
- [ ] Generate production build.

---

## JavaScript

- [ ] Defer non-critical JS.
- [ ] Remove unused JS.
- [ ] Minify.
- [ ] Delay third-party scripts.

---

## Fonts

- [ ] Self-host fonts.
- [ ] Preload fonts.
- [ ] font-display: swap.

---

## Caching

- [ ] Browser cache.
- [ ] Object cache.
- [ ] Page cache.
- [ ] OPcache enabled.

---

## CDN

- [ ] Cloudflare
- [ ] BunnyCDN
- [ ] AWS CloudFront

---

## Database Optimization

- [ ] Clean revisions.
- [ ] Remove transients.
- [ ] Optimize tables.
- [ ] Remove orphaned metadata.

---

## ACF Performance

Avoid:

```php
get_field()
```

inside loops repeatedly.

Instead:

```php
$fields = get_fields();
```

Reuse values.

---

Avoid nested repeaters when possible.

---

## Query Optimization

- [ ] Avoid unnecessary WP_Query.
- [ ] Use Transients.
- [ ] Cache expensive queries.

---

## Tailwind Optimization

- [ ] Build production CSS.
- [ ] Remove unused classes.
- [ ] Compress output.
- [ ] Avoid inline styles.

---

## Accessibility

- [ ] Alt text.
- [ ] Semantic HTML.
- [ ] Keyboard navigation.
- [ ] Contrast ratio.
- [ ] ARIA labels where needed.

---

# 3. Core Web Vitals Targets

| Metric | Target |
|---------|--------|
| LCP | <2.5 s |
| INP | <200 ms |
| CLS | <0.1 |
| TTFB | <800 ms |
| Speed Index | <3.5 s |

---

# 4. Lighthouse Targets

| Category | Score |
|----------|-------|
| Performance | 95–100 |
| Accessibility | 100 |
| Best Practices | 100 |
| SEO | 100 |

---

# 5. Final Audit Checklist

## Security

- [ ] WordPress updated
- [ ] Plugins updated
- [ ] Themes updated
- [ ] PHP updated
- [ ] HTTPS enabled
- [ ] Security headers
- [ ] Escaped ACF output
- [ ] Sanitized input
- [ ] Nonces implemented
- [ ] File permissions verified
- [ ] XML-RPC disabled (if unused)
- [ ] REST API secured
- [ ] Strong passwords
- [ ] 2FA enabled
- [ ] Remove unused plugins/themes

---

## Performance

- [ ] Images converted to WebP
- [ ] Images compressed
- [ ] Responsive images
- [ ] Lazy loading enabled
- [ ] Hero images excluded from lazy loading
- [ ] Width/height specified
- [ ] Tailwind CSS purged
- [ ] CSS minified
- [ ] JS deferred
- [ ] Fonts optimized
- [ ] Caching enabled
- [ ] CDN configured
- [ ] Database optimized
- [ ] ACF optimized
- [ ] Queries optimized

---

## Expected Results

### Security
- Reduced attack surface
- Secure ACF output
- Protection against XSS, CSRF, and SQL Injection
- Improved server hardening

### Performance
- 30–70% image size reduction with WebP
- Faster page load times
- Improved Core Web Vitals
- Reduced bandwidth usage
- Better Lighthouse scores (95–100)
- Improved SEO rankings
- Enhanced user experience
