<div class="container-fluid">
	
<div class="row content">
	<form action="<?= baseurl('lib/ActionEditKategori.php?id_kategori='. $input->get('id_kategori')) ?>" method="POST">
		<div class="input-field"> 
			<div class="form-group">
				<label class="control-label" for="">Name Category</label>
				<span class="help-block"></span>
				<input type="text" class="form-control" name="nama_kategori" placeholder="Input field" value="<?= $kategori->nama_kategori ?>">
			</div>
		</div>
		
		<button type="submit" class="btn">Submit</button>
	</form>
</div>
</div>
