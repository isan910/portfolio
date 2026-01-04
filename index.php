<?php
$page_title = "Isan Adhikari - Network & Systems Professional";
$current_page = "home";
include 'includes/header.php';
?>

<main class="main-content">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-wrapper">
                <div class="hero-text">
                    <h1 class="hero-title">
                        Hi. I'm <span class="highlight">Isan.</span>
                    </h1>
                    <h2 class="hero-subtitle">A Network & Systems Professional.</h2>
                    <p class="hero-description">
                        Dedicated professional with hands-on experience in networking, security, and automation. 
                        Passionate about building secure, scalable, and high-performance networks.
                    </p>
                </div>
                <div class="hero-image">
                    <div class="image-container">
                        <img src="assets/images/isan.jpg" alt="Isan Adhikari - Network & Systems Professional" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Work Section -->
    <section class="featured-work">
        <div class="container">
            <div class="work-grid">
                <a href="https://github.com/isan910/cleaning-service" target="_blank" rel="noopener noreferrer" class="work-card" data-aos="fade-up">
                    <div class="work-card-content">
                        <span class="work-tag">WEB DEVELOPMENT</span>
                        <h3 class="work-title">Cleaning Service Platform</h3>
                        <p class="work-description">Online booking system with scheduling and user management</p>
                    </div>
                    <div class="work-card-hover">
                        <span class="view-project">View Project →</span>
                    </div>
                </a>

                <a href="https://github.com/isan910/share-forecasting" target="_blank" rel="noopener noreferrer" class="work-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="work-card-content">
                        <span class="work-tag">DATA ANALYSIS</span>
                        <h3 class="work-title">Share Forecasting System</h3>
                        <p class="work-description">Stock market prediction using ML algorithms and visualization</p>
                    </div>
                    <div class="work-card-hover">
                        <span class="view-project">View Project →</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- In Progress Section -->
    <section class="in-progress-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">In Progress.</h2>
            <p class="section-description" data-aos="fade-up" data-aos-delay="50">
                Upcoming projects focused on network security and IoT protection.
            </p>
            <div class="progress-grid">
                <a href="projects" class="progress-card" data-aos="fade-up" data-aos-delay="100">
                    <span class="progress-tag">SECURITY</span>
                    <h3 class="progress-title">Intrusion Detection System</h3>
                    <p style="font-size: 14px; color: var(--color-text-secondary); margin-top: 8px;">Network traffic analysis using Python and Wireshark</p>
                </a>
                <a href="projects" class="progress-card" data-aos="fade-up" data-aos-delay="150">
                    <span class="progress-tag">NETWORK SECURITY</span>
                    <h3 class="progress-title">Firewall Rule Optimization</h3>
                    <p style="font-size: 14px; color: var(--color-text-secondary); margin-top: 8px;">Optimize firewall rules for SME networks</p>
                </a>
                <a href="projects" class="progress-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="progress-tag">IOT SECURITY</span>
                    <h3 class="progress-title">IoT Device Security</h3>
                    <p style="font-size: 14px; color: var(--color-text-secondary); margin-top: 8px;">Securing IoT devices in home networks</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Skills & Expertise</h2>
            <div class="skills-grid">
                <div class="skill-category" data-aos="fade-up">
                    <h3>Networking & Security</h3>
                    <ul class="skill-list">
                        <li>IP Addressing & Subnetting</li>
                        <li>Switching & Routing (CCNA)</li>
                        <li>Firewalls & Security Policies</li>
                        <li>VPN Configuration</li>
                        <li>Wireless LAN</li>
                        <li>Network Automation</li>
                        <li>NAT, QoS, Network Virtualization</li>
                    </ul>
                </div>
                <div class="skill-category" data-aos="fade-up" data-aos-delay="100">
                    <h3>Programming & Development</h3>
                    <ul class="skill-list">
                        <li>MERN Stack (MongoDB, Express.js, React, Node.js)</li>
                        <li>RESTful APIs</li>
                        <li>Web Development</li>
                        <li>Database Management</li>
                        <li>Git & GitHub</li>
                    </ul>
                </div>
                <div class="skill-category" data-aos="fade-up" data-aos-delay="200">
                    <h3>Professional Skills</h3>
                    <ul class="skill-list">
                        <li>Network Troubleshooting</li>
                        <li>Performance Optimization</li>
                        <li>Analytical Problem-Solving</li>
                        <li>Client Communication</li>
                        <li>Team Collaboration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Let's work together</h2>
                <p>Have a project in mind? Let's create something amazing together.</p>
                <a href="contact" class="btn btn-primary">Get In Touch</a>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
