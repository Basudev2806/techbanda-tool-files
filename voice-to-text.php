<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Voice To Text GENERATOR SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Elevate your website's SEO with our Voice To Text Generator SEO Tool. Convert spoken words to text, improve content accessibility, and enhance search engine rankings. Optimize your website for voice search and boost your online presence." />
    <meta name="keywords" content="Voice To Text Generator, SEO Tool, voice search optimization, spoken word to text, website accessibility, SEO improvement, online presence, search engine rankings" />

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
img.barcode {
    border: 1px solid #ccc;
    padding: 20px 10px;
    border-radius: 5px;
}
.showQRCode {
	display: flex;
	justify-content: center;
	align-items: center;
	border-radius: 10px;
	margin-top:35px;
}
.form-label {
    margin-bottom: 0.5rem;
}
labels {
    display: flex;
}
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
                            <h2 class="text-white animated zoomIn text-center">Voice To Text Generator Tool</h2>
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
            <div class="card-body py-5 px-md-5 text-center">
                    <div class="container">		
                        <div class="row gx-lg-5 align-items-center ">
                            <div class="col-lg-12 mb-5 mb-lg-0" id="qrForm">
                                <div>
                                <div class="form-outline mb-4">
                                    <textarea class="form-control" cols="30" rows="10" id="textarea"></textarea>
                                </div>
                                </div>
                                <br>
                                <br>
                                <div>
                                    <button type="button" class="btn btn-primary" id="start-btn">Start</button>
                                    <button type="button" class="btn btn-primary" id="stop-btn">Stop</button>
                                    <button type="button" class="btn btn-primary" id="copy-btn">Copy Text</button>
                                    <button type="button" class="btn btn-primary" id="download-btn">Download Text</button><br/><br/>
                                </div>
                                <br>
                                <br>
                            </div>	
                        </div>
                    </div>
                </div>	
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
            <div class="section-titles text-left" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7)">
                 <h2 class="text-center">Voice To Text GENERATOR SEO Tool</h2>
                 <h2>Voice To Text Generator Tool</h2>
                    <p>Utilize our Voice To Text Generator SEO Tool to effortlessly create and personalize the .htaccess file for your website. This tool empowers you to configure vital settings, enhancing your website's security, performance, and SEO.</p>
                    <p>The Voice To Text Generator Tool is a valuable resource for website owners and developers, enabling them to create and modify the .htaccess file tailored to their website's needs. The .htaccess file is a configuration file employed by the Apache web server to manage various aspects of website functionality, including URL rewriting, access control, and caching.</p>
                    <p>By leveraging the Voice To Text Generator Tool, you can effortlessly generate and customize the .htaccess file without the need for manual editing. This tool empowers you to configure crucial settings such as redirect rules, error pages, caching mechanisms, and security measures. These enhancements can significantly boost your website's overall performance, security, and SEO ranking.</p>
            </div>
    </div>

<?php include('footer.php');?>
<script>
      const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
      const recognition = new SpeechRecognition();
      const textarea = document.querySelector("#textarea");
      const startBtn = document.querySelector("#start-btn");
      const stopBtn = document.querySelector("#stop-btn");
      const copyBtn = document.querySelector("#copy-btn");
      const downloadBtn = document.querySelector("#download-btn");
      
      recognition.interimResults = true;
      recognition.continuous = true;
      
      let interimTranscript = '';
      let finalTranscript = '';
      
      startBtn.addEventListener("click", function() {
        recognition.start();
      });
      
      stopBtn.addEventListener("click", function() {
        recognition.stop();
      });
      
      copyBtn.addEventListener("click", function() {
        textarea.select();
        document.execCommand("copy");
      });
      
      downloadBtn.addEventListener("click", function() {
        const text = textarea.value;
        const blob = new Blob([text], { type: "text/plain" });
        const a = document.createElement("a");
        a.style.display = "none";
        a.href = URL.createObjectURL(blob);
        a.download = "text.txt";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
      });
      
      recognition.addEventListener("result", function(event) {
        interimTranscript = '';
        for (let i = event.resultIndex, len = event.results.length; i < len; i++) {
          let transcript = event.results[i][0].transcript;
          if (event.results[i].isFinal) {
            finalTranscript += transcript;
            break;
          } else {
            interimTranscript += transcript;
          }
        }
        textarea.value = finalTranscript + interimTranscript;
      });
</script>
</body>
</html>