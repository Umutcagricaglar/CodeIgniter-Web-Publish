

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
<br><br>

<div class="container">
<div class="row justify-content-center">
	<div class="col-sm-10">
		<div class="form-group">
			<label for="title">Başlık</label>
			<input class="form-control" type="text" name="title" /><br />
		</div>
		<div class="form-group">
			<label for="text">Mesajınız</label>
			<textarea style="height: 100px" class="form-control" name="text"></textarea><br />
		</div>
		<input class="btn btn-primary" type="submit" name="submit" value="Yeni İleti Gönder" />
	</div>
</div>


</form>
</div>
