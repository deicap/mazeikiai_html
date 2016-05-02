<!DOCTYPE html>
<html lang="lt">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	
	<meta name="viewport" content="width=1100">

	<link href="css/site.css" rel="stylesheet">
	
	<link href="js/jquery-ui-1.11.4.custom/jquery-ui.min.css" rel="stylesheet">
	<link href="js/jquery-ui-1.11.4.custom/jquery-ui.theme.min.css" rel="stylesheet">
	
	<link href="js/fancybox/jquery.fancybox.css" rel="stylesheet">
	
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/site.js"></script>
	
</head>
<body class="<?php if (isset($_GET['print-layout'])) { echo 'print-layout'; } ?> <?php if (isset($_GET['accessibility-layout'])) { echo 'accessibility-layout'; } ?>">

<!--[if lt IE 9]>
<div class="browser-warning">Jūs naudojate pasenusią naršyklę, todėl šis puslapis gali būti atvaizduojamai neteisingai. Rekomenduojame <a target="_blank" href="http://browsehappy.com/">atnaujinti savo interneto naršyklę</a> ir apsilankyti dar kartą!</div>
<![endif]-->

<header class="site-header">

	<?php include('templates/components/header.php') ?>

</header>

<main class="site-main">
	
	<div class="container">
	
		<div class="row">
		
			<div class="col-xs-12">
			
				<div class="trow trow-top site-main-trow">

					<aside class="sidebar-left">

						<?php include('templates/components/sidebar-left.php') ?>

					</aside>
					
					<div class="site-content">
					
						<?php

							if (isset($_GET['template'])) {
								
								include('templates/pages/'.$_GET['template'].'.php');
								
							} else {
								
								include('templates/pages/homepage.php');
								
							}

						?>
					
					</div>

					<aside class="sidebar-right">

						<?php include('templates/components/sidebar-right.php') ?>

					</aside>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
		
</main>

<footer class="site-footer">

	<?php include('templates/components/footer.php') ?>

</footer>

<!-- tether.js for bootstrap tooltips -->
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>