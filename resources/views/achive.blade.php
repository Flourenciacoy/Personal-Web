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

    <div id="achievement"> 
        <div class="container">
            <h1 class="sub-tittle">My Achievement</h1> 
            <div class="achivement-list">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Kepengurusan OSIS</h2>
                    <p>Menjadi pengurus Sekbid yang ada di OSIS</p> 
                    <a href="{{ asset('images/serti.jpg') }}">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Olimpiade Sains Nasional OSN </h2>
                    <p>Saya mewakili sekolah dalam OSN 2022-2023 Bidang Biologi dan berhasil lolos ke tingkat Kabupaten</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Cipta Puisi</h2>
                    <p>Saya menjuarai lomba cipta puisi menempati juara ke-2</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-solid fa-trophy"></i>
                    <h2>Bootcamp HIMTI 2023</h2>
                    <p>Saya mendatkan juara 2 membuat website HTML dan CSS</p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
            <p>Copyright © Flourencia. 2023</p>
    </div>
@endsection