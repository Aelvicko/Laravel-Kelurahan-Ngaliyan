@extends('template_web.layout')

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
					<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." />  <!-- target -->
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image1.png" class="d-block w-100" alt="..." />  <!-- target -->
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image2.png" class="d-block w-100" alt="..." />   <!-- target -->
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

		<!------------------- TOOGLE 3 JENIS PROGRAM TERKAIT SECTION ------------------------>
		<div class="container my-5 py-md-5">
			<section class="--section-page"  style="margin-bottom: -100px; margin-top:-50px; margin-left: -12px; margin-right: -12px">
				<div class="row d-flex justify-content-between align-items-center">
					<div style="margin-bottom:10px" class="row">
						<h2 style="text-align: center; margin-top:0px; margin-bottom:10px" class="title-section">PROGRAM TERKAIT</h2> <!---- KIAT JUDUL ----->
					</div>
				
					<a href="#a-more" style="margin-left:210px; margin-bottom: 10px; marbin-top:10px" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Layanan</a>
					<a href="#b-more" style="margin-top:10px; margin-bottom:20px; margin-left:40px" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Kelembagaan</a>
					<a href="#c-more" style="margin-right: 210px; margin-top:10px; margin-bottom:10px" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Pemberdayaan</a>
				</div>
				</section>
		</div>
		<!------------------- END 3 JENIS PROGRAM TERKAIT SECTION ------------------------>
		
		<!------------------- END ROLL PROGRAM-LAYANAN  ------------------------>
		<hr class="invisible" id="a-more" />
		
		<!------------------- JUMBOTRON DESC PROFILE LAYANAN ------------------------>
		<div class="container my-5 py-md-5">
			<div class="row mt-md-5 d-flex justify-content-center">
				<!------------------- BERANDA FOURTH SECTION  ------------------------>
		<section class="--section-page"  style="margin-bottom: -35px; margin-top:-50px">
			<div class="container mt-5">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="col-lg-6">
						<img src="images/layanan/layanan.png" alt="image profile layanan" class="img-fluid" />
					</div>
					<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
						<div class="row">
							<h2 class="title-section">Layanan Kemasyarakatan</h2>
							<p class="headline-paragraph text-black-50">Kelurahan Tanjung Mas memberikan layanan kemasyarakatan diantaranya adalah Pembuatan KTP, Pembuatan KK, Pengantar Syarat Nikah, Permohonan Akta Kelahiran, Pengaduan Masyarakat, dll.</p>
						</div>
						<div class="row gap-2 mb-2">
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>Aduan</h4>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-palette" viewBox="0 0 16 16">
										<path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
										<path
											d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8m-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7"
										/>
									</svg>
								</span>
							</div>
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>KTP</h4>
								<span class="mb-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-patch-question" viewBox="0 0 16 16">
										<path
											d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"
										/>
										<path
											d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"
										/>
										<path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
									</svg>
								</span>
							</div>
						</div>
						<div class="row gap-2">
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>KK</h4>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-rulers" viewBox="0 0 16 16">
										<path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
									</svg>
								</span>
							</div>
							<div class="col-lg-6 shadow-sm --box-4">
								<h4>Syarat Nikah</h4>
								<span>
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-boxes" viewBox="0 0 16 16">
										<path
											d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"
										/>
									</svg>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END BERANDA FOURTH SECTION  ------------------------>
		<div class="row mt-md-5 d-flex justify-content-center">
					<div class="d-flex justify-content-center">
						<a href="#r-more" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Read More</a>
					</div>
			</div>
		</div>
		</div>
		<!------------------- END JUMBOTRON DESC PROFILE ------------------------>
		<hr class="invisible" id="r-more" />

		<!------------------- CARD LAYANAN ------------------------>
