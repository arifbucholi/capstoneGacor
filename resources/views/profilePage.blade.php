<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customProfile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    @php
        $menu = "profile";
    @endphp
    @include('partials.navbar2')

    <div class="containerProfile">
        <div class="sidebar">
            <img src="{{ asset('img/testimonial1.jpg') }}" alt="Profile Picture">
            <h3>Intan Kurnia</h3>
            <p>kintania_cimoet@gmail.com</p>
            <a href="#" class="active">Akun Saya</a>
            <a href="#">Pesanan Saya</a>
            {{-- <a href="#">Pembayaran</a> --}}
            {{-- <a href="#">Ganti Kata Sandi</a> --}}
        </div>
        <div class="main-content">
            <h2>Informasi Pribadi</h2>
            <div class="profile-picture">
                <img src="{{ asset('img/testimonial1.jpg') }}" alt="Profile Picture" id="profileImage">
                <input type="file" id="fileInput" accept="image/*" onchange="loadFile(event)">
                <label for="fileInput">Edit</label>
                <span>Ukuran gambar maks. 1 MB (JPEG, PNG)</span>
            </div>
            <div class="form-group">
                <div>
                    <label for="first-name">Nama Depan</label>
                    <input type="text" id="first-name" value="Intan">
                </div>
                <div>
                    <label for="last-name">Nama Belakang</label>
                    <input type="text" id="last-name" value="Kurnia">
                </div>
                <div class="full-width">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="kintania_cimoet@gmail.com">
                </div>
                <div>
                    <label for="birth-date">Tanggal Lahir</label>
                    <input type="text" id="birth-date" placeholder="DD / MM / YYYY">
                </div>
                <div>
                    <label>Jenis Kelamin</label>
                    <div class="gender">
                        <label><input type="radio" name="gender" value="male"> Laki-laki</label>
                        <label><input type="radio" name="gender" value="female" checked> Perempuan</label>
                    </div>
                </div>
                <div class="full-width">
                    <label for="phone">Nomor Telpon</label>
                    <input type="text" id="phone" placeholder="+62">
                </div>
            </div>
            <h2>Informasi Alamat</h2>
            <div class="form-group">
                <div>
                    <label for="province">Provinsi</label>
                    <select id="province">
                        <option>Pilih Provinsi</option>
                        <!-- Add more options here -->
                    </select>
                </div>
                <div>
                    <label for="city">Kab/Kota</label>
                    <select id="city">
                        <option>Pilih Kab/Kota</option>
                        <!-- Add more options here -->
                    </select>
                </div>
                <div>
                    <label for="sub-district">Kecamatan</label>
                    <input type="text" id="sub-district" placeholder="Nama Kecamatan">
                </div>
                <div>
                    <label for="postal-code">Kodepos</label>
                    <input type="text" id="postal-code" placeholder="Kodepos">
                </div>
                <div class="full-width">
                    <label for="address">Alamat Lengkap</label>
                    <textarea id="address" rows="3" placeholder="Tuliskan alamat lengkap pengiriman"></textarea>
                </div>
                <div class="full-width">
                    <button>Simpan</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('partials.footer')

    <script>
        function loadFile(event) {
            const output = document.getElementById('profileImage');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        }
    </script>
    <script>
        window.addEventListener('scroll', function() {
            var navbar = document.getElementById('navbar');
            if (window.scrollY > 0) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
