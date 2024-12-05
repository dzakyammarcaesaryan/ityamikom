<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Institut Teknologi Yogyakarta</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ 'landing-page/assets/navbar-ity-logo.png' }}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('landing-page/css/styles.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="{{ asset('landing-page/assets/img/navbar-brand-ity.png') }}"
                    alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Katalog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang</div>
            <div class="masthead-heading text-uppercase">Institut Teknologi Yogyakarta</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Selengkapnya</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Profil Kami</h2>
                <h3 class="section-subheading text-muted">ITY Press adalah unit pelaksana teknis Institut Teknologi Yogyakarta (ITY) yang didirikan pada 18 Maret 2016. Lembaga ini menyediakan buku, jurnal, majalah, dan e-book berkualitas tinggi bagi civitas akademika ITY dan masyarakat. ITY Press berkomitmen menjaga mutu dan profesionalisme, serta terus beradaptasi dengan perkembangan digital untuk layanan penerbitan yang modern.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Visi</h4>
                    <p class="text-muted">ITY Press menjadi pusat penerbitan buku berbasis digital dan cetak yang andal, profesional, aktif, dan kreatif di tingkat nasional dan internasional.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Misi</h4>
                    <p class="text-muted">Memberikan layanan jasa cetak dan penerbitan buku kepada civitas akademika ITY dan masyarakat.
                        Memberikan layanan produksi buku digital untuk kemajuan literasi di tengah masyarakat.
                        Memberikan layanan kerja sama yang profesional, tangkas, dan kreatif.
                        </p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Tujuan</h4>
                    <p class="text-muted">Mendorong tumbuh dan berkembangnya budaya membaca, menulis, dan menerbitkan buku.
                        Meningkatkan layanan pencetakan dan penerbitan buku, produksi buku digital, serta pelatihan di bidang penerbitan dan pencetakan.
                        Menyebarluaskan buku dan karya ilmiah ke masyarakat luas.
                        Menjalin kerja sama dengan lembaga di dalam dan luar negeri.
                        Meningkatkan kualitas produk dan sumber daya manusia.
                        </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Katalog</h2>
                <h3 class="section-subheading text-muted">Buku Best Seller Dari Kami</h3>
            </div>
            <div class="row">
                {{-- <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#" data-bs-target="#portfolioModal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid portfolio-image" src="{{ asset('landing-page/assets/img/portfolio/buku1.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Konservasi Lingkungan Keanekaragaman Hayati Berbasis Masyarakat Di Geosite Nglanggeran</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: Agus Suyanto, Diananto Prihandoko</div>
                            <div class="portfolio-caption-price text-muted">Harga: 80.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#" data-bs-target="#portfolioModal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid portfolio-image" src="{{ asset( 'landing-page/assets/img/portfolio/buku2.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Amdal Pembangunan Jalan</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: Chafid Fandeli, Mahal Nungki, Andri Seto Baskoro</div>
                            <div class="portfolio-caption-price text-muted">Harga: 100.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#" data-bs-target="#portfolioModal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid portfolio-image" src="{{ asset( 'landing-page/assets/img/portfolio/buku3.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Modul Penerapan Ipteks Pendidikan Masyarakat Untuk Daerah Rawan Longsor Dan Sistem Penanggulangannya</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: Agus Suyanto, Chafid Fandeli</div>
                            <div class="portfolio-caption-price text-muted">Harga: 30.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- Portfolio item 4-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset( 'landing-page/assets/img/portfolio/buku4.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Modul Penerapan Ipteks Konservasi Lingkungan Melalui Masyarakat Mitra Pariwisata Alam Di Selatan Taman Nasional Gunung Merapi</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: Agus Suyanto, Chafid Fandeli</div>
                            <div class="portfolio-caption-price text-muted">Harga: 30.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- Portfolio item 5-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset( 'landing-page/assets/img/portfolio/buku5.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Konservasi Lingkungan</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: Agus Suyanto, Chafid Fandeli, Fujiwara</div>
                            <div class="portfolio-caption-price text-muted">Harga: 50.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- Portfolio item 6-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset( 'landing-page/assets/img/portfolio/buku6.jpg') }}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Model Pemanfaatan Hasil Hutan Bukan Kayu (HHBK) Oleh Masyarakat di Kabupaten Gunungkidul</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: Agus Suyanto, Chafid Fandeli</div>
                            <div class="portfolio-caption-price text-muted">Harga: 100.000</div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- About-->
    {{-- <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section> --}}
    <!-- Team-->
    {{-- <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/2.jpg" alt="..." />
                        <h4>Diana Petersen</h4>
                        <p class="text-muted">Lead Marketer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Larry Parker</h4>
                        <p class="text-muted">Lead Developer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Clients-->
    {{-- <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto"
                            src="assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                </div>
                <div class="col-md-3 col-sm-6 my-3">
                    <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="assets/img/logos/ibm.svg"
                            alt="..." aria-label="IBM Logo" /></a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <!-- * * * * * * * * * * * * * * *-->
            <!-- * * SB Forms Contact Form * *-->
            <!-- * * * * * * * * * * * * * * *-->
            <!-- This form is pre-integrated with SB Forms.-->
            <!-- To make this form functional, sign up at-->
            <!-- https://startbootstrap.com/solution/contact-forms-->
            <!-- to get an API token!-->
            {{-- <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section> --}}
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Institut Negeri Yogyakarta</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Single Dynamic Modal -->
<!-- Single Dynamic Modal -->
<div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
                <img src="{{ asset('landing-page/assets/img/close-icon.svg') }}" alt="Close modal" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <h2 class="text-uppercase" id="modalTitle"></h2>
                            <img class="img-fluid d-block mx-auto" id="modalImage" src="" alt="..." />
                            <ul class="list-inline">
                                <li>
                                    <strong>Pengarang:</strong>
                                    <span id="modalAuthor"></span>
                                </li>
                                <li>
                                    <strong>Harga:</strong>
                                    <span id="modalPrice"></span>
                                </li>
                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" id="orderButton" type="button">
                                <i class="fas fa-shopping-cart me-1"></i>
                                Pesan Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal Pemesanan -->
<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderModalLabel">Form Pemesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="orderForm">
                    <!-- Detail Pesanan -->
                    <div class="mb-4">
                        <h6 class="fw-bold">Detail Pesanan</h6>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img id="orderBookImage" src="" alt="Book" class="img-fluid">
                                    </div>
                                    <div class="col-md-8">
                                        <h6 id="orderBookTitle" class="fw-bold"></h6>
                                        <p class="mb-1">Pengarang: <span id="orderBookAuthor"></span></p>
                                        <p class="mb-1">Harga: Rp <span id="orderBookPrice"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Pembeli -->
                    <div class="mb-4">
                        <h6 class="fw-bold">Data Pembeli</h6>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Lengkap*</label>
                                <input type="text" class="form-control" id="nama" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email*</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="telepon" class="form-label">No. Telepon*</label>
                                <input type="tel" class="form-control" id="telepon" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="alamat" class="form-label">Alamat Lengkap*</label>
                                <textarea class="form-control" id="alamat" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Metode Pembayaran -->
                    <div class="mb-4">
                        <h6 class="fw-bold">Metode Pembayaran</h6>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="metodePembayaran" id="virtualAccount" value="va" checked>
                            <label class="form-check-label" for="virtualAccount">
                                Transfer Bank
                            </label>
                            <div id="bankDetails" class="mt-2" style="display: none;">
                                <select class="form-select mb-2" id="bankSelect">
                                    <option selected disabled>Pilih Bank</option>
                                    <option value="bca">BCA</option>
                                    <option value="mandiri">Mandiri</option>
                                    <option value="bni">BNI</option>
                                    <option value="bri">BRI</option>
                                </select>
                                <div id="accountNumber" class="form-text"></div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="metodePembayaran" id="cod" value="cod">
                            <label class="form-check-label" for="cod">
                                Cash on Delivery (COD)
                            </label>
                        </div>
                    </div>

                    <!-- Ringkasan Pembayaran -->
                    <div class="mb-4">
                        <h6 class="fw-bold">Ringkasan Pembayaran</h6>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Harga Buku</span>
                                    <span>Rp <span id="summaryPrice"></span></span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Ongkos Kirim</span>
                                    <span>Rp <span id="shippingCost">10.000</span></span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total Pembayaran</span>
                                    <span>Rp <span id="totalPayment"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Konfirmasi Pembayaran -->
                    <div id="paymentConfirmation" style="display: none;">
                        <h5 class="fw-bold mb-4">Konfirmasi Pembayaran</h5>
                        <div class="alert alert-info">
                            <p>Terima kasih atas pesanan Anda. Silakan lakukan pembayaran segera.</p>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h6 class="fw-bold">Instruksi Pembayaran</h6>
                                <p class="mb-2">Metode Pembayaran: <span id="confirmedPaymentMethod"></span></p>
                                <div id="confirmedBankInfo" style="display: none;">
                                    <p class="mb-2">Bank: <span id="confirmedBank"></span></p>
                                    <p class="mb-2">Nomor Rekening: <span id="confirmedAccountNumber"></span></p>
                                </div>
                                <p class="mb-2">Total Pembayaran: Rp <span id="confirmedTotalPayment"></span></p>
                            </div>
                        </div>
                        <button type="button" id="checkPaymentStatusBtn" class="btn btn-primary">
                            Cek Status Pembayaran
                        </button>
                    </div>

                <!-- Status Pembayaran -->
                <div id="paymentStatus" style="display: none;">
                    <h5 class="fw-bold mb-4">Status Pembayaran</h5>
                    <div id="paymentSuccessful" class="alert alert-success" style="display: none;">
                        <h6 class="fw-bold">Pembayaran Berhasil</h6>
                        <p class="mb-0">Terima kasih atas pembayaran Anda. Pesanan Anda akan segera diproses.</p>
                    </div>
                    <div id="paymentPending" class="alert alert-warning" style="display: none;">
                        <h6 class="fw-bold">Pembayaran Belum Dikonfirmasi</h6>
                        <p class="mb-0">Kami belum menerima konfirmasi pembayaran Anda. Silakan coba lagi nanti.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" id="confirmOrderBtn">Konfirmasi Pesanan</button>
            </div>
        </div>
    </div>
</div>



    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    {{-- <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/1.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Threads
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Illustration
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/2.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Explore
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Graphic Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/3.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Finish
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Identity
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/4.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Lines
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Branding
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/5.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Southwest
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Website Design
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/6.jpg"
                                    alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        Window
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        Photography
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('landing-page/js/scripts.js') }}"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

<script>
    const bookData = [
        {
            id: 1,
            title: "Konservasi Lingkungan Keanekaragaman Hayati Berbasis Masyarakat Di Geosite Nglanggeran",
            author: "Agus Suyanto, Diananto Prihandoko",
            price: "80.000",
            image: "{{ asset('landing-page/assets/img/portfolio/buku1.jpg') }}"
        },
        {
            id: 2,
            title: "Amdal Pembangunan Jalan",
            author: "Chafid Fandeli, Mahal Nungki, Andri Seto Baskoro",
            price: "100.000",
            image: "{{ asset('landing-page/assets/img/portfolio/buku2.jpg') }}"
        },
        {
            id: 3,
            title: "Modul Penerapan Ipteks Pendidikan Masyarakat Untuk Daerah Rawan Longsor Dan Sistem Penanggulangannya",
            author: "Agus Suyanto, Chafid Fandeli",
            price: "30.000",
            image: "{{ asset('landing-page/assets/img/portfolio/buku3.jpg') }}"
        },
        {
            id: 4,
            title: "Modul Penerapan Ipteks Konservasi Lingkungan Melalui Masyarakat Mitra Pariwisata Alam Di Selatan Taman Nasional Gunung Merapi",
            author: "Agus Suyanto, Chafid Fandeli",
            price: "30.000",
            image: "{{ asset('landing-page/assets/img/portfolio/buku4.jpg') }}"
        },
        {
            id: 5,
            title: "Konservasi Lingkungan",
            author: "Agus Suyanto, Chafid Fandeli, Fujiwara",
            price: "50.000",
            image: "{{ asset('landing-page/assets/img/portfolio/buku5.jpg') }}"
        },
        {
            id: 6,
            title: "Model Pemanfaatan Hasil Hutan Bukan Kayu (HHBK) Oleh Masyarakat di Kabupaten Gunungkidul",
            author: "Agus Suyanto, Chafid Fandeli",
            price: "100.000",
            image: "{{ asset('landing-page/assets/img/portfolio/buku6.jpg') }}"
        }
    ];

    let currentBookId;

    document.addEventListener('DOMContentLoaded', function() {
        const catalogContainer = document.querySelector('#portfolio .row');

        // Generate catalog items
        bookData.forEach(book => {
            const bookHTML = `
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" href="#" data-bs-toggle="modal" data-bs-target="#portfolioModal" data-book-id="${book.id}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid portfolio-image" src="${book.image}" alt="${book.title}" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">${book.title}</div>
                            <div class="portfolio-caption-subheading text-muted">Pengarang: ${book.author}</div>
                            <div class="portfolio-caption-price text-muted">Harga: Rp ${book.price}</div>
                        </div>
                    </div>
                </div>
            `;
            catalogContainer.innerHTML += bookHTML;
        });

        // Handle portfolio modal
        const portfolioModal = document.getElementById('portfolioModal');
        portfolioModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            currentBookId = button.getAttribute('data-book-id');
            const book = bookData.find(b => b.id == currentBookId);

            // Update modal content
            const modalTitle = this.querySelector('#modalTitle');
            const modalImage = this.querySelector('#modalImage');
            const modalAuthor = this.querySelector('#modalAuthor');
            const modalPrice = this.querySelector('#modalPrice');

            modalTitle.textContent = book.title;
            modalImage.src = book.image;
            modalAuthor.textContent = book.author;
            modalPrice.textContent = `Rp ${book.price}`;
        });

        // Handle order button
        const orderButton = document.getElementById('orderButton');
        const orderModal = new bootstrap.Modal(document.getElementById('orderModal'));

        orderButton.addEventListener('click', function() {
            const portfolioModalInstance = bootstrap.Modal.getInstance(portfolioModal);
            const currentBook = bookData.find(b => b.id == currentBookId);

            // Fill order modal with book details
            document.getElementById('orderBookImage').src = currentBook.image;
            document.getElementById('orderBookTitle').textContent = currentBook.title;
            document.getElementById('orderBookAuthor').textContent = currentBook.author;
            document.getElementById('orderBookPrice').textContent = currentBook.price;
            document.getElementById('summaryPrice').textContent = currentBook.price;

            // Calculate total payment
            const bookPrice = parseInt(currentBook.price.replace(/\./g, ''));
            const shippingCost = 10000;
            const totalPayment = bookPrice + shippingCost;
            document.getElementById('totalPayment').textContent = totalPayment.toLocaleString('id-ID');

            // Close portfolio modal and show order modal
            portfolioModalInstance.hide();
            orderModal.show();
        });

        // Handle payment method change
        const virtualAccountRadio = document.getElementById('virtualAccount');
    const codRadio = document.getElementById('cod');
    const bankDetails = document.getElementById('bankDetails');
    const bankSelect = document.getElementById('bankSelect');
    const accountNumber = document.getElementById('accountNumber');

    const bankAccounts = {
        bca: "1234567890",
        mandiri: "0987654321",
        bni: "1122334455",
        bri: "5544332211"
    };

    function toggleBankDetails() {
        bankDetails.style.display = virtualAccountRadio.checked ? 'block' : 'none';
        if (!virtualAccountRadio.checked) {
            bankSelect.selectedIndex = 0;
            accountNumber.textContent = '';
        }
    }

    function updateAccountNumber() {
        const selectedBank = bankSelect.value;
        accountNumber.textContent = selectedBank ? `Nomor Rekening: ${bankAccounts[selectedBank]}` : '';
    }

    virtualAccountRadio.addEventListener('change', toggleBankDetails);
    codRadio.addEventListener('change', toggleBankDetails);
    bankSelect.addEventListener('change', updateAccountNumber);

    // Initial check
    toggleBankDetails();

    // Handle payment method change
    const paymentMethods = document.getElementsByName('metodePembayaran');
    paymentMethods.forEach(method => {
        method.addEventListener('change', function() {
            const currentBook = bookData.find(b => b.id == currentBookId);
            const shippingCostElement = document.getElementById('shippingCost');
            const bookPrice = parseInt(currentBook.price.replace(/\./g, ''));
            let shippingCost = 10000;

            if (this.value === 'cod') {
                shippingCost = 15000; // Higher shipping cost for COD
            }

            shippingCostElement.textContent = shippingCost.toLocaleString('id-ID');
            document.getElementById('totalPayment').textContent = (bookPrice + shippingCost).toLocaleString('id-ID');

            // Toggle bank details
            toggleBankDetails();
            });
        });

        // Handle confirm order button
        document.getElementById('confirmOrderBtn').addEventListener('click', function() {
            // Validate form
            const form = document.getElementById('orderForm');
            if (form.checkValidity()) {
                alert('Pesanan Anda telah berhasil dikonfirmasi!');
                orderModal.hide();
                // Reset form
                form.reset();
            } else {
                form.reportValidity();
            }
        });

        const confirmOrderBtn = document.getElementById('confirmOrderBtn');
    const orderForm = document.getElementById('orderForm');
    const paymentConfirmation = document.getElementById('paymentConfirmation');
    const modalFooter = document.querySelector('.modal-footer');

    if (confirmOrderBtn) {
        confirmOrderBtn.addEventListener('click', function() {
            const nama = document.getElementById('nama');
            const email = document.getElementById('email');
            const telepon = document.getElementById('telepon');
            const alamat = document.getElementById('alamat');
            const bankSelect = document.getElementById('bankSelect');
            const metodePembayaran = document.querySelector('input[name="metodePembayaran"]:checked');

            // Reset custom validity
            [nama, email, telepon, alamat].forEach(el => el.setCustomValidity(''));

            // Custom validation
            let isValid = true;

            if (!nama.value.trim()) {
                nama.setCustomValidity('Nama tidak boleh kosong');
                isValid = false;
            }

            if (!email.value.trim()) {
                email.setCustomValidity('Email tidak boleh kosong');
                isValid = false;
            } else if (!/\S+@\S+\.\S+/.test(email.value)) {
                email.setCustomValidity('Format email tidak valid');
                isValid = false;
            }

            if (!telepon.value.trim()) {
                telepon.setCustomValidity('Nomor telepon tidak boleh kosong');
                isValid = false;
            }

            if (!alamat.value.trim()) {
                alamat.setCustomValidity('Alamat tidak boleh kosong');
                isValid = false;
            }

            if (metodePembayaran.value === 'va' && bankSelect.value === 'Pilih Bank') {
                bankSelect.setCustomValidity('Silakan pilih bank');
                isValid = false;
            }

            if (isValid) {
                // Sembunyikan form pemesanan dan footer
                orderForm.style.display = 'none';
                modalFooter.style.display = 'none';

                // Tampilkan konfirmasi pembayaran
                paymentConfirmation.style.display = 'block';

                // Isi informasi pembayaran
                document.getElementById('confirmedPaymentMethod').textContent =
                    metodePembayaran.value === 'va' ? 'Transfer Bank' : 'COD';

                if (metodePembayaran.value === 'va') {
                    const bankInfo = document.getElementById('confirmedBankInfo');
                    bankInfo.style.display = 'block';
                    document.getElementById('confirmedBank').textContent = bankSelect.value.toUpperCase();
                    document.getElementById('confirmedAccountNumber').textContent = bankAccounts[bankSelect.value];
                }

                document.getElementById('confirmedTotalPayment').textContent =
                    document.getElementById('totalPayment').textContent;

                console.log('Switching to payment confirmation view');
            } else {
                orderForm.reportValidity();
            }
        });
    }
    });
</script>
</html>
