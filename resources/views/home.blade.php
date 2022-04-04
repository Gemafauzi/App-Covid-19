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

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">

        <span>Covid-19</span>
        <h3 class="ml2">stay safe, stay home</h3>
        <p>Kami menginformasikan semua hal tentang covid, kami memberitahu anda cara melindungi, gejala bagaimana jika terkena dampak covid, cara mencegahnya, cara mencuci tangan yang benar, dan penyebaran covid-19 di Indonesia.</p>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>



    </div>

    <div class="image">
        <img src="img/JW1.png" alt="">
    </div>

</section>

<!-- home section ends -->

<section class="protect" id="protect">

    <h1 class="ml15">
        <span class="word">Ambil Langkah</span>
        <span class="word">Untuk Melindungi</span>
        <span class="word">Diri Sendiri.</span>
    </h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>


    <div class="box-container">

        <div class="box">
            <img src="img/protect-1.png" alt="">
            <h3>Penting nya Memakai Masker</h3>
            <p>salah satu protokol kesehatan yang wajib dilakukan saat beraktivitas di masa pandemi adalah menggunakan masker. Hal itu penting untuk mencegah penularan virus corona. Masker perlu digunakan dengan benar agar bisa memberikan perlindungan yang efektif.</p>
            <p>
                Manfaat penggunaan masker yang benar bisa yaitu melindungi diri sendiri dan juga orang lain dari penyebaran virus corona yang bisa terjadi melalui udara!.
            </p>
        </div>

        <div class="box">
            <img src="img/protect-2.png" alt="">
            <h3>cuci tangan Anda</h3>
            <p>Pandemi COVID-19 memberikan pengingat yang jelas bahwa mencuci tangan adalah salah satu cara paling sederhana untuk mencegah penyebaran virus bersama dengan langkah-langkah kesehatan masyarakat lainnya seperti menjaga jarak fisik, menghindari tempat ramai, mempraktikkan etiket batuk, dan memakai masker di mana pun dan memastikan hasil kesehatan yang lebih baik secara keseluruhan.</p>
            <p>
                Cuci Tangan Pakai Sabun merupakan perilaku sederhana, namun memiliki dampak luar biasa dalam pencegahan penyakit menular.!
            </p>
        </div>

        <div class="box">
            <img src="img/protect-3.png" alt="">
            <h3>Hindari Kontak Dekat</h3>
            <p>Social distancing merupakan salah satu langkah pencegahan dan pengendalian infeksi virus Corona dengan menganjurkan orang sehat untuk membatasi kunjungan ke tempat ramai dan kontak langsung dengan orang lain.</p>
            <p>
                Kini, istilah social distancing sudah diganti dengan physical distancing oleh pemerintah.
            </p>
        </div>

    </div>

</section>

<!-- gejala section starts  -->

<section class="symtoms" id="symtoms">

    <div class="content">
        <h1 class="heading">Apa Gejala <span>Utamanya?</span></h1>
        <p>Masing-masing orang memiliki respons yang berbeda terhadap COVID-19. Sebagian besar orang yang terpapar virus ini akan mengalami gejala ringan hingga sedang, dan akan pulih tanpa perlu dirawat di rumah sakit.</p>
        <ul>
            <div class="one">
                <li>sesak napas</li>
                <li>nyeri sendi</li>
                <li>nyeri otot</li>
            </div>
            <div class="two">
                <li>batuk</li>
                <li>diare</li>
                <li>kehilangan penciuman</li>
                <li>pengecapan</li>
            </div>
        </ul>
    </div>

    <div class="image">
        <img src="img/sakit.png" alt="">
    </div>

</section>

<!-- gejala section ends -->

<!-- mencegah section starts  -->

<section class="prevent" id="prevent">

    <div class="row">

        <div class="image">
            <img src="img/dont-img.png" alt="">
        </div>

        <div class="content">
            <h1 class="heading">Hal yang Tidak <span>Boleh Dilakukan</span> Selama Covid</h1>
            <p>Agar terhindar dari COVID-19 kita harus Disiplin untuk melakukan hal-hal berikut ini :</p>
            <ul>
                <li>Jangan pergi bekerja atau ke tempat umum</li>
                <li>Jangan keluar rumah</li>
                <li>Tidak menerima tamu, kecuali orang yang merawatnya selama isolasi mandiri</li>
            </ul>
        </div>

    </div>

    <div class="row">

        <div class="content">
            <h1 class="heading">Hal yang <span>Dapat Dilakukan </span> Selama Covid</h1>
            <p>pemerintah mengimbau masyarakat untuk tidak banyak melakukan aktivitas maupun pekerjaan di luar rumah, menghindari keramaian dan tetap di rumah. Maka, tidak jarang banyak masyarakat yang merasa bosan.</p>
            <p>Perlu diketahui bahwa banyak kegiatan yang dapat dilakukan selama masa pandemi covid-19. Berikut ini merupakan kegitan yang dapat dilakukan masyarakat antara lain :</p>
            <ul>
                <li>Olahraga di rumah</li>
                <li>Perawatan diri</li>
                <li>Jangan berkerumun</li>
            </ul>
        </div>

        <div class="image">
            <img src="img/do-img.png" alt="">
        </div>

    </div>

