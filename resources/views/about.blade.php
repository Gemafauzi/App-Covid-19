<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Covid-19</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">  

    <link rel="shortcut icon" href="favicon.ico">


</head>

@extends('layouts.main')

@section('container')

<section class="about" id="about">
  
  <p class="heading">About</p>
  <div class="row">
    <div class="col-sm-5">
      <div class="card">
        <div class="card-body">
          <p class="card-text">Website ini berisi informasi mengenai Covid-19, kasus Covid-19 di Indonesia, gejala-gejala Covid-19, langkah-langkah untuk mencegah penyebaran Covid-19, informasi tentang apa saja yang dapat dilakukan dan tidak boleh dilakukan jika terkena virus Covid-19, dan cara mencuci tangan yang benar. Website ini dibuat untuk memberikan informasi yang akurat bagi masyarakat agar terhindar dari berita hoax.</p>
          <a href="/" class="btn btn-primary">Home</a>
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="card">
        <div class="card-body">
          <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle">
        </div>
      </div>
    </div>
  </div>

</section>

<!-- footer section starts  -->

<section class="footer">

  <div class="box-container">

      <div class="box">
          <h3>about us</h3>
          <p>Kami menginformasikan semua hal tentang covid, kami memberitahu anda cara melindungi, gejala bagaimana jika terkena dampak covid, cara mencegahnya, cara mencuci tangan yang benar, dan penyebaran covid-19 di Indonesia.</p>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <p> <i class="fas fa-phone"></i> +62-123-7895. </p>
        <p> <i class="fas fa-envelope"></i> journeyid@gmail.com </p>
        <p> <i class="fas fa-map-marker-alt"></i> Bandung, indonesia - 40111. </p>
        <div class="share">
            <a href="#" class="fab fa-youtube"></a>
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
        </div>
    </div>
      </div>

  </div>

  <h1 class="credit"> Web Resmi <a href="#"> Tim Journey Web </h1>

</section>

<!-- footer section ends -->
  
@endsection

