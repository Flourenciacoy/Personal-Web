@extends('layouts.app')

@section('content')
<nav class="navbar">
    <div class="container">
        <div class="nav-links">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <a href="{{ route('about') }}" class="nav-link active">About</a>
            <a href="{{ route('portfolio') }}" class="nav-link">Portfolio</a>
            <a href="{{ route('achievement') }}" class="nav-link">Achievement</a>
            <a href="{{ route('contact') }}" class="nav-link">Contact</a>
        </div>
    </div>
</nav>

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
                        <p class="tab-link" data-tab="skills">Skills</p>
                        <p class="tab-link" data-tab="experience">Experience</p>
                        <p class="tab-link" data-tab="education">Education</p>
                    </div>
                    <div class="tab-contents">
                        <div id="skills" class="tab-content">
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

<footer>
    <div class="container">
        <p>&copy; 2024 Flourencia Calista. All rights reserved.</p>
    </div>
</footer>

<style>
/* About Section */
.about {
    background: var(--bg-color);
    position: relative;
    padding: 100px 0;
}

.about-content {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 4rem;
    align-items: center;
    margin-top: 50px;
}

.profile-image-wrapper {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.profile-image {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    z-index: 2;
    border: 4px solid var(--primary-light);
    box-shadow: var(--shadow-md);
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
    color: var(--text-secondary);
}

/* Tab Styles */
.tab-container {
    margin-top: 2rem;
}

.tab-links {
    display: flex;
    margin-bottom: 1.5rem;
    gap: 2rem;
    border-bottom: 1px solid rgba(255, 105, 180, 0.2);
}

.tab-link {
    cursor: pointer;
    padding-bottom: 0.5rem;
    font-size: 1.2rem;
    font-weight: 500;
    color: var(--text-color);
    position: relative;
    transition: all 0.3s ease;
}

.tab-link::after {
    content: '';
    width: 0;
    height: 3px;
    background: var(--primary-color);
    position: absolute;
    left: 0;
    bottom: 0;
    transition: width 0.3s ease;
}

.tab-link.active-link {
    color: var(--primary-color);
}

.tab-link.active-link::after {
    width: 100%;
}

.tab-contents {
    margin-top: 1.5rem;
}

.tab-content {
    display: none !important;
}

.tab-content.active-tab {
    display: block !important;
}

/* Skills List */
.skills-list {
    list-style: none;
    padding: 0;
}

.skills-list li {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    color: var(--text-secondary);
}

.skills-list li i {
    font-size: 1.2rem;
    color: var(--primary-color);
    margin-right: 10px;
}

/* Experience & Education */
.experience-item, .education-item {
    margin-bottom: 1.5rem;
}

.experience-item h3, .education-item h3 {
    font-size: 1.3rem;
    color: var(--text-color);
    margin-bottom: 0.5rem;
}

.experience-item p, .education-item p {
    font-size: 1rem;
    color: var(--text-secondary);
    margin-bottom: 0.5rem;
}

.experience-item ul {
    list-style: disc;
    margin-left: 20px;
    color: var(--text-secondary);
}

.experience-item ul li {
    margin-bottom: 5px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .about {
        padding: 60px 0;
    }
    
    .about-content {
        grid-template-columns: 1fr;
        gap: 30px;
    }
    
    .profile-image-wrapper {
        margin-bottom: 30px;
    }
    
    .tab-links {
        gap: 1rem;
        font-size: 1rem;
    }
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tablinks = document.querySelectorAll('.tab-link');
        const tabcontents = document.querySelectorAll('.tab-content');
        console.log('tablinks (on DOMContentLoaded):', tablinks);
        console.log('tabcontents (on DOMContentLoaded):', tabcontents);

        function opentab(tabName) {
            console.log('opentab called with:', tabName);
            tablinks.forEach(link => {
                link.classList.remove('active-link');
            });
            tabcontents.forEach(content => {
                content.classList.remove('active-tab');
            });

            const targetTabLink = document.querySelector(`.tab-link[data-tab="${tabName}"]`);
            const targetTabContent = document.getElementById(tabName);
            console.log('targetTabLink:', targetTabLink);
            console.log('targetTabContent:', targetTabContent);

            if (targetTabLink && targetTabContent) {
                targetTabLink.classList.add('active-link');
                targetTabContent.classList.add('active-tab');
            }
        }

        // Attach click event listeners
        tablinks.forEach(link => {
            link.addEventListener('click', function(event) {
                const tabName = this.getAttribute('data-tab');
                opentab(tabName);
            });
        });

        // Explicitly activate the 'skills' tab on page load
        opentab('skills');
    });
</script>
@endsection 