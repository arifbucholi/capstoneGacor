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
            Lorem ipsum dolor sit amet consectetur. Arcu vitae aliquet ipsum odio accumsan. Hac euismod massa egestas
            penatibus ornare molestie placerat neque consectetur. Nec sed ipsum sem pulvinar sagittis ultrices. Orci
            pharetra porttitor gravida pellentesque dui libero lectus lorem.
        </p>
        <img src="img/detail.jpg" alt="Article Image" class="article-image">
        <p>Lorem ipsum dolor sit amet consectetur. Sed nisl nibh ultricies sagittis sem penatibus laoreet. Orci luctus
            ultrices et enim turpis enim sem egestas. Augue faucibus scelerisque tristique consectetur sit dui. Pretium
            mauris enim ac ornare enim. Dui feugiat elementum odio augue enim viverra aliquet. Eget suspendisse dui
            libero dictum magnis fringilla. In lectus non etiam sit tortor. Tortor etiam proin ornare nibh mollis sit
            quam elementum. Sagittis arcu commodo consequat et platea. Nisi amet nisl aliquam purus pellentesque
            tincidunt. Magna eleifend faucibus ipsum adipiscing sed. Eget eget et enim enim nulla mauris eu pharetra.
            Pretium malesuada ac nisi purus gravida etiam tristique in.
        </p>
        <p>
            Nibh at sagittis in viverra donec leo etiam. Mauris diam semper quisque tincidunt et sit velit. Interdum
            feugiat et non amet. Ac in consectetur eget ultricies integer eget scelerisque morbi. Aliquam faucibus
            tincidunt nam turpis. Nunc purus turpis ullamcorper integer. Hac interdum vivamus magna massa id volutpat
            nisi volutpat tortor. Risus pellentesque pharetra adipiscing mauris amet. Laoreet tellus diam purus eget
            vitae mi. Quam velit sollicitudin sagittis pellentesque malesuada diam neque consectetur in.
        </p>

        <h2>Lorem ipsum dolor sit amet</h2>
        <p>Lorem ipsum dolor sit amet consectetur. Arcu vitae aliquet ipsum odio accumsan. Hac euismod massa egestas
            penatibus ornare molestie placerat neque consectetur. Nec sed ipsum sem pulvinar sagittis ultrices. Orci
            pharetra porttitor gravida pellentesque dui libero lectus lorem.</p>
        <div class="quote-box">
            <i class="fas fa-quote-right" id="icon-quote"></i>
            <p>Lorem ipsum dolor sit amet consectetur. Arcu vitae aliquet ipsum odio accumsan. Hac
                euismod massa egestas penatibus ornare molestie placerat neque consectetur. Nec sed ipsum sem</p>
            <span>- Quote Name</span>
        </div>
        <h2>Lorem ipsum dolor sit amet</h2>
        <div class="gambarlain">
            <img src="img/detail1.jpg" alt="Article Image 2" class="article-image">
            <img src="img/detail2.jpg" alt="Article Image 2" class="article-image">
        </div>
        <p>Lorem ipsum dolor sit amet consectetur. Arcu vitae aliquet ipsum odio accumsan. Hac euismod massa egestas
            penatibus ornare molestie placerat neque consectetur. Nec sed ipsum sem pulvinar sagittis ultrices. Orci
            pharetra porttitor gravida pellentesque dui libero lectus lorem.</p>
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
