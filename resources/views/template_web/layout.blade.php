<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    @if(isset($profile) && $profile->logo)
        <link rel="icon" type="image/x-icon" href="/images/logo/{{ $profile->logo }}">
    @else
        <link rel="icon" type="image/x-icon" href="/images/logo/default-icon.png"> <!-- Ganti dengan ikon default jika logo tidak ada -->
    @endif

    <title>Kel.Tanjung Mas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/custom.css" />
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    @include('template_web.navbar')
    @yield('content')
    
            <!-- start: TOOGLE Menu Back To Top -->   
                <div style="margin-left: 1200px" id="footer-menu-back-to-top">
                    <a href="#"></a>
                </div>
            <!-- end: TOOGLE Menu Back To Top -->
    @include('template_web.footer')
    
    <script src="/js/profile.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
</body>
</html>
