@extends('template_web.layout')

<!-- resources/views/page_web/about/about.blade.php -->


<!------------------- VISI MISI ------------------------>

<!------------------- END PILIH KAMI ------------------------>

@section('content')
    <!------------------- CAROUSEL ------------------------>
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/beranda/image2.png" class="d-block w-100" alt="..." />  <!-- target -->
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image1.png" class="d-block w-100" alt="..." />  <!-- target -->
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." />   <!-- target -->
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<!------------------- END CAROUSEL ------------------------>

<!------------------- JUMBOTRON DESC PROFILE ------------------------>
<div class="container my-5 py-md-5">
    <div class="row mt-md-5 d-flex justify-content-center">
        <div class="col-lg-7 text-center" style="margin-right: 0px;">
            <div style="display: flex; align-items: flex-start;">
                <h1 class="headline-slogan" style="margin-right:-250px; justyfy-content:center; margin-left:200px; color:black">PROFIL KELURAHAN</h1>    <!-- target -->
               <!-- Tabel Lokasi Kel. Tanjung Mas -->
                <table border="1" cellpadding="10" cellspacing="0" style="margin-right: 10px; margin-top:170px; margin-left:-400px;">
                     <thead>
                        <tr>
                            <th>Field</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i>Kelurahan</i></td>
                            <td>Ngaliyan</td>
                        </tr>
                        <tr>
                            <td><i>Negara</i></td>
                            <td>Indonesia</td>
                        </tr>
                        <tr>
                            <td><i>Provinsi</i></td>
                            <td>Jawa Tengah</td>
                        </tr>
                        <tr>
                            <td><i>Kota</i></td>
                            <td>Semarang</td>
                        </tr>
                        <tr>
                            <td><i>Kecamatan</i></td>
                            <td>Ngaliyan</td>
                        </tr>
                        <tr>
                            <td><i>Kodepos</i></td>
                            <td>50181</td>
                        </tr>
                        <tr>
                            <td><i>Kode Kemendagri</i></td>
                            <td>33.74.15.10074</td>
                        </tr>
                        <tr>
                            <td><i>Kode BPS</i></td>
                            <td>3374160004</td>
                        </tr>
                        <tr>
                            <td><i>Luas</i></td>
                            <td>5.28 km²</td>
                        </tr>
                    </tbody>
                </table>
                    <!-- Gambar Peta Infrastruktur Kel. Tanjung Mas-->
                    <img src="images/about/peta-ngaliyan.png" alt="Gambar Lokasi" style="width: 700px; height: auto; margin-top: 150px;">
                </div>

                {{-- Deskripsi Profil --}}
            <p class="headline-paragraph text-black-50 pt-2 px-2" style="text-align: justify">
                <b>Ngaliyan</b>  adalah sebuah kelurahan yang terletak di Kecamatan Ngaliyan, Kota Semarang, Provinsi Jawa Tengah. Kelurahan ini berbatasan dengan Kelurahan Wonosari dan Beringin di sebelah barat, Krapyak dan Manyaran di sebelah timur, Podorejo di sebelah utara, serta Bringin di sebelah selatan. 
                <br><br>
                Nama Ngaliyan diyakini berasal dari kata “Ngaliyan” yang berarti aliran atau sungai, yang mengacu pada 
                <!-- Konten yang akan disembunyikan -->
                <span id="more-text" style="display: none;">
                    banyaknya aliran sungai kecil yang mengalir di wilayah ini pada masa lampau. Sebagai salah satu wilayah penyangga di Semarang, Ngaliyan telah berkembang pesat seiring waktu, baik dari segi infrastruktur maupun penduduknya.
                    <br><br>
                    Di Ngaliyan, terdapat beberapa tempat bersejarah yang menjadi daya tarik. Salah satunya adalah Masjid Jami' Ngaliyan, yang telah berdiri sejak zaman kolonial dan menjadi saksi perjalanan sejarah Islam di kawasan tersebut. Selain itu, Ngaliyan juga memiliki kawasan hijau dan sumber mata air alami yang dahulu menjadi tempat strategis untuk irigasi.
                    <br><br>
                    Kelurahan Ngaliyan kini telah berkembang menjadi area urban dengan berbagai fasilitas umum, seperti perkantoran, pusat pendidikan, dan perumahan. Kawasan ini juga terkenal sebagai gerbang masuk ke Semarang dari wilayah barat, berkat keberadaan Jalan Tol Semarang-Batang yang melintasi wilayah ini.
                    <br><br>
                    Ngaliyan tidak hanya dikenal sebagai pusat aktivitas modern, tetapi juga menjadi lokasi berkembangnya tradisi budaya. Kegiatan seperti sedekah bumi dan festival seni tradisional rutin diadakan untuk menjaga warisan leluhur. Tradisi ini memperkuat identitas masyarakat Ngaliyan sebagai komunitas yang menghargai sejarah dan budayanya.
                    <br><br>
                    Dengan lokasinya yang strategis dan beragam daya tariknya, Ngaliyan terus menjadi salah satu kelurahan yang berperan penting dalam pembangunan Kota Semarang.
                </span>
            </p>
            <!-- Tombol Read More/Less -->
            <div class="d-flex justify-content-center">
                <button id="read-more-btn" class="btn btn-danger" onclick="toggleText()">Read More</button>
            </div>
        </div>
    </div>
