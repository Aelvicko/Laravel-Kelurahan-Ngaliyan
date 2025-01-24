<!-- System Layouting Eksekusi File 'View-layouts-main' -->
@extends('template_web.navbar-contact')


<!DOCTYPE html>
<html>
<title>Kelurahan Ngaliyan</title>
<link rel="icon" type="image/png" href="/images/logo/logosemarang.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
{{-- BOOTSTRAP ICON --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<body>
  @if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('status') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif



</body>

</html>