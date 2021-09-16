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
    <title>Vestamatic - AGB</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Vestamatic - The global solution provider in dynamic facades">
    <link rel="shortcut icon" href="img/favicon.png">
    
    <!-- add bootstrap CSS; normalize for JS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css" rel="stylesheet">
    
    <!-- import google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,600;0,800;1,400&display=swap" rel="stylesheet"> 

    <!-- Add additional CSS in static file -->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<nav class="navbar-front nav-dark" id="navbar-dynamic">
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
			<a href="agb.php?la=eng"><img src="img/eng.jpg" alt="<?=$lang['lang-eng'];?>" title="<?=$lang['lang-eng'];?>" /></a>
			<a href="agb.php?la=ger"><img src="img/ger.jpg" alt="<?=$lang['lang-ger'];?>" title="<?=$lang['lang-ger'];?>" /></a>
		</div>
		</div>
	  </nav>
  
  <main>
    <article class="header-sub">
      <header>
	<h1 class="h1-custom"><?php echo $lang['agb_head'];?></h1>
      </header>
    </article>
      
    <article class="article-small">
      <div class="row">
	<div class="col-md-12">
	<h2><?php echo $lang['agb_1_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['agb_1'];?>
	</p>

	<h2><?php echo $lang['agb_2_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_2_1'];?></li>
			<li><?php echo $lang['agb_2_2'];?></li>
			<li><?php echo $lang['agb_2_3'];?></li>
			<li><?php echo $lang['agb_2_4'];?></li>
			<li><?php echo $lang['agb_2_5'];?></li>
			<li><?php echo $lang['agb_2_6'];?></li>
		</ol>
	</p>

	<h2><?php echo $lang['agb_3_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_3_1'];?></li>
			<li><?php echo $lang['agb_3_2'];?></li>
			<li><?php echo $lang['agb_3_3'];?></li>
			<li><?php echo $lang['agb_3_4'];?></li>
			<li><?php echo $lang['agb_3_5'];?></li>
			<li><?php echo $lang['agb_3_6'];?></li>
		</ol>
	</p>

	<h2><?php echo $lang['agb_4_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_4_1'];?></li>
			<li><?php echo $lang['agb_4_2'];?></li>
			<li><?php echo $lang['agb_4_3'];?></li>
			<li><?php echo $lang['agb_4_4'];?></li>
		</ol>
	</p>
	<h2><?php echo $lang['agb_5_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['agb_5'];?>
	</p>
	<h2><?php echo $lang['agb_6_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['agb_6'];?>
	</p>
	<h2><?php echo $lang['agb_7_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_7_1'];?></li>
			<li><?php echo $lang['agb_7_2'];?></li>
			<li><?php echo $lang['agb_7_3'];?></li>
		</ol>
	</p>
	<h2><?php echo $lang['agb_8_head'];?></h2>
	<p class="p-custom">
		<?php echo $lang['agb_8_0'];?>
		<ol>
			<li><?php echo $lang['agb_8_1'];?></li>
			<li><?php echo $lang['agb_8_2'];?></li>
			<li><?php echo $lang['agb_8_3'];?></li>
			<li><?php echo $lang['agb_8_4'];?></li>
			<li><?php echo $lang['agb_8_5'];?></li>
			<li><?php echo $lang['agb_8_6'];?></li>
			<li><?php echo $lang['agb_8_7'];?></li>
			<li><?php echo $lang['agb_8_8'];?></li>
			<li><?php echo $lang['agb_8_9'];?></li>
			<li><?php echo $lang['agb_8_10'];?></li>
		</ol>
	</p>

	<h2><?php echo $lang['agb_9_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_9_1'];?></li>
			<li><?php echo $lang['agb_9_2'];?></li>
			<li><?php echo $lang['agb_9_3'];?></li>
			<li><?php echo $lang['agb_9_4'];?></li>
			<li><?php echo $lang['agb_9_5'];?></li>
			<li><?php echo $lang['agb_9_6'];?></li>
			<li><?php echo $lang['agb_9_7'];?></li>
		</ol>
	</p>

	<h2><?php echo $lang['agb_10_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_10_1'];?></li>
			<li><?php echo $lang['agb_10_2'];?></li>
		</ol>
	</p>
	<h2><?php echo $lang['agb_11_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_11_1'];?></li>
			<li><?php echo $lang['agb_11_2'];?></li>
			<li><?php echo $lang['agb_11_3'];?></li>
			<li><?php echo $lang['agb_11_4'];?></li>
		</ol>
	</p>
	<h2><?php echo $lang['agb_12_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_12_1'];?></li>
			<li><?php echo $lang['agb_12_2'];?></li>
			<li><?php echo $lang['agb_12_3'];?></li>
			<li><?php echo $lang['agb_12_4'];?></li>
			<li><?php echo $lang['agb_12_5'];?></li>
		</ol>
	</p>
	<h2><?php echo $lang['agb_13_head'];?></h2>
	<p class="p-custom">
		<ol>
			<li><?php echo $lang['agb_13_1'];?></li>
			<li><?php echo $lang['agb_13_2'];?></li>
			<li><?php echo $lang['agb_13_3'];?></li>
		</ol>
	</p>
	<p class="p-custom">
		<?php echo $lang['agb_download'];?>
	</p>
	</div>
      </div>
    </article>
</main>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/scripts_agb.js"></script>

</body>
</html>
