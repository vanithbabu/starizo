# Project Rules (`starizo` Workspace)

## Mandatory Audit Check Before Every Change
Whenever instructed to change, add, or refactor any code or template in this project (`starizo`), you **MUST** strictly verify your changes against the `wordpress-acf-tailwind-audit` skill before finalizing your turn:

1. **WordPress & ACF Security Check**:
   - Ensure every output is properly escaped (`esc_html()`, `esc_url()`, `esc_attr()`, `wp_kses_post()`). Never output raw variables (`echo get_field(...)`).
   - Sanitize all inputs before saving (`update_field()`, `sanitize_text_field()`, etc.).
   - Include and verify nonces on all forms (`wp_nonce_field()`, `check_admin_referer()`).

2. **Responsive Design Check**:
   - Verify mobile (`< 640px`), tablet (`md:` `≥ 768px`), and desktop (`lg:` `≥ 1024px`) behaviors.
   - Ensure containers use proper responsive widths (`w-full`, `max-w-7xl`, `px-4 sm:px-6`).
   - Ensure interactive elements and buttons have a minimum touch target of 44×44px on mobile devices.
   - Verify that responsive typography scales correctly (`text-3xl sm:text-5xl lg:text-6xl`) and that text never overflows containers or causes horizontal scrolling.

3. **Performance & Tailwind Check**:
   - Avoid calling `get_field()` repeatedly inside heavy loops; instead, fetch once using `$fields = get_fields();`.
   - Ensure images include `width=""`, `height=""`, and appropriate `loading="lazy"` attributes (or `fetchpriority="high"` for hero/above-the-fold banners).
   - Use compiled Tailwind utility classes; avoid inline styles (`style="..."`) or duplicate ad-hoc CSS definitions.
