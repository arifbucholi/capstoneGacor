<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customNav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/customProfile.css') }}">
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
</head>

<body>
    @php
        $menu = 'profile';
    @endphp
    @include('partials.navbar2')

    <section class="profile-container">
        <div class="sidebar">
            <h1>Profil Saya</h1>
            <div class="profile-info">
                <img src="img/profile.jpg" alt="Profile Picture" class="profile-picture">
                <div class="user-details">
                    <h2>Intan Kurnia</h2>
                    <p>kintania_cimoet@gmail.com</p>
                </div>
            </div>
            <nav class="menu-sidebar">
                <ul>
                    <li><a href="/profile#" class="active"><i id="icon-menu" class="bi bi-person"></i>Akun Saya</a></li>
                    <li><a href="/riwayatpesanan#"><i id="icon-menu" class="bi bi-cart2"></i>Riwayat Pesanan</a></li>
                    <li><a href="#"><i id="icon-menu" class="bi bi-archive"></i>Pembayaran</a></li>
                    <li><a href="#"><i id="icon-menu" class="bi bi-lock"></i>Ganti Kata Sandi</a></li>
                </ul>
            </nav>
        </div>

        <div class="content">
            <form>
                <div class="section">
                    <h4>Informasi Pribadi</h4>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="first-name">Nama Depan</label>
                            <input type="text" id="first-name" name="first-name" value="Intan">
                        </div>
                        <div class="input-group">
                            <label for="last-name">Nama Belakang</label>
                            <input type="text" id="last-name" name="last-name" value="Kurnia">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" value="kintania_cimoet@gmail.com">
                        </div>
                        <div class="input-group">
                            <label for="phone">Nomor Telpon</label>
                            <input type="tel" id="phone" name="phone" placeholder="+62">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="dob">Tanggal Lahir</label>
                            <input type="date" id="dob" name="dob">
                        </div>
                        <div class="input-group gender-group">
                            <label>Jenis Kelamin</label>
                            <div class="gender-options">
                                <input type="radio" id="male" name="gender" value="male">
                                <label class="label-gender" for="male">Laki-laki</label>
                                <input type="radio" id="female" name="gender" value="female" checked>
                                <label class="label-gender" for="female">Perempuan</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <h4>Informasi Alamat</h4>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="province">Provinsi</label>
                            <select id="province" name="province">
                                <option disabled selected>Pilih Provinsi</option>
                                <option value="">gedangan</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label for="city">Kab/Kota</label>
                            <select id="city" name="city">
                                <option disabled selected>Pilih Kab/Kota</option>
                                <option value="">gedangan</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="district">Kecamatan</label>
                            <input type="text" id="district" name="district" placeholder="Nama Kecamatan">
                        </div>
                        <div class="input-group">
                            <label for="postal-code">Kodepos</label>
                            <input type="text" id="postal-code" name="postal-code" placeholder="Kodepos">
                        </div>
                    </div>
                    <div class="input-group full-width">
                        <label for="address">Alamat Lengkap</label>
                        <textarea id="address" name="address" placeholder="Tuliskan alamat lengkap pengiriman" rows="4"></textarea>
                    </div>
                </div>
                <button type="submit">Simpan</button>
            </form>
        </div>

        <div class="profile-picture-section">
            <div class="profile-picture-wrapper">
                <img src="img/profile.jpg" alt="Profile Picture" class="profile-picture">
                <button class="edit-button" id="profileImage" title="Edit Profile Picture"><i class="bi bi-pencil-square"></i></button>
            </div>
            <p>Ukuran gambar maks. 1 MB (JPEG, PNG)</p>
        </div>
    </section>


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
