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
    <title>Vestamatic - DSGVO</title>
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
			<a href="dsgvo.php?la=eng"><img src="img/eng.jpg" alt="<?=$lang['lang-eng'];?>" title="<?=$lang['lang-eng'];?>" /></a>
			<a href="dsgvo.php?la=ger"><img src="img/ger.jpg" alt="<?=$lang['lang-ger'];?>" title="<?=$lang['lang-ger'];?>" /></a>
		</div>
		</div>
	  </nav>
  
  <main>
    <article class="header-sub">
      <header>
	<h1 class="h1-custom"><?php echo $lang['dsgvo_head'];?></h1>
      </header>
    </article>
      
    <article class="article-small">
      <div class="row">
	<div class="col-md-12">
	  <p class="p-custom">
	  <?php echo $lang['dsgvo_0_1'];?>
	  </p>
	  
	  <p class="p-custom">
	  <?php echo $lang['dsgvo_0_2'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_0_3'];?>
	</p>

	<h2><?php echo $lang['dsgvo_1_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_0_1'];?>
	</p>

	<p class="p-custom">
	<?php echo $lang['dsgvo_1_0_2'];?>
		<h3><?php echo $lang['dsgvo_1_1_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_1_1'];?>
		</p>
		<h3><?php echo $lang['dsgvo_1_2_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_2'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_3_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_3'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_4_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_4'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_5_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_5'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_6_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_6'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_7_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_7'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_8_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_8'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_9_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_9'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_10_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_10'];?>
	</p>
		<h3><?php echo $lang['dsgvo_1_11_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_1_11'];?>
	</p>
	</p>
	<h2><?php echo $lang['dsgvo_2_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_2_1'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_2_2'];?>
	</p>

	<h2><?php echo $lang['dsgvo_3_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_3_1'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_3_2'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_3_3'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_3_4'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_3_5'];?>
	</p>

	<h2><?php echo $lang['dsgvo_4_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_4_1'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_4_2'];?>
	</p>

	<h2><?php echo $lang['dsgvo_5_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_5_1'];?>
	</p>

	<h2><?php echo $lang['dsgvo_6_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_6_1'];?>
	</p>
	<p class="p-custom">
	<?php echo $lang['dsgvo_6_2'];?>
	</p>

	<h2><?php echo $lang['dsgvo_7_head'];?></h2>
		<h3><?php echo $lang['dsgvo_7_1_head'];?></h3>
	<p class="p-custom">
	<?php echo $lang['dsgvo_7_1'];?>
	</p>
		<h3><?php echo $lang['dsgvo_7_2_head'];?></h3>
	<p class="p-custom">
		<?php echo $lang['dsgvo_7_2_1'];?><br><br>
		<?php echo $lang['dsgvo_7_2_2'];?><br><br>
		<?php echo $lang['dsgvo_7_2_3'];?><br><br>
		<?php echo $lang['dsgvo_7_2_4'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_3_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_3_1'];?><br><br>
		<?php echo $lang['dsgvo_7_3_2'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_4_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_4_1'];?><br><br>
		<?php echo $lang['dsgvo_7_4_2'];?><br><br>
		<?php echo $lang['dsgvo_7_4_3'];?><br><br>
		<?php echo $lang['dsgvo_7_4_4'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_5_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_5_1'];?><br><br>
		<?php echo $lang['dsgvo_7_5_2'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_6_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_6_1'];?><br><br>
		<?php echo $lang['dsgvo_7_6_2'];?><br><br>
		<?php echo $lang['dsgvo_7_6_3'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_7_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_7_1'];?><br><br>
		<?php echo $lang['dsgvo_7_7_2'];?><br><br>
		<?php echo $lang['dsgvo_7_7_3'];?><br><br>
		<?php echo $lang['dsgvo_7_7_4'];?><br><br>
		<?php echo $lang['dsgvo_7_7_5'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_8_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_8_1'];?><br><br>
		<?php echo $lang['dsgvo_7_8_2'];?><br><br>
		<?php echo $lang['dsgvo_7_8_3'];?>
		</p>
		<h3><?php echo $lang['dsgvo_7_9_head'];?></h3>
		<p class="p-custom">
		<?php echo $lang['dsgvo_7_9_1'];?><br><br>
		<?php echo $lang['dsgvo_7_9_2'];?>
		</p>
	</p>

	<h2><?php echo $lang['dsgvo_8_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_8'];?>
	</p>

	<h2><?php echo $lang['dsgvo_9_head'];?></h2>
	<p class="p-custom">
		<?php echo $lang['dsgvo_9_1'];?><br><br>
		<?php echo $lang['dsgvo_9_2'];?><br><br>
		<?php echo $lang['dsgvo_9_3'];?><br><br>
		<?php echo $lang['dsgvo_9_4'];?><br><br>
		<?php echo $lang['dsgvo_9_5'];?><br><br>
		<?php echo $lang['dsgvo_9_6'];?><br><br>
		<?php echo $lang['dsgvo_9_7'];?><br><br>
	</p>

	<h2><?php echo $lang['dsgvo_10_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_10_1'];?><br><br>
	<?php echo $lang['dsgvo_10_2'];?><br><br>
	<?php echo $lang['dsgvo_10_3'];?><br><br>
	<?php echo $lang['dsgvo_10_4'];?><br><br>
	<?php echo $lang['dsgvo_10_5'];?><br><br>
	<?php echo $lang['dsgvo_10_6'];?><br><br>
	<?php echo $lang['dsgvo_10_7'];?><br><br>
	<?php echo $lang['dsgvo_10_8'];?><br><br>
	<?php echo $lang['dsgvo_10_9'];?><br><br>
	</p>

	<h2><?php echo $lang['dsgvo_11_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_11_1'];?><br><br>
	<?php echo $lang['dsgvo_11_2'];?><br><br>
	<?php echo $lang['dsgvo_11_3'];?><br><br>
	<?php echo $lang['dsgvo_11_4'];?><br><br>
	<?php echo $lang['dsgvo_11_5'];?><br><br>
	<?php echo $lang['dsgvo_11_6'];?><br><br>
	</p>

	<h2><?php echo $lang['dsgvo_12_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_12_1'];?><br><br>
	<?php echo $lang['dsgvo_12_2'];?><br><br>
	<?php echo $lang['dsgvo_12_3'];?><br><br>
	<?php echo $lang['dsgvo_12_4'];?><br><br>
	<?php echo $lang['dsgvo_12_5'];?><br><br>
	<?php echo $lang['dsgvo_12_6'];?><br><br>
	</p>

	<h2><?php echo $lang['dsgvo_13_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_13_1'];?><br><br>
	<?php echo $lang['dsgvo_13_2'];?><br><br>
	<?php echo $lang['dsgvo_13_3'];?><br><br>
	</p>

	<h2><?php echo $lang['dsgvo_14_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_14'];?>
	</p>

	<h2><?php echo $lang['dsgvo_15_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_15'];?>
	</p>

	<h2><?php echo $lang['dsgvo_16_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_16_1'];?>
	<?php echo $lang['dsgvo_16_2'];?>
	<?php echo $lang['dsgvo_16_3'];?>
	</p>

	<h2><?php echo $lang['dsgvo_17_head'];?></h2>
	<p class="p-custom">
	<?php echo $lang['dsgvo_17'];?>
	</p>
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
