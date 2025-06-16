@extends('layouts.app')

@section('content')
    <nav class="navbar">
        <div class="container">
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link">Home</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a>
                <a href="{{ route('achievement') }}" class="nav-link">Achievement</a>
                <a href="{{ route('contact') }}" class="nav-link active">Contact</a>
            </div>
        </div>
    </nav>

    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Get in Touch</h2>
            <div class="contact-grid">
                <div class="contact-info" data-aos="fade-right">
                    <div class="contact-card">
                        <i class="fas fa-envelope"></i>
                        <h3>Email</h3>
                        <p>flourenciacalista@gmail.com</p>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-phone"></i>
                        <h3>Phone</h3>
                        <p>+62 812-3456-7890</p>
                    </div>
                    <div class="contact-card">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>Location</h3>
                        <p>Sidoarjo, Indonesia</p>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="100">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="200">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" data-aos="zoom-in" data-aos-delay="400">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="contact-form" data-aos="fade-left">
                    <form action="{{ route('contact.submit') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn">Send Message</button>
                    </form>
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
        /* Contact Section */
        .contact {
            padding: 100px 0;
            background: var(--bg-color);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            margin-top: 50px;
        }

        .contact-info {
            display: grid;
            gap: 30px;
        }

        .contact-card {
            background: var(--background-alt);
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: var(--shadow-md);
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .contact-card i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .contact-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .contact-card p {
            color: var(--text-secondary);
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: var(--card-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-color);
            font-size: 1.5rem;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-5px);
        }

        .contact-form {
            background: var(--background-alt);
            padding: 50px;
            border-radius: 15px;
            box-shadow: var(--shadow-md);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-color);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 105, 180, 0.4);
            border-radius: 8px;
            background: var(--bg-color);
            color: var(--text-color);
            font-size: 1.1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(255, 105, 180, 0.2);
            outline: none;
        }

        /* Success Message */
        .success-message {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--gradient-primary);
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow-md);
            transform: translateX(120%);
            transition: transform var(--transition-speed) ease;
            z-index: 1000;
        }

        .success-message.show {
            transform: translateX(0);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .contact {
                padding: 60px 0;
            }
            
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            
            .contact-form {
                padding: 30px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('.contact-form form');
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;
                
                // Simulate form submission
                setTimeout(() => {
                    // Reset button state
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    
                    // Show success message
                    const successMessage = document.createElement('div');
                    successMessage.className = 'success-message';
                    successMessage.textContent = 'Message sent successfully!';
                    form.appendChild(successMessage);
                    
                    // Remove success message after 3 seconds
                    setTimeout(() => {
                        successMessage.remove();
                        form.reset();
                    }, 3000);
                }, 1500);
            });
        });
    </script>
@endsection