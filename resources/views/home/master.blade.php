@extends('layouts.home.master')

@section('title')
    Stylesphere
@endsection

@section('content')
    <div class="intro">
        <div class="container">
            <h2>Selamat Datang di StyleSphere</h2>
            <h3>Elevate Your Elegance, Define Your Fashion Essence.</h3>
            <p>Kami dengan bangga mempersembahkan koleksi eksklusif yang <br>
                dirancang dengan cinta dan yang dirancang dengan cinta dan <br>
                perhatian untuk memenuhi segala kebutuhan fashion Anda.</p>
            <div class="btn-intro">
                <a href="/contact">Hubungi StyleSphere</a>
            </div>
            <img src="{{ asset('assets/home-1.jpg') }}">
        </div>
    </div>
    <div class="profile" id="profile">
        <div class="container">
            <div class="contents-profile">
                <img class="pict-profile" src="{{ asset('assets/home-5.png') }}">
                <div class="info">
                    <h2>StyleSphere</h2>
                    <p>StyleSphere adalah toko online yang menawarkan pengalaman belanja pakaian terbaik 
                        untuk para pecinta fashion yang selalu ingin tampil trendy dan stylish. Dengan 
                        koleksi yang selalu terkini dan beragam, kami berkomitmen untuk memberikan 
                        pelanggan kami akses ke pakaian fashion terbaru dengan kualitas terbaik. 
                        Konsep Sphere dalam StyleSphere mungkin mencerminkan pandangan bahwa gaya 
                        fashion tidak terbatas dan dapat mencakup segala dimensi. Sphere dapat 
                        diartikan sebagai dunia atau ruang, menyoroti visi merek ini untuk 
                        memberikan pelanggan akses ke pilihan fashion yang luas dan berkualitas 
                        tinggi. Dengan kata lain, StyleSphere ingin menciptakan sebuah dunia 
                        fashion yang mencakup segala aspek gaya hidup yang berkualitas.
                </p>
                </div>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="container">
            <div class="main-wrapper">
                <h3>KATEGORI PRODUK</h3>
                <h2>Kategori Produk</h2>
                <div class="kategori">
                    <div class="category">
                        <img src="{{ asset('assets/home-2.png') }}">
                        <h3>Pants</h3>
                    </div>
                    <div class="category">
                        <img src="{{ asset('assets/home-3.png') }}">
                        <h3>Shirts</h3>
                    </div>
                    <div class="category">
                        <img src="{{ asset('assets/home-4.png') }}">
                        <h3>T-Shirts</h3>
                    </div>
                </div>
            </div>

            <div class="introhalaman">
                <div class="container">
                    <h3 style="margin-top: 150px;">TESTIMONI</h3>
                    <h2>Testimoni Pelanggan</h2>
                </div>
            </div>
            <div class="testimonials-people">
                <img class="petik" src="{{ asset('assets/petik.png') }}">
                <div class="testimonial">
                    <p class="text-testimonial">
                        StyleSphere selalu memiliki tren terbaru 
                        dan membuat saya up-to-date dalam dunia 
                        fashion. Koleksi mereka selalu memukau dan 
                        membuat saya ingin kembali lagi dan lagi.
                    </p>
                    <div class="profile-testimonial">
                        <img src="{{ asset('assets/profileuser1.jpg') }}">
                        <h2>FAUSTINA PUSPAMURTI</h2>
                    </div>
                </div>
                <img class="petik" src="{{ asset('assets/petik.png') }}">
                <div class="testimonial">
                    <p class="text-testimonial">
                        Dengan koleksi terkini dan desain yang selalu 
                        up-to-date, StyleSphere menjadi pilihan utama 
                        saya untuk mengikuti tren fashion. Kualitas 
                        produk mereka sungguh memukau.
                    </p>
                    <div class="profile-testimonial">
                        <img src="{{ asset('assets/profileuser2.jpg') }}">
                        <h2>IMELDA ALFIANA P.D</h2>
                    </div>
                </div>
            </div>
        </div>
        <section id="produk">
            <div class="container">
                <div class="introhalaman">
                    <div class="container">
                        <h3>PRODUK</h3>
                        <h2>Koleksi StyleSphere </h2>
                    </div>
                </div>
                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/1.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/2.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/3.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/4.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/5.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/6.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/7.png') }}">
                    </a>
                </div>

                <div class="col-4">
                    <a href="">
                        <img src="{{ asset('assets/8.png') }}">
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
