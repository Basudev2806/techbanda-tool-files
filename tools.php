<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SEO Tools</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="./" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Tools</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <a href="./" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggleactive" data-bs-toggle="dropdown">Tools</a>
                            <div class="dropdown-menu m-0">
                                <a href="tools.php" class="dropdown-item active">Seo Tools</a>
                                <a href="dev-tools.php" class="dropdown-item">Developer Tools</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxlx bg-primary mb-5">
                <div class="container my-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12">
                        <br>
                            <br>
                            <h1 class="text-white animated zoomIn text-center">Tools We Provide</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                            <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                <div class="service-icon flex-shrink-0">
                                    <i class="fa fa-search fa-2x"></i>
                                </div>
                                <h5 class="mb-3">Meta Description Checker</h5>
                                <p>The meta description is a brief summary of a webpage's content that is visible to users in search engine results.
                                </p>
                                <a class="btn px-3 mt-auto mx-auto" href="meta-description-checker.php">Use</a>
                            </div>
                        </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-code fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Canonical Link Generator</h5>
                            <p>A canonical tag generator is a tool that helps website owners and developers create and implement canonical tags on their website.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="generator-canonical-tag.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-tags fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Meta Tag Generator</h5>
                            <p>Meta tags are HTML tags that provide information about a web page to search engines and website visitors.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="meta-tag-generator.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-connectdevelop fa-4x"></i>
                            </div>
                            <h5 class="mb-3">Open Graph(OG) Tag Generator</h5>
                            <p>Open Graph tags provide information about a web page, such as its title, description, and featured image, to social media platforms when the page is shared.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="open-graph-tag-generator.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fab fa-twitter-square fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Twitter Card Generator</h5>
                            <p>Twitter Cards are a type of meta tag that allow website owners to attach rich media experiences to tweets that link to their content.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="witter-card-generator.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-passport fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Password Generator</h5>
                            <p>A password generator is a tool that creates a random string of characters that can be used as a password. It can be used to generate new passwords for online accounts, or to create a set of random passwords to use for various purposes.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="random-password-generator.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-robot fa-3x"></i>
                            </div>
                            <h5 class="mb-3">Robot Txt Generator</h5>
                            <p>The "robots.txt" file is a simple text file that can be placed in the root directory of a website, and it tells search engine crawlers which pages or sections of a website should not be crawled or indexed.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="robots-txt.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fas fa-shield-alt fa-3x"></i>
                            </div>
                            <h5 class="mb-3">MD5 Generator</h5>
                            <p>MD5 is a cryptographic hash function algorithm also known as “message-digest”. This contains a series of digits generated by a one-way hashing procedure.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="md5-generator.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                            <i class="fas fa-text-height fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Upper Case to Lower Case</h5>
                            <p>An Easy Way To Change Uppercase to Lowercase And Title Capitalization. Case Converter Tool To Easily Transform Any Text.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="textcase-convertor.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                            <i class="fas fa-qrcode fa-2x"></i>
                            </div>
                            <h5 class="mb-3">QRCode & BARCODE Generator</h5>
                            <p>QRCode & BARCODE generator enables you to create QRCode & BARCODE by encoding textual data and URLs. No special skills are needed to make a custom QRCode & BARCODE while using this advanced online facility.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="qrcode-barcode.php">Use</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                        <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                            <div class="service-icon flex-shrink-0">
                            <i class="fas fa-file-image fa-2x"></i>
                            </div>
                            <h5 class="mb-3">Text to Image Generator</h5>
                            <p>Text to Image generator enables you to create Image by encoding textual data. No special skills are needed to make a custom Image while using this advanced online facility.</p>
                            <a class="btn px-3 mt-auto mx-auto" href="qrcode-barcode.php">Use</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        

        <?php include('footer.php');?>
</body>

</html>