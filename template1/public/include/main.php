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
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between">

        <div id="logo">
            <h1 class="fs-3"><a href="index.html"><?php echo $logoTitle[0]; ?> <span><?php echo $logoTitle[1]; ?></span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a>-->
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#services">Layanan Kami</a></li>
                <li><a class="nav-link scrollto" href="#faq">Tanya Kami</a></li>
                <li><a class="nav-link scrollto" href="#testimonials">Team Kami</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak Kami</a></li>
                <li><a href="/landingTemplate/admin/login" style="cursor: pointer;" class="border border-dark text-center mx-2 py-2 px-4 rounded-50"> Masuk</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= hero Section ======= -->
<section id="hero">

    <div class="hero-content" data-aos="fade-up">
        <h2>Making <span>your ideas</span><br>happen!</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
        </div>
    </div>

    <div class="hero-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/1.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/2.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/3.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/4.jpg');"></div>
            <div class="swiper-slide" style="background-image: url('assets/img/hero-carousel/5.jpg');"></div>
        </div>
    </div>

</section><!-- End Hero Section -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-6 about-img">
                    <img src="assets/img/about-img.jpg" alt="">
                </div>

                <div class="col-lg-6 content">
                    <h2>Tentang Kami</h2>

                    <ul>
                        Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore.
                    </ul>
                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <h5 class="fw-bold text-primary">Visi Kami</h5>
                            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
                        </div>
                        <div class="col-lg">
                            <h5 class="fw-bold text-primary">Misi Kami</h5>
                            <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Layanan Kami</h2>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                        <div class="icon"><i class="bi bi-briefcase"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="box">
                        <div class="icon"><i class="bi bi-card-checklist"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <div class="icon"><i class="bi bi-bar-chart"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="box">
                        <div class="icon"><i class="bi bi-binoculars"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
        <div class="container" data-aos="zoom-out">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3 class="cta-title">Hubungi Kami</h3>
                    <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="#">Call To Action</a>
                </div>
            </div>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Team Kami</h2>
            </div>

            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <p>
                                <img src="assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                <img src="assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                            </p>
                            <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg my-4 bg-primary">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2 class="text-white text-center">Tanya Kami</h2>
            </div>

            <div class="accordion accordion-flush shadow p-4 bg-white" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->


    <!-- ======= Team Section ======= -->
    <!--<section id="team">-->
    <!--  <div class="container" data-aos="fade-up">-->
    <!--    <div class="section-header">-->
    <!--      <h2>Our Team</h2>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-3 col-md-6">-->
    <!--        <div class="member">-->
    <!--          <div class="pic"><img src="assets/img/team-1.jpg" alt=""></div>-->
    <!--          <div class="details">-->
    <!--            <h4>Walter White</h4>-->
    <!--            <span>Chief Executive Officer</span>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="bi bi-twitter"></i></a>-->
    <!--              <a href=""><i class="bi bi-facebook"></i></a>-->
    <!--              <a href=""><i class="bi bi-instagram"></i></a>-->
    <!--              <a href=""><i class="bi bi-linkedin"></i></a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6">-->
    <!--        <div class="member">-->
    <!--          <div class="pic"><img src="assets/img/team-2.jpg" alt=""></div>-->
    <!--          <div class="details">-->
    <!--            <h4>Sarah Jhinson</h4>-->
    <!--            <span>Product Manager</span>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="bi bi-twitter"></i></a>-->
    <!--              <a href=""><i class="bi bi-facebook"></i></a>-->
    <!--              <a href=""><i class="bi bi-instagram"></i></a>-->
    <!--              <a href=""><i class="bi bi-linkedin"></i></a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6">-->
    <!--        <div class="member">-->
    <!--          <div class="pic"><img src="assets/img/team-3.jpg" alt=""></div>-->
    <!--          <div class="details">-->
    <!--            <h4>William Anderson</h4>-->
    <!--            <span>CTO</span>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="bi bi-twitter"></i></a>-->
    <!--              <a href=""><i class="bi bi-facebook"></i></a>-->
    <!--              <a href=""><i class="bi bi-instagram"></i></a>-->
    <!--              <a href=""><i class="bi bi-linkedin"></i></a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-3 col-md-6">-->
    <!--        <div class="member">-->
    <!--          <div class="pic"><img src="assets/img/team-4.jpg" alt=""></div>-->
    <!--          <div class="details">-->
    <!--            <h4>Amanda Jepson</h4>-->
    <!--            <span>Accountant</span>-->
    <!--            <div class="social">-->
    <!--              <a href=""><i class="bi bi-twitter"></i></a>-->
    <!--              <a href=""><i class="bi bi-facebook"></i></a>-->
    <!--              <a href=""><i class="bi bi-instagram"></i></a>-->
    <!--              <a href=""><i class="bi bi-linkedin"></i></a>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->

    <!--  </div>-->
    <!--</section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Kontak Kami</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="bi bi-geo-alt"></i>
                        <h3>Address</h3>
                        <address>A108 Adam Street, NY 535022, USA</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="bi bi-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="bi bi-envelope"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@example.com</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->