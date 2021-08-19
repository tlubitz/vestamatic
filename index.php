<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vestamatic</title>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Vestamatic - The global solution provider in dynamic facades">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- social media meta data -->
    <meta property="og:url" content="https://www.vestamatic.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Vestamatic" />
    <meta property="og:description" content="The global solution provider in dynamic facades" />
    <meta property="og:image" content="img/home-screen.jpg" />
    
    <!-- add bootstrap CSS; normalize for JS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet">
    
	<!-- Jonahs Data Tables-->
	<link rel="manifest" href="site.webmanifest">
	<link rel="manifest" href="/img/site.webmanifest">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.css"/>
	<link rel="stylesheet" type="text/css" href="css/buttons.bootstrap4.css"/>
	<link rel="stylesheet" type="text/css" href="css/fixedColumns.bootstrap4.css"/>
	<link rel="stylesheet" type="text/css" href="css/fixedHeader.bootstrap4.css"/>
	<link rel="stylesheet" type="text/css" href="css/responsive.bootstrap4.css"/>

	<script type="text/javascript" src="js/vendor/modernizr-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" src="js/dataTables.bootstrap4.js"></script>
	<script type="text/javascript" src="js/dataTables.buttons.js"></script>
	<script type="text/javascript" src="js/buttons.bootstrap4.js"></script>
	<script type="text/javascript" src="js/dataTables.fixedColumns.js"></script>
	<script type="text/javascript" src="js/dataTables.fixedHeader.js"></script>
	<script type="text/javascript" src="js/dataTables.responsive.js"></script>


    <!-- import google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400&display=swap" rel="stylesheet"> 

    <!-- Add additional CSS in static file -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar-front" id="navbar-dynamic">
	<div class="main-logo">
		<a href="index.php#main">
		  <img src="img/logo.svg" alt="Logo Vestamatic">
		</a>
	  </div>
	<button type="button" class="navbar-toggle collapsed" id="navbutton" data-toggle="collapse" data-target="#mobile_collapse_front" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="mobile_collapse_front">

      <ul class="nav navbar-nav-front borders-out container">
		<li>
		<a class="rubric nav-item" id="topmost-nav" href="index.php#about" onclick="closeNav()">ABOUT US</a>
		</li>
		<li>
		<a class="rubric nav-item" href="index.php#product" onclick="closeNav()">MANUALS</a>
		</li>
		<li>
		<a class="rubric nav-item" href="index.php#contact" onclick="closeNav()">CONTACT</a>
		</li>
	  </ul>
	</div>
  </nav>
    
  <main id="main">
    <div class="head-container">
      <div class="background-image darken-overlay">
	<div></div>
      </div>
      <header class="cover-header">
	<div class="rubric white">
	  WE ARE VESTAMATIC
	</div>
	<h1 class="h0-custom white">Vestamatic CRE
		is the global
		solution provider
		in dynamic
		facades.</h1>
      </header>
    </div>

	<div id="about"></div>
	<article class="module-turquoise about">

		<div class="row">
		<div class="col-md-6">
		<header>
			<h1 class="h1-custom mod-1-left">About us</h1>
		</header>
		</div>
		<div class="col-md-6 mod-1-right">	
		<p class="p-custom">
			We motorize and control sun
			protection for more than 40
			years. So we have experience!
			Are we also the right partner for
			the future? We think so, but see
			for yourself!
		</p>
		</div>
		</div>
		</article>
		<div id="product"></div>
		<article class="html-snippet-list product">
		<?php include 'index_documents.php';?>
	</article>

  </main>
  <div id="contact"></div>
  <footer>
    <article class="module-dark" id="footer-responsive">
      <div class="row">
	    <div class="col-md-12">
	  	  <div class="rubric-large center">
	        <button id="button-contact" class="transp">CONTACT</button>
	      </div>
	    </div>
      </div>
    </article>
	
    <div id="modal-contact" class="modal">
      <div class="modal-content">
		<span class="close">&times;</span>
		<h1 class="h1-custom">CONTACT</h1>
		<p class="p-custom">
		Vestamatic CRE GmbH
		</p>
		<p class="p-custom">
		Dohrweg 27<br>
		D-41066 Mönchengladbach
		</p>
		<p class="p-custom">
			info@vestamatic.com
		</p>
		<p class="p-custom">
			Tel.: +49 2161 / 29 408-0
		</p>
		<div class="rubric-large center">
		<a href="imprint.html" class="white">IMPRINT</a>
		</div>
		<div class="rubric-large center">
		<a href="dsgvo.html" class="white">DSGVO</a>
		</div>
		<div class="rubric-large center">
		<a href="agb.html" class="white">AGB</a>
		</div>
	

      </div>
    </div>

    <article class="module-dark" id="footer-desktop">
      <div class="row">
	<div class="col-md-4 fd-1">
	  <h1 class="h1-custom">CONTACT</h1>
	  <p class="p-custom">
	    Vestamatic CRE GmbH
	  </p>
	  <p class="p-custom">
	    Dohrweg 27<br>
	    D-41066 Mönchengladbach
	  </p>
	  <p class="p-custom">
			info@vestamatic.com
		</p>
	  <p class="p-custom">
	    Tel.: +49 2161 / 29 408-0
	  </p>
	</div>
	<div class="col-md-4 fd-2">
	</div>
	<div class="col-md-4 fd-3">
	  <p>
	    <div class="rubric-medium center"><a href="imprint.html" class="white button-like">IMPRINT</a></div>
	  </p><br>
	  <p>
	    <div class="rubric-medium center"><a href="dsgvo.html" class="white button-like">DSGVO</a></div>
	  </p><br>
	  <p>
	    <div class="rubric-medium center"><a href="agb.html" class="white button-like">AGB</a></div>
	  </p>
	</div>
      </div>
    </article>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/scripts_index.js"></script>
</body>
</html>
