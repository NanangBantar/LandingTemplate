<?php
include_once('assets/simplehtmldom_1_9_1/simple_html_dom.php');
$html = new simple_html_dom();
$html->load_file('public/include/head.php'); //put url or filename  
$title = $html->find('title');
$ret = $html->find('#title');
$dataPage1 = "";
foreach ($ret as $field) {
    $dataPage1 =  $field->plaintext;
}
include("public/landingProses/pages/landingPage.php");

$result = new Result($koneksi, $dataPage1);

$result = $result->sql($dataPage1);
$logoTitle = explode(" ", $result['title']);
?>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html"><?php echo $dataPage1; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#why-us">Visi & Misi</a></li>
                <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#faq">Tanya Kami</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                <li><a class="getstarted scrollto" href="#hero">Masuk</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->