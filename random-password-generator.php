<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Random Password Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="random password generator, password security, password strength, online password generator" name="keywords">
    <meta content="Use our Random Password Generator SEO Tool to create strong and secure passwords for your online accounts. Our tool generates random passwords that are difficult to guess and helps improve your password security and strength." name="description">

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
    <link rel="canonical" href="https://techbanda.com/tools/random-password-generator">
    <style>
        .section-titles::after {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    bottom: 0;
    left: 50px;
}

.section-titles::after {
    position: absolute;
    content: "";
    width: 4px;
    height: 4px;
    bottom: 0;
    left: 50px;
}
        </style>
            <link rel="canonical" href="https://techbanda.com/tools/random-password-generator.php"/>
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
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <a href="./" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tools</a>
                            <div class="dropdown-menu m-0">
                                <a href="tools.php" class="dropdown-item active">Seo Tools</a>
                                <a href="dev-tools.php" class="dropdown-item">Developer Tools</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary mb-5">
                <div class="container my-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12">
                            <br>
                            <br>
                            <h2 class="text-white animated zoomIn text-center">Random Password Generator Tool</h2>
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

        <section class="">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
            <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="card">
                    <div class="card-body py-5 px-md-5">
                    <form action="random-password-generator.php" method="post">
                    <div class="form-group row">
                            <label for="inputText" class="col-sm-2 col-form-label">Generate Password</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" name="twcard" placeholder="Generate Password" />
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-lg" name="generate_password">Generate</button>
                            </div>
                        </div>
                    </form>
                        <?php
                        if(isset($_POST['generate_password'])) {
                          $length = 20; 
                          $password = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_{}[]@!%^()*/-+."), 0, $length); // generate random password
                          $qr_code = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . $password; // generate QR code URL
                        
                          // Set the generated password as the value of the 'twcard' input field
                          echo '<script>document.getElementsByName("twcard")[0].value = "'.$password.'";</script>';
                          echo '<br>';
                          echo '<div style="display: flex; justify-content: center; align-items: center;">
                            <img src="'.$qr_code.'" alt="QR code">
                          </div>';
                        }
                        ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<hr class="hr1">
    <div class="container">
            <div class="section-titles text-left">
                 <h2 class="text-center">Random Password Generator SEO Tool</h2>
                 <h2>Random Password Generator SEO Tool</h2>
                <p>Our Random Password Generator SEO Tool is a simple yet effective tool for creating strong and secure passwords for your online accounts. By using our tool, you can generate a random combination of letters, numbers, and special characters to create passwords that are difficult to guess and improve your password security and strength.</p>
                <p>Using a random password generator is an important step in protecting your online accounts from hackers and unauthorized access. Our tool ensures that your passwords are unique and strong, and helps you avoid using easily guessable passwords such as your name, date of birth, or simple words.</p>
                <p>Try our Random Password Generator SEO Tool today and take the first step towards improving your password security and strength!</p>
            </div>
    </div>
<?php include('footer.php');?>
</body>
</html>