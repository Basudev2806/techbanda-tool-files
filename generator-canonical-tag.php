<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Canonical Tag Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="canonical URLs, duplicate content, SEO optimization, website ranking, URL normalization, web page indexing, search engine visibility, canonical tag, duplicate content penalty, duplicate content issues, URL parameters, web page variations, search engine algorithms" name="keywords">
    <meta content="Our Canonical Tag Generator SEO Tool is a simple and efficient way to generate and implement canonical tags on your website. With our tool, you can easily create and add canonical tags to your web pages, which can improve your website's SEO and prevent duplicate content issues. Simply enter your website's URL and let our tool do the rest. Try our Canonical Tag Generator SEO Tool today and take the first step towards optimizing your website for search engines!" name="description">

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
              .form-label {
    margin-bottom: 0.5rem;
}
label {
    display: flex;
}

.cards {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    border-radius: 10px;
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
                            <h2 class="text-white animated zoomIn text-center">Canonical Tag Generator Tool</h2>
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
        

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="generator-canonical-tag.php" method="POST">
                      
               <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="title" placeholder ="<!-- Canonical Tag Generator  -->" />
                </div>
                
                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="link" placeholder="https://monesta.live" />
                 <label class="form-label" for="form3Example3">Canonical URL</label>
                </div>

                <input type="submit" class="btn btn-primary btn-lg" value="Show Result"></button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
           <div class="cards" >
            <?php 
        $link = 'https://monesta.live';
        $title= '&lt;!-- Canonical Tag Generator --&gt';
        if(isset($_POST['title']) && isset($_POST['link']))
           {
             $link= $_POST['link'];
             $title= $_POST['title'];
            }
        ?>
            <?php if($link !='')
            {?>
            <textarea id="myInput" cols="30" rows="10" style="font-weight: bold; color:blue;"><?php echo $title ?>&#13;&#10;&lt;link rel="canonical" href="<?php echo $link?>"/&gt;</textarea>
            <?php 
            }
            ?>
            <br>
            <button onclick="myFunction()" style="background-color: rgb(33,36,177);" class="text-white rounded position-relative wow fadeIn" data-wow-delay="0.1s"><b>Copy text</b></button>
            
            <!--this script code for call onclick COPY button-->
            <script>
                 function myFunction() {
                        // Get the text field
                        var copyText = document.getElementById("myInput");

                        // Select the text field
                        copyText.select();
                        copyText.setSelectionRange(0, 99999); // For mobile devices

                        // Copy the text inside the text field
                        navigator.clipboard.writeText(copyText.value);

                        // Alert the copied text
                        alert("Copied the text: " + copyText.value);
                    }
           </script>
          </div>

        </div>
      </div>
    </div>
  </div>
    

  <!-- Jumbotron -->
</section>

<?php include('footer.php');?>
</body>
</html>
