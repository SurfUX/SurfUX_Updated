# SurfUX — Hostinger deployment notes

## Clean URLs
The root `.htaccess` redirects direct `.php` requests to clean URLs and internally maps clean URLs back to existing PHP files. It deliberately starts with temporary `302` redirects. After testing, the redirects can be changed to `301`.

Examples: `/pages/about.php` → `/pages/about`; `/index.php` → `/`.

## Upload
1. Back up the current live site before replacing files.
2. Upload the contents of this project folder into the domain's `public_html` directory (or the document root configured for the domain). Ensure `.htaccess` is uploaded; some file managers hide dotfiles.
3. Check that the hosting account supports Apache/LiteSpeed rewrite rules. If any `.htaccess` file causes a 403/500, temporarily rename it to `.htaccess-disabled` and check Hostinger error logs/support before trying more rules.
4. Purge Hostinger/cache/CDN cache after changes.

## Gmail SMTP setup for the contact form
The contact form uses the included PHPMailer library and Gmail SMTP over STARTTLS on port 587. Real credentials are not included in this package.

### Recommended Hostinger setup (private config file)
1. In Google Account security, enable 2-Step Verification if it is not already enabled.
2. Create a Google **App Password** for this website. Use a new one; revoke any app password that was previously exposed in website source code. Do not use your normal Gmail password.
3. In Hostinger hPanel → Websites → Manage → Files → File Manager, open `public_html` and locate the parent directory one level above it (the directory containing `public_html`).
4. Copy `surfux-smtp-config.example.php` from the project as `surfux-smtp-config.php` in that parent directory, **not inside `public_html`**.
5. Edit the private file and replace the placeholders:
   - `username`: the full Gmail address used to authenticate with Google SMTP.
   - `password`: the new 16-character Google App Password (spaces are okay; code removes them).
   - `from`: use the same Gmail address as `username`, unless you have configured a permitted Gmail send-as alias.
   - `to`: the inbox that should receive enquiries; default shown is `gihan@surfux.com`.
   - `host`: leave as `smtp.gmail.com`.
6. Save the file. The PHP code first checks server environment variables and then the private config file. It never displays SMTP credentials in the page.
7. Submit a test enquiry on `/pages/contact`. Check the receiving inbox's Spam folder too.

### Environment-variable alternative
If you have a supported way to set PHP environment variables in your Hostinger plan, set `SURFUX_SMTP_HOST`, `SURFUX_SMTP_USERNAME`, `SURFUX_SMTP_PASSWORD`, `SURFUX_MAIL_FROM`, and `SURFUX_MAIL_TO`. Environment variables take precedence over the private config file.

## If email still fails
- Confirm the username is the full Google account address and the password is a Google App Password, not the normal account password.
- Confirm `from` matches the authenticated Gmail account or a configured send-as alias.
- Check Hostinger PHP error logs for `SurfUX Contact Form Error`; do not share logs that contain personal information.
- Confirm outbound SMTP connections are allowed by the hosting plan and PHP OpenSSL is enabled.
- Do not enable SMTP debug output on the public contact page or paste credentials into chat.

## Verification checklist
- `/` loads the homepage.
- `/pages/about`, `/pages/services`, `/pages/portfolio`, `/pages/news`, `/pages/contact`, and `/pages/caresphere` load.
- Portfolio/news detail links retain their `?id=...` parameters.
- Existing static assets (CSS, JS, images) still load.
- Contact email is tested after Gmail credentials are configured.

This package has been syntax-checked locally, but a local check cannot verify the actual Hostinger account configuration, Gmail App Password, rewrite permissions, or live SMTP connectivity.
