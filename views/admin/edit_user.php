
<div class="row content">
	<?= print_r($user) ?>
	<form action="<?= baseurl('actionEditUser.php?id_user=' . $user->id_user) ?>" method="POST">
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