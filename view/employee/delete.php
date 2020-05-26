<?php
// maak een bevestig pagina voor het verwijderen van een mededwerker


 if($getresult != NULL){ ?>
        <p>weet je het zker dat je het wilt deleten.</p>
    <form action="indekc.php" method="post" class="deleteForm">
        <input type="hidden" value="<?= $getresult ?>" name="id"></input>
        <input type="submit" value="YES" class="deleteButton"></input>
    </form>
   <?php } ?>











