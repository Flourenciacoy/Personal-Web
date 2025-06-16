@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="container">
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a>
                <a href="{{ route('achievement') }}" class="nav-link">Achievement</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <header id="home" class="hero">
        <div class="container">
            <div class="hero-content" data-aos="fade-up">
                <h1>Flourencia Calista Octavia Yuwono</h1>
                <p class="subtitle">Web Developer & Designer</p>
                <div class="hero-buttons">
                    <a href="{{ route('contact') }}" class="btn">Get in Touch</a>
                    <a href="{{ route('portfolio') }}" class="btn btn-secondary">View My Work</a>
                </div>
            </div>
        </div>
        <div class="hero-background">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </header>

    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">About Me</h2>
            <div class="about-content">
                <div class="profile-image-wrapper" data-aos="fade-right">
                    <div class="profile-image">
                        <img src="{{ asset('Asset/profileflou.jpg') }}" alt="Profile Image">
                    </div>
                    <div class="image-decoration"></div>
                </div>
                <div class="about-text" data-aos="fade-left">
                    <p>Hello! I'm Flourencia, a passionate web developer and designer based in Indonesia. I love creating beautiful and functional websites that provide great user experiences.</p>
                    <p>With a strong foundation in both design and development, I bring ideas to life through clean code and creative solutions.</p>
                    
                    <div class="tab-container">
                        <div class="tab-links">
                            <p class="tab-link active-link" onclick="opentab('skills', event)">Skills</p>
                            <p class="tab-link" onclick="opentab('experience', event)">Experience</p>
                            <p class="tab-link" onclick="opentab('education', event)">Education</p>
                        </div>
                        <div class="tab-contents">
                            <div id="skills" class="tab-content active-tab">
                                <ul class="skills-list">
                                    <li><i class="fas fa-code"></i> HTML5 & CSS3</li>
                                    <li><i class="fab fa-js"></i> JavaScript</li>
                                    <li><i class="fab fa-php"></i> PHP</li>
                                    <li><i class="fab fa-laravel"></i> Laravel</li>
                                    <li><i class="fab fa-react"></i> React</li>
                                    <li><i class="fas fa-paint-brush"></i> UI/UX Design</li>
                                </ul>
                            </div>
                            <div id="experience" class="tab-content">
                                <div class="experience-item">
                                    <h3>Web Developer</h3>
                                    <p>Freelance | 2020 - Present</p>
                                    <ul>
                                        <li>Developed responsive websites for various clients</li>
                                        <li>Implemented modern design trends and best practices</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="education" class="tab-content">
                                <div class="education-item">
                                    <h3>Computer Science</h3>
                                    <p>University of Indonesia | 2018 - 2022</p>
                                    <p>Focus on Web Development and Design</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Services</h2>
            <div class="services-grid">
                <div class="service-item" data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-code"></i>
                    <h3>Web Development</h3>
                    <p>Building responsive and high-performance websites using modern technologies.</p>
                </div>
                <div class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-paint-brush"></i>
                    <h3>UI/UX Design</h3>
                    <p>Creating intuitive and aesthetically pleasing user interfaces and experiences.</p>
                </div>
                <div class="service-item" data-aos="fade-up" data-aos-delay="300">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Responsiveness</h3>
                    <p>Ensuring your website looks great and functions perfectly on all devices.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Flourencia Calista. All rights reserved.</p>
        </div>
    </footer>

    <style>
        /* Navbar Styles */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            box-shadow: var(--shadow-sm);
        }

        .nav-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            padding: 1rem 0;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background: var(--background-alt);
        }

        .hero-content {
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: fadeInUp 1s ease;
        }

        .subtitle {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s backwards;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            animation: fadeInUp 1s ease 0.4s backwards;
        }

        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .shape-1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 150px;
            height: 150px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: 4s;
        }

        /* About Section */
        .about {
            background: white;
            position: relative;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 4rem;
            align-items: center;
        }

        .profile-image-wrapper {
            position: relative;
        }

        .profile-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            overflow: hidden;
            position: relative;
            z-index: 2;
            border: 4px solid var(--primary-light);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-decoration {
            position: absolute;
            top: -20px;
            left: -20px;
            right: -20px;
            bottom: -20px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.1;
            z-index: 1;
            animation: pulse 2s ease-in-out infinite;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-text p {
            margin-bottom: 1.5rem;
        }

        /* Tab Styles */
        .tab-container {
            margin-top: 2rem;
        }

        .tab-links {
            display: flex;
            gap: 2rem;
            margin-bottom: 1.5rem;
        }

        .tab-link {
            cursor: pointer;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all var(--transition-speed) ease;
            position: relative;
        }

        .tab-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--gradient-primary);
            transform: scaleX(0);
            transition: transform var(--transition-speed) ease;
        }

        .tab-link:hover::after,
        .tab-link.active-link::after {
            transform: scaleX(1);
        }

        .tab-content {
            display: none;
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
        }

        .tab-content.active-tab {
            display: block;
            opacity: 1;
        }

        .skills-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            list-style: none;
        }

        .skills-list li {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem;
            border-radius: 0.5rem;
            background: var(--background-alt);
            transition: all var(--transition-speed) ease;
        }

        .skills-list li:hover {
            transform: translateX(5px);
            background: var(--gradient-primary);
            color: white;
        }

        .skills-list li i {
            color: var(--primary-color);
            transition: color var(--transition-speed) ease;
        }

        .skills-list li:hover i {
            color: white;
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background: var(--background-color);
            text-align: center;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-item {
            background: var(--background-alt);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: var(--shadow-sm);
            transition: all var(--transition-speed) ease;
            text-align: center;
        }

        .service-item:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-md);
            background: white;
        }

        .service-item i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .service-item h3 {
            font-size: 1.8rem;
            color: var(--secondary-color);
            margin-bottom: 0.8rem;
        }

        .service-item p {
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background: var(--secondary-color);
            color: white;
            padding: 2rem 0;
            text-align: center;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .about-content {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .profile-image-wrapper {
                margin: 0 auto;
            }

            .tab-links {
                flex-direction: column;
                gap: 1rem;
            }

            .skills-list {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .section-title {
                font-size: 2rem;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .subtitle {
                font-size: 1rem;
            }
        }
    </style>

    <script>
        // Initialize tabs on page load
        document.addEventListener('DOMContentLoaded', function() {
            const firstTab = document.querySelector('.tab-link');
            if (firstTab) {
                opentab('skills', { currentTarget: firstTab });
            }
        });
    </script>
@endsection