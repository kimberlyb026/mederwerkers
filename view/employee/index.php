	<?php
		// maak een overzicht lijst van ALLE personen
       $employees = getAllEmployees();
		
	?>
	<h1>Overzicht van personen</h1>
	<ul>


			<?php
		
		foreach($employees as $result){ ?>
		
			<div class="text-left border">
				<strong><?=$result['name']?></strong>  
					<strong><?=$result['age']?></strong>
				</div>
			<?php
		
		
	
			// de opbouw van de link bepaald welke method in welke controller aangeroepen wordt.
			// het woordje "employee" in de url betekent dat het framework moet zoeken naar een controller genaamd "EmployeeController".
			// Hij maakt van de eerste letter een hoofdletter en plakt er zelf "Controller" achter.
			// Het woordje "update" of "delete" betekent dat hij in deze controller moet zoeken naar een method met deze naam.
			?>
							

			<a href="<?=URL?>employee/update/<?= $result['id']?>">Wijzigen</a> <a href="employee/delete/<?= $result['id']?>">Verwijderen</a>
	<?}	?>
	</ul>