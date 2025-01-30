@extends('template_web.layout')


@section('content')

<marquee class="marquee" behavior="scroll" direction="left">
	SELAMAT DATANG DI WEBSITE KELURAHAN NGALIYAN KOTA SEMARANG.
</marquee>
<!------------------- CAROUSEL ------------------------>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
			aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
			aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
			aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="images/beranda/image1.png" class="d-block w-100" alt="..." /> <!-- target -->
		</div>
		<div class="carousel-item">
			<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." /> <!-- target -->
		</div>
		<div class="carousel-item">
			<img src="images/beranda/image2.png" class="d-block w-100" alt="..." /> <!-- target -->
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

<hr class="invisible" id="r-more" />

<!------------------- Berita  ------------------------>
<div class="container my-5 text-white" style="background-color: red;">
	<h1 class="title-section mx-3 text-center text-white mb-4">Agenda</h1>
	<div class="row row-cols-1 row-cols-md-3 g-4">
		@foreach ($articles as $article)
			<div class="col mb-4">
				<div class="card h-100">
					<!-- Menambahkan margin bawah pada card -->
					<!-- Gambar -->
					<img src="{{ asset($article->image) }}" class="card-img-top" alt="{{ $article->title }}">

					<!-- Konten Artikel -->
					<div class="card-body">
						<h5 class="card-title">{{ $article->title }}</h5>
						<p class="card-text">{{ Str::limit($article->content, 455) }}</p>
						<!-- Menampilkan Kategori -->
						@if($article->category)
							<p class="card-category" style="font-size: 20px">Kategori: <b>{{ $article->category->name }}</b></p>
						@else
							<p class="card-category">Kategori: Tidak ada kategori</p>
						@endif
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
<!------------------- End Berita  ------------------------>



<!------------------- BERANDA THIRD SECTION  ------------------------>
<div class="container mb-5">
	<div class="row d-flex justify-content-between align-items-top">
		<div class="col-lg-6">
			<h2 class="title-section mx-3">Sambutan Lurah Ngaliyan</h2>
			<p class="headline-paragraph text-black-50 mx-3" style="text-align: justify">
				Assalamu'alaikum Warahmatullahi Wabarakaatuh, <br>
				Pertama-tama kami panjatkan puji syukur atas limpahan rahmat-Nya, sehingga situs web <a
					href="">www.ngaliyan.semarangkota.go.id</a> ini dapat kami selesaikan dengan baik. Tak lupa kami
				ucapkan terima kasih kepada jajaran Dinas Komunikasi, Informatika, Statistik Dan Persandian Kota
				Semarang yang membantu kami sehingga situs web ini tersedia.
				<br><br>
				Situs <a href="">www.ngaliyan.semarangkota.go.id</a> ini sebagai wujud komitmen kami dalam memberikan
				informasi seluas-seluasnya kepada masyarakat. Pada situs web ini kami isi dengan berita-berita seputar
				wilayah Kelurahan Ngaliyan. Tak kalah menariknya, di situs web ini senantiasa kami update info-info
				terbaru dan penting yang perlu diketahui oleh masyarakat. Oleh karena itu, masyarakat perlu sering
				melihat situs web ini agar tidak ketinggalan informasi penting khususnya untuk layanan administrasi di
				Kelurahan Ngaliyan. Kritik dan saran selalu kami nantikan, agar panyajian informasi di situs web ini
				dapat memberikan manfaat yang sebesar-besarnya bagi masyarakat. <br>
				Wassalamu'alaikum warahmatullahi wabarakaatuh,
			</p>
		</div>
		<div class="col-lg-6 mt-4 mt-lg-0">
			<img src="images/beranda/paklurah.png" alt="image produksi" style="border-radius: 15px" class="img-fluid" />
		</div>
	</div>
</div>
<!------------------- END BERANDA THIRD SECTION  ------------------------>

<!------------------- BERANDA FOURTH SECTION  ------------------------>
<!--HARUSNYA ADA KONTEN LAYANAN MASYARAKAT TPI SUDAH DIHAPUS VICKO-->
<!------------------- END BERANDA FOURTH SECTION  ------------------------>

<!------------------- MAPS NGALIYAN  ------------------------>
<h2 class="title-section mx-3 text-center">Google maps</h2>
<div style="display: flex; justify-content: center; align-items: center; margin-top: 20px; margin-bottom:100px">
	<iframe
		src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d17923.618752688722!2d110.34808!3d-6.996432!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708abdb6db17e5%3A0xaef4d7337d230abc!2sKantor%20Kelurahan%20Ngaliyan!5e1!3m2!1sid!2sid!4v1733837314079!5m2!1sid!2sid"
		width="1000" height="450" style="border: 0;" allowfullscreen="" loading="lazy"
		referrerpolicy="no-referrer-when-downgrade">
	</iframe>
</div>

<!------------------- END MAPS NGALIYAN ------------------------>


<!------------------- KEUNGGULAN KAMI SECTION ------------------------>
<section>
	<div class="container mb-5">
		<h2 class="title-section mx-3 text-center">Kelembagaan</h2>
		<div class="row mb-5">
			<div class="col-lg-4">
				<div class="py-3 px-4 --box-advantage">
					<div class="d-flex justify-content-start align-items-center">
						<img src="images/beranda/quality-control.png" alt="" />
						<h4>PKK</h4>
					</div>
					<p class="text-black-50 headline-paragraph">Organisasi Kemasyarakatan (PKK) Kelurahan Ngaliyan dalam
						setiap momentum seperti Posyandu Balita, Kelas Bumil, Lomba, dll.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="py-3 px-4 --box-advantage">
					<div class="d-flex justify-content-start align-items-center">
						<img src="images/beranda/design-tool.png" alt="" />
						<h4>Karang Taruna</h4>
					</div>
					<p class="text-black-50 headline-paragraph">Organisasi Kepemudaan "Citra Muda Dinamika" (Karang
						Taruna) Kelurahan Ngaliyan seperti RAKERDA, Sosialisasi Fotografi dan Videografi, Pentas Seni,
						dll.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="py-3 px-4 --box-advantage">
					<div class="d-flex justify-content-start align-items-center">
						<img src="images/beranda/sewing-machine.png" alt="" />
						<h4>UMKM</h4>
					</div>
					<p class="text-black-50 headline-paragraph">Pelaku UMKM setempat Kelurahan Ngaliyan seperti Rangkul
						Ngaliyan</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!------------------- END KEUNGGULAN KAMI SECTION ------------------------>
@endsection