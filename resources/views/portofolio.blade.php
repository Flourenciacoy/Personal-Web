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
                    <img src="{{ Asset('Asset/Ldk.jpg') }}" alt="LDK OSIS 2023">
                    <div class="layer">
                        <h3>LDK OSIS 2023</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/Pasklib.jpg') }}" alt="Paskibra 2023">
                    <div class="layer">
                        <h3>Paskibra 2023</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/Classmeet.jpg') }}" alt="Class Meeting">
                    <div class="layer">
                        <h3>Class Meeting</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/bph.jpg') }}" alt="Binusian Plant's Hope">
                    <div class="layer">
                        <h3>Binusian Plant's Hope</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/csa.jpg') }}" alt="CSA Project Freshmen Partner">
                    <div class="layer">
                        <h3>CSA Project</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/dau.jpg') }}" alt="Tanam Pohon - Dau">
                    <div class="layer">
                        <h3>Tanam Pohon - Dau</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/dondar.jpg') }}" alt="Donor Darah">
                    <div class="layer">
                        <h3>Donor Darah</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/dubin2.jpg') }}" alt="Duta Binusian 2420">
                    <div class="layer">
                        <h3>Duta Binusian 2420</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/smartso.jpg') }}" alt="Smart Society 2024">
                    <div class="layer">
                        <h3>Smart Society 2024</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/expo.jpg') }}" alt="Expo Smart Gate">
                    <div class="layer">
                        <h3>Expo Smart Gate</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/fl.jpg') }}" alt="Freshmen Leader">
                    <div class="layer">
                        <h3>Freshmen Leader FYP B28</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/icsc2024.jpg') }}" alt="ICSC 2024">
                    <div class="layer">
                        <h3>ICSC 2024</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/mural.jpg') }}" alt="Murealfi 2024">
                    <div class="layer">
                        <h3>Murealfi 2024</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/thrive.jpg') }}" alt="Thrive Together with TFISC 2024">
                    <div class="layer">
                        <h3>Thrive Together With TFISC 2024</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/sesvent.jpg') }}" alt="SESVENT 2024">
                    <div class="layer">
                        <h3>SESVENT 2024</h3>
                        <a href="#"><i class="fa-solid fa-link"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="{{ Asset('Asset/serti.jpg') }}" alt="FPN x RRI 2023">
                    <div class="layer">
                        <h3>FPN x RRI 2023</h3>
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