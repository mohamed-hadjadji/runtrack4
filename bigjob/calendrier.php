<?php
session_start();

if (isset($_SESSION['email']))
{
 echo "Bienvenue";


?>
<!DOCTYPE html>
<html lang="fr">

	<head>
	    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
	    <title> Calendrier</title>
	</head>

	<body class=''>

	    <header>	        
	        <nav class="naviguer">
	            <span><a href="index.php?deconnexion=true">Déconnexion</a></span>
	        </nav>
	        
	    </header>
	    <main>
	    	<p>Date: <input type="text" id="datepicker"></p>
	    </main>
	</body>
	<?php	
}
else
{
	echo "Connectez-vous d'abord";
}
?>
</html>