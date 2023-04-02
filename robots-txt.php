<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Robot Txt Generator SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="robot.txt, search engine optimization, SEO, website crawling, web robots" name="keywords">
    <meta content="Use our Robot Txt Generator SEO Tool to create and edit the robot.txt file for your website. This file instructs search engine crawlers on how to access and index your website's pages, helping to improve your website's search engine optimization (SEO) and overall visibility." name="description">

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
#robots-txt-form .fs18{font-size: 18px;}
.new_input{
	min-width: 36px;
	height: 36px;
	border:2px solid #1E70B9;
}
.new_input:after {
	content: "+";
    font-size: 28px;
    color: #1E70B9;
    line-height: 35px;
}
.new_input.change_it:after {
    content: "-";
    font-size: 42px;
}
#dir6 .new_input:after{content: "-";font-size: 42px;}
#result_section .external.tool_btn{
    color: #fff;
    display: inline-block;
    min-width: 150px;
    padding: 11px 0;
    margin-right: 10px;
}
#result_section .external.tool_btn:hover{
    text-decoration: none;
}

.cus_scrollbar.border1 {
    border: 1px solid #E3E7ED !important;
}

.cus_scrollbar {
    height: 195px !important;
    font-size: 14px;
    color: #202020;
    overflow: auto;
    resize: none;
}
.border1 {
    border: 1px solid #E3E7ED;
}
.bg_f6f8fa {
    background-color: #F6F8FA;
}
.fw_600 {
    font-weight: 600;
}
.p-3 {
    padding: 1rem !important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem !important;
}
.w-100 {
    width: 100% !important;
}
.d-block {
    display: block !important;
}
textarea {
    overflow: auto;
    resize: vertical;
}
input, button, select, optgroup, textarea {
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit;
}
#result_section .external.tool_btn {
    color: #fff;
    display: inline-block;
    min-width: 150px;
    padding: 11px 0;
    margin-right: 10px;
}

