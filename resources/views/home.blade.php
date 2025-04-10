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

    <div id="header">
        <div class="container">
            <div class="header">
                <p>Undergraduate Computer Science</p>
                <h1>Hi, I'm <span>Flourencia Calista Octavia Yuwono</span><br>from Indonesia</h1>
            </div>
        </div>
    </div>

    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="{{ asset('Asset/Profile Pict SVG.svg') }}" alt="Profile Picture">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-tittle">About Me</h1>
                    <p>Hello my name is Flourencia, I'm an undergraduate from Bina Nusantara University. I am from Sidoarjo, East Java, Indonesia.
                        I'm interested in programming since I was in high school. And I decided to continue my journey as a Full Stack developer.
                        <br>Below I show more things about me: 
                    </p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('Skills', event)">Skills</p>
                        <p class="tab-links" onclick="opentab('Experience', event)">Experience</p>
                        <p class="tab-links" onclick="opentab('Educations', event)">Educations</p>
                    </div>
                    <div class="tab-contents active-tab" id="Skills">
                        <ul>
                            <li><span>UI/UX</span><br>Designing web/app interfaces</li>
                            <li><span>Web Development</span><br>Web/app Development</li>
                            <li><span>Language</span><br>I can speak multiple languages such as English, Korean, and Indonesian</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Experience">
                        <ul>
                            <li><span>2017-2018</span><br>Pengurus OSIS Bidang Kesenian</li>
                            <li><span>2018-2019</span><br>Pengurus OSIS Bidang Sosial</li>
                            <li><span>2020-2021</span><br>Pengurus OSIS Bidang Kerohanian</li>
                            <li><span>2021-2022</span><br>Pengurus inti OSIS</li>
                            <li><span>August-Oktober 2022</span><br>Panitia Inti Festival Pelajar Nusantara</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="Educations">
                        <ul>
                            <li><span>2011-2017</span><br>SD</li>
                            <li><span>2017-2020</span><br>SMP</li>
                            <li><span>2020-2023</span><br>SMA</li>
                            <li><span>2023-Present</span><br>Bina Nusantara University</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
            <p>Copyright © Flourencia. 2023</p>
    </div>
@endsection