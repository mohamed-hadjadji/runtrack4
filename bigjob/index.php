<?php
session_start();


                
if(isset($_GET['deconnexion']))
{ 
    if($_GET['deconnexion']==true)
    {  
        session_unset();
        header("location:index.php");
    }
}
                

if(!isset($_SESSION['email']))
{
      
    include("class.php");
	
    $user = new user();

    if (isset($_POST['inscription'])) 
    {
        $user->register($_POST['email'], $_POST['nom'], $_POST['prenom'], $_POST['mdp1'], $_POST['mdp2']);
    }

    if (isset($_POST['connexion'])) 
    {
        $user->connect($_POST['email'], $_POST['mdp']);
    }

    ?>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <link rel="stylesheet" type="text/css" href="styles/style.css">
        <title>Accueil</title>
        </head>
        <body class="">
            <header>
                <nav class="navbar navbar-dark bg-dark">
                  <a class="navbar-brand">Présence Laplateforme_</a>
                  <form class="form-inline" method='POST'>
                        <input class="form-control mr-sm-2" type="text" placeholder="Email" aria-label="Search" pattern=".+@laplateforme.io" name='email' required>
                        <input class="form-control mr-sm-2" type="password" placeholder="Mot de passe" aria-label="Search"  name='mdp' required>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="connexion">Connexion</button>
                 
                            <?php
                                    if(isset($_GET['erreur']))
                                    {
                                        $err = $_GET['erreur'];
                                        if($err==1 || $err==2)
                                            echo "<p class='erreur'><b>*Email ou mot de passe incorrect*</b></p>";
                                    }
                                    
                            ?>
                    </form>
            </header>
            <main>
                <section class="container navbar-dark bg-dark">
                    <h1 class="text-center"> Inscription </h1>

                    <form action='' method='POST'>
                        <div class="col-sm-12 my-4">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">@</div>
                            </div>
                            <input type='text' pattern=".+@laplateforme.io" name='email' class="form-control" id="inlineFormInputGroupUsername" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                       
                            <div class="col my-4">
                                <input type='text' class="form-control" name='nom' placeholder="Nom" required>
                            </div>
              
                            <div class="col my-4">
                                <input type='text' class="form-control" name='prenom' placeholder="Prénom" required>
                            </div> 
                        </div>
                        <div class="form-row">
                           <div class="col my-4">
                                <input type='password' class="form-control" name='mdp1' placeholder="Mot de passe" required>
                            </div>
                            <div class="col my-4">          
                                <input type='password' class="form-control" name='mdp2' placeholder="Confirmation mot de passe" required>
                            </div>
                        </div>
                        <div class="bout">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="inscription">Inscription</button>
                        </div>
                    </form>
                </section>  
            </main>
            <footer class="foot navbar-dark bg-dark">
                <p> Copyright 2020 Coding School | All Rights Reserved | Project by Mohamed HADJADJI</p>
            </footer>
        </body>
    </html>
<?php
}
else
{
    echo "déja connecter";
}
?>