</div>
<!------------------- END JUMBOTRON DESC PROFILE ------------------------>

{{-- Java Script Jumbotron --}}
<script>
    function toggleText() {
        var moreText = document.getElementById("more-text");
        var btnText = document.getElementById("read-more-btn");

        // Mengecek apakah teks disembunyikan, lalu mengubahnya
        if (moreText.style.display === "none") {
            moreText.style.display = "inline"; // Tampilkan teks
            btnText.innerHTML = "Read Less"; // Ubah tombol menjadi 'Read Less'
        } else {
            moreText.style.display = "none"; // Sembunyikan teks
            btnText.innerHTML = "Read More"; // Ubah tombol menjadi 'Read More'
        }
    }
</script>

		<!------------------- CONTENT ABOUT THIRD SECTION  ------------------------>
		<div class="container mb-5">
			<div class="row d-flex justify-content-between align-items-center">
				<div class="col-lg-6">
					<h2 class="title-section mx-3">Struktur<br />Pemerintahan</h2>
					<p class="headline-paragraph text-black-50 mx-3">
						Lurah Ngaliyan: <b>Nur Kholis, S.Kom, MM</b>, Sekretaris Lurah: Suswati, SH, Kasi Perekonomian & Kessos: Fariadi Ariani, SH, Kasi Pembangunan: Fitri Ningtyas Dwiastuti, A.Md, Kasi Pemerintahan dan Trantibum: Nur Rahman Alchusaini, A.Md, Pengelola Data Belanja dan Laporan Keuangan: Ekananda Novita Iryanto, A.Md, Pengelola Teknologi Informasi: Muhammad Iqbal Alamsyah, S.Kom, Pengadministrasi Umum: Sri Mulyani Handayani, Pramu Kebersihan: Hendriyanto
					</p>
				</div>
				<div class="col-lg-6 mt-4 mt-lg-0">
					<img src="images/about/struktur-pemerintahan.png" alt="image produksi" style="border-radius: 15px;" class="img-fluid" />
				</div>
			</div>
		</div>
		<!------------------- END ABOUT THIRD SECTION  ------------------------>

		<!------------------- ABOUT FOURTH SECTION  ------------------------>
		<section class="--section-page">
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/about/visi.png" alt="image profile visi" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 style="color:white; font-size: 2.8rem;">VISI</h2>
							<p class="headline-paragraph" style="color: white; font-size: 1rem">"Terwujudnya Kota Semarang yang Semakin Hebat Berlandaskan Pancasila dalam Bingkai NKRI yang Ber-Bhineka Tunggal Ika"</p>
						</div>
					</div>
				</div>
			</div>
	
		<!------------------- END ABOUT FOURTH SECTION  ------------------------>
		
			<!------------------- ABOUT FIVE SECTION  ------------------------>
		
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 style="color:white; font-size: 2.8rem;">MISI</h2>
							<p class="headline-paragraph" style="color: white; font-size: 1rem">
								Meningkatkan kualitas & kapasitas sumber daya manusia yang unggul & produktif untuk mencapai kesejahteraan & keadilan sosial<br><br>
								Meningkatkan potensi ekonomi lokal yang berdaya saing & stimulasi pembangunan industri, berlandaskan riset & inovasi berdasar prinsip demokrasi ekonomi pancasila<br><br>
								Menjamin kemerdekaan masyarakat menjalankan ibadah, pemenuhan hak dasar & perlindungan kesejahteraan sosial serta hak asasi manusia bagi masyarakat secara berkeadilan<br><br>
								Mewujudkan infrastruktur berkualitas yang berwawasan lingkungan untuk mendukung kemajuan kota<br><br>
								Menjalankan reformasi birokrasi pemerintahan secara dinamis & menyusun produk hukum yang sesuai nilai - nilai pancasila dalam kerangka negara kesatuan republik indonesia</p>
						</div>
					</div>
					<div class="col-lg-6">
						<img src="images/about/misi.png" alt="image profile misi" class="img-fluid" />
					</div>
				</div>
			</div>
		</section>
<!------------------- END ABOUT FIVE SECTION  ------------------------>
@endsection
