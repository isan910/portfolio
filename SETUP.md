# Quick Setup Guide

Follow these steps to set up your portfolio website:

## Step 1: Add Your Images

1. Navigate to `assets/images/`
2. Add your profile photo as `profile.jpg`
3. Add project screenshots to `assets/images/projects/`:
   - ecommerce.jpg
   - task-app.jpg
   - portfolio-designs.jpg
   - dashboard.jpg
   - cms.jpg
   - api.jpg
4. Add a favicon as `favicon.png`

## Step 2: Update Personal Information

### 2.1 Update Social Media Links
Edit these files:
- `includes/header.php` - Navigation social links
- `includes/footer.php` - Footer social links

Find and replace:
```php
https://github.com/isan910          → Your GitHub URL
https://www.linkedin.com/in/isan-adhikari  → Your LinkedIn URL
https://twitter.com/esan_adhikari   → Your Twitter URL
https://instagram.com/esanadhikari  → Your Instagram URL
```

### 2.2 Update Contact Information
Edit `contact.php`:

```php
// Line ~60: Update your email
<a href="mailto:isan.adhikari@example.com">your.actual@email.com</a>

// Line ~68: Update your phone
<a href="tel:+1234567890">Your Phone Number</a>

// Line ~78: Update your location
<p>Your City, Your Country</p>

// Line ~138-142: Configure email sending
$to = "your-email@example.com";  // Your receiving email
```

### 2.3 Update About Page
Edit `about.php`:

Update the following sections:
- Personal introduction (lines 21-38)
- Work experience (lines 45-80)
- Education (lines 87-110)
- Skills and certifications

### 2.4 Update Projects
Edit `projects.php`:

Replace project information:
- Project titles
- Descriptions
- Technology stacks
- Links to live projects

## Step 3: Configure Email (Important!)

### Option A: Using mail() function
Edit `contact.php` (around line 138):

```php
$to = "your-email@example.com";
$email_subject = "Portfolio Contact: " . $subject;
$email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
$headers = "From: $email\r\nReply-To: $email";
mail($to, $email_subject, $email_body, $headers);
```

### Option B: Using PHPMailer (Recommended for production)
Install PHPMailer and configure SMTP settings.

### Option C: Using a form service
Integrate with services like:
- Formspree
- Netlify Forms
- SendGrid

## Step 4: Test Locally

### Using PHP Built-in Server:
```bash
cd Portfolio
php -S localhost:8000
```

Then open: `http://localhost:8000`

### Using XAMPP/WAMP:
1. Copy project to htdocs folder
2. Access via: `http://localhost/Portfolio`

## Step 5: Deployment Checklist

Before deploying to production:

### 5.1 Update .htaccess
- Enable HTTPS redirect (uncomment line 53-55)
- Set correct timezone (line 75)
- Enable/disable error reporting (line 2-3)

### 5.2 Optimize Images
- Compress all images
- Ensure images are under 300KB each
- Use WebP format for better performance (optional)

### 5.3 Security
- Change default email addresses
- Add CSRF protection to forms
- Enable HTTPS
- Update security headers

### 5.4 SEO
- Update meta descriptions in each page
- Add sitemap.xml
- Configure Google Analytics (optional)
- Submit to search engines

### 5.5 Test
- Test on multiple browsers
- Test on mobile devices
- Test contact form
- Check all links
- Validate HTML/CSS

## Step 6: Deploy to Server

### Via FTP/SFTP:
1. Connect to your server
2. Upload all files to public_html or www folder
3. Set correct file permissions (644 for files, 755 for directories)

### Via Git:
```bash
git init
git add .
git commit -m "Initial commit"
git remote add origin your-repo-url
git push -u origin main
```

## Step 7: Post-Deployment

1. Test the live site
2. Set up SSL certificate (Let's Encrypt)
3. Configure CDN (Cloudflare recommended)
4. Set up automated backups
5. Monitor performance

## Common Issues & Solutions

### Issue: Contact form not sending emails
**Solution**: 
- Check PHP mail() is enabled on server
- Configure SMTP settings
- Use a third-party email service

### Issue: Images not loading
**Solution**:
- Check file paths are correct
- Verify image files exist
- Check file permissions (should be 644)

### Issue: CSS/JS not loading
**Solution**:
- Clear browser cache
- Check file paths in header.php
- Verify files exist in assets folder

### Issue: Mobile menu not working
**Solution**:
- Ensure JavaScript is enabled
- Check console for errors
- Verify main.js is loaded

## Support

If you encounter any issues:
1. Check README.md for detailed documentation
2. Review browser console for errors
3. Check PHP error logs
4. Contact: isan.adhikari@example.com

## Next Steps

After basic setup:
- Add Google Analytics
- Set up contact form notifications
- Add more projects
- Write blog posts
- Optimize for SEO
- Add testimonials

---

**Remember**: Always backup before making changes!

Good luck with your portfolio! 🚀
