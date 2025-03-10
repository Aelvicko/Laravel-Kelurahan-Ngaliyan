<!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('template_web.layout')

@section('content')
@if (session('success'))
    <div id="alert-box" class="alert alert-success alert-dismissible fade show"
        style="position: fixed; top: 104px; left: 0px; z-index: 1050; box-shadow: 0 4px 6px rgba(0,0,0,0.1); padding-left: 50px;"
        role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
            style="position: absolute; left: 0px; top: 50%; transform: translateY(-50%);"></button>
    </div>
@endif
<section class="u-align-center u-black u-clearfix u-section-1" id="carousel_b3bb">
    {{-- ubah background --}}
    <img class="u-expanded-width u-image u-image-1" src="images/contact/BGcarousel1.png" data-image-width="6067"
        data-image-height="3467">
    {{-- List --}}
    <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
            {{-- item lokasi --}}
            <div
                class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                    <span class="u-file-icon u-icon u-text-palette-3-base u-icon-1">
                        <img src="images/contact/lokasi.png" alt="lokasi USM">
                    </span>
                    <h5 class="u-text u-text-1">Kantor Kelurahan Ngaliyan</h5>
                    <p class="u-text u-text-2">Jl. Raya Ngaliyan, Kec. Ngaliyan, Kota Semarang, Jawa Tengah,
                        Kota Semarang </p>
                </div>

            </div>
            {{-- item phone --}}
            <div
                class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-2">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                    <span class="u-file-icon u-icon u-text-palette-3-base u-icon-2">
                        <img src="images/contact/phone.png" alt="phone USM">
                    </span>
                    <h5 class="u-text u-text-3">kontak kami</h5>
                    <p class="u-text u-text-4">(024) 7600874<br>(Admin Kelurahan)
                    </p>
                </div>
            </div>
            {{-- item fax --}}
            <div
                class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-3">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                    <span class="u-file-icon u-icon u-text-palette-3-base u-icon-3">
                        <img src="images/contact/fax.png" alt="fax USM">
                    </span>
                    <h5 class="u-text u-text-5">Fax</h5>
                    <p class="u-text u-text-6"> (024) 7600874</p>
                </div>
            </div>
            {{-- item gmail --}}
            <div
                class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-4">
                <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                    <span class="u-file-icon u-icon u-text-palette-3-base u-icon-4">
                        <img src="images/contact/gmail.png" alt="gmail USM">
                    </span>
                    <h5 class="u-text u-text-7">Email</h5>
                    <p class="u-text u-text-8">
                        <a href="mailto:officialngaliyan@gmail.com"
                            class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-hover-palette-3-base u-text-palette-3-base u-btn-1">
                            officialngaliyan@gmail.com</a>
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{-- FORM --}}
    <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
            <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-top u-container-layout-5">
                        <div class="u-form u-form-1">
                            <form action="{{ route('kontak.store') }}" method="post" style="padding: 10px">
                                @csrf
                                {{-- FORM email --}}
                                <div class="u-form-email u-form-group u-form-partition-factor-2">
                                    <label for="email-319a"
                                        class="u-label u-text-body-alt-color u-label-1">Email</label>
                                    <input type="email" placeholder="Masukkan Email" id="email-319a" name="email"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-body-alt-color"
                                        style="color: black" required="">
                                </div>
                                {{-- FORM nama --}}
                                <div class=" u-form-group u-form-name u-form-partition-factor-2">
                                    <label for="name-319a" class="u-label u-text-body-alt-color u-label-2">Nama</label>
                                    <input type="text" placeholder="Nama" id="name-319a" name="name"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-body-alt-color"
                                        style="color: black" required="">
                                </div>
                                {{-- FORM pesan --}}
                                <div class=" u-form-group u-form-message">
                                    <label for="message-319a"
                                        class="u-label u-text-body-alt-color u-label-3">Pesan</label>
                                    <textarea placeholder="Tulis pesan" rows="4" cols="50" id="message-319a"
                                        name="message"
                                        class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-white u-input u-input-rectangle u-body-alt-color"
                                        style="color: black" required=""></textarea>
                                </div>
                                {{-- submit --}}
                                <div class="u-align-left u-form-group u-form-submit">
                                    <button type="submit" class="btn btn-warning mt-2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                {{-- content right --}}
                <div
                    class="u-align-left u-container-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-6">
                        <h2 class="u-align-left u-text u-text-body-alt-color u-text-default u-text-9">Kantor Kelurahan
                            Ngaliyan
                        </h2>
                        <h6 class="u-align-left u-custom-font u-text u-text-body-alt-color u-text-font u-text-10">
                            Selamat Datang di Website Resmi Kel. Ngaliyan Kec. Ngaliyan Jl. Raya Ngaliyan, Kota
                            Semarang, Jawa
                            Tengah
                        </h6>
                        <p class="u-align-left u-text u-text-body-alt-color u-text-11">
                            Kontak Kami melalui phone <i>(024) 7600874</i> atau email <a
                                href="mailto:officialngaliyan@gmail.com"
                                class="u-active-none u-border-1 u-border-active-black u-border-hover-black u-border-no-left u-border-no-right u-border-no-top u-btn u-button-link u-button-style u-hover-none u-none u-text-active-palette-3-base u-text-hover-palette-3-base u-text-palette-3-base u-btn-1">
                                officialngaliyan@gmail.com</a> untuk informasi yang Anda butuhkan lebih lanjut.
                        </p>
                        </p>

                        {{-- SOSMED --}}
                        <div class="u-social-icons u-spacing-20 u-social-icons-1">
                            {{-- SOSMED 1 facebook --}}
                            <a class="u-social-url" target="_blank"
                                href="https://www.facebook.com/kelurahan.ngaliyan.9/?locale=id_ID">
                                <span
                                    class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-3-base u-icon-5">
                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7d32">
                                        </use>
                                    </svg>
                                    <svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-7d32">
                                        <path
                                            d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            {{-- SOSMED 2 twitter --}}
                            <a class="u-social-url" target="_blank" href="https://twitter.com/">
                                <span
                                    class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-3-base u-icon-6">
                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a46b">
                                        </use>
                                    </svg>
                                    <svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-a46b">
                                        <path
                                            d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            {{-- SOSMED 3 instagram --}}
                            <a class="u-social-url" target="_blank"
                                href="https://www.instagram.com/ngaliyankelurahan_/">
                                <span
                                    class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-3-base u-icon-7">
                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8341">
                                        </use>
                                    </svg>
                                    <svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-8341">
                                        <path
                                            d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z">
                                        </path>
                                        <path
                                            d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z">
                                        </path>
                                        <path
                                            d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            {{-- SOSMED 4 linkedin --}}
                            <a class="u-social-url" target="_blank" href="https://www.linkedin.com/">
                                <span
                                    class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-3-base u-icon-8">
                                    <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112"
                                        style="">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8dc3">
                                        </use>
                                    </svg>
                                    <svg class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-8dc3">
                                        <path
                                            d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<script>
    // Fungsi untuk menghilangkan alert setelah 5 detik
    setTimeout(() => {
        const alertBox = document.getElementById('alert-box');
        if (alertBox) {
            alertBox.classList.remove('show');
            alertBox.addEventListener('transitionend', () => alertBox.remove());
        }
    }, 5000);
</script>