@extends('layouts.app')

@section('content')
    <nav>
        <img src="{{ asset('Asset/logotf-removebg-preview.png') }}" alt="logo" class="logo">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('achievement') }}">Achievement</a></li>
            <li><a href="{{ route('porto') }}">Portfolio</a></li>
            <li><a href="{{ route('contact') }}">Contacts</a></li>    
        </ul>
        <i class="fa-solid fa-bars"></i>
    </nav>

    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-tittle">Contact Me</h1>
                    <p><i class="fa-regular fa-envelope"></i> calistaflouren21@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i> +62895341740988</p>
                    <div class="social-icons">
                        <a href="https://instagram.com/flouclsta_?igshid=NGVhN2U2NjQ0Yg=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/62895341740988"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="https://www.linkedin.com/in/flourencia-yuwono-775554289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://line.me/ti/p/X2m1NtaITq"><i class="fa-brands fa-line"></i></a>
                    </div>
                    <a href="{{ asset('Asset/Flourencia.pdf') }}" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                <form action="{{ url('/contact') }}" method="POST"> <!-- Update form action -->
                        @csrf <!-- CSRF protection -->
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                    @if(session('success'))
                        <script>
                            alert("Thanks for contacting me! I will reply to you as soon as possible.");
                        </script>
                    @endif
                </div>
            </div>
        </div>
    <div class="copyright">
            <p>Copyright © Flourencia. 2023</p>
    </div>
@endsection