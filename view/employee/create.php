<h1>Voeg een medewerker toe</h1>
<form name="create" method="post" action="create">
	<!-- bouw hier je formulier -->
	
<input type="hidden" name="id">
<div class="form-group">
<label for="">name</label>
<input type="text" name="name" class="form-control <?=$class["name"]?>" value="<?=$result["name"]?>" required>
</div>
   
<div class="form-group">
<label for="">age</label>
<input type="number" name="age" class="form-control <?=$class["age"]?>" value="<?=$result["age"]?>" required>
</div>
  
   <button class="btn btn-primary"> save </button>    


</form>