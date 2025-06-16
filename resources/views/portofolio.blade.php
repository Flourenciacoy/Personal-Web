@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="container">
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('portfolio') }}" class="nav-link active">Portfolio</a>
                <a href="{{ route('achievement') }}" class="nav-link">Achievement</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Work</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="portfolio-image">
                        <img src="{{ asset('Asset/Ldk.jpg') }}" alt="LDK OSIS 2023">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>LDK OSIS 2023</h3>
                                <p>Leadership Development Training</p>
                                <a href="#" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-image">
                        <img src="{{ asset('Asset/Pasklib.jpg') }}" alt="Paskibra 2023">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Paskibra 2023</h3>
                                <p>Flag Raising Ceremony</p>
                                <a href="#" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-image">
                        <img src="{{ asset('Asset/Classmeet.jpg') }}" alt="Class Meeting">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Class Meeting</h3>
                                <p>Inter-class Competition</p>
                                <a href="#" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-image">
                        <img src="{{ asset('Asset/bph.jpg') }}" alt="Binusian Plant's Hope">
                        <div class="portfolio-overlay">
                            <div class="portfolio-content">
                                <h3>Binusian Plant's Hope</h3>
                                <p>Environmental Initiative</p>
                                <a href="#" class="btn btn-secondary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portfolio-cta" data-aos="fade-up">
                <a href="#" class="btn">See More Projects</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Flourencia Calista. All rights reserved.</p>
        </div>
    </footer>

    <style>
        /* Portfolio Section */
        .portfolio {
            background: var(--background-alt);
            padding: 100px 0;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .portfolio-item {
            position: relative;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow-md);
            transition: all var(--transition-speed) ease;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-lg);
        }

        .portfolio-image {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
        }

        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform var(--transition-speed) ease;
        }

        .portfolio-item:hover .portfolio-image img {
            transform: scale(1.1);
        }

        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(255, 105, 180, 0.9), rgba(199, 21, 133, 0.9));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
        }

        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }

        .portfolio-content {
            text-align: center;
            color: white;
            padding: 2rem;
            transform: translateY(20px);
            transition: transform var(--transition-speed) ease;
        }

        .portfolio-item:hover .portfolio-content {
            transform: translateY(0);
        }

        .portfolio-content h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .portfolio-content p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .portfolio-cta {
            text-align: center;
            margin-top: 3rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .portfolio-grid {
                grid-template-columns: 1fr;
            }

            .portfolio-image {
                height: 250px;
            }
        }
    </style>
@endsection