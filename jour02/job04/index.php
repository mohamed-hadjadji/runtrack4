<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
	<br/><br/><br/><br/>

	<section>
		<div class="row">
		    <form class="col s12">
		        
					<label>Civilité: </label>
					<label>
						<input name="group1" type="radio" checked />
						<span>M.</span>
					</label>
					<label>
						<input name="group1" type="radio" />
						<span>Mme.</span>
				    </label>
				    <div class="row">
						<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="icon_prefix" type="text" class="validate">
					        <label for="icon_prefix">Prénom</label>
	                    </div>
						<div class="input-field col s6">
					        <i class="material-icons prefix">account_circle</i>
					        <input id="icon_prefix" type="text" class="validate">
					        <label for="icon_prefix">Nom</label>
	                    </div>
						<div class="input-field col s6">
					        <i class="material-icons prefix">place</i>
					        <input id="icon_prefix" type="text" class="validate">
					        <label for="icon_prefix">Adresse</label>
	                    </div>
						<div class="input-field col s6">
					        <i class="material-icons prefix">email</i>
					        <input id="icon_prefix" type="text" class="validate">
					        <label for="icon_prefix">Email</label>
	                    </div>
						<div class="input-field col s6">
					        <i class="material-icons prefix">lock</i>
					        <input id="icon_prefix" type="text" class="validate">
					        <label for="icon_prefix">Email</label>
	                    </div>
						<div class="input-field col s6">
					        <i class="material-icons prefix">lock</i>
					        <input id="icon_prefix" type="text" class="validate">
					        <label for="icon_prefix">Confirmer Email</label>
	                    </div>
	                </div>
					<label>Passions: </label>
					<p>
				      <label>
				        <input type="checkbox" />
				        <span>Informatique</span>
				      </label>
				    </p>
		            <p>
				      <label>
				        <input type="checkbox" />
				        <span>Voyages</span>
				      </label>
				    </p>
		            <p>
				      <label>
				        <input type="checkbox" />
				        <span>Sport</span>
				      </label>
				    </p>
		            <p>
				      <label>
				        <input type="checkbox" />
				        <span>Lecture</span>
				      </label>
				    </p>
		            <button class="btn waves-effect waves-light" type="submit" name="action">Valider
					    <i class="material-icons right">send</i>
					</button>
		        
		    </form> 
		</div>
	</section>
	<br/><br/><br/><br/>

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