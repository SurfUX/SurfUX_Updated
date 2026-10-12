# SurfUX — Hostinger deployment notes

## Clean URLs
The root `.htaccess` redirects direct `.php` requests to clean URLs and internally maps clean URLs back to existing PHP files. It deliberately starts with temporary `302` redirects. After testing, the redirects can be changed to `301`.

Examples: `/pages/about.php` → `/pages/about`; `/index.php` → `/`.

## Upload
1. Back up the current live site before replacing files.
2. Upload the contents of this project folder into the domain's `public_html` directory (or the document root configured for the domain). Ensure `.htaccess` is uploaded; some file managers hide dotfiles.
3. Check that the hosting account supports Apache/LiteSpeed rewrite rules. If any `.htaccess` file causes a 403/500, temporarily rename it to `.htaccess-disabled` and check Hostinger error logs/support before trying more rules.
4. Purge Hostinger/cache/CDN cache after changes.

## Contact form email security
The previously hardcoded Gmail app password has been removed from the PHP source. Revoke that old app password immediately and create a new one. Configure these server environment variables for PHP: `SURFUX_SMTP_HOST`, `SURFUX_SMTP_USERNAME`, `SURFUX_SMTP_PASSWORD`, `SURFUX_MAIL_FROM`, and `SURFUX_MAIL_TO`. Do not place a real password in a publicly accessible file. Until SMTP settings are configured, the contact form will report that email is not configured rather than sending with unsafe credentials.

## Verification checklist
- `/` loads the homepage.
- `/pages/about`, `/pages/services`, `/pages/portfolio`, `/pages/news`, `/pages/contact`, and `/pages/caresphere` load.
- Portfolio/news detail links retain their `?id=...` parameters.
- Existing static assets (CSS, JS, images) still load.
- Contact email is tested after SMTP environment variables are configured.

This package has been syntax-checked locally, but a local check cannot verify the actual Hostinger account configuration, rewrite permissions, SMTP credentials, or live database/server behavior.
