<?php
session_start();
if($_GET['la']){
    $_SESSION['la'] = $_GET['la'];
    header('Location:'.$_SERVER['PHP_SELF']);
    exit();
}

switch($_SESSION['la']){
	case "eng":
        require('lang/eng.php');
    break;
    case "ger":
        require('lang/ger.php');
    break;
    default:
        require('lang/eng.php');
    }
?>
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
		<a class="rubric nav-item" id="topmost-nav" href="index.php#about" onclick="closeNav()"><?php echo $lang['nav-about'];?></a>
		</li>
		<li>
		<a class="rubric nav-item" href="index.php#product" onclick="closeNav()"><?php echo $lang['nav-manuals'];?></a>
		</li>
		<li>
		<a class="rubric nav-item" href="index.php#contact" onclick="closeNav()"><?php echo $lang['nav-contact'];?></a>
		</li>
	  </ul>

	  <div class="lang-btns" id="langSelect">
		<a href="index.php?la=eng"><img src="img/eng.jpg" alt="<?=$lang['lang-eng'];?>" title="<?=$lang['lang-eng'];?>" /></a>
	    <a href="index.php?la=ger"><img src="img/ger.jpg" alt="<?=$lang['lang-ger'];?>" title="<?=$lang['lang-ger'];?>" /></a>
	  </div>
	</div>
  </nav>
    
  <main id="main">
    <div class="head-container">
      <div class="background-image darken-overlay">
	<div></div>
      </div>
      <header class="cover-header">
	<div class="rubric white">
		<?php echo $lang['head-small'];?>
	</div>
	<h1 class="h0-custom white"><?php echo $lang['head-large'];?></h1>
      </header>
    </div>

	<div id="about"></div>
	<article class="module-turquoise about">

		<div class="row">
		<div class="col-md-6">
		<header>
			<h1 class="h1-custom mod-1-left"><?php echo $lang['about-head'];?></h1>
		</header>
		</div>
		<div class="col-md-6 mod-1-right">	
		<p class="p-custom">
			<?php echo $lang['about-1'];?>
		</p>
		<p class="p-custom">
			<?php echo $lang['about-2'];?>
		</p>
		<p class="p-custom">
			<?php echo $lang['about-3'];?>
		</p>
		<p class="p-custom">
			<?php echo $lang['about-4'];?>
		</p>
		<p class="p-custom">
			<?php echo $lang['about-5'];?>
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
	        <button id="button-contact" class="transp"><?php echo $lang['nav-contact'];?></button>
	      </div>
	    </div>
      </div>
    </article>
	
    <div id="modal-contact" class="modal">
      <div class="modal-content">
		<span class="close">&times;</span>
		<h1 class="h1-custom"><?php echo $lang['nav-contact'];?></h1>
		<p class="p-custom">
		Vestamatic CRE GmbH
		</p>
		<p class="p-custom">
		Dohrweg 27<br>
		D-41066 Mönchengladbach
		</p>
		<p class="p-custom">
		info@vestamaticcre.com
		</p>
		<p class="p-custom">
			Tel.: +49 2161 / 29 408-0
		</p>
		<div class="rubric-large center">
		<a href="https://vestamaticcre.com" target="_blank" class="white">VESTAMATICCRE.COM</a>
		</div>
		<div class="rubric-large center">
		<a href="https://vcp-network.com" target="_blank" class="white">VCP-NETWORK.COM</a>
		</div>
		<div class="rubric-large center">
		<a href="imprint.php" class="white"><?php echo $lang['imprint'];?></a>
		</div>
		<div class="rubric-large center">
		<a href="dsgvo.php" class="white">DSGVO</a>
		</div>
		<div class="rubric-large center">
		<a href="agb.php" class="white">AGB</a>
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
	  info@vestamaticcre.com
		</p>
	  <p class="p-custom">
	    Tel.: +49 2161 / 29 408-0
	  </p>
	</div>
	<div class="col-md-4 fd-2">
	<p>
	    <div class="rubric-medium center"><a href="https://vestamaticcre.com" target="_blank" class="white button-like">VESTAMATICCRE.COM</a></div>
	  </p><br>
	  <p>
	    <div class="rubric-medium center"><a href="https://vcp-network.com" target="_blank" class="white button-like">VCP-NETWORK.COM</a></div>
	  </p><br>
	</div>
	<div class="col-md-4 fd-3">
	<p>
	    <div class="rubric-medium center"><a href="imprint.php" class="white button-like"><?php echo $lang['imprint'];?></a></div>
	  </p><br>
	  <p>
	    <div class="rubric-medium center"><a href="dsgvo.php" class="white button-like">DSGVO</a></div>
	  </p><br>
	  <p>
	    <div class="rubric-medium center"><a href="agb.php" class="white button-like">AGB</a></div>
	  </p>
	</div>
      </div>
    </article>
  </footer>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/scripts_index.js"></script>
</body>
</html>
