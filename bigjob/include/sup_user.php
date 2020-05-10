    
    <form method="post">
		<input type="hidden" name="id2" value="<?php echo $u[0];?>" />
		<input name='sup3' value='Supprimer' type='submit' class="btn btn-danger">
	</form>

<?php
$connexion =  mysqli_connect("localhost","root","","bigjob");
	if(isset($_POST['id2']))
	{
		if(isset($_POST['sup3']))
		{
			$pid=$_POST['id2'];
			$requete2S="DELETE FROM utilisateurs where id = $pid";
		    $requete2SQ=mysqli_query($connexion,$requete2S);
						 	
			header("refresh:0");
		}


	}

?>