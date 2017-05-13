<div class="container-fluid">
	
<div class="row content">
	<div class="col s12 mt1">
		<form action="<?= baseurl('lib/actioneditbank.php?id_bank=' . $bank->id_bank) ?>" method="POST">
			<div class="input-field"> 
				<div class="form-group">
					<label class="control-label" for="">Name Bank</label>
					<span class="help-block"></span>
					<input type="text" class="form-control" name="nama_bank" value="<?= $bank->nama_bank ?>">
				</div>
			</div>
			<div class="input-field"> 
				<div class="form-group">
					<label class="control-label" for="">Name</label>
					<span class="help-block"></span>
					<input type="text" class="form-control" name="nama_rekening" value="<?= $bank->nama_rekening ?>">
				</div>
			</div>
			<div class="input-field"> 
				<div class="form-group">
					<label class="control-label" for="">Rekening</label>
					<span class="help-block"></span>
					<input type="number" class="form-control" name="rekening" value="<?= $bank->rekening ?>">
				</div>
			</div>
			
			<button type="submit" class="btn">update</button>
		</form>
	</div>
</div>
</div>
