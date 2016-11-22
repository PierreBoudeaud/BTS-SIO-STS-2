<div id='content'>
	<center>
		<table>
			<tr>
				<th>Matricule</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Adresse</th>
				<th>Ville</th>
				<th>Code Postal</th>
				<th>Téléphone</th>
				<th>Portable</th>
				<th>Email</th>
				<th>Date Embauche</th>
				<th>Quotité</th>
			</tr>
			<tr>
				<?php 
	
					foreach($this->viewvar as $val){
						echo "<td>{$val}</td>";
					}	
				?>
			</tr>
		</table>
	</center>
</div>