</section>

<!-- mencegah section ends -->

<!-- mencucitangan section starts  -->

<section class="mencucitangan" id="mencucitangan">

    <h1 class="ml6">
        <span class="text-center"></span>
        <span class="text-wrapper">
            <span class="letters">Informasi Cara mencuci tangan yang benar</span>
        </span>
    </h1>
    </h1>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <div class="box-container">

        <div class="box">
            <div class="">
                <span>1</span>
                <img src="img/hadnwash-1.png" alt="">
                <h3>Oleskan Sabun di Tangan</h3>
            </div>
        </div>

        <div class="box">
            <div class="">
                <span>2</span>
                <img src="img/hadnwash-2.png" alt="">
                <h3>telapak tangan ke telapak tangan</h3>
            </div>
        </div>

        <div class="box">
            <div class="">
                <span>3</span>
                <img src="img/hadnwash-3.png" alt="">
                <h3>Antara Jari</h3>
            </div>
        </div>

        <div class="box">
            <div class="">
                <span>4</span>
                <img src="img/hadnwash-4.png" alt="">
                <h3>Punggung Tangan</h3>
            </div>
        </div>

        <div class="box">
            <div class="">
                <span>5</span>
                <img src="img/hadnwash-5.png" alt="">
                <h3>Bersihkan Dengan Air</h3>
            </div>
        </div>

        <div class="box">
            <div class="">
                <span>6</span>
                <img src="img/hadnwash-6.png" alt="">
                <h3>Gunakan Handuk Untuk Mengeringkan</h3>
            </div>
        </div>

    </div>

</section>

<!-- handwash section ends -->

<!-- penyebaran section starts  -->

<section class="penyebaran" id="penyebaran">

    <div class="row">

        <div class="content">
            <h1 class="heading">Bagaimana Virus Covid-19 <span>Menyebar</span>?</h1>
            <p>Penyakit ini disebabkan oleh virus SARS-CoV-2, yang menyebar diantara orang-orang dengan beberapa cara berbeda. Virus dapat menyebar dari mulut atau hidung orang yang terinfeksi dalam bentuk partikel cairan kecil ketika mereka batuk, bersin, atau berbicara. Virus menyebar terutama diantara orang-orang yang melakukan kontak dekat satu sama lain, biasanya dalam jarak 1 meter. </p>
        </div>

        <div class="image">
            <img src="img/transmission1.png" alt="">
        </div>

    </div>

    <div class="row">

        <div class="image">
            <img src="img/transmission2.png" alt="">
        </div>

        <div class="content">
            <p>Seseorang dapat terinfeksi ketika percikan atau tetesan yang mengandung virus terhirup atau bersentuhan langsung dengan mata, hidung, dan mulut. Virus ini juga dapat menyebar di lingkungan dalam ruangan yang berventilasi buruk dan/atau ramai, dimana orang cenderung menghabiskan waktu lebih lama. Orang juga dapat terinfeksi dengan menyentuh permukaan yang telah terkontaminasi virus saat memegang mata, hidung, atau mulut tanpa membersihkan tangan.</p>
        </div>



    </div>

</section>

<!-- penyebaran section ends -->

<!-- cases section starts -->

<section class="cases">

    <div class="container">
        <h2>COVID -19 Cases in <span id="country"></span> <img src="" id="flag"></h2>
        <div class="board">
            <div class="card a"><i class="fa fa-tachometer"></i>
                <h5>Active Cases</h5><span id="active"></span>
            </div>
            <div class="card ca"><i class="fa fa-th-list"></i>
                <h5>Total Cases</h5><span id="cases"></span>
            </div>
            <div class="card cr"><i class="fa fa-times-circle"></i>
                <h5>Critical Cases</h5><span id="critical"></span>
            </div>
            <div class="card d"><i class="fa fa-times"></i>
                <h5>Total Deaths</h5><span id="death"></span>
            </div>
            <div class="card r"><i class="fa fa-check-square-o"></i>
                <h5>Recovered Cases</h5><span id="recovered"></span>
            </div>
            <div class="card t"><i class="fa fa-eye"></i>
                <h5>Total Testes Done</h5><span id="tests"></span>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        fetch('https://corona.lmao.ninja/v2/countries/Indonesia')
            .then((response) => {
                return response.json();
            })
            .then((data) => {
                console.log(data);
                document.getElementById("country").innerHTML = data.country;
                document.getElementById("active").innerHTML = data.active.toLocaleString();
                document.getElementById("cases").innerHTML = data.cases.toLocaleString();
                document.getElementById("critical").innerHTML = data.critical.toLocaleString();
                document.getElementById("death").innerHTML = data.deaths.toLocaleString();
                document.getElementById("recovered").innerHTML = data.recovered.toLocaleString();
                document.getElementById("tests").innerHTML = data.tests.toLocaleString();
                document.getElementById("flag").src = data.countryInfo.flag;
            });
    </script>

</section>

<!-- cases section ends -->

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

<!-- scroll top  -->

<a href="#home" class="scroll-top">
    <img src="img/scroll-img.png" alt="">
</a>















<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>



@endsection