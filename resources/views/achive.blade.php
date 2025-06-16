@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="container">
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a>
                <a href="{{ route('achievement') }}" class="nav-link active">Achievement</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <section id="achievement" class="achievement">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Achievements</h2>
            <div class="achievement-grid">
                <div class="achievement-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="achievement-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="achievement-content">
                        <h3>Best Web Developer</h3>
                        <p class="achievement-date">2023</p>
                        <p>Recognized for outstanding web development skills and innovative solutions.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="achievement-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="achievement-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <div class="achievement-content">
                        <h3>UI/UX Design Award</h3>
                        <p class="achievement-date">2023</p>
                        <p>Awarded for exceptional user interface and experience design.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="achievement-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="achievement-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="achievement-content">
                        <h3>Hackathon Winner</h3>
                        <p class="achievement-date">2023</p>
                        <p>First place in the annual coding competition.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
                </div>
                <div class="achievement-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="achievement-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="achievement-content">
                        <h3>Certified Developer</h3>
                        <p class="achievement-date">2023</p>
                        <p>Professional certification in full-stack development.</p>
                        <a href="#" class="btn btn-secondary">Learn More</a>
                    </div>
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
        /* Achievement Section */
        .achievement {
            padding: 100px 0;
            background: var(--bg-color);
        }

        .achievement-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .achievement-item {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .achievement-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .achievement-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .achievement-item:hover::before {
            opacity: 0.05;
        }

        .achievement-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
        }

        .achievement-content {
            position: relative;
            z-index: 2;
        }

        .achievement-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .achievement-date {
            color: var(--primary-color);
            font-weight: 500;
            margin-bottom: 15px;
        }

        .achievement-content p {
            color: var(--text-secondary);
            margin-bottom: 20px;
            line-height: 1.6;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .achievement {
                padding: 60px 0;
            }
            
            .achievement-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
        }
    </style>
@endsection