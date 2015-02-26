<?php
include_once 'ressources/config.php';

if (isset ( $_GET ["id"] ) && $_GET ["id"] != null) {
	$id = $_GET ["id"];
} else {
	header ( "Location: index.php" );
}

$query = "select t.id, t.user, t.titel, t.frage, t.time, k.name, k.pfad from thread as t join kapitel as k on t.kapitel_id=k.id where t.id=$id";
$thrdaten = $mysqli->query ( $query );
$thr = $thrdaten->fetch_array ();

$query2 = "SELECT a.user, a.comment, a.time, a.voting from answer as a join thread as t on a.thread_id=t.id where t.id = $id";
$ansdaten = $mysqli->query ( $query2 );

?>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>BBC Board - <?php echo $thr["titel"]; ?></title>

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

		<div class="col-lg-12">



			<!-- Title of chatbox -->
			<div class="row">
				<div style="height: 20px;">
					<div class="col-lg-12 text-center">

						<div class="fade in alert" role="alert">
							<button type="button" class="close" data-dismiss="alert"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h1><?php echo $thr["name"]; ?></h1>
							<small><?php echo "/" . $thr["pfad"]; ?> - <?php echo $thr['user']; ?> - <?php echo $thr["titel"]; ?></small>

						</div>

						<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Library</a></li>
							<li class="active">Data</li>
						</ol>

					</div>
				</div>
			</div>
			<!-- End of title -->

			<!-- Thread Frage -->
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">

					<div class="panel panel-primary">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a href="#"><?php echo $thr['user']; ?></a> - 
							<?php echo $thr['titel']; ?></h3>
						</div>
						<div class="panel-body">
							<div class="media">
								<div class="media-left media-top">
									<a href="#"> <img class="media-object"
										src="http://www.placehold.it/64x64" alt="...">
									</a>
								</div>
								<div class="media-body">

							<?php echo $thr['frage'];?>
						</div>
							</div>
						</div>
						<div class="panel-footer">
						<?php echo "/" . $thr['pfad']; ?>
						<span class="pull-right">Gefragt am <?php echo $thr['time']; ?></span>
						</div>
					</div>
					<br>


				</div>
				<div class="col-lg-1"></div>
			</div>
			<!-- Ende Thread Frage -->

			<!-- Beginn Antworten Thread -->
			<div class="row">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
				<?php while($ans = $ansdaten->fetch_array()) { ?>
			
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">
								<a href="#"><?php echo $ans['user'] ?></a>
							</h3>
						</div>
						<div class="panel-body">
							<div class="media">
								<div class="media-left media-top">
									<a href="#"> <img class="media-object"
										src="http://www.placehold.it/64x64" alt="...">
									</a>
								</div>
								<div class="media-body">
							<?php echo $ans['comment']; ?>
							</div>
							</div>
						</div>
						<div class="panel-footer">
							<a href="#" data-toggle="tooltip" data-placement="top"> 
								<span class="glyphicon glyphicon-menu-up"
								aria-hidden="true"></span></a>
						<?php echo " " . $ans['voting'] . " "; ?>
						<a href="#" data-toggle="tooltip" data-placement="top"
								title="Tooltip on top"> <span
								class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a>

							<span class="pull-right">Gefragt am <?php echo $ans['time']; ?></span>
						</div>
					</div>
					
				<?php } ?>
			</div>
				<div class="col-lg-1"></div>
			</div>
			<!-- Ende der Thread Antworten -->


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

	<script>
	
	$('#myAlert').on('closed.bs.alert', function () {
		  // do something…
		})
	</script>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

</body>

</html>