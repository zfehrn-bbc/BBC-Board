<?php
?>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BBC Chat</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/business-casual.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand"><a href="../index.php">BBC Chat</a></div>
    <div class="address-bar"></div>

    <!-- includation of navigation -->
    <?php 
    include_once '../ressources/menu.php';
    ?>

    <div class="container">

                <div class="col-lg-12 text-center">



        <div class="row">
            <div class="box">
                <div class="col-lg-12">
				
					<h1>Anmelden</h1>
				

                </div>
            </div>
        </div>
        
        
        <!-- body of form -->
        <form method="post" action="../ressources/login.php">
            <div class="box">
            	<div class="registrieren">
	            	Username<br>
	        		<input type="text" id="username" name="username" required><br><br>
	        		
	        		Passwort<br>
	        		<input type="password" id="passwort" name="passwort" required><br><br>
	        		
	        		<input class="btn btn-info" type="submit" id="submit" placeholder="Registrieren" required><br><br>
	        	</div>
        	</div>
        </form>
        <!-- /form -->



    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                  <div class="footer">
                    <p>Copyright &copy; BBC Chat 2015</p>
                </div>
            </div>
        </div>
    	</div>
    </footer>

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</div>

</body>

</html>