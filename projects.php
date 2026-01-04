<?php
$page_title = "Projects - Isan Adhikari";
$current_page = "projects";
include 'includes/header.php';
?>

<main class="main-content projects-page">
    <!-- Projects Hero Section -->
    <section class="projects-hero">
        <div class="container">
            <div class="projects-hero-content" data-aos="fade-up">
                <h1 class="page-title">Projects</h1>
                <p class="page-subtitle">
                    Completed and upcoming projects showcasing my skills
                </p>
            </div>
        </div>
    </section>

    <!-- Completed Projects Section -->
    <section class="certificates-grid-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up" style="margin-bottom: 3rem;">Completed Projects</h2>
            <div class="certificates-grid">
                <!-- Project 1: Cleaning Service -->
                <a href="https://github.com/isan910/cleaning-service" target="_blank" rel="noopener noreferrer" class="certificate-box" data-aos="fade-up">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="cert-title">Cleaning Service Platform</h3>
                    <p class="cert-details"><span class="cert-year">2024</span> • Web Application</p>
                    <ul style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <li>Online booking system for cleaning services</li>
                        <li>Service scheduling and management</li>
                        <li>User authentication and profiles</li>
                        <li>Responsive design for mobile and desktop</li>
                    </ul>
                </a>

                <!-- Project 2: Share Forecasting -->
                <a href="https://github.com/isan910/share-forecasting" target="_blank" rel="noopener noreferrer" class="certificate-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="12" y1="20" x2="12" y2="10"></line>
                            <line x1="18" y1="20" x2="18" y2="4"></line>
                            <line x1="6" y1="20" x2="6" y2="16"></line>
                        </svg>
                    </div>
                    <h3 class="cert-title">Share Forecasting System</h3>
                    <p class="cert-details"><span class="cert-year">2024</span> • Data Analysis</p>
                    <ul style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <li>Stock market prediction using ML algorithms</li>
                        <li>Data visualization and trend analysis</li>
                        <li>Historical data processing and forecasting</li>
                        <li>Interactive charts and real-time updates</li>
                    </ul>
                </a>
            </div>
        </div>
    </section>

    <!-- Upcoming Projects Section -->
    <section class="certificates-grid-section" style="padding-top: 0;">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up" style="margin-bottom: 3rem;">Upcoming Projects</h2>
            <div class="certificates-grid">
                <!-- Upcoming Project 1 -->
                <div class="certificate-box" data-aos="fade-up" data-aos-delay="200">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h3 class="cert-title">Intrusion Detection System</h3>
                    <p class="cert-details"><span class="cert-year">In Progress</span> • Security</p>
                    <ul style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <li>Network traffic analysis using Python</li>
                        <li>Packet capturing with Wireshark</li>
                        <li>Real-time threat detection</li>
                        <li>Automated alert system</li>
                    </ul>
                </div>

                <!-- Upcoming Project 2 -->
                <div class="certificate-box" data-aos="fade-up" data-aos-delay="300">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <h3 class="cert-title">Firewall Rule Optimization</h3>
                    <p class="cert-details"><span class="cert-year">Planning</span> • Network Security</p>
                    <ul style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <li>Optimize firewall rules for SME networks</li>
                        <li>Performance monitoring and analysis</li>
                        <li>Security policy implementation</li>
                        <li>Cost-effective security solutions</li>
                    </ul>
                </div>

                <!-- Upcoming Project 3 -->
                <div class="certificate-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="cert-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <h3 class="cert-title">IoT Device Security</h3>
                    <p class="cert-details"><span class="cert-year">Planning</span> • IoT Security</p>
                    <ul style="text-align: left; padding: 0 20px; font-size: 14px; color: var(--color-text-secondary); margin-top: 10px;">
                        <li>Securing IoT devices in home networks</li>
                        <li>Network segmentation for IoT</li>
                        <li>Vulnerability assessment</li>
                        <li>Best practices implementation</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Interested in collaborating?</h2>
                <p>Let's work together on your next networking or security project.</p>
                <a href="contact" class="btn btn-primary">Get In Touch</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>



   