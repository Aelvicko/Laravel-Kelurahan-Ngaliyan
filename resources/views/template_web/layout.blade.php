<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    @if (isset($profile) && $profile->logo)
        <link rel="icon" type="image/x-icon" href="/images/logo/{{ $profile->logo }}">
    @else
        <link rel="icon" type="image/x-icon" href="/images/logo/default-icon.png">
        <!-- Ganti dengan ikon default jika logo tidak ada -->
    @endif

    <title>Kelurahan Ngaliyan</title>
    <link rel="icon" type="image/png" href="/images/logo/logosemarang.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/custom.css" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>





    <meta name="keywords" content="Get in touch">
    <link rel="stylesheet" href="css/nicepage.css" media="screen"> {{-- sesuaikan dengan library agar bekerja css --}}
    <link rel="stylesheet" href="css/contact.css" media="screen"> {{-- css/contact.css lokasinya --}}
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script> {{-- demikian dengan javascrip
  nya --}}
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script> {{-- js/nicepage.js lokasinya
  --}}
    <meta name="generator" content="Nicepage 5.13.1, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": ""
 }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

<body>
    @include('template_web.navbar')
    @yield('content')
    @include('template_web.footer')

    <script src="/js/profile.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>

</html>
