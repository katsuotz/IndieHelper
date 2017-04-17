
<div class="row content">
	<?= print_r($user) ?>
	<form action="<?= baseurl('actionEditUser.php?id_akun=' . $user->id_akun) ?>" method="POST">
		<legend>Form title</legend>
		<div class="input-field"> 
			<div class="form-group">
				<label class="control-label" for="">Username</label>
				<span class="help-block"></span>
				<input type="text" class="form-control" name="username" placeholder="Input field" value="<?= $user->username ?>">
			</div>
		</div>
		
		<button type="submit" class="btn">label</button>
	</form>
</div>