@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/customDetailArtikel.css') }}">
@endsection

@section('main')
    <!-- Navbar -->
    @php
        $menu = 'artikel';
    @endphp
    @include('partials.navbar')

    <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="bi bi-house"></i> Beranda</a>
        <span class="breadcrumb-separator">&gt;</span>
        <a href="/artikel" class="breadcrumb-item">Artikel</a>
        <span class="breadcrumb-separator">&gt;</span>
        <span class="breadcrumb-item active">Detail Artikel</span>
    </div>

    <div class="article">
        <h1>Paket Wisata Solo di Kampoeng Batik Lawean</h1>
        <div class="article-meta">
            <i class="bi bi-calendar2-week"></i>
            <span>12 Juni 2024 | 14:00</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-eye"></i>
            <span>37 Orang Melihat</span>
        </div>
        <p>
            Nikmati pengalaman wisata yang memukau di Kampung Batik Lawean, Solo. Berlokasi di pusat kota Solo, kampung ini menawarkan pengalaman unik dalam mengeksplorasi seni dan budaya batik Jawa. Paket wisata ini memungkinkan Anda untuk menyaksikan langsung proses pembuatan batik secara tradisional, belajar mengenai makna dan simbol di balik setiap motif batik, serta menikmati keindahan arsitektur tradisional Jawa yang masih terjaga dengan baik.
        </p>
        <img src="img/detail.jpg" alt="Article Image" class="article-image">
        <p>Di Kampung Batik Lawean, Anda dapat melihat secara langsung proses pembuatan batik yang memukau. Para pengrajin lokal dengan telaten menghias kain putih dengan malam lilin, menciptakan motif-motif yang indah dan bermakna. Setiap langkah dalam proses ini diwariskan secara turun-temurun, menjadikan setiap karya batik sebagai perpaduan unik antara tradisi dan inovasi. Tak hanya itu, di kampung ini Anda dapat berinteraksi langsung dengan para seniman batik, belajar tentang sejarah dan filosofi di balik setiap corak yang mereka buat.
        </p>
        <p>
            Selain menjadi pusat produksi batik, Kampung Batik Lawean juga menyajikan arsitektur khas Jawa yang menawan. Bangunan-bangunan bersejarah dengan detail ukiran kayu yang halus dan atap joglo menjadikan suasana kampung ini begitu khas dan memesona. Jalan-jalan kecil yang dilapisi batu bata dan pepohonan rindang menambah nuansa tenang dan sejuk saat menjelajahi kampung ini. Pengalaman mengunjungi Kampung Batik Lawean bukan hanya sekadar melihat, tetapi juga merasakan kehidupan budaya Jawa yang kaya dan berwarna.
        </p>
{{--
        <h2>Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Arcu vitae aliquet ipsum odio accumsan. Hac euismod massa egestas
            penatibus ornare molestie placerat neque consectetur. Nec sed ipsum sem pulvinar sagittis ultrices. Orci
            pharetra porttitor gravida pellentesque dui libero lectus lorem.</p> --}}
        <div class="quote-box">
            <i class="fas fa-quote-right" id="icon-quote"></i>
            <p>"Batik adalah bahasa yang merajut sejarah dan identitas, menceritakan kekayaan budaya melalui setiap helai motifnya."</p>
            <span>- Sentuhan Kainyang</span>
        </div>
        <br>
        <h2>Pengenalan Batik</h2>
        <div class="gambarlain">
            <img src="img/detail1.jpg" alt="Article Image 2" class="article-image">
            <img src="img/detail2.jpg" alt="Article Image 2" class="article-image">
        </div>
        <p>Pengenalan batik kepada wisatawan adalah langkah penting dalam memperkenalkan kekayaan budaya Indonesia yang khas. Batik Laweyan, khususnya, mempesona dengan pola-pola yang sarat makna dan keindahan desainnya. Di tengah kunjungan mereka, para wisatawan dapat memahami proses pembuatan batik secara langsung, dari proses melukis malam hingga pewarnaan dan pengolahan akhir. Mereka tidak hanya menyaksikan keterampilan para pengrajin lokal yang mahir, tetapi juga merasakan nuansa sejarah yang terpancar dari setiap motif yang tercipta. Hal ini memberi kesempatan bagi wisatawan untuk lebih menghargai keindahan seni tradisional Indonesia dan mengenal lebih dalam tentang nilai-nilai budaya yang diwariskan melalui batik Laweyan.</p>
    </div>

    <div class="related-articles">
        <h3>Artikel Lainnya</h3>
        <hr>
        <div class="related-articles-grid">
            <div class="related-article">
                <img src="img/artikel-lain1.jpg" alt="Related Article 1">
                <div class="text-content-article">
                    <p>Fasen Pengembangan Kampoeng Batik Lawean</p>
                    <small>
                        02 Juni 2024 | 14:00
                    </small>
                </div>
            </div>
            <div class="related-article">
                <img src="img/artikel-lain2.jpg" alt="Related Article 2">
                <div class="text-content-article">
                    <p>Fasen Pengembangan Kampoeng Batik Lawean</p>
                    <small>
                        02 Juni 2024 | 14:00
                    </small>
                </div>
            </div>
            <div class="related-article">
                <img src="img/artikel-lain2.jpg" alt="Related Article 2">
                <div class="text-content-article">
                    <p>Fasen Pengembangan Kampoeng Batik Lawean</p>
                    <small>
                        02 Juni 2024 | 14:00
                    </small>
                </div>
            </div>
            <div class="related-article">
                <img src="img/artikel-lain1.jpg" alt="Related Article 1">
                <div class="text-content-article">
                    <p>Fasen Pengembangan Kampoeng Batik Lawean</p>
                    <small>
                        02 Juni 2024 | 14:00
                    </small>
                </div>
            </div>
            <div class="related-article">
                <img src="img/artikel-lain1.jpg" alt="Related Article 1">
                <div class="text-content-article">
                    <p>Fasen Pengembangan Kampoeng Batik Lawean</p>
                    <small>
                        02 Juni 2024 | 14:00
                    </small>
                </div>
            </div>
            <div class="related-article">
                <img src="img/artikel-lain2.jpg" alt="Related Article 2">
                <div class="text-content-article">
                    <p>Fasen Pengembangan Kampoeng Batik Lawean</p>
                    <small>
                        02 Juni 2024 | 14:00
                    </small>
                </div>
            </div>
        </div>
    </div>
@endsection
