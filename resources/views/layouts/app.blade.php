<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Website</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://kit.fontawesome.com/2ab29f499f.js" crossorigin="anonymous"></script>
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Add AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        :root {
            --primary-color: #ff69b4;
            --primary-light: #ffb6c1;
            --primary-dark: #c71585;
            --secondary-color: #1a1a1a;
            --text-color: #333333;
            --background-color: #ffffff;
            --background-alt: #faf0f5;
            --transition-speed: 0.3s;
            --gradient-primary: linear-gradient(135deg, #ff69b4 0%, #c71585 100%);
            --gradient-hover: linear-gradient(135deg, #c71585 0%, #ff69b4 100%);
            --shadow-sm: 0 2px 4px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Modern Button Styles */
        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            border-radius: 0.5rem;
            background: var(--gradient-primary);
            color: white;
            text-decoration: none;
            transition: all var(--transition-speed) ease;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-hover);
            opacity: 0;
            transition: opacity var(--transition-speed) ease;
            z-index: -1;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .btn:hover::before {
            opacity: 1;
        }

        .btn-secondary {
            background: transparent;
            border: 2px solid var(--primary-color);
            color: var(--primary-color);
        }

        .btn-secondary:hover {
            background: var(--gradient-primary);
            color: white;
            border-color: transparent;
        }

        /* Card Styles */
        .card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: var(--shadow-md);
            transition: all var(--transition-speed) ease;
            border: 1px solid rgba(255, 105, 180, 0.1);
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary-light);
        }

        /* Navigation Styles */
        .nav-link {
            color: var(--text-color);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            transition: all var(--transition-speed) ease;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-primary);
            transition: all var(--transition-speed) ease;
            transform: translateX(-50%);
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        .nav-link.active {
            color: var(--primary-color);
        }

        .nav-link.active::after {
            width: 80%;
        }

        /* Section Styles */
        section {
            padding: 5rem 0;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-align: center;
            position: relative;
            color: var(--secondary-color);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: var(--gradient-primary);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: var(--background-alt);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--gradient-hover);
        }

        /* Animation Classes */
        .fade-up {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease;
        }

        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: all 0.6s ease;
        }

        .scale-in.active {
            opacity: 1;
            transform: scale(1);
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .loading::after {
            content: '';
            width: 50px;
            height: 50px;
            border: 3px solid var(--primary-light);
            border-top-color: var(--primary-color);
            border-radius: 50%;
            animation: loading 0.75s ease infinite;
        }

        @keyframes loading {
            from { transform: rotate(0turn) }
            to { transform: rotate(1turn) }
        }
    </style>
</head>
<body>
    <div class="loading"></div>
    @yield('content')

    <script>
        AOS.init({
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 800, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
        });

        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            const currentPath = window.location.pathname;

            navLinks.forEach(link => {
                // For home route, check if path is exactly '/' or '/home'
                if (link.getAttribute('href') === '{{ route('home') }}' && (currentPath === '/' || currentPath === '/home')) {
                    link.classList.add('active');
                } else if (link.getAttribute('href') !== '{{ route('home') }}' && currentPath.includes(link.getAttribute('href').replace(/\{\{ route\(\'|\'\) \}\}|\//g, '')) && link.getAttribute('href') !== '#') {
                    link.classList.add('active');
                }
            });
        });

        function opentab(tabName, event) {
            console.log(`opentab called for: ${tabName}`);
            const tablinks = document.querySelectorAll('.tab-link');
            const tabcontents = document.querySelectorAll('.tab-content');

            tablinks.forEach(link => {
                link.classList.remove('active-link');
                console.log(`Removed active-link from: ${link.textContent}`);
            });
            tabcontents.forEach(content => {
                content.classList.remove('active-tab');
                console.log(`Removed active-tab from: ${content.id}`);
            });

            event.currentTarget.classList.add('active-link');
            const targetTabContent = document.getElementById(tabName);
            if (targetTabContent) {
                targetTabContent.classList.add('active-tab');
                console.log(`Added active-tab to: ${tabName}`);
                console.log(`Computed display style of ${tabName}: ${window.getComputedStyle(targetTabContent).display}`);
            } else {
                console.error(`Tab content with ID '${tabName}' not found.`);
            }
        }

        // Loading animation
        window.addEventListener('load', () => {
            const loading = document.querySelector('.loading');
            loading.style.opacity = '0';
            setTimeout(() => {
                loading.style.display = 'none';
            }, 500);
        });

        // Intersection Observer for fade-up animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.fade-up, .scale-in').forEach((el) => observer.observe(el));
    </script>
</body>
</html>