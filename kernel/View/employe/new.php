<div id='content'>
	<center>
		<table>
		<tr>
			<th>Matricule</th>
			<td><input type='text' name='emp_matricule' placeholder='Axx'></td>
		</tr>
		<tr>
			<th>Nom</th>
			<td><input type='text' name='emp_nom'></td>
		</tr>
		<tr>
			<th>Prénom</th>
			<td><input type='text' name='emp_prenom'></td>
		</tr>
		<tr>
			<th>Adresse</th>
			<td><input type='text' name='emp_rue'></td>
		</tr>
		<tr>
			<th>Ville</th>
			<td><input type='text' name='emp_ville'></td>
		</tr>
		<tr>
			<th>Code Postal</th>
			<td><input type='text' name='emp_codepostal'></td>
		</tr>
		<tr>
			<th>Téléphone</th>
			<td><input type='text' name='emp_tel'></td>
		</tr>
		<tr>
			<th>Portable</th>
			<td><input type='text' name='emp_portable'></td>
		</tr>
		<tr>
			<th>Email</th>
			<td><input type='text' name='emp_email'></td>
		</tr>
		<tr>
			<th>Date Embauche</th>
			<td><input type='date' id="datepicker"></td>
			<input type='hidden' id="emp_dateembauche" name='emp_dateembauche'>
		</tr>
		<tr>
			<th>Quotité</th>
			<td><input type='text' name='emp_quotite'></td>
		</tr>
		</table>
		<input type='submit' value="Créer l'employé">
	</center>
	
	  <script>
		$( "#datepicker" ).datepicker({
			altField: "#datepicker",
			closeText: 'Fermer',
			prevText: 'Précédent',
			nextText: 'Suivant',
			currentText: 'Aujourd\'hui',
			monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
			monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
			dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
			dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
			dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
			weekHeader: 'Sem.',
			dateFormat: 'yy-mm-dd'
});
		$( "#datepicker" ).datepicker( "option", "firstDay", 1 );
  </script>
</div>