a:not([href]) {
    color: inherit;
    text-decoration: none;
}
.tool_btn {
    background-color: #1E70B9;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;
    outline: none;
    height: 46px;
    min-width: 160px;
}
a {
    color: #3490dc;
    text-decoration: none;
    background-color: transparent;
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
                            <h2 class="text-white animated zoomIn text-center">Robot Txt Generator Tool</h2>
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

        <!-- <section class=""> -->
    
    <!-- Jumbotron -->
    <div class="text-lg-start">
      <div class="container">
        <div class="row align-items-center">
  
          <div class="col-lg-12 mb-5 mb-lg-0">
              <form method="POST" action="robots-txt.php" accept-charset="UTF-8" id="robots-txt-form">
                    <div class="col bg-white p-0 border1 bg_2f3133">
                    <samp class="d-block mx-auto my-2 text-center" id="b_t__sst"><div class="new___s_ bq"></div></samp>
                    <div class="col px-4 pb-4 mps">
                    <p class="sub_text mx-auto my-4 px-4"></p>
                    <samp class="d-block mx-auto my-2 text-center" id="a_t__sst"><div class="new___s_ sq"></div></samp>
                    <div class="row m-0 input_section mt-4 px-2 py-3 mps clr_fff">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Default - All Robots are</div>
                    <select class="tool_inp_sty w-100 px-2" id="allow" name="allow"><option value=" " selected="selected">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Crawl-Delay</div>
                    <select class="tool_inp_sty w-100 px-2" id="delay" name="delay"><option value selected="selected">Default - No Delay</option><option value="5">5 Seconds</option><option value="10">10 Seconds</option><option value="20">20 Seconds</option><option value="60">60 Seconds</option><option value="120">120 Seconds</option></select>
                    </div>
                    <div class="col-12 px-2">
                    <div class="tool_heading my-2">Sitemap: (leave blank if you don't have)</div>
                    <input class="form-control tool_inp_sty rounded-0" placeholder="https://www.example.com/sitemap.xml" name="sitemap" type="text" value>
                    </div>
                    <div class="fs18 fw_700 col-12 my-2">Search Robots</div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Google</div>
                    <select class="tool_inp_sty w-100 px-2" id="google" name="google"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Google Image</div>
                    <select class="tool_inp_sty w-100 px-2" id="gimage" name="gimage"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Google Mobile</div>
                    <select class="tool_inp_sty w-100 px-2" id="gmobile" name="gmobile"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">MSN Search</div>
                    <select class="tool_inp_sty w-100 px-2" id="msn" name="msn"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Yahoo</div>
                    <select class="tool_inp_sty w-100 px-2" id="yahoo" name="yahoo"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Yahoo MM</div>
                    <select class="tool_inp_sty w-100 px-2" id="ymm" name="ymm"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Yahoo Blogs</div>
                    <select class="tool_inp_sty w-100 px-2" id="blogs" name="blogs"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Ask/Teoma</div>
                    <select class="tool_inp_sty w-100 px-2" id="teoma" name="teoma"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">GigaBlast</div>
                    <select class="tool_inp_sty w-100 px-2" id="gigablast" name="gigablast"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">DMOZ Checker</div>
                    <select class="tool_inp_sty w-100 px-2" id="dmoz" name="dmoz"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Nutch</div>
                    <select class="tool_inp_sty w-100 px-2" id="nutch" name="nutch"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Alexa/Wayback</div>
                    <select class="tool_inp_sty w-100 px-2" id="alexa" name="alexa"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Baidu</div>
                    <select class="tool_inp_sty w-100 px-2" id="baidu" name="baidu"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">Naver</div>
                    <select class="tool_inp_sty w-100 px-2" id="naver" name="naver"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 px-2">
                    <div class="tool_heading my-2">MSN PicSearch</div>
                    <select class="tool_inp_sty w-100 px-2" id="psbot" name="psbot"><option value selected="selected">Same as Default</option><option value=" ">Allowed</option><option value="/">Refused</option></select>
                    </div>
                    <div class="col-md-11 col-sm-10 px-2 row mx-0 align-items-center justify-content-between mt-2">
                    <div class="tool_heading">Restricted Directories</div>
                    <div class="fw_600">The path is relative to root and must contain a trailing slash "/"</div>
                    </div>
                    <div class="row mx-0 mt-1 w-100" id="dir1">
                    <div class="col-md-11 col-sm-10 col-10 px-2">
                    <input class="form-control tool_inp_sty rounded-0" maxlength="200" name="dir1" type="text" value="/cgi-bin/">
                    </div>
                    <div class="col-md-1 col-sm-2 col-2 pr-1 pl-0 d-flex align-items-center justify-content-end" style = "text-align: center">
                    <div class="new_input rounded-circle" onclick="showMore('dir2',this)"></div>
                    </div>
                    </div>
                    <div class="row mx-0 mt-1 w-100 d-none" id="dir2">
                    <div class="col-md-11 col-sm-10 col-10 px-2">
                    <input class="form-control tool_inp_sty rounded-0" maxlength="200" name="dir2" type="text" value>
                    </div>
                    <div class="col-md-1 col-sm-2 col-2 pr-1 pl-0 d-flex align-items-center justify-content-end" style = "text-align: center">
                    <div class="new_input rounded-circle" onclick="showMore('dir3',this)"></div>
                    </div>
                    </div>
                    <div class="row mx-0 mt-1 w-100 d-none" id="dir3">
                    <div class="col-md-11 col-sm-10 col-10 px-2">
                    <input class="form-control tool_inp_sty rounded-0" maxlength="200" name="dir3" type="text" value>
                    </div>
                    <div class="col-md-1 col-sm-2 col-2 pr-1 pl-0 d-flex align-items-center justify-content-end" style = "text-align: center">
                    <div class="new_input rounded-circle" onclick="showMore('dir4',this)"></div>
                    </div>
                    </div>
                    <div class="row mx-0 mt-1 w-100 d-none" id="dir4">
                    <div class="col-md-11 col-sm-10 col-10 px-2">
                    <input class="form-control tool_inp_sty rounded-0" maxlength="200" name="dir4" type="text" value>
                    </div>
                    <div class="col-md-1 col-sm-2 col-2 pr-1 pl-0 d-flex align-items-center justify-content-end" style = "text-align: center">
                    <div class="new_input rounded-circle" onclick="showMore('dir5',this)"></div>
                    </div>
                    </div>
                    <div class="row mx-0 mt-1 w-100 d-none" id="dir5">
                    <div class="col-md-11 col-sm-10 col-10 px-2">
                    <input class="form-control tool_inp_sty rounded-0" maxlength="200" name="dir5" type="text" value>
                    </div>
                    <div class="col-md-1 col-sm-2 col-2 pr-1 pl-0 d-flex align-items-center justify-content-end" style = "text-align: center">
                    <div class="new_input rounded-circle" onclick="showMore('dir6',this)"></div>
                    </div>
                    </div>
                    <div class="row mx-0 mt-1 w-100 d-none" id="dir6">
                    <div class="col-md-11 col-sm-10 col-10 px-2">
                    <input class="form-control tool_inp_sty rounded-0" maxlength="200" name="dir6" type="text" value>
                    </div>
                    <div class="col-md-1 col-sm-2 col-2 pr-1 pl-0 d-flex align-items-center justify-content-end" style = "text-align: center">
                    <div class="new_input rounded-circle" onclick="showMore('dir6','#dir5 .new_input')"></div>
                    </div>
                    </div>
                    </div>
                    <samp class="d-block mx-auto my-2 text-center" id="b_b__sst"><div class="new___s_ bq"></div></samp>
                    <div class="col p-0 my-3">
                    <button class="tool_btn px-3 text-white border-0 m-1" name="robots_txt" onclick="genRobots(this.form,msg1,msg2)" style="background-color: rgb(33,36,177);" type="button">Create Robots.txt</button>
                    <button class="tool_btn px-3 text-white border-0 m-1" id="reset_btn" style="background-color: rgb(33,36,177);" type="button">Reset</button>
                    </div>
                    <samp class="d-block mx-auto my-2 text-center" id="a_b__sst"><div class="new___s_ sq"></div></samp>
                    </div>
                    </div>
                    <div id="result_section" style="display: none;">
                    <div class="res_heading my-3">Result</div>
                    <div class="border1 bg-white p-4 mps bg_2f3133">
                    <textarea class="w-100 cus_scrollbar border1 text_sty fw_600 mb-4 p-3 bg_f6f8fa d-block bg_202223" id="robolist" name="robolist"></textarea>
                    <a class="button check_button external tool_btn d-inline-flex align-items-center justify-content-center" id="a" rel="nofollow" style="background-color: rgb(33,36,177);">Export Robots.txt </a>
                    <div class="tool_btn px-3 text-white border-0 d-inline-flex align-items-center justify-content-center" data-toggle="tooltip" title="Copy To Clipboard" onclick="CopyText(this,'robolist','value')" data-name="Copy To Clipboard" style="background-color: rgb(33,36,177);">Copy To Clipboard</div>
                    </div>
                    </div>
                </form>
        </div>  
    </div>
    </div>
    </div>
    <!-- Jumbotron -->
  <!-- </section>   -->
  <hr class="hr1">
    <div class="container">
            <div class="section-title text-left">
                 <h2 class="text-center">Robot Txt Generator SEO Tool</h2>
                 <h2>Robot Txt Generator SEO Tool</h2>
                <p>Use our Robot Txt Generator SEO Tool to create and edit the robot.txt file for your website. This file instructs search engine crawlers on how to access and index your website's pages, helping to improve your website's search engine optimization (SEO) and overall visibility.</p>
                <p>Robot Txt Generator SEO Tool is a tool used by website owners and developers to create and edit the robot.txt file for their websites. The robot.txt file is a text file that tells web robots (such as search engine crawlers) which pages or sections of a website they are allowed to crawl or not crawl. This file helps website owners to control how their website is crawled by search engines, which can improve their website's search engine optimization (SEO) and overall visibility.</p>
                <p>Using our Robot Txt Generator SEO Tool, you can easily create and edit your website's robot.txt file, even if you have little or no experience with coding. Simply enter the relevant information for your website and our tool will generate the appropriate robot.txt file for you. This can help to ensure that your website is crawled properly by search engines, which can improve your website's SEO and overall visibility.</p>
            </div>
    </div>
  <?php include('footer.php');?>
    <script>
        	$('#reset_btn').click(function(){
			// $('#dir2, #dir3, #dir4, #dir5, #dir6').hide();
			$('#dir2, #dir3, #dir4, #dir5, #dir6').addClass('d-none');
			$('input[name="dir2"], input[name="dir2"], input[name="dir2"], input[name="dir2"], input[name="dir2"]').val();
			$('.new_input').removeClass('change_it');
			$('#result_section').hide();
			$('form').trigger("reset");
		});
		function showMore(id,c) {
			$('#'+id).toggleClass('d-none','d-flex');
			$(c).toggleClass('change_it');
		}
        var msg1 = "Create robots.txt file ?";
		var msg2 = "# robots.txt generated by monesta.live\n";
		var ovtxt;
		function genRobots(form,msg1,msg2) {
			if (confirm(msg1)){
				var roboListData =form.robolist;
				roboListData.value = msg2;
				if (form.google.value != "") {
					roboListData.value +="User-agent: Googlebot\nDisallow:" +
					form.google.value + "\n";
				}
				if (form.gimage.value != "") {
					roboListData.value +="User-agent: googlebot-image\nDisallow:" +
					form.gimage.value + "\n";
				}
				if (form.gmobile.value != "") {
					roboListData.value +="User-agent: googlebot-mobile\nDisallow:" +
					form.gmobile.value + "\n";
				}    
				if (form.msn.value != "") {
					roboListData.value +="User-agent: MSNBot\nDisallow:" +
					form.msn.value + "\n";
				}     
				if (form.yahoo.value != "") {
					roboListData.value +="User-agent: Slurp\nDisallow:" +
					form.yahoo.value + "\n";
				}     
				if (form.teoma.value != "") {
					roboListData.value +="User-agent: Teoma\nDisallow:" +
					form.teoma.value + "\n";
				}          
				if (form.gigablast.value != "") {
					roboListData.value +="User-agent: Gigabot\nDisallow:" +
					form.gigablast.value + "\n";
				}          
				if (form.dmoz.value != "") {
					roboListData.value +="User-agent: Robozilla\nDisallow:" +
					form.dmoz.value + "\n";
				}
				if (form.nutch.value != "") {
					roboListData.value +="User-agent: Nutch\nDisallow:" +
					form.nutch.value + "\n";
				}
				if (form.alexa.value != "") {
					roboListData.value +="User-agent: ia_archiver\nDisallow:" +
					form.alexa.value + "\n";
				}
				if (form.baidu.value != "") {
					roboListData.value +="User-agent: baiduspider\nDisallow:" +
					form.baidu.value + "\n";
				}
				if (form.naver.value != "") {
					roboListData.value +="User-agent: naverbot\nDisallow:" +
					form.naver.value + "\n";
					roboListData.value +="User-agent: yeti\nDisallow:" +
					form.naver.value + "\n";
				}
				if (form.ymm.value != "") {
					roboListData.value +="User-agent: yahoo-mmcrawler\nDisallow:" +
					form.ymm.value + "\n";
				}
				if (form.psbot.value != "") {
					roboListData.value +="User-agent: psbot\nDisallow:" +
					form.psbot.value + "\n";
				}
				if (form.blogs.value != "") {
					roboListData.value +="User-agent: yahoo-blogs/v3.9\nDisallow:" +
					form.blogs.value + "\n";
				} 
				if (form.allow.value != "") {
					roboListData.value +="User-agent: *\nDisallow:" +
					form.allow.value + "\n";
				}
				if (form.delay.value != "") {
					roboListData.value +="Crawl-delay: " +
					form.delay.value + "\n";
				}
				if (form.dir1.value != "") {
					roboListData.value +="Disallow: " +
					form.dir1.value + "\n";
				}
				if (form.dir2.value != "") {
					roboListData.value +="Disallow: " +
					form.dir2.value + "\n";
				}    
				if (form.dir3.value != "") {
					roboListData.value +="Disallow: " +
					form.dir3.value + "\n";
				}
				if (form.dir4.value != "") {
					roboListData.value +="Disallow: " +
					form.dir4.value + "\n";
				}
				if (form.dir5.value != "") {
					roboListData.value +="Disallow: " +
					form.dir5.value + "\n";
				}  
				if (form.dir6.value != "") {
					roboListData.value +="Disallow: " +
					form.dir6.value + "\n";
				} 
				if (form.sitemap.value != "") {
					roboListData.value +="Sitemap: " +
					form.sitemap.value + "\n";
					form.sitemap.value;
				}
				$("#result_section").show();
				result_focus('result_section');
			}
		}   
        $('#a').click(function(){
			download('robots.txt','');

		})
		function download(name, type) {
			var ca=$('#robolist').val();
			var a = document.getElementById("a");
			var file = new Blob([ca], {type: type});
			a.href = URL.createObjectURL(file);
			a.download = name;
			// $("#LodeGif").hide();
		}
        function CopyText(ev,selector,selector_type) {
			window.Clipboard = (function(window, document, navigator) {
				var textArea,
				copy;
				function isOS() {
					return navigator.userAgent.match(/ipad|iphone/i);
				}
				function createTextArea(text) {
					textArea = document.createElement('textArea');
					textArea.value = text;
					document.body.appendChild(textArea);
				}
				function selectText() {
					var range,
						selection;
					if (isOS()) {
						range = document.createRange();
						range.selectNodeContents(textArea);
						selection = window.getSelection();
						selection.removeAllRanges();
						selection.addRange(range);
						textArea.setSelectionRange(0, 999999);
					} else {
						textArea.select();
					}
				}
				function copyToClipboard() {
					document.execCommand('copy');
					document.body.removeChild(textArea);
				}
				copy = function(text) {
					createTextArea(text);
					selectText();
					copyToClipboard();
				};
				return {
					copy: copy
				};
			})
			(window, document, navigator);
			var copy_store='';
			var copy_length=3;
			if (selector_type == 'value' || selector_type == 'shortvalue') {
				copy_store=$('#'+selector).val();
			}else if (selector_type == 'text' || selector_type == 'shorttext'){
				copy_store=$('#'+selector).text();
			}else if (selector_type == 'html'){
				copy_store=$('#'+selector).html();
			}else if (selector_type == 'html_without_br'){
				copy_store=remove_tags($('#'+selector).html());
			}
			if(selector_type == 'shorttext' || selector_type == 'shortvalue'){
				copy_length=1;
			}
			if (copy_store == '') {
				hideTooltip(ev);
				show_messages('Error', 'No content found to copy');
			}else if(copy_store.length < copy_length){
				show_messages('Error', 'Text too short for copy');
			}else{
				Clipboard.copy(copy_store);
				selectText(selector);
				setTooltip(ev,'Copied!');
				hideTooltip(ev);
			}
		}
      </script>
</body>
</html>