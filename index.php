<?php include_once 'ressources/config.php';?>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>BBC Board</title>

<!-- Bootstrap Core CSS -->
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/business-casual.css" rel="stylesheet">

<!-- Fonts -->
<link
	href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
	rel="stylesheet" type="text/css">
<link
	href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
	rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="brand">
		<a href="index.php">BBC Board</a>
	</div>
	<div class="address-bar"></div>

	<!-- includation of menu -->
	<?php
	include_once 'ressources/menu.php';
	?>
    <div class="container">

		<div class="col-lg-12 text-center">



			<!-- Title of chatbox -->
			<div class="row">
				<div class="box">
					<div class="col-lg-12">

						<h1>Board</h1>


					</div>
				</div>
			</div>
			<!-- End of title -->

			<!-- Sections of Board -->
			<div class="row">
				<div class="col-xs-6">
					<div class="panel">
						<div class="list-group">
							<div class="panel-heading">
								<h3 class="panel-title">
									<h4>
										<span class="glyphicon glyphicon-console" aria-hidden="true"></span>
										API
									</h4>
								</h3>
							</div>
							
							<?php
							$query = "select * from kapitel where fachrichtung = 'a'";
							$resultat = $mysqli->query ( $query );
							while ( $result = $resultat->fetch_array () ) {
								?>
							<a href="thema.php?id=<?php echo $result['pfad'] ?>" class="list-group-item"><?php echo $result['name'] ?></a>
							
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="panel">
						<div class="list-group">
							<div class="panel-heading">
								<h3 class="panel-title">
									<h4>
										<span class="glyphicon glyphicon-hdd" aria-hidden="true"></span>
										SYS
									</h4>
								</h3>
							</div>
							
							<?php
							$query = "select * from kapitel where fachrichtung = 's'";
							$resultat = $mysqli->query ( $query );
							while ( $result = $resultat->fetch_array () ) {
								?>
							<a href="thema.php?id=<?php echo $result['pfad'] ?>" class="list-group-item"><?php echo $result['name'] ?></a>
							
							<?php } ?>
							
						</div>
					</div>
				</div>
			</div>
			<!-- End of Sections -->

		</div>


		<footer>
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="footer">
						<p>Copyright &copy; BBC Chat 2015</p>
					</div>
				</div>
			</div>
			<!-- /.container -->


		</footer>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>