<div class="row row-cols-1 row-cols-md-3 g-4" style="max-width: 100%; margin-left:5%; margin-right:5%; margin-bottom:5%;">
    {{-- CARD 1 --}}
  <div class="col">
      <div class="card h-100">
        <img src="images/layanan/kk.png" class="card-img-top" alt="kartu keluarga">
        <div class="card-body">
          <h5 class="card-title">Pembuatan KK</h5>
          <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan pembuatan KK (Kartu Keluarga) diantaranya, Permohonan KK baru, Permohonan KK baru bagi penduduk yang sudah mempunyai NIK, Permohonan numpang KK..</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_kk">More details &raquo;</a>
        </div>
      </div>
    </div>
    {{-- CARD 2 --}}
    <div class="col">
      <div class="card h-100">
        <img src="images/layanan/ktp.png" class="card-img-top" alt="ktp">
        <div class="card-body">
          <h5 class="card-title">Pembuatan KTP</h5>
          <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan diantaranya penerbitan KTP rusak, pindah datang, perpanjangan, perubahan data, tinggal sementara di Kota Semarang dll ..</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_ktp">More details &raquo;</a>
        </div>
      </div>
    </div>
    {{-- CARD 3 --}}
    <div class="col">
      <div class="card h-100">
        <img src="images/layanan/nikah.png" class="card-img-top" alt="pengantar surat nikah">
        <div class="card-body">
          <h5 class="card-title">Pengantar Syarat Nikah</h5>
          <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Pengantar atau Syarat Nikah dengan persyaratan berikut ini untuk pemrosesan lebih lanjut ..</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_nikah">More details &raquo;</a>
        </div>
      </div>
    </div>
    {{-- CARD 4 --}}
    <div class="col">
      <div class="card h-100">
        <img src="images/layanan/akte kelahiran.png" class="card-img-top" alt="akte kelahiran">
        <div class="card-body">
          <h5 class="card-title">Permohonan Akte Kelahiran</h5>
          <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Permohonan Akte Kelahiran dengan persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_akte_kelahiran">More details &raquo;</a>
        </div>
      </div>
    </div>
    {{-- CARD 5 --}}
    <div class="col">
      <div class="card h-100">
        <img src="images/layanan/akte kematian.png" class="card-img-top" alt="akte kematian">
        <div class="card-body">
          <h5 class="card-title">Permohonan Akte Kematian</h5>
          <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Permohonan Akte Kematian dengan persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_akte_kematian">More details &raquo;</a>
        </div>
      </div>
    </div>
    {{-- CARD 6 --}}
    <div class="col">
      <div class="card h-100">
        <img src="images/layanan/pengaduan.png" class="card-img-top" alt="pengaduan masyarakat">
        <div class="card-body">
          <h5 class="card-title">Pengaduan Masyarakat</h5>
          <p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Pengaduan Masyarakat dengan mekanisme persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_pengaduan">More details &raquo;</a>
        </div>
      </div>
    </div>
	{{-- CARD 7 --}}
    <div class="col">
		<div class="card h-100">
		  <img src="images/layanan/pelayanan.png" class="card-img-top" alt="alur pelayanan sistem">
		  <div class="card-body">
			<h5 class="card-title">Alur Sistem Pelayanan</h5>
			<p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Alur Sistem Pelayanan Publik dengan persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
		  </div>
		  <div class="card-footer">
			<small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_pelayanan">More details &raquo;</a>
		  </div>
		</div>
	  </div>
	  {{-- CARD 8 --}}
	  <div class="col">
		<div class="card h-100">
		  <img src="images/layanan/pajak pbb.png" class="card-img-top" alt="cek pbb">
		  <div class="card-body">
			<h5 class="card-title">Cek PBB</h5>
			<p class="card-text">Kelurahan Tanjung Mas memiliki pelayanan Cek PBB (Pajak Bumi & Bangunan) dengan persyaratan sebagai berikut untuk pemrosesan lebih lanjut ..</p>
		  </div>
		  <div class="card-footer">
			<small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/layanan_pbb">More details &raquo;</a>
		  </div>
		</div>
	  </div>
    
  </div>
 <!------------------- END CARD LAYANAN ------------------------>


 <!------------------- END ROLL PROGRAM-KELEMBAGAAN  ------------------------>
 <hr class="invisible" id="b-more" />
		
 <!------------------- JUMBOTRON DESC PROFILE Kelembagaan ------------------------>
 <div class="container my-5 py-md-5">
	<div class="row mt-md-5 d-flex justify-content-center">
		<!------------------- BERANDA FOURTH SECTION  ------------------------>
