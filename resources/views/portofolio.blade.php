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

    <div id="portofolio">
        <div class="container">
            <h1 class="sub-tittle">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="{{ asset('images/Ldk.jpg') }}" alt="LDK OSIS">
                    <div class="layer">
                        <h3>LDK OSIS</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/fotbar.jpg') }}" alt="Kegiatan Sekolah">
                    <div class="layer">
                        <h3>Kegiatan Sekolah</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ asset('images/Classmeet.jpg') }}" alt="Class Meeting">
                    <div class="layer">
                        <h3>Class Meeting</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More</a>
        </div>
    </div>
    <div class="copyright">
            <p>Copyright © Flourencia. 2023</p>
    </div>
@endsection