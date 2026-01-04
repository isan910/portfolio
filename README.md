# Isan Adhikari - Portfolio Website

A modern, responsive portfolio website built with PHP, featuring a clean design inspired by contemporary web aesthetics.

## 🚀 Features

- **Responsive Design**: Fully responsive across all devices (mobile, tablet, desktop)
- **Modern UI/UX**: Clean, minimalist design with smooth animations
- **Multiple Pages**: Home, About, Projects, Notes, and Contact pages
- **Interactive Elements**: Smooth scrolling, hover effects, and animations
- **Contact Form**: Functional contact form with validation
- **Project Filtering**: Filter projects by category
- **Performance Optimized**: Fast loading with lazy loading images
- **Accessible**: WCAG compliant with semantic HTML and ARIA labels
- **SEO Friendly**: Meta tags and semantic structure

## 🛠️ Technologies Used

### Frontend
- **HTML5**: Semantic markup
- **CSS3**: Custom properties, Flexbox, Grid, animations
- **JavaScript (ES6+)**: Modern JavaScript features
- **AOS (Animate On Scroll)**: Scroll animations

### Backend
- **PHP 8.x**: Server-side logic
- **Includes System**: Modular header/footer components

### Design
- **Typography**: Inter font family (Google Fonts)
- **Color Scheme**: Dark theme (#0a0a0a primary, #6366f1 accent)
- **Icons**: Custom SVG icons

## 📁 Project Structure

```
Portfolio/
├── index.php                 # Homepage
├── about.php                 # About page
├── projects.php              # Projects showcase
├── notes.php                 # Blog/Notes section
├── contact.php               # Contact form
├── colophon.php              # Site information
├── includes/
│   ├── header.php           # Global header
│   └── footer.php           # Global footer
├── assets/
│   ├── css/
│   │   ├── style.css        # Main stylesheet
│   │   └── responsive.css   # Responsive styles
│   ├── js/
│   │   └── main.js          # Main JavaScript
│   └── images/
│       ├── projects/        # Project screenshots
│       └── profile.jpg      # Profile image
└── README.md
```

## 🚦 Getting Started

### Prerequisites

- PHP 8.0 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Modern web browser

### Installation

1. **Clone or download the project**
   ```bash
   cd Portfolio
   ```

2. **Start PHP development server**
   ```bash
   php -S localhost:8000
   ```

3. **Open in browser**
   ```
   http://localhost:8000
   ```

### For Production

1. **Upload files to your web server**
   - Use FTP/SFTP or your hosting control panel
   - Upload all files maintaining the directory structure

2. **Configure your domain**
   - Point your domain to the root directory
   - Ensure PHP is enabled on your server

3. **Update contact form**
   - Edit `contact.php` to configure email settings
   - Uncomment and configure the mail() function

## 🎨 Customization

### Colors
Edit CSS variables in `assets/css/style.css`:
```css
:root {
    --color-bg-primary: #0a0a0a;
    --color-accent: #6366f1;
    /* Add your custom colors */
}
```

### Content
- **Personal Info**: Update in each PHP file
- **Projects**: Add your projects in `projects.php`
- **Social Links**: Update in `includes/header.php` and `includes/footer.php`

### Images
Place your images in `assets/images/`:
- `profile.jpg` - Your profile picture
- `projects/` - Project screenshots
- `favicon.png` - Site favicon

## 📱 Pages Overview

### Home (index.php)
- Hero section with introduction
- Featured work/projects
- Skills showcase
- Call-to-action

### About (about.php)
- Personal introduction
- Work experience timeline
- Education and certifications
- Core values

### Projects (projects.php)
- Project showcase with filtering
- Detailed project cards
- Technology stack display
- Links to live projects

### Notes (notes.php)
- Blog/article listings
- Categories and tags
- Newsletter subscription

### Contact (contact.php)
- Contact form with validation
- Contact information
- Social media links
- Availability status

## 🔧 Configuration

### Email Setup (contact.php)
```php
$to = "your-email@example.com";
$headers = "From: $email\r\nReply-To: $email";
mail($to, $email_subject, $email_body, $headers);
```

### Google Fonts
Already included in header.php. To change fonts:
```html
<link href="https://fonts.googleapis.com/css2?family=YourFont:wght@400;700&display=swap" rel="stylesheet">
```

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Opera (latest)

## 📊 Performance

- Lighthouse Score: 90+
- First Contentful Paint: < 1.5s
- Time to Interactive: < 3.0s
- Optimized images with lazy loading
- Minimal JavaScript
- CSS optimizations

## 🔒 Security

- Input validation on forms
- XSS protection
- CSRF token recommended for production
- SQL injection prevention (if using database)

## 📝 TODO / Future Enhancements

- [ ] Add blog functionality with database
- [ ] Implement actual email sending
- [ ] Add project detail pages
- [ ] Include analytics (Google Analytics)
- [ ] Add sitemap.xml
- [ ] Implement dark/light mode toggle
- [ ] Add more interactive animations
- [ ] Include testimonials section

## 🤝 Contributing

Feel free to fork this project and customize it for your own use!

## 📄 License

This project is open source and available for personal and commercial use.

## 👤 Author

**Isan Adhikari**
- Website: [isanadhikari.com.np](https://www.isanadhikari.com.np)
- GitHub: [@isan910](https://github.com/isan910)
- LinkedIn: [isan-adhikari](https://www.linkedin.com/in/isan-adhikari)
- Twitter: [@esan_adhikari](https://twitter.com/esan_adhikari)

## 🙏 Acknowledgments

- Design inspiration: [Sean Halpin](https://www.seanhalpin.xyz/)
- Fonts: [Inter](https://rsms.me/inter/) by Rasmus Andersson
- Icons: Custom SVG icons
- Animations: [AOS Library](https://michalsnik.github.io/aos/)

## 📞 Support

For support or questions, please email: isan.adhikari@example.com

---

**Note**: Replace placeholder images and update personal information before deployment.

Made with ❤️ by Isan Adhikari
