<?php
session_start();

if (isset($_SESSION['email']))
{
	$connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');
    $requeta = $connexion->query("SELECT* FROM utilisateurs WHERE email='".$_SESSION['email']."'");
    $result=$requeta->fetchAll();
    $_SESSION['rank'] =  $result[0][5];

    //include("class.php");

    //$pres = new presence();

   // if (isset($_POST['reserver'])) 
    //{
       // $pres->reservation($_POST['datedebut'], $_POST['datefin'], $_SESSION['id']);
    //}
?>
<!DOCTYPE html>
<html>
    <head>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
	  <script type="text/javascript" src="js/agenda_script.js"></script>
	  <link rel="stylesheet" type="text/css" href="styles/style.css">
	  <title>Agenda</title>
    </head>


	<body>
		<header>	        
		        <nav class="navbar navbar-dark bg-dark">
		        <?php
	            if($_SESSION['rank']=='Admin' || $_SESSION['rank']=='Modérateur')
	            {?>
	            	<div class="row justify-content-between">
		        	<span><a class="navbar-brand" href="admin.php">Administrateur</a></span>
		        	<?php
		        }?>
		            <span><a class="navbar-brand" href="index.php?deconnexion=true">Déconnexion</a></span>
		            </div>
		        </nav>
		        
		</header>

		<br />
		  
		  <div class="container">
		  	<h3 align="center">Faites votre demande de présence directement sur l'agenda</h3>
		  <br />
		     <div id="calendar"></div>
		  </div>
        <footer class="foot navbar-dark bg-dark">
            <p> Copyright 2020 Coding School | All Rights Reserved | Project by Mohamed HADJADJI</p>
        </footer>
	</body>	  
	<?php	
}
else
{
	echo "Connectez-vous d'abord";
}
?>
</html>