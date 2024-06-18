@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/customDetailProduk.css') }}">
@endsection

@section('main')
    @php
        $menu = 'produk';
    @endphp
    @include('partials.navbar')

    <div class="breadcrumb">
        <a href="/" class="breadcrumb-item"><i class="bi bi-house"></i> Beranda</a>
        <span class="breadcrumb-separator">&gt;</span>
        <a href="/produk" class="breadcrumb-item">Produk</a>
        <span class="breadcrumb-separator">&gt;</span>
        <span class="breadcrumb-item active">Detail Produk</span>
    </div>

    <section class="product-page">
        <div class="product-images">
            <div class="bg-main-img">
                <img src="{{ asset('img/detailproduk.png') }}" alt="Main Product Image" class="main-image">
            </div>
            <div class="thumbnail-images">
                <div class="bg-img-product">
                    <img src="{{ asset('img/detailproduk.png') }}" alt="Product Thumbnail">
                </div>
                <div class="bg-img-product">
                    <img src="{{ asset('img/detailproduk.png') }}" alt="Product Thumbnail">
                </div>
                <div class="bg-img-product">
                    <img src="{{ asset('img/detailproduk.png') }}" alt="Product Thumbnail">
                </div>
            </div>
        </div>
        <div class="product-details">
            <h1>BSB101_Batik Sogan Laweyan Blus Salur Wanita</h1>
            <div class="rating">
                <span>⭐ 4.8</span><span> | </span>
                <span>77 Penilaian</span><span> | </span>
                <span>124 Terjual</span>
            </div>
            <div class="price">
                <span class="current-price"><span class="rp">Rp.</span><span class="nominal">490.000</span></span>
                <span class="original-price">Rp. 980.000</span>
                <span class="discount">50%</span>
            </div>
            <p class="description">Lorem ipsum dolor sit amet consectetur. Ultrices platea tristique montes blandit. Amet
                mattis orci malesuada faucibus nisl vestibulum hac. Netus commodo gravida odio vitae nunc scelerisque sed
                nec dui. Nunc</p>
            <h1>Detail Produk</h1>
            <div class="detail-product">
                <div class="detail-item">
                    <span class="left">Material</span>
                    <span class="right">Katun Laweyan</span>
                </div>
                <hr class="detail-hr">
                <div class="detail-item">
                    <span class="left">Jenis Pakaian</span>
                    <span class="right">Wanita</span>
                </div>
                <hr class="detail-hr">
                <div class="detail-item">
                    <span class="left">Nama Brand</span>
                    <span class="right">Marin Laweyan</span>
                </div>
                <hr class="detail-hr">
                <div class="detail-item">
                    <span class="left">Code Brand</span>
                    <span class="right">BSB101</span>
                </div>
            </div>
            <form action="#" method="POST">
                @csrf
                <div class="size-selection">
                    <div class="title">
                        <h1>Pilih Ukuran</h1>
                        <span>Panduan Ukuran <i class="bi bi-arrow-right"></i></span>
                    </div>
                    <div class="sizes">
                        <div class="first-row">
                            <input type="radio" id="size-small" name="size" value="small">
                            <label for="size-small">Small (S)</label>

                            <input type="radio" id="size-medium" name="size" value="medium" checked>
                            <label for="size-medium" class="selected">Medium (M)</label>

                            <input type="radio" id="size-large" name="size" value="large">
                            <label for="size-large">Large (L)</label>
                        </div>
                        <div class="second-row">
                            <input type="radio" id="size-xl" name="size" value="xl">
                            <label for="size-xl">Extra Large (XL)</label>

                            <input type="radio" id="size-xxl" name="size" value="xxl">
                            <label for="size-xxl">Double Extra Large (XXL)</label>
                        </div>

                    </div>
                </div>
                <div class="quantity-selection">
                    <h1>Kuantitas</h1>
                    <div class="quantity">
                        <div class="box-quantity">
                            <button type="button" class="decrease"><i class="bi bi-dash"></i></button>
                            <input type="number" name="quantity" value="1" min="1" max="30">
                            <button type="button" class="increase"><i class="bi bi-plus"></i></button>
                        </div>
                        <span>Stock : <b>30</b> tersisa</span>
                    </div>
                </div>
                <div class="action-buttons">
                    <button class="buy-now" type="submit">Beli Sekarang</button>
                    <button class="add-to-cart">Masukkan Keranjang</button>
                </div>
            </form>
        </div>
    </section>

    <h1 class="title-review">Penilaian Produk Oleh Pembeli</h1>
    <section class="review">
        <div class="review-summary">
            <div class="review-rating">
                <h2>Ulasan Pembeli</h2>
                <div class="rating-score">
                    <span class="star"><i class="bi bi-star-fill"></i></span>
                    <span class="rating-number">4.8</span>
                    <span class="rating-total">dari 5.0</span>
                </div>
                <div class="rating-bars">
                    <div class="rating-bar">
                        <span id="i-star"><i class="bi bi-star-fill" id="i-star"></i>5</span>
                        <div class="bar">
                            <div class="fill" style="width: 84%;"></div>
                        </div>
                        <span class="value-rating">66</span>
                    </div>
                    <div class="rating-bar">
                        <span id="i-star"><i class="bi bi-star-fill" id="i-star"></i>4</span>
                        <div class="bar">
                            <div class="fill" style="width: 6%;"></div>
                        </div>
                        <span class="value-rating">5</span>
                    </div>
                    <div class="rating-bar">
                        <span id="i-star"><i class="bi bi-star-fill" id="i-star"></i>3</span>
                        <div class="bar">
                            <div class="fill" style="width: 5%;"></div>
                        </div>
                        <span class="value-rating">4</span>
                    </div>
                    <div class="rating-bar">
                        <span id="i-star"><i class="bi bi-star-fill" id="i-star"></i>2</span>
                        <div class="bar">
                            <div class="fill" style="width: 3%;"></div>
                        </div>
                        <span class="value-rating">2</span>
                    </div>
                    <div class="rating-bar">
                        <span id="i-star"><i class="bi bi-star-fill" id="i-star"></i>1</span>
                        <div class="bar">
                            <div class="fill" style="width: 1%;"></div>
                        </div>
                        <span class="value-rating">1</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="review-details">
            <div class="review-item">
                <div class="reviewer-info">
                    <img src="img/review1.png" alt="Jhon Smith">
                    <div>
                        <h3>Jhon Smith</h3>
                        <p>25, Nov 2025</p>
                    </div>
                    <div class="rating">Rating: 3.0 <span>★★★☆☆</span></div>
                </div>
                <hr class="review-hr">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac risus a risus elementum vehicula.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean
                    tristique nisi nec fermentum eleifend. Fusce tincidunt, tortor a elementum vehicula, magna ligula
                    iaculis lacus, vel feugiat velit felis a metus.</p>
            </div>
            <div class="review-item">
                <div class="reviewer-info">
                    <img src="img/review2.png" alt="Andrio Gelario">
                    <div>
                        <h3>Andrio Gelario</h3>
                        <p>12, Dec 2024</p>
                    </div>
                    <div class="rating">Rating: 4.0 <span>★★★★☆</span></div>
                </div>
                <hr class="review-hr">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac risus a risus elementum vehicula.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean
                    tristique nisi nec fermentum eleifend. Fusce tincidunt, tortor a elementum vehicula, magna ligula
                    iaculis lacus, vel feugiat velit felis a metus.</p>
            </div>
            <div class="review-item">
                <div class="reviewer-info">
                    <img src="img/review3.png" alt="Juliya Gessy">
                    <div>
                        <h3>Juliya Gessy</h3>
                        <p>23, April 2024</p>
                    </div>
                    <div class="rating">Rating: 5.0 <span>★★★★★</span></div>
                </div>
                <hr class="review-hr">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac risus a risus elementum vehicula.
                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean
                    tristique nisi nec fermentum eleifend. Fusce tincidunt, tortor a elementum vehicula, magna ligula
                    iaculis lacus, vel feugiat velit felis a metus.</p>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        document.querySelectorAll('.sizes input[type="radio"]').forEach((radio) => {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.sizes label').forEach((label) => {
                    label.classList.remove('selected');
                });
                this.nextElementSibling.classList.add('selected');
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const decreaseButton = document.querySelector('.decrease');
            const increaseButton = document.querySelector('.increase');
            const quantityInput = document.querySelector('.box-quantity input');
            const maxQuantity = parseInt(quantityInput.getAttribute('max'));
            const minQuantity = parseInt(quantityInput.getAttribute('min'));

            decreaseButton.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > minQuantity) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseButton.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < maxQuantity) {
                    quantityInput.value = currentValue + 1;
                }
            });
        });
    </script>
@endsection
