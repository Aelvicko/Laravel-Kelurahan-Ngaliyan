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
					<img src="images/beranda/image-image1.png" class="d-block w-100" alt="..." />  <!-- target -->
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
                <h1 class="headline-slogan" style="margin-right:-250px; justyfy-content:center; margin-left:140px;">PROFIL KELURAHAN</h1>    <!-- target -->
               <!-- Tabel Lokasi Kel. Tanjung Mas -->
                <table border="1" cellpadding="10" cellspacing="0" style="margin-right: 10px; margin-top:150px; margin-left:-400px;">
                     <thead>
                        <tr>
                            <th>Field</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i>Kelurahan</i></td>
                            <td>Tanjung Mas</td>
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
                            <td>Semarang Utara</td>
                        </tr>
                        <tr>
                            <td><i>Kodepos</i></td>
                            <td>50174</td>
                        </tr>
                        <tr>
                            <td><i>Kode Kemendagri</i></td>
                            <td>33.74.02.1008</td>
                        </tr>
                        <tr>
                            <td><i>Kode BPS</i></td>
                            <td>3374120009</td>
                        </tr>
                        <tr>
                            <td><i>Luas</i></td>
                            <td>3.24 km²</td>
                        </tr>
                    </tbody>
                </table>
                    <!-- Gambar Peta Infrastruktur Kel. Tanjung Mas-->
                    <img src="images/about/peta-tanjung-mas.png" alt="Gambar Lokasi" style="width: 700px; height: auto; margin-top: 150px;">
                </div>

                {{-- Deskripsi Profil --}}
            <p class="headline-paragraph text-black-50 pt-2 px-2">
                <b>Tanjung Mas</b> merupakan sebuah nama kelurahan di wilayah kecamatan Semarang Utara, 
                Kota Semarang, Provinsi Jawa Tengah. Kelurahan ini berbatasan dengan Kelurahan Kemijen dan Rejomulyo di sebelah timur, 
                Purwodinatan di sebelah selatan, Bandarharjo di sebelah barat, dan Laut Jawa di sebelah utara. 
                <br><br>
                Nama kelurahan ini diambil dari Pelabuhan Tanjung Emas, dahulu bernama Pelabuhan Rede, yang dikembangkan oleh 
                <!-- Konten yang akan disembunyikan -->
                <span id="more-text" style="display: none;">
                    Pemerintah Hindia Belanda pada tahun 1868 untuk menggantikan pelabuhan lama di Simongan yang dianggap kurang strategis 
                    karena mengalami pendangkalan akibat endapan lumpur.
                    <br><br>
                    Selain pelabuhan, tempat bersejarah paling menonjol di Tanjung Mas adalah Kota Lama Semarang, sebuah wilayah perdagangan Hindia Belanda 
                    yang mulai dibangun pada akhir abad ke-17. GPIB Immanuel Semarang, dibangun pada tahun 1753, merupakan gereja tertua di Provinsi Jawa Tengah 
                    dan saat ini berperan sebagai salah satu marka tanah Semarang. 
                    Selain itu, terdapat pula bangunan-bangunan bersejarah lain seperti Gedung Marabunta, Gedung H. Spiegel, Gedung Asuransi Jiwasraya, dan Stasiun Semarang Tawang.
                </span>
            </p>
            <!-- Tombol Read More/Less -->
            <div class="d-flex justify-content-center">
                <button id="read-more-btn" class="btn btn-primary" onclick="toggleText()">Read More</button>
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
						Struktur Pemerintahan dari Kelurahan Tanjung Mas di pimpin oleh Lurah Sony Yudha P.P.,STP,MSI; Tanjung Mas memliki Sekretaris yakni Vivin Kurnia Setyawan, S.T.; Pengelola IT Mulyono, A.Md.;
                        Pengadministrasi Umum Tumin; Serta ada 3 bidang Seksi, Seksi Pemerintahan Trantibum yakni Yusri Nurwandi,A.Md.; Seksi Perekonomian & Kesejahteraan Sosial Suripto, S.E.; dan Seksi Pembangunan Subeno, S.M.
                        Dengan adanya pemerintahan Lurah <b>Sony Yudha PP., S.STP, M.SI</b> di harapkan makin berkembang Kelurahan Tanjung Mas.
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
							<h2 class="title-section">VISI</h2>
							<p class="headline-paragraph text-black-50">"Terwujudnya Kota Semarang yang Semakin Hebat Berlandaskan Pancasila dalam Bingkai NKRI yang Ber-Bhineka Tunggal Ika"</p>
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
							<h2 class="title-section">MISI</h2>
							<p class="headline-paragraph text-black-50">
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
