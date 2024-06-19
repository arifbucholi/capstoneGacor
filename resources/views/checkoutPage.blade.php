@extends('layouts.main')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/customCheckout.css') }}">
@endsection

@section('main')
    <!-- Navbar -->
    @php
        $menu = 'checkout';
    @endphp
    @include('partials.navbar2')

    <section class="checkout-container">
        <div class="left-section">
            <h1>Checkout</h1>

            <form action="{{ route('placeOrder') }}" method="POST">
                @csrf
                <div class="form-group">
                    <h5>Data Pembeli</h5>
                    <div class="input-row">
                        <input type="text" id="name" placeholder="Nama Lengkap" aria-label="Nama Lengkap" value="{{ $user = Auth::user()->name }}">
                    </div>
                    <div class="input-row">
                        <input type="text" id="phone" name="phone_number" placeholder="Nomor Telepon" class="half-width"
                            aria-label="Nomor Telepon">

                    </div>

                    <div class="form-group">
                        <h5>Informasi Pengiriman</h5>
                        <div class="input-row">
                            <input type="text" id="province" name="province" placeholder="Pilih Provinsi"
                                aria-label="Provinsi">
                            <input type="text" id="city" name="city" placeholder="Pilih Kabupaten/Kota"
                                aria-label="Kabupaten/Kota">
                        </div>
                        <div class="input-row">
                            <input type="text" id="district" name="district" placeholder="Nama Kecamatan"
                                aria-label="Kecamatan">
                            <input type="text" id="postal-code" name="postal_code" placeholder="Kodepos"
                                aria-label="Kodepos">
                        </div>
                        <textarea id="address" name="full_address" placeholder="Tuliskan alamat lengkap pengiriman" rows="4"
                            aria-label="Alamat Pengiriman"></textarea>
                        {{-- <div class="checkbox-group">
                            <input type="checkbox" id="save-profile" name="save-profile" class="checkbox-custom">
                            <label for="save-profile"></label>
                            <span>Samakan dengan alamat profil</span>
                        </div> --}}
                    </div>

                    {{-- <div class="form-group">
                        <h5>Opsi Pengiriman</h5>
                        <div class="input-row">
                            <div class="custom-select">
                                <input type="hidden" name="pengiriman1" id="pengiriman1" value="Reguler">
                                <div class="selected-option">Reguler</div>
                                <div class="options-container">
                                    <div class="option disabled">
                                        <div class="option-left">
                                            <span>Instan 3 Jam</span>
                                            <small style="color: red;">Jarak pengiriman melebihi batas maks 40 km</small>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="option-left">
                                            <span>Reguler</span>
                                            <small>Estimasi tiba 3 - 6 Juli 2023</small>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="option-left">
                                            <span>Ekonomi</span>
                                            <small>Estimasi tiba 4 - 6 Juli 2023</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-select">
                                <input type="hidden" name="pengiriman2" id="pengiriman2" value="Ekspedisi AAA">
                                <div class="selected-option">Ekspedisi AAA</div>
                                <div class="options-container">
                                    <div class="option">
                                        <div class="option-left">
                                            <span>Ekspedisi AAA</span>
                                            <small>Estimasi tiba 3 - 6 Juli 2023</small>
                                        </div>
                                        <div class="option-right">
                                            <h5>Rp 23.000</h5>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="option-left">
                                            <span>Ekspedisi BBB</span>
                                            <small>Estimasi tiba 4 - 6 Juli 2023</small>
                                        </div>
                                        <div class="option-right">
                                            <h5>Rp 25.000</h5>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="option-left">
                                            <span>Ekspedisi CCC</span>
                                            <small>Estimasi tiba 3 - 6 Juli 2023</small>
                                        </div>
                                        <div class="option-right">
                                            <h5>Rp 27.000</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
        </div>

        <div class="right-section">
            <div class="coupon-group">
                <h5>Tambahkan Kupon Diskon</h5>
                <div class="coupon-group-more">
                    <input type="text" name="coupon_code" placeholder="Masukkan kode kupon" aria-label="Kode Kupon">
                    <button>Terapkan</button>
                </div>
            </div>

            <h5 class="summary-title">Daftar Pembelian</h5>
            <div class="order-summary">
                <div class="summary-header">
                    <span>Produk Pembelian</span>
                    <span>Subtotal</span>
                </div>
                @foreach ($userCart as $cartItem)
                    <div class="product-item">
                        <img src="{{ asset('img/' . $cartItem->product->image) }}" alt="Product Image">
                        <div class="product-details">
                            <span>{{ $cartItem->product->name }}</span>
                            <p>Ukuran: {{ $cartItem->size }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $cartItem->quantity }} X
                                Rp.{{ number_format($cartItem->product->price, 0, ',', '.') }}</p>
                        </div>
                        <div class="product-price">
                            Rp.{{ number_format($cartItem->product->price * $cartItem->quantity, 0, ',', '.') }}</div>
                    </div>
                @endforeach
                {{-- <div class="product-item">
                    <img src="img/product-checkout1.jpg" alt="Product Image">
                    <div class="product-details">
                        <span>BSB101_Batik Sogan Laweyan</span>
                        <p>Ukuran - XL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 X 490.000</p>
                    </div>
                    <div class="product-item">
                        <img src="img/product-checkout1.jpg" alt="Product Image">
                        <div class="product-details">
                            <span>BSB101_Batik Sogan Laweyan</span>
                            <p>Ukuran - XL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2 X 490.000</p>
                        </div>
                        <div class="product-price">Rp 980.000</div>
                    </div>
                    <div class="product-item">
                        <img src="img/product-checkout2.jpg" alt="Product Image">
                        <div class="product-details">
                            <span>RPYB103_Batik Rok Payung</span>
                            <p>Ukuran - XL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 X 225.000</p>
                        </div>
                        <div class="product-price">Rp 225.000</div>
                    </div>
                    <div class="product-item">
                        <img src="img/product-checkout3.jpg" alt="Product Image">
                        <div class="product-details">
                            <span>BSB101_Batik Sogan Laweyan</span>
                            <p>Ukuran - XL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1 X 36.000</p>
                        </div>
                        <div class="product-price">Rp 36.000</div>
                    </div>
                    <div class="price-details">
                        <p><span>Subtotal</span><span class="harga">Rp 1.241.000</span></p>
                        <p><span>Shipping Cost (+)</span><span class="harga">Rp 241.000</span></p>
                        <p><span>Discount (-)</span><span class="harga">Rp 1.000.000</span></p>
                    </div>
                    <div class="total-payment">
                        <p><span>Total Pembayaran:</span><span class="harga">Rp 1.000.000</span></p>
                    </div>
                    <div class="product-price">Rp 36.000</div>
                </div> --}}
                <div class="price-details">
                    <p><span>Subtotal</span><span class="harga">Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
                    </p>
                    <p><span>Shipping Cost (+)</span><span class="harga">Rp
                            {{ number_format($shippingCost, 0, ',', '.') }}</span></p>
                    <p><span>Discount (-)</span><span class="harga">Rp
                            {{ number_format($discount, 0, ',', '.') }}</span></p>
                </div>
                <div class="total-payment">
                    <p><span>Total Pembayaran:</span><span class="harga">Rp
                            {{ number_format($totalPayment, 0, ',', '.') }}</span></p>
                </div>

            </div>


            <div class="payment-method">
                <h3>Pembayaran</h3>
                <div class="radio-group">
                    <input type="radio" id="bank" name="payment_method" value="bank" checked>
                    <label for="bank">Virtual Account Bank</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="gopay" name="payment_method" value="gopay">
                    <label for="gopay">GoPay</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="linkaja" name="payment_method" value="linkaja">
                    <label for="linkaja">LinkAja</label>
                </div>
                <div class="radio-group">
                    <input type="radio" id="shopeepay" name="payment_method" value="shopeepay">
                    <label for="shopeepay">ShopeePay</label>
                </div>
            </div>

            <button class="create" type="submit">Buat Pesanan</button>
            <p class="nb">Dengan melakukan pemesanan, kamu menyetujui <span>Syarat & Ketentuan</span> berlaku.</p>
        </div>
        </form>
    </section>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function setupCustomSelect(selectContainer, hiddenInput) {
                const selectedOption = selectContainer.querySelector('.selected-option');
                const optionsContainer = selectContainer.querySelector('.options-container');
                const optionsList = selectContainer.querySelectorAll('.option');

                selectedOption.addEventListener('click', () => {
                    selectContainer.classList.toggle('active');
                    optionsContainer.classList.toggle('active');
                });

                optionsList.forEach(o => {
                    if (!o.classList.contains('disabled')) {
                        o.addEventListener('click', () => {
                            const optionText = o.querySelector('.option-left span').textContent;
                            selectedOption.textContent = optionText;
                            hiddenInput.value = optionText;
                            selectContainer.classList.remove('active');
                            optionsContainer.classList.remove('active');
                        });
                    }
                });

                document.addEventListener('click', function(event) {
                    if (!event.target.closest('.custom-select')) {
                        selectContainer.classList.remove('active');
                        optionsContainer.classList.remove('active');
                    }
                });
            }

            setupCustomSelect(document.querySelector('.custom-select:nth-of-type(1)'), document.querySelector(
                '#pengiriman1'));
            setupCustomSelect(document.querySelector('.custom-select:nth-of-type(2)'), document.querySelector(
                '#pengiriman2'));
        });
    </script>
@endsection
