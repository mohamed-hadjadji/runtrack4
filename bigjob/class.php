<?php

class user
{
	private $id;
	public $nom;
  public $prenom;
  public $email;
	private $mdp;
    
    public function register($email,$nom,$prenom,$mdp,$mdp2)
    {
        $connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');
        
        $email = $_POST['email'];
        $mdp= password_hash($_POST["mdp1"], PASSWORD_DEFAULT, array('cost' => 12));
        
         if ($_POST['mdp1']==$_POST['mdp2'])
            {
            $reponse = $connexion->query("SELECT* FROM utilisateurs WHERE email='".$email."'");
            $resultat=$reponse->fetchAll();
            $trouve=false;
            foreach ($resultat as $key => $value) 
            {
            if ($resultat[$key][1]==$_POST['email'])
            {
               $trouve=true;
               header('Location: index.php?erreur1=1'); // Email existe déja
            }
           }
           if ($trouve==false)
           {
            $sql = $connexion->query( "INSERT INTO utilisateurs (email,nom,prenom,password,rank)
                VALUES ('$email','$nom','$prenom','$mdp','moderateur')");      
            header('location:index.php');
            }
           }
           else
           {
              header('Location: index.php?erreur2=1'); // Les mots de passe doivent être identique
           }	
    }

     public function connect($email,$mdp)
   {
   	 $connexion =  mysqli_connect("localhost","root","","bigjob");

   	 if(isset($_POST['email']) && isset($_POST['mdp']))
        {
             
            $email = mysqli_real_escape_string($connexion,htmlspecialchars($_POST['email']));
            $mdp = mysqli_real_escape_string($connexion,htmlspecialchars($_POST['mdp']));

            if($email !== "" && $password !== "")
            {
                $requete = "SELECT count(*) FROM utilisateurs where
                email= '".$email."' ";
                $exec_requete = mysqli_query($connexion,$requete);
                $reponse      = mysqli_fetch_array($exec_requete);
                $count = $reponse['count(*)'];

                $requete4 = "SELECT * FROM utilisateurs WHERE email='".$email."'";
                $exec_requete4 = mysqli_query($connexion,$requete4);
                $reponse4 = mysqli_fetch_array($exec_requete4);

                if( $count!=0 && $_SESSION['email'] !== "" && password_verify($mdp, $reponse4[4]) )
                {
            
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['id'] = $reponse4[0];
               
                header('Location: calendrier.php');
                }
                else
                {
                header('Location: index.php?erreur=1'); // utilisateur ou mot de passe incorrect
                }
            }
        }
            
    }

}

class presence
{
   public function reservation($dated,$datef,$iduser)
   {
      $connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');

      $requete= $connexion->query("INSERT INTO presenses (datedebut,datefin, id_user) VALUES ('$dated', '$datef','$iduser')");

      header('Location: calendrier.php');
   }

   public function get_reservation()
   {
      $connexion = new PDO('mysql:host=localhost;dbname=bigjob', 'root', '');

      $requeteres = $connexion->query("SELECT nom,prenom,datedebut,datefin FROM utilisateurs INNER JOIN presences WHERE utilisateurs.id = id_user");
     
   }
}
?>