<?php
session_start();

if (isset($_SESSION['email']))	
{

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<header>	        
	        <nav class="">
	            <span><a href="index.php?deconnexion=true">Déconnexion</a></span>
	        </nav>
	        
	</header>
<?php
    $connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');
    $requeta = $connexion->query("SELECT* FROM utilisateurs WHERE email='".$_SESSION['email']."'");
    $result=$requeta->fetchAll();
    $_SESSION['rank'] =  $result[0][5];

	if($_SESSION['rank']=='Admin')

    {
	echo "Bienvenue Boss";
	?>

    <section>
    	<h2>Liste des Membres</h2>
        <table>
        	<tr>
				<th>Prénom</th>
				<th>Nom</th>
				<th>Email</th>
				<th>Statut</th>
				<th></th>

			</tr>
	<?php

	$reponse = $connexion->query("SELECT* FROM utilisateurs ");
	$resultat=$reponse->fetchAll();


	foreach ($resultat as $u) 
	{
	?> 
			<tr>
				<td><?=$u[3]?></td>
				<td><?=$u[2]?></td>
				<td><?=$u[1]?></td>
				<td><?=$u[5]?></td>
				<td><?php include("include/sup_user.php")?></td>
			</tr>
        	
		<?php
	}

    //include("class.php");

    //$pres = new presence();

    //$pres->get_reservation();

    ?>
        </table>
    </section>
   
    <section>
    	<h2>Modifier Le Statut des membres</h2>
    	<form method="post">
			<input name="search"type="text" placeholder="Recherche par nom" id="searchBox">
			<div id="response"></div>
				<select id="cars" class="form-control selcls" name="rang1">
  					<option value="">Choisir</option>
  						<option value="Elève">Elève</option>
  						<option value="Modérateur">Modérateur</option>
  						<option value="Admin">Admin</option>
				</select>
				<input type="submit" name="modifier" onclick="history.go(0)">
		</form>
    </section>

	<?php
	$connexion =  mysqli_connect("localhost","root","","bigjob");
	    if(isset($_POST['modifier']))
		{
			$rang1=$_POST['rang1'];
			$nameF=$_POST['search'];
			$requete3="UPDATE utilisateurs SET rank='$rang1' WHERE nom='$nameF'";
			$requete3Q=mysqli_query($connexion,$requete3);
									
		}
		
    }

	else
	{
		echo "Vous n'avez pas le droit !!";
	}
}
else
{
    header("location:index.php");
}

?>
</body>
</html>