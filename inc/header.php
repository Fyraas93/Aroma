<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Aroma Events </title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/nouislider/nouislider.min.css">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="ldBar" data_preset="bubble">

</div>
	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
		  <nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
			  <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
				<ul class="nav navbar-nav menu_nav ml-auto mr-auto">
				  <li class="nav-item active"><a class="nav-link" href="index.php">Accueil</a></li>
				  <li class="nav-item submenu dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
					  aria-expanded="false">Evenements</a>
					<ul class="dropdown-menu">
					  <li class="nav-item"><a class="nav-link" href="category.php">Categories</a></li>
					<li class="nav-item"><a class="nav-link" href="promo.php"> </a></li>
					  <li class="nav-item"><a class="nav-link" href="favoris2.php">favoris</a></li>
					</ul>
					</li>
					<li class="nav-item submenu dropdown">
						 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
					  aria-expanded="false">Suivi</a>
					<ul class="dropdown-menu">
					 
					</ul>
				  </li>
				  
			</ul>
			<ul class="nav navbar-nav menu_nav ml-auto mr-auto">
			<ul class="nav-shop">
				  <?php include "../entities/favoris.class.php";
						$favoris=new favoris();
						 //session_start(); 
						 if(isset($_SESSION['user'])):?>
					<li class="nav-item submenu dropdown">
						<h5 class="nav-link dropdown-toggle">Bienvenue,<?php echo $_SESSION['user']?></h5>
					  <ul class="dropdown-menu">
						<li class="nav-item"><a class="nav-link" href="compte.php">Mon Compte</a></li>
						<li class="nav-item "><a class="nav-link" href="..\views\logout.php">Se deconnecter</a></li>
					  </ul>
								</li>
								
					<li class="nav-item"><button><a href="..\views\favoris2.php"><i><span class="nav-shop__circle"><?php $nb=$favoris->count(); $vnb=($nb)-0; echo $vnb; ?></span></i></a></button> </li>
                	<?php else: ?>
					<li class="nav-item"><button><a href="..\views\favoris2.php"><i ></i></a><span class="nav-shop__circle"><?php $nb=$favoris->count(); $vnb=($nb)-0; echo $vnb; ?></span></button> </li>
					<li class="nav-item"><i class="ti-user"></i>&nbsp; &nbsp;<a href="..\views\login.php">Connectez-vous</a> ou <a href="..\views\register_views.php">Créez un compte</a></li>
					<?php endif; ?>
					</ul>
			</ul>
				
			  </div>
			</div>
		  </nav>
		</div>
	  </header>
	<!--================ End Header Menu Area =================-->
  