<section class="--section-page"  style="margin-bottom: -35px; margin-top:-50px">
	<div class="container mt-5">
		<div class="row d-flex justify-content-between align-items-center">
			<div class="col-lg-6">
				<img src="images/layanan/kelembagaan.png" alt="image profile layanan" class="img-fluid" />
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
				<div class="row">
					<h2 class="title-section">Kelembagaan</h2>
					<p class="headline-paragraph text-black-50">Kelurahan Tanjung Mas memiliki kelembagaan kemasyarakatan diantaranya adalah LPMK, UMKM, BKM, PKK, Karang Taruna, FKK, KSM & KWT Tunas Bahagia.</p>
				</div>
				<div class="row gap-2 mb-2">
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Organisasi</h4>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-palette" viewBox="0 0 16 16">
								<path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
								<path
									d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8m-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7"
								/>
							</svg>
						</span>
					</div>
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Kegiatan</h4>
						<span class="mb-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-patch-question" viewBox="0 0 16 16">
								<path
									d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"
								/>
								<path
									d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"
								/>
								<path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
							</svg>
						</span>
					</div>
				</div>
				<div class="row gap-2">
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Gagasan</h4>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-rulers" viewBox="0 0 16 16">
								<path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
							</svg>
						</span>
					</div>
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Orientasi</h4>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-boxes" viewBox="0 0 16 16">
								<path
									d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"
								/>
							</svg>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------------- END BERANDA FOURTH SECTION  ------------------------>
<div class="row mt-md-5 d-flex justify-content-center">
			<div class="d-flex justify-content-center">
				<a href="#y-more" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Read More</a>
			</div>
	</div>
</div>
</div>
<!------------------- END JUMBOTRON DESC PROFILE ------------------------>
<hr class="invisible" id="y-more" />

