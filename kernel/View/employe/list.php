<div id='content'>
	<center>
	<?php echo "<a href='".WEBROOT."/employe/new'>Nouvel employé</a>";?>
		<table>
			<tr>
				<th>Matricule</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th></th>
			</tr>
			<?php
			foreach($this->viewvar as $employe){
                                echo "<tr>";
				echo "<td>{$employe['emp_matricule']}</td>";
                                echo "<td>{$employe['emp_nom']}</td>";
                                echo "<td>{$employe['emp_prenom']}</td>";
				echo "<td><a href='".WEBROOT."employe/view/".$employe['emp_matricule']."'>Afficher</a></td>";
				echo "</tr>";
			}
			?>
		</table>
	</center>
</div>