JIM WORKS WEB STUDIO - HOSTINGER WEBSITE
==========================================

FILES
-----
index.html       Main website
style.css        Responsive design
script.js        Mobile menu + year
contact.php      Website application email handler
thank-you.html   Confirmation page
assets/          User-provided promotional artwork

HOSTINGER UPLOAD
----------------
1. Log in to Hostinger hPanel.
2. Open Websites > Manage > File Manager.
3. Open the public_html folder for your domain.
4. Upload ALL files and the assets folder.
5. Keep contact.php on the server; it handles the application form.
6. Visit your domain and test the application form.

EMAIL
-----
The form is configured to send applications to:
jimy43saberon@gmail.com

IMPORTANT:
Hostinger mail delivery can require a domain email/SMTP configuration.
If PHP mail() does not deliver reliably on your hosting plan, replace
contact.php with an SMTP-based PHPMailer implementation using a domain
mailbox (for example, info@yourdomain.com). Do not put a Gmail password
inside this website.

DOMAIN
------
Replace www.jimworkswebstudio.com in the page text with your actual domain
if the domain is different.

SECURITY / PRODUCTION
---------------------
- Enable HTTPS/SSL in Hostinger.
- Add CAPTCHA or Cloudflare Turnstile before publishing publicly.
- Add server-side rate limiting/anti-spam if the form receives spam.
- Keep PHP updated.
