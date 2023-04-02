<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MD5 Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="MD5, generator, hash value, cryptographic hash function, data integrity, security, verification, password, file checksum, SEO" name="keywords">
    <meta content="Our MD5 Generator SEO Tool is a powerful tool used to generate MD5 hash values for various types of data. Use this tool to verify the integrity of your passwords, file checksums, and other types of data to improve the security and reliability of your website's data. Improve your website's SEO performance by using our MD5 Generator SEO Tool today." name="description">

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
    <style>
        td.copy i {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
        </style>
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
                    <a href="./" class="nav-item nav-link active">Home</a>
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
                            <h2 class="text-white animated zoomIn text-center">MD5 Generator Tool</h2>
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
  <div class="px-4 py-5 px-md-5 text-center text-lg-start mx-auto" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        <div class="col-lg-12 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="md5-generator.php" method="post">
  <div class="form-group row">
    <!-- <label for="inputText" class="col-sm-2 col-form-label">Generate Password</label> -->
    <div class="col-sm-8">
      <input type="text" class="form-control form-control-lg" name="twcard" placeholder="Paste Your Text Here" />
    </div>
    <div class="col-sm-2">
      <button type="submit" class="btn btn-primary btn-lg" name="generate_password">Generate</button>
    </div>
  </div>
</form>
<?php
if(isset($_POST['generate_password'])) {
  $sitemap= $_POST['twcard'];

  // Generate hash codes
  $md5 = md5($sitemap);
  $sha1 = sha1($sitemap);
  $base64 = base64_encode($sitemap);
?>
<br>
<br>
<script>
  function copyToClipboard(text) {
    var input = document.createElement("textarea");
    input.style.position = 'fixed';
    input.style.opacity = 0;
    input.value = text;
    document.body.appendChild(input);
    input.select();
    document.execCommand('Copy');
    document.body.removeChild(input);
  }
</script>
<!-- Output the table -->
<table class="mx-auto" style="border: 1px solid black; padding: 5px;">
  <tbody>
    <tr>
      <td style="border: 1px solid black; padding: 5px;">Original Text</td>
      <td style="border: 1px solid black; padding: 5px;"><?php echo $sitemap; ?></td>
      <td class = "copy" style="border: 1px solid black; padding: 5px;"><a href="md5-generator.php" onclick="copyToClipboard('<?php echo $sitemap; ?>')"><i class="fas fa-copy fa-2x"></i></a></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 5px;">MD5</td>
      <td style="border: 1px solid black; padding: 5px;"><?php echo $md5; ?></td>
      <td class = "copy" style="border: 1px solid black; padding: 5px;"><a href="md5-generator.php" onclick="copyToClipboard('<?php echo $sitemap; ?>')"><i class="fas fa-copy fa-2x"></i></a></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 5px;">SHA1</td>
      <td style="border: 1px solid black; padding: 5px;"><?php echo $sha1; ?></td>
      <td class = "copy" style="border: 1px solid black; padding: 5px;"><a href="md5-generator.php" onclick="copyToClipboard('<?php echo $sitemap; ?>')"><i class="fas fa-copy fa-2x"></i></a></td>
    </tr>
    <tr>
      <td style="border: 1px solid black; padding: 5px;">Base64</td>
      <td style="border: 1px solid black; padding: 5px;"><?php echo $base64; ?></td>
      <td class = "copy" style="border: 1px solid black; padding: 5px;"><a href="md5-generator.php" onclick="copyToClipboard('<?php echo $sitemap; ?>')"><i class="fas fa-copy fa-2x"></i></a></td>
    </tr>
  </tbody>
</table>
<?php
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
            <div class="section-title text-left">
                 <h2 class="text-center">MD5 Generator SEO Tool</h2>
                 <h2>What is MD5 Generator ?</h2>
                <p>An MD5 Generator SEO Tool is a tool used to generate MD5 hash values for text input. MD5 is a cryptographic hash function that is commonly used to verify the integrity of data, such as passwords or digital signatures.</p>
                <h2>What is the use of MD5 Generator ?</h2>
                <p>The MD5 Generator SEO Tool can be used by website owners, developers, and digital marketers to generate MD5 hash values for passwords, file checksums, and other types of data that require data integrity verification.</p>
                <p>By using an MD5 Generator SEO Tool, website owners and developers can improve the security and reliability of their website's data, which can help to build trust with users and improve the website's overall SEO performance.</p>
            </div>
    </div>

<?php include('footer.php');?>
</body>
</html>