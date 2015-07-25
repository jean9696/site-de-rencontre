<form method="POST" action="../fonctions/valider_report.php" style="text-align:center">
	<div class="form-group">
		<label class=" control-label" for="inputbasic"> Que reprochez vous à <?php echo $_POST['pseudo']; ?> ?</label>
		<div>
			 <textarea placeholder="Ne reportez pas sans raison sous peine de sanctions" name="message" class="form-control" style="resize:none; height: 300px;"></textarea>
		</div>
		<input type="text" name="pseudo" value="<?php echo $_POST['pseudo']; ?>" class="hidden">
	</div>
	<button class="btn btn-success" type="submit">Valider</button>
</form>