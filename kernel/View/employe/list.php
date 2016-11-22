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
				<th></th>
			</tr>
			<?php
			foreach($this->viewvar as $employe){
				echo "<tr>";
				foreach($employe as $val){
						echo "<td>{$val}</td>";
					}
				echo "<td><a href='".WEBROOT."employe/view/".$employe['emp_matricule']."'>Afficher</a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</div>