<?php
$page_title = "Notes - Isan Adhikari";
$current_page = "notes";
include 'includes/header.php';
?>

<main class="main-content notes-page">
    <!-- Notes Hero Section -->
    <section class="notes-hero">
        <div class="container">
            <div class="notes-hero-content" data-aos="fade-up">
                <h1 class="page-title">Notes</h1>
                <p class="page-subtitle">
                    Thoughts, learnings, and insights from my journey as a developer
                </p>
            </div>
        </div>
    </section>

    <!-- Notes Grid Section -->
    <section class="notes-grid-section">
        <div class="container">
            <div class="notes-grid">
                <!-- Note 1 -->
                <article class="note-card" data-aos="fade-up">
                    <span class="note-date">January 2, 2026</span>
                    <h3 class="note-title">Building Scalable Web Applications</h3>
                    <p class="note-excerpt">
                        Key considerations when architecting applications that need to scale. From database 
                        optimization to caching strategies...
                    </p>
                    <a href="note-detail.php?id=1" class="note-link">
                        Read more
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <div class="note-tags">
                        <span class="tag">Architecture</span>
                        <span class="tag">Performance</span>
                    </div>
                </article>

                <!-- Note 2 -->
                <article class="note-card" data-aos="fade-up" data-aos-delay="100">
                    <span class="note-date">December 28, 2025</span>
                    <h3 class="note-title">Modern CSS Techniques</h3>
                    <p class="note-excerpt">
                        Exploring CSS Grid, custom properties, and new layout methods that make responsive 
                        design easier than ever...
                    </p>
                    <a href="note-detail.php?id=2" class="note-link">
                        Read more
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <div class="note-tags">
                        <span class="tag">CSS</span>
                        <span class="tag">Frontend</span>
                    </div>
                </article>

                <!-- Note 3 -->
                <article class="note-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="note-date">December 20, 2025</span>
                    <h3 class="note-title">API Design Best Practices</h3>
                    <p class="note-excerpt">
                        Lessons learned from building RESTful APIs. How to create intuitive, well-documented 
                        interfaces that developers love...
                    </p>
                    <a href="note-detail.php?id=3" class="note-link">
                        Read more
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <div class="note-tags">
                        <span class="tag">API</span>
                        <span class="tag">Backend</span>
                    </div>
                </article>

                <!-- Note 4 -->
                <article class="note-card" data-aos="fade-up">
                    <span class="note-date">December 15, 2025</span>
                    <h3 class="note-title">The Power of TypeScript</h3>
                    <p class="note-excerpt">
                        Why TypeScript has become essential for large-scale JavaScript applications. Type 
                        safety, better tooling, and improved developer experience...
                    </p>
                    <a href="note-detail.php?id=4" class="note-link">
                        Read more
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <div class="note-tags">
                        <span class="tag">TypeScript</span>
                        <span class="tag">JavaScript</span>
                    </div>
                </article>

                <!-- Note 5 -->
                <article class="note-card" data-aos="fade-up" data-aos-delay="100">
                    <span class="note-date">December 10, 2025</span>
                    <h3 class="note-title">Docker for Developers</h3>
                    <p class="note-excerpt">
                        A practical guide to containerization. How Docker simplifies development environments 
                        and deployment processes...
                    </p>
                    <a href="note-detail.php?id=5" class="note-link">
                        Read more
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <div class="note-tags">
                        <span class="tag">Docker</span>
                        <span class="tag">DevOps</span>
                    </div>
                </article>

                <!-- Note 6 -->
                <article class="note-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="note-date">December 5, 2025</span>
                    <h3 class="note-title">React Hooks Deep Dive</h3>
                    <p class="note-excerpt">
                        Understanding React Hooks beyond the basics. Custom hooks, performance optimization, 
                        and common patterns...
                    </p>
                    <a href="note-detail.php?id=6" class="note-link">
                        Read more
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                    <div class="note-tags">
                        <span class="tag">React</span>
                        <span class="tag">Frontend</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content" data-aos="fade-up">
                <h2>Subscribe to Updates</h2>
                <p>Get notified when I publish new notes and articles</p>
                <form class="newsletter-form" id="newsletterForm">
                    <input type="email" placeholder="your.email@example.com" required class="newsletter-input">
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
