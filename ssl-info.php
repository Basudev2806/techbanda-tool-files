<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SSL Checker SEO Tool</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="SSL Checker, SSL certificate, website security, HTTPS, SSL validation, online tool" name="keywords">
    <meta content="Use our SSL Checker SEO tool to check if your website has a valid SSL certificate and is secured with HTTPS. Ensure your website is protected and provide your visitors with a secure browsing experience." name="description">

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
    <link rel="canonical" href="https://techbanda.com/tools/ssl-info">
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
        <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #e0e0e0;
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
                            <h2 class="text-white animated zoomIn text-center">SSL Checker Tool</h2>
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
                    <form action="ssl-info.php" method="post">
                    <div class="form-group row">
                            <label for="inputText" class="col-sm-2 col-form-label">Enter URL </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-control-lg" name="host" placeholder="URL" />
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-lg" name="examine_ssl">Examine SSL</button>
                            </div>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['examine_ssl'])) {
                        $url = $_POST['host'];
                        $input_value = $_POST['host'];
                        if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                            $url = "http://" . $url;
                        }
                        $host = parse_url($url, PHP_URL_HOST);
                    $context = stream_context_create(array(
                        "ssl" => array(
                            "capture_peer_cert" => true,
                            "verify_peer" => true,
                            "verify_peer_name" => true,
                            "allow_self_signed" => false,
                            "capture_peer_cert_chain" => true,
                            "cafile"=>"/etc/pki/tls/certs/ca-bundle.crt"
                        )
                    ));
                    $stream = stream_socket_client("ssl://".$host.":443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $context);
                    if ($stream) {
                        $params = stream_context_get_params($stream);
                        $peer_certificate = $params["options"]["ssl"]["peer_certificate"];
                        $chain = isset($params["options"]["ssl"]["peer_certificate_chain"]) ? $params["options"]["ssl"]["peer_certificate_chain"] : [];

                        $certificate_info = openssl_x509_parse($peer_certificate);
                        $subject = $certificate_info["subject"];
                        $issuer = $certificate_info["issuer"];
                        $valid_from = date("M d, Y", $certificate_info["validFrom_time_t"]);
                        $valid_to = date("M d, Y", $certificate_info["validTo_time_t"]);
                        $ip = gethostbyname($host);
                        $server_type = $_SERVER['SERVER_SOFTWARE'];
                        
                        if (isset($certificate_info['extensions']['subjectAltName'])) {
                        $san_list = explode(", ", $certificate_info['extensions']['subjectAltName']);
                        foreach ($san_list as $san) {
                            if (strpos($san, 'DNS:') === 0) {
                                $ssl_chain_info['subject_alternative_names'][] = substr($san, 4);
                                }
                            }
                        }

                        foreach($chain as $idx => $cert) {
                            $chain[$idx] = openssl_x509_parse($cert);
                        }

                        $expiry_date = DateTime::createFromFormat('M d, Y', $valid_to);
                        $current_date = new DateTime();
                        $days_until_expiry = $current_date->diff($expiry_date)->days;
                        $days_until_expiry_with_text = $days_until_expiry . " days";

                        $ssl_chain_info = [
                            "ip" => $ip,
                            "server_type" => $server_type,
                            "subject" => $subject['CN'],
                            "issuer" => $issuer['CN'],
                            "valid_from" => $valid_from,
                            "valid_to" => $valid_to,
                            "days_until_expiry" => $days_until_expiry_with_text,
                            "subject_alternative_names" => $san_list,
                            "chain" => []
                        ];

                        foreach($chain as $idx => $cert) {
                            $valid_from = date("M d, Y", $cert["validFrom_time_t"]);
                            $valid_to = date("M d, Y", $cert["validTo_time_t"]);
                    
                            $chain_cert_info = [
                                "common_name" => $cert['subject']['CN'],
                                "organization" => isset($cert['subject']['O']) ? $cert['subject']['O'] : '',
                                "location" => isset($cert['subject']['L']) ? $cert['subject']['L'].", ".$cert['subject']['ST'].", ".$cert['subject']['C'] : 'US',
                                "valid_from" => $valid_from,
                                "valid_to" => $valid_to,
                                "signature_algorithm" => $cert['signatureTypeSN'],
                                "issuer" => $cert['issuer']['CN']
                            ];
                    
                            $ssl_chain_info["chain"][] = $chain_cert_info;
                        }
                    }
                    if ($ssl_chain_info) {

                        if (!empty($ssl_chain_info['chain'])) {
                            $chain_count = count($ssl_chain_info['chain']);
                            $chunks = array_chunk($ssl_chain_info['chain'], ceil($chain_count/3));
                            echo '<h2 style="text-align: center;">Result</h2>';
                            echo '<table style="width: 100%;">';
                            echo '<tr><th><img src="https://smallseotools.com/webimages/expd_tick.svg" alt="success image"></th><td style="border-width: 1;">'  ."resolves to " .$ssl_chain_info['ip']. '</td></tr>';
                            echo '<tr><th><img src="https://smallseotools.com/webimages/expd_tick.svg" alt="success image"></th><td style="border-width: 1;">'  ."Server Type: " .$ssl_chain_info['server_type']. '</td></tr>';
                            echo '<tr><th><img src="https://smallseotools.com/webimages/expd_tick.svg" alt="success image"></th><td style="border-width: 1;">'  ."The certificate was issued by  " .$ssl_chain_info['issuer']. '</td></tr>';
                            echo '<tr><th><img src="https://smallseotools.com/webimages/expd_tick.svg" alt="success image"></th><td style="border-width: 1;">'  ."The certificate will expire in " .$ssl_chain_info['days_until_expiry']. '</td></tr>';
                            echo '</table>';
                            echo '<h2 style="text-align: center;">Server</h2>';
                            echo '<table  style="width: 100%;">';
                            echo '<tr><th>Common Name</th><td style="border-width: 1;">' .$chunks[0][0]['common_name']. '</td></tr>';
                            echo '<tr><th>SANs</th><td style="border-width: 1;">';
                            foreach ($ssl_chain_info['subject_alternative_names'] as $index => $san) {
                                $san = substr($san, 4); // remove "DNS:" prefix
                                echo $san;
                                if ($index != count($ssl_chain_info['subject_alternative_names']) - 1) {
                                    echo ', ';
                                }
                            }
                            echo '</td></tr>';
                            echo '<tr><th>Valid</th><td style="border-width: 1;">' ."From " .$chunks[0][0]['valid_from']." to ".$chunks[0][0]['valid_to']. '</td></tr>';
                            echo '<tr><th>Signature Algorithm</th><td style="border-width: 1;">' .$chunks[0][0]['signature_algorithm']. '</td></tr>';
                            echo '<tr><th>Issuer</th><td style="border-width: 1;">' .$chunks[0][0]['issuer']. '</td></tr>';
                            echo '</table>';
                            echo '<h2 style="text-align: center;">Chain Info</h2>';
                            echo '<table  style="width: 100%;">';
                            echo '<tr><th>Common Name</th><td style="border-width: 1;">' .$chunks[1][0]['common_name']. '</td></tr>';
                            echo '<tr><th>Organization</th><td style="border-width: 1;">' .$chunks[1][0]['organization']. '</td></tr>';
                            echo '<tr><th>Location</th><td style="border-width: 1;">' .$chunks[1][0]['location']. '</td></tr>';
                            echo '<tr><th>Valid</th><td style="border-width: 1;">' ."From " .$chunks[1][0]['valid_from']." to ".$chunks[1][0]['valid_to']. '</td></tr>';
                            echo '<tr><th>Signature Algorithm</th><td style="border-width: 1;">' .$chunks[1][0]['signature_algorithm']. '</td></tr>';
                            echo '<tr><th>Issuer</th><td style="border-width: 1;">' .$chunks[1][0]['issuer']. '</td></tr>';
                            echo '</table>';
                            echo '<h2 style="text-align: center;">Chain Info</h2>';
                            echo '<table  style="width: 100%;">';
                            echo '<tr><th>Common Name</th><td style="border-width: 1;">' .$chunks[2][0]['common_name']. '</td></tr>';
                            echo '<tr><th>Organization</th><td style="border-width: 1;">' .$chunks[2][0]['organization']. '</td></tr>';
                            echo '<tr><th>Location</th><td style="border-width: 1;">' .$chunks[2][0]['location']. '</td></tr>';
                            echo '<tr><th>Valid</th><td style="border-width: 1;">' ."From " .$chunks[2][0]['valid_from']." to ".$chunks[2][0]['valid_to']. '</td></tr>';
                            echo '<tr><th>Signature Algorithm</th><td style="border-width: 1;">' .$chunks[2][0]['signature_algorithm']. '</td></tr>';
                            echo '<tr><th>Issuer</th><td style="border-width: 1;">' .$chunks[2][0]['issuer']. '</td></tr>';
                            echo '</table>';
                            
                        }

                    } else {
                        echo 'No SSL information found.';
                    }
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
                 <h2 class="text-center">SSL Checker SEO Tool</h2>
                 <p>SSL Checker SEO Tool is a tool used to check the SSL certificate of a website and verify whether it is secured with HTTPS or not. It is important for website owners and administrators to ensure that their websites have a valid SSL certificate as it provides a secure connection between the website and its visitors. By using our SSL Checker SEO tool, you can quickly and easily check your website's SSL certificate and ensure that your website is secured with HTTPS.</p>
    <p>Use our SSL Checker SEO tool to check if your website has a valid SSL certificate and is secured with HTTPS. Ensure your website is protected and provide your visitors with a secure browsing experience.</p>
            </div>
    </div>
<?php include('footer.php');?>
</body>
</html>