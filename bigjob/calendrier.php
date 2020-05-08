<?php
session_start();

if (isset($_SESSION['email']))
{
    echo "Bienvenue";
    include("class.php");

    $pres = new presence();

    if (isset($_POST['reserver'])) 
    {
        $pres->reservation($_POST['datedebut'], $_POST['datefin'], $_SESSION['id']);
    }
?>
<!DOCTYPE html>
<html lang="fr">

	<head>
          <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"> 
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css"> 
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>

   </head>


<body>
	<header>	        
	        <nav class="naviguer">
	            <span><a href="index.php?deconnexion=true">Déconnexion</a></span>
	        </nav>
	        
	</header>
	
    <section>
        <form action='' method='POST'>
		     <div class="container">
	          <div class="row">
	            <div class='col-sm-6'>
	                <div class="form-group">
	                	<p>Date et heure d'entrée: </p>
	                    <div class='input-group date' id='datetimepicker1'>
	                        <input type='text' name='datedebut' class="form-control" />
	                        <span class="input-group-addon">
	                            <span class="glyphicon glyphicon-calendar"></span>
	                        </span>
	                    </div>
	                </div>
	            </div>

	            <script type="text/javascript">
	                $(function () {
	                    $('#datetimepicker1').datetimepicker();
	                });
	            </script>
	          </div>
	       </div>
	       <div class="container">
	          <div class="row">
	            <div class='col-sm-6'>
	                <div class="form-group">
	                	<p>Date et heure de sortie: </p>
	                    <div class='input-group date' id='datetimepicker2'>
	                        <input type='text' name='datefin' class="form-control" />
	                        <span class="input-group-addon">
	                            <span class="glyphicon glyphicon-calendar"></span>
	                        </span>
	                    </div>
	                </div>
	            </div>
	            
	            <script type="text/javascript">
	                $(function () {
	                    $('#datetimepicker2').datetimepicker();
	                });
	            </script>
	          </div>
	       </div>
	       <input type='submit' name='reserver' value='Valider'>
        </form>
    </section>
  


</body>

	  
	    

	<?php	
}
else
{
	echo "Connectez-vous d'abord";
}
?>
</html>