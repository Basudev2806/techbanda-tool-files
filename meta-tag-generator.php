<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meta Tag Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Meta tags, Search engine optimization, SEO, Website optimization, HTML code, Website meta information, Title tag, Description tag, Keyword tag, Author tag, Meta tag generator, Meta tag optimization" name="keywords">
    <meta content="Generate optimized meta tags for your website with our Meta Tag Generator SEO Tool. Enter your website's title, description, keywords, and author, and let our tool generate the appropriate meta tags for you. Improve your website's visibility and ranking in search engine results with our easy-to-use tool." name="description">

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
                            <h2 class="text-white animated zoomIn text-center">Meta Tag Generator Tool</h2>
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
  <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%) background: rgba(29, 29, 39, 0.7);">
    <div class="container">
      <div class="row gx-lg-5 align-items-center">
        

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="meta-tag-generator.php" method="POST">
                      
                
                <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="metatitle" placeholder="Meta Title here" />
                 <label class="form-label" for="form3Example3">Meta Title</label>
                </div>
                   <div class="form-outline mb-4">
                <input type="text" class="form-control form-control-lg" name="metadescription" placeholder="Meta Description" />
                 <label class="form-label" for="form3Example3">Meta Description</label>
                </div>
                  
                   <div class="form-outline mb-4">
               <input type="text" class="form-control form-control-lg" name="metakeywords" placeholder="Meta Keywords write with comma" />
                 <label class="form-label" for="form3Example3">Meta Keywords</label>
                </div>

                <input type="submit" class="btn btn-primary btn-lg" value="Show Result"></button>


               
              </form>
            </div>
          </div>
        </div>
        

               
            <!--<div class="card-body py-5 px-md-5">-->
                <?php
                       $metatitle= '';
                       $metadescription = '';
                       $metakeywords = '';
                         if(isset($_POST['metatitle']) && isset($_POST['metadescription']) && isset($_POST['metakeywords']) )
                           {
            
                              $metatitle= $_POST['metatitle'];
                              $metadescription= $_POST['metadescription'];
                              $metakeywords= $_POST['metakeywords'];
                            }
                ?>
                <?php if($metatitle !='' || $metadescription !='' || $metakeywords !='' )
                {?>
                        <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="cards">
                            <textarea id="myInput" cols="30" rows="10" style="font-weight: bold; color: blue;" class="text-left"><meta name="title" content="<?php echo $metatitle ?>">&#13;&#10;<meta name="description" content="<?php echo $metadescription ?>">&#13;&#10;<meta name="robots" content="index, follow">&#13;&#10;<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">&#13;&#10;<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">&#13;&#10;<meta name="keywords" content="<?php echo $metakeywords ?>"></textarea>
                            <br>
                            <button onclick="myFunction()" style="background-color: rgb(33, 36, 177);" class="text-white rounded position-relative wow fadeIn" data-wow-delay="0.1s">Copy text</button>
                        </div>

               <?php 
               }
               ?>
            <!--</div>-->
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
  <!-- Jumbotron -->
</section>

<hr class="hr1">
    <div class="container">
            <div class="section-title text-left">
                 <h2 class="text-center">Meta Tag Generator SEO Tool</h2>
                 <p>The Meta Tag Generator SEO Tool typically includes fields for entering information such as the website's title, description, keywords, and author. It then generates the appropriate meta tags based on this information, which can be added to the website's HTML code.</p>
                 <p>Optimizing meta tags can improve a website's visibility and ranking in search engine results, as well as increase click-through rates from searchers who see the website's title, description, and other meta information.</p>
                <h3>What is a Meta Tag Generator?</h3>
                <p>A Meta Tag Generator SEO Tool is a tool used by website owners and digital marketers to create and optimize meta tags for their websites. Meta tags are snippets of HTML code that provide information about a web page's content to search engines and website visitors.</p>
                <p>Using a meta description length checker helps website owners to ensure that their meta descriptions are optimized for search engines and effectively communicate the key information about their pages to users.</p>
                <p>Try our meta tag generator SEO tool today and take the first step towards optimizing your website for search engines!</p>
            </div>
    </div>
<?php include('footer.php');?>
</body>
</html>