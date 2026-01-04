<?php
$page_title = "About - Isan Adhikari";
$current_page = "about";
include 'includes/header.php';
?>

<main class="main-content about-page">
    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="container">
            <div class="about-hero-content" data-aos="fade-up">
                <h1 class="page-title">About Me</h1>
                <p class="page-subtitle">
                    Network & Systems Professional passionate about building secure, scalable, and high-performance networks
                </p>
            </div>
        </div>
    </section>

    <!-- About Content Section -->
    <section class="about-content-section">
        <div class="container">
            <div class="about-grid">
                <div class="about-text" data-aos="fade-right">
                    <h2 class="section-title">Hello! I'm Isan Adhikari</h2>
                    <div class="about-description">
                        <p>
                            I'm a dedicated and detail-oriented Network & Systems professional with hands-on experience 
                            in networking, security, and automation. Proficient in configuring and troubleshooting network 
                            infrastructure, including routers, switches, and firewalls.
                        </p>
                        <p>
                            Well-versed in Cisco networking principles (CCNA), optical fiber networks, and MERN stack 
                            development. I'm passionate about building secure, scalable, and high-performance networks 
                            that drive business success and ensure seamless connectivity.
                        </p>
                        <p>
                            With strong problem-solving skills and a commitment to continuous learning, I'm eager to 
                            apply my technical expertise in dynamic environments and contribute to innovative networking 
                            solutions. I believe in staying current with the latest technologies and best practices in 
                            network infrastructure and security.
                        </p>
                    </div>
                </div>
                
                <div class="about-image" data-aos="fade-left">
                    <div class="image-wrapper">
                        <img src="assets/images/hero-bg.jpg" alt="Isan Adhikari" class="profile-image">
                        <div class="image-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Experience</h2>
            <div class="certificates-grid">
                <!-- Experience 1 -->
                <div class="certificate-box" data-aos="fade-up">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h3 class="cert-title">Operations Coordinator</h3>
                    <p class="cert-details"><span class="cert-year">Jul 2024 - Present</span> • Part-time · Hybrid</p>
                    <p style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <strong>Tech Box Tec</strong><br>
                        Sukedhara Kathmandu<br><br>
                        <strong>Skills:</strong> ICT Security · Network Installation · Network Services · Web Development
                    </p>
                </div>

                <!-- Experience 2 -->
                <div class="certificate-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <circle cx="12" cy="12" r="6"></circle>
                            <circle cx="12" cy="12" r="2"></circle>
                        </svg>
                    </div>
                    <h3 class="cert-title">Technical Assistant</h3>
                    <p class="cert-details"><span class="cert-year">May 2024 - Oct 2024</span> • Full-time</p>
                    <p style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <strong>Subisu Cablenet</strong><br>
                        Kathmandu<br><br>
                        Provided L2/L3 networking support for enterprise clients. Troubleshot and resolved complex network connectivity issues. Configured routers, switches, and firewalls for secure data transmission. Assisted in network automation and implementation of security best practices.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section class="education-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Education</h2>
            <div class="education-grid">
                <div class="education-card" data-aos="fade-up">
                    <h3 class="education-title">Bachelor in Computer Application (BCA)</h3>
                    <p class="education-institution">Nepal Mega College, Kathmandu</p>
                    <p class="education-year">2021 - 2025</p>
                    <p class="education-description">
                        Focused on computer applications, programming, networking, and web technologies.
                    </p>
                </div>
                
                <div class="education-card" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="education-title">+2 Science</h3>
                    <p class="education-institution">Banepa Nist School, Banepa, Kavrepalanchok</p>
                    <p class="education-year">2018 - 2020</p>
                    <p class="education-description">
                        Completed higher secondary education with focus on science and mathematics.
                    </p>
                </div>
                
                <div class="education-card" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="education-title">SEE (Secondary Education Examination)</h3>
                    <p class="education-institution">Shree Mahankhal Secondary School, Bela, Kavrepalanchok</p>
                    <p class="education-year">2005 - 2018</p>
                    <p class="education-description">
                        Completed secondary school education with strong academic foundation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">What I Value</h2>
            <div class="values-grid">
                <div class="value-card" data-aos="fade-up">
                    <div class="value-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="value-title">Clean Code</h3>
                    <p class="value-description">
                        Writing maintainable, scalable, and well-documented code that others can understand and build upon.
                    </p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                    </div>
                    <h3 class="value-title">User Experience</h3>
                    <p class="value-description">
                        Creating intuitive interfaces that prioritize user needs and provide delightful experiences.
                    </p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h3 class="value-title">Performance</h3>
                    <p class="value-description">
                        Optimizing applications for speed and efficiency to deliver the best possible performance.
                    </p>
                </div>
                
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="value-title">Collaboration</h3>
                    <p class="value-description">
                        Working effectively with teams, sharing knowledge, and contributing to collective success.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Interested in working together?</h2>
                <p>I'm always open to discussing new projects and opportunities.</p>
                <a href="contact.php" class="btn btn-primary">Let's Talk</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
