
<div class="row content">
	<?= print_r($kategori) ?>
	<form action="<?= baseurl('actionEditUser.php?id_user=' . $user->id_user) ?>" method="POST">
		<legend>Form title</legend>
		<div class="input-field"> 
			<div class="form-group">
				<label class="control-label" for="">Nama Kategori</label>
				<span class="help-block"></span>
				<input type="text" class="form-control" name="username" placeholder="Input field" value="<?= $kategori->nama_kategori ?>">
			</div>
		</div>
		
		<button type="submit" class="btn">label</button>
	</form>
</div>
