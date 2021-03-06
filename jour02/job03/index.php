<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<title></title>
</head>
<body>
	<header>
		<nav>
		    <div class="nav-wrapper light-blue darken-4">
		    
		      <ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="index.php">Accueil</a></li>
		        <li><a href="index.php">Inscription</a></li>
		        <li><a href="index.php">Connexion</a></li>
		        <li><a href="index.php">Rechercher</a></li>
		      </ul>
		    </div>
		</nav>
	</header>
	<section>
		<form>
			<label>Civilité: </label>
			<input type="radio" name="monsieur" value="M" checked>
			<label for="M">M.</label>
			<input type="radio" name="madame" value="Mme">
			<label for="Mme">Mme.</label>
			<label>Prénom: </label>
			<input type="text" name="prenom" value="Votre prénom">
			<label>Nom: </label>
			<input type="text" name="nom" value="Votre nom">
			<label>Adresse: </label>
			<input type="text" name="prenom" value="Votre adresse">
			<label>Email: </label>
			<input type="text" name="email" value="Votre email">
			<label>Password: </label>
			<input type="text" name="mdp" value="Password">
			<label>Confirmer Password: </label>
			<input type="text" name="mdp2" value="Password">
			<label>Passions: </label>
			<input type="checkbox" id="" name="info">
            <label for="info">Informatique</label>
            <input type="checkbox" id="" name="voy">
            <label for="voy">Voyages</label>
            <input type="checkbox" id="" name="sport">
            <label for="sport">Sport</label>
            <input type="checkbox" id="" name="lect">
            <label for="lect">Lecture</label>
            <input type="submit" name="valide" value="Valider">
		</form>
	</section>

	<footer class="page-footer light-blue darken-4">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
	                <h5 class="white-text">Footer Content</h5>
	                <p class="grey-text text-lighten-4">© 2014 Copyright Text</p>
	             </div>
				<div class="col l4 offset-l2 s12">
				    <h5 class="white-text">Liens</h5>
				      <ul id="" class="white-text">
				        <li><a class="grey-text text-lighten-3" href="index.php">Accueil</a></li>
				        <li><a class="grey-text text-lighten-3" href="index.php">Inscription</a></li>
				        <li><a class="grey-text text-lighten-3" href="index.php">Connexion</a></li>
				        <li><a class="grey-text text-lighten-3" href="index.php">Rechercher</a></li>
				      </ul>
				 </div>
			</div>
		</div>
	</footer>

    

</body>
</html>