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
					<img src="images/berita/bapenda.jpg" class="d-block w-100" alt="..." />  <!-- target -->
				</div>
				<div class="carousel-item">
					<img src="images/beranda/image-pelanggan.png" class="d-block w-100" alt="..." />  <!-- target -->
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

		<script src="https://static.elfsight.com/platform/platform.js" async></script>
		<div class="elfsight-app-3dff948d-1aac-4d1d-a7c8-ff2e4f6f5852" data-elfsight-app-lazy></div>

@endsection
