	
	<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>index.php">
	    <input type="hidden" name="id" value="<?=$employee["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
		</select>
			<input type="hidden" name="id" value="<?php echo $result?>">
			
		
			<input type="hidden" name="action" value="update">
			Naam: <input type="text" placeholder="<? echo $result[0]['name']?>" required><br>
		    leefdtijd: <input type="text"  name="<? echo $result[0]['age']?>" required/><br>
				
                <input type="submit" value="WIJZIGEN" />
       
