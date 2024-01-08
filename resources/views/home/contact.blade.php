@extends('layouts.home.master')

@section('title')
    Stylesphere
@endsection

@section('content')

    <div class="contact-area d-flex align-items-center">
        <div class="google-map">
            <div id="googleMap"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2707152627095!2d109.24638807442766!3d-7.435267673253031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655f3e70bf12ab%3A0x4b38633b0fcfeaf8!2sIT%20Telkom%20Purwokerto!5e0!3m2!1sid!2sid!4v1702830372692!5m2!1sid!2sid"
                    width="750" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-info">
            <h2>Cara Menghubungi kami</h2>
            <div class="contact-address mt-50">
                <p><span>Alamat kantor : <p> JL.DI Panjaitan No.128, Karangreja, Purwokerto Kidul, Kecamatan Purwokerto
                            Selatan, Kabupaten Banyumas, Jawa Tengah 53147</p>
                        <p><span>Email : <p>Untuk Pertanyaan Umum :</span> info@StyleSphere.com</p>
                        <p>Dukungan Pelanggan :
                    </span> support@StyleSphere.com</p>
                <p>Email Kami :<a href="mailto:stylesphere@gmail.com"> stylesphere@gmail.com</a></p>
                <p><span>Telepon : <p>Layanan Pelanggan : </span> +62 895-2507-0703</p>
                <p>Jam kerja : </span> Senin-Jumat, 08.00-17.00 WIB</p>
            </div>
        </div>
    </div>
    
@endsection
