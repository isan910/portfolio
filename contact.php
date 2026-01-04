<?php
$page_title = "Contact - Isan Adhikari";
$current_page = "contact";
include 'includes/header.php';

// Handle form submission
$form_submitted = false;
$form_errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation
    if (empty($name)) {
        $form_errors[] = "Name is required";
    }
    if (empty($email)) {
        $form_errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors[] = "Invalid email format";
    }
    if (empty($subject)) {
        $form_errors[] = "Subject is required";
    }
    if (empty($message)) {
        $form_errors[] = "Message is required";
    }
    
    if (empty($form_errors)) {
        // Here you would typically send the email or save to database
        // For now, we'll just set a success flag
        $form_submitted = true;
        
        // Example: Send email (uncomment and configure)
        /*
        $to = "your-email@example.com";
        $email_subject = "Portfolio Contact: " . $subject;
        $email_body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";
        mail($to, $email_subject, $email_body, $headers);
        */
    }
}
?>

<main class="main-content contact-page">
    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-hero-content" data-aos="fade-up">
                <h1 class="page-title">Let's Connect</h1>
                <p class="page-subtitle">
                    Have a question or want to work together? I'd love to hear from you.
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Content Section -->
    <section class="contact-content-section">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info" data-aos="fade-right">
                    <h2 class="section-title">Get In Touch</h2>
                    <p class="contact-intro">
                        I'm currently available for freelance work and new opportunities. 
                        Whether you have a question, a project idea, or just want to say hello, 
                        feel free to reach out!
                    </p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>Email</h3>
                                <a href="mailto:isan.adh123@gmail.com">isan.adh123@gmail.com</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>Phone</h3>
                                <a href="tel:+9779840244682">+977 9840244682</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"></path>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>WhatsApp</h3>
                                <a href="https://wa.me/9779840244682" target="_blank">+977 9840244682</a>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="method-content">
                                <h3>Location</h3>
                                <p>Lokanthali, Bhaktapur, Nepal</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="cv-download-section">
                        <h3>Download My CV</h3>
                        <p>Interested in learning more about my professional background and experience?</p>
                        <a href="assets/cv/cv.pdf" download="Isan_Adhikari_CV.pdf" type="application/pdf" class="btn btn-primary btn-download">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                            Download CV
                        </a>
                    </div>
                    
                    <div class="social-links">
                        <h3>Follow Me</h3>
                        <div class="social-icons">
                            <a href="https://github.com/isan910" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="GitHub">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                            </a>
                            <a href="https://www.linkedin.com/in/isan-adhikari" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="LinkedIn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                            <a href="https://twitter.com/esan_adhikari" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Twitter">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                </svg>
                            </a>
                            <a href="https://instagram.com/esanadhikari" target="_blank" rel="noopener noreferrer" class="social-icon" aria-label="Instagram">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form-wrapper" data-aos="fade-left">
                    <?php if ($form_submitted): ?>
                        <div class="success-message">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <h3>Thank you for reaching out!</h3>
                            <p>I've received your message and will get back to you as soon as possible.</p>
                            <button onclick="location.reload()" class="btn btn-secondary">Send Another Message</button>
                        </div>
                    <?php else: ?>
                        <?php if (!empty($form_errors)): ?>
                            <div class="error-message">
                                <ul>
                                    <?php foreach ($form_errors as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <form class="contact-form" method="POST" action="" id="contactForm">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    name="name" 
                                    class="form-control" 
                                    placeholder="Your name"
                                    value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>"
                                    required
                                >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    class="form-control" 
                                    placeholder="your.email@example.com"
                                    value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>"
                                    required
                                >
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input 
                                    type="text" 
                                    id="subject" 
                                    name="subject" 
                                    class="form-control" 
                                    placeholder="Project inquiry"
                                    value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>"
                                    required
                                >
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea 
                                    id="message" 
                                    name="message" 
                                    class="form-control" 
                                    rows="6" 
                                    placeholder="Tell me about your project..."
                                    required
                                ><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-block">
                                Send Message
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Availability Section -->
    <section class="availability-section">
        <div class="container">
            <div class="availability-content" data-aos="fade-up">
                <div class="availability-status">
                    <span class="status-indicator"></span>
                    <span class="status-text">Currently Available for Freelance</span>
                </div>
                <p class="availability-description">
                    I'm open to discussing new projects, creative ideas, or opportunities to be part of your vision.
                </p>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
