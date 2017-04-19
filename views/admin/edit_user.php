<div class="container-fluid mt1">
	
<div class="row content">

	<form action="<?= baseurl('actionEditUser.php?id_user=' . $user->id_user) ?>" method="POST">
		<legend>Form title</legend>
		<div class="input-field"> 
			<div class="form-group">
				<label class="control-label" for="">nama</label>
				<span class="help-block"></span>
				<input type="text" class="form-control" name="nama" placeholder="Input field" value="<?= $user->nama ?>">
			</div>
		</div>
		<div class="input-field"> 
			<div class="form-group">
				<label class="control-label" for="">username</label>
				<span class="help-block"></span>
				<input type="text" class="form-control" name="username" placeholder="Input field" value="<?= $user->username ?>">
			</div>
		</div>
		<div class="input-field"> 
			<select name="jk">
				<option value="" disabled >Pilih Jenis Kelamin</option>
                <option <?php if($user->jk == 'L') echo "Selected";?> value="L">Laki - Laki</option>
                <option <?php if($user->jk == 'P') echo "Selected";?> value="P">Perempuan</option>
            </select>
           	<label>Jenis Kelamin</label>
		</div>
		<div class="input-field"> 
			<div class="form-group">
				<textarea id="textarea1" class="materialize-textarea"><?= $user->alamat ?></textarea>
          		<label for="textarea1">Alamat</label>
			</div>
		</div>
		<div class="file-field input-field">
	    	<div class="btn">
	        	<span>File</span>
	        	<input type="file">
	      	</div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text">
	      </div>
    	</div>
		<div class="right-align">
			
		<button type="submit" class="btn">Submit</button>
		</div>
	</form>
</div>
<<<<<<< HEAD
=======
</div>
>>>>>>> aa287f09c7458a02bd4e58ec0b1abc3a5efd7776