<!------------------- CARD KELEMBAGAAN ------------------------>
<div class="row row-cols-1 row-cols-md-3 g-4" style="max-width: 100%; margin-left:5%; margin-right:5%; margin-bottom:5%;">
{{-- CARD 1 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/lpmk.png" class="card-img-top" alt="lpmk">
<div class="card-body">
  <h5 class="card-title">LPMK</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK) yang berperan aktif dalam ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_lpmk">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 2 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/umkm.png" class="card-img-top" alt="umkm">
<div class="card-body">
  <h5 class="card-title">UMKM</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Usaha Mikro, Kecil dan Menengah (UMKM) yang berperan aktif melakukan pelatihan dan pengembangan ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_umkm">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 3 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/bkm.png" class="card-img-top" alt="bkm">
<div class="card-body">
  <h5 class="card-title">BKM</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Badan Keswadayaan Masyarakat (BKM) yang berperan aktif dalam pembangunan ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_bkm">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 4 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/pkk.png" class="card-img-top" alt="pkk">
<div class="card-body">
  <h5 class="card-title">PKK</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Pemberdayaan Kesejahteraan Keluarga (PKK) bagi ibu rumah tangga yang berisi 10 program pokok ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_pkk">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 5 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/karang taruna.png" class="card-img-top" alt="karang taruna">
<div class="card-body">
  <h5 class="card-title">KARANG TARUNA</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Karang Taruna untuk organisasi sosial sebagai wadah & sarana pengembangan yang tumbuh bagi remaja ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_karang_taruna">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 6 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/fkk.png" class="card-img-top" alt="fkk">
<div class="card-body">
  <h5 class="card-title">FKK</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Forum Kesehatan Keluarga (FKK) kegiatan monitoring evaluasi pembangunan kesehatan tingkat kelurahan ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_fkk">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 7 --}}
<div class="col">
<div class="card h-100">
  <img src="images/layanan/ksm.png" class="card-img-top" alt="ksm">
  <div class="card-body">
	<h5 class="card-title">KSM</h5>
	<p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Kelompok Swadaya Masyarakat (KSM) aktivitasnya berorientasi pada penanggulangan kemiskinan ..</p>
  </div>
  <div class="card-footer">
	<small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_ksm">More details &raquo;</a>
  </div>
</div>
</div>
{{-- CARD 8 --}}
<div class="col">
<div class="card h-100">
  <img src="images/layanan/kwt tunas bahagia.png" class="card-img-top" alt="kwt tunas bahagia">
  <div class="card-body">
	<h5 class="card-title">KWT TUNAS BAHAGIA</h5>
	<p class="card-text">Kelurahan Tanjung Mas memiliki kelembagaan Kelompok Wanita Tani (KWT) Tunas Bahagia di kelurahan Tanjung Mas ..</p>
  </div>
  <div class="card-footer">
	<small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/kelembagaan_kwt">More details &raquo;</a>
  </div>
</div>
</div>

</div>
<!------------------- END CARD KELEMBAGAAN ------------------------>


<!------------------- END ROLL PROGRAM-PEMBERDAYAAN  ------------------------>
<hr class="invisible" id="c-more" />
		
<!------------------- JUMBOTRON DESC PROFILE PEMBERDAYAAN ------------------------>
<div class="container my-5 py-md-5">
	<div class="row mt-md-5 d-flex justify-content-center">
		<!------------------- BERANDA FOURTH SECTION  ------------------------>
<section class="--section-page"  style="margin-bottom: -35px; margin-top:-50px">
	<div class="container mt-5">
		<div class="row d-flex justify-content-between align-items-center">
			<div class="col-lg-6">
				<img src="images/layanan/pemberdayaan.png" alt="image profile lembaga pemberdayaan masyarakat" class="img-fluid" />
			</div>
			<div class="col-lg-6 mt-4 mt-lg-0 ps-4 mb-5">
				<div class="row">
					<h2 class="title-section">Pemberdayaan</h2>
					<p class="headline-paragraph text-black-50">Kelurahan Tanjung Mas memiliki pemberdayaan kemasyarakatan diantaranya pada aspek - aspek bidang Kesehatan, Pariwisata, Pendidikan, Kamtibmas, Ekonomi serta Pemberdayaan Perempuan.</p>
				</div>
				<div class="row gap-2 mb-2">
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Psikologis</h4>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-palette" viewBox="0 0 16 16">
								<path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3M5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3" />
								<path
									d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8m-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7"
								/>
							</svg>
						</span>
					</div>
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Organisasi</h4>
						<span class="mb-1">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-patch-question" viewBox="0 0 16 16">
								<path
									d="M8.05 9.6c.336 0 .504-.24.554-.627.04-.534.198-.815.847-1.26.673-.475 1.049-1.09 1.049-1.986 0-1.325-.92-2.227-2.262-2.227-1.02 0-1.792.492-2.1 1.29A1.7 1.7 0 0 0 6 5.48c0 .393.203.64.545.64.272 0 .455-.147.564-.51.158-.592.525-.915 1.074-.915.61 0 1.03.446 1.03 1.084 0 .563-.208.885-.822 1.325-.619.433-.926.914-.926 1.64v.111c0 .428.208.745.585.745"
								/>
								<path
									d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911z"
								/>
								<path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0" />
							</svg>
						</span>
					</div>
				</div>
				<div class="row gap-2">
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Sosial</h4>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-rulers" viewBox="0 0 16 16">
								<path d="M1 0a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h5v-1H2v-1h4v-1H4v-1h2v-1H2v-1h4V9H4V8h2V7H2V6h4V2h1v4h1V4h1v2h1V2h1v4h1V4h1v2h1V2h1v4h1V1a1 1 0 0 0-1-1z" />
							</svg>
						</span>
					</div>
					<div class="col-lg-6 shadow-sm --box-4">
						<h4>Dampak</h4>
						<span>
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="rgb(77 124 15)" class="bi bi-boxes" viewBox="0 0 16 16">
								<path
									d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434zM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567zM7.5 9.933l-2.75 1.571v3.134l2.75-1.571zm1 3.134 2.75 1.571v-3.134L8.5 9.933zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567zm2.242-2.433V3.504L8.5 5.076V8.21zM7.5 8.21V5.076L4.75 3.504v3.134zM5.258 2.643 8 4.21l2.742-1.567L8 1.076zM15 9.933l-2.75 1.571v3.134L15 13.067zM3.75 14.638v-3.134L1 9.933v3.134z"
								/>
							</svg>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------------- END BERANDA FOURTH SECTION  ------------------------>
<div class="row mt-md-5 d-flex justify-content-center">
			<div class="d-flex justify-content-center">
				<a href="#z-more" class="read-more text-decoration-none text-black border w-auto py-2 px-5">Read More</a>
			</div>
	</div>
</div>
</div>
<!------------------- END JUMBOTRON DESC PROFILE ------------------------>
<hr class="invisible" id="z-more" />

<!------------------- CARD LAYANAN ------------------------>
<div class="row row-cols-1 row-cols-md-3 g-4" style="max-width: 100%; margin-left:5%; margin-right:5%; margin-bottom:5%;">
{{-- CARD 1 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/kesehatan.png" class="card-img-top" alt="bidang kesehatan">
<div class="card-body">
  <h5 class="card-title">Bidang Kesehatan</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki pemberdayaan pada Bidang Kesehatan untuk pelayanan masyarakat sebagai bentuk kepedulianpenanganan medis ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/pemberdayaan_kesehatan">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 2 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/pariwisata.png" class="card-img-top" alt="bidang pariwisata">
<div class="card-body">
  <h5 class="card-title">Bidang Pariwisata</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki pemberdayaan pada Bidang Pariwisata untuk meningkatkan destinasi pariwisata untuk menunjang <i>income</i> lingkungan sekitar ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/pemberdayaan_pariwisata">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 3 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/pendidikan.png" class="card-img-top" alt="bidang pendidikan">
<div class="card-body">
  <h5 class="card-title">Bidang Pendidikan</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki pemberdayaan pada Bidang Pendidikan untuk meningkatkan kualitas pendidikan sebagai bentuk pendidikan yang layak ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/pemberdayaan_pendidikan">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 4 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/kamtibmas.png" class="card-img-top" alt="kamtibmas">
<div class="card-body">
  <h5 class="card-title">Kamtibmas</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki pemberdayaan pada Bidang KAMTIBMAS (Keamanan dan Ketertiban Masyarakat) untuk mengayomi masyarakat ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/pemberdayaan_kamtibmas">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 5 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/ekonomi.png" class="card-img-top" alt="bidang ekonomi">
<div class="card-body">
  <h5 class="card-title">Bidang Ekonomi</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki pemberdayaan pada Bidang Ekonomi untuk pelayanan masyarakat sebagai bentuk roda ekonomi daerah sekitar ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/pemberdayaan_ekonomi">More details &raquo;</a>
</div>
</div>
</div>
{{-- CARD 6 --}}
<div class="col">
<div class="card h-100">
<img src="images/layanan/pemberdayaan perempuan.png" class="card-img-top" alt="pemberdayaan perempuan">
<div class="card-body">
  <h5 class="card-title">Pemberdayaan Perempuan</h5>
  <p class="card-text">Kelurahan Tanjung Mas memiliki pemberdayaan Perempuan untuk pelayanan dan perlindungan masyarakat terutama (perempuan) di lingkungan kelurahan ..</p>
</div>
<div class="card-footer">
  <small class="text-body-secondary" style="padding-right: 12%">Last updated 3 mins ago</small><a class="btn btn-secondary" href="/pemberdayaan_perempuan">More details &raquo;</a>
</div>
</div>
</div>

</div>
<!------------------- END CARD KELEMBAGAAN ------------------------>

		<!------------------- KEUNGGULAN KAMI SECTION ------------------------>
		<section>
			<div class="container mb-5">
				<h2 class="title-section mx-3 text-center">Harapan</h2>
				<div class="row mb-5">
					<div class="col-lg-4">
						<div class="py-3 px-4 --box-advantage">
							<div class="d-flex justify-content-start align-items-center">
								<img src="images/beranda/quality-control.png" alt="" />
								<h4>LAYANAN</h4>
							</div>
							<p class="text-black-50 headline-paragraph">Dengan adanya berbagai <b>Layanan</b> kemasyarakatan yang tersedia diharapkan <i>Kelurahan Tanjung Mas</i> menjadi Kelurahan dengan prospek pemerintahan yang maju.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="py-3 px-4 --box-advantage">
							<div class="d-flex justify-content-start align-items-center">
								<img src="images/beranda/design-tool.png" alt="" />
								<h4>KELEMBAGAAN</h4>
							</div>
							<p class="text-black-50 headline-paragraph"><b>Kelembagaan</b> <i> Tanjung Mas</i>, harapannya amanah dalam tugas di berbagai bidang untuk mewujudkan pemerintahan yang adil dan beradab.</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="py-3 px-4 --box-advantage">
							<div class="d-flex justify-content-start align-items-center">
								<img src="images/beranda/sewing-machine.png" alt="" />
								<h4>PEMBERDAYAAN</h4>
							</div>
							<p class="text-black-50 headline-paragraph"><i>Kelurahan Tanjung Mas</i> diharapkan membantu masyarakat mencapai tujuan menjadi kelurahan sejahtera dengan <b>Pemberdayaan</b> yang baik dari pemerintah.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!------------------- END KEUNGGULAN KAMI SECTION ------------------------>
@endsection
