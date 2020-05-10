<section class="container">
    	<h2>Liste des Membres</h2>
        <table class="table table-dark">
        	<tr>
				<th scope="col">Prénom</th>
				<th scope="col">Nom</th>
				<th scope="col">Email</th>
				<th scope="col">Statut</th>
				

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
					
				</tr>
	        	
			<?php
		}

		?>
	</table>
</section>