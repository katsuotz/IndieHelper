
<div class="row content">
	<div class="col s12">
		<!-- Modal Trigger -->
		<a class="waves-effect waves-light btn modal-trigger my1" href="#modal-add-kategori">Add Kategori</a>
		
		<!-- Modal Structure -->
		<div id="modal-add-kategori" class="modal">
			<form action="<?= baseurl('lib/addkategori.php') ?>" method="POST" id="form-add-kategori">
				<div class="modal-content">
					<h4>Add Kategori</h4>
					<legend></legend>
					<div class="input-field"> 
						<div class="form-group">
							<label class="control-label" for="">Nama Kategori</label>
							<span class="help-block"></span>
							<input type="text" class="form-control" name="nama_kategori">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Add</button>
				</div>
			</form>
		</div>
		<table>
			<thead>
				<tr>
					<th data-field="id">ID Kategori</th>
					<th data-field="nama">Nama Kategori</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>
		
			<tbody>
				<?php foreach ($kategori as $key => $value): ?>
				<tr>
					<td><?= $value->id_kategori ?></td>
					<td><?= $value->nama_kategori ?></td>
					<td>
						<a href="<?= baseurl('editkategori.php?id_kategori=' . $value->id_kategori) ?>" class="waves-effect waves-shadow btn yellow darken-2"><i class="fa fa-pencil"></i></a>
						<a href="<?= baseurl('lib/deletekategori.php?id_kategori=' . $value->id_kategori) ?>" class="waves-effect waves-shadow btn red delete-btn"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>