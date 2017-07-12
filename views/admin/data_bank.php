
<div class="row content">
	<div class="col s12">
		<!-- Modal Trigger -->
		<a class="waves-effect waves-light btn modal-trigger my1" href="#modal-add-kategori"><i class="material-icons">add</i></a>
		
		<!-- Modal Structure -->
		<div id="modal-add-kategori" class="modal">
			<form action="<?= baseurl('lib/addbank.php') ?>" method="POST" id="form-add-bank">
				<div class="modal-content">
					<h4>Add Bank</h4>
					<legend></legend>
					<div class="input-field"> 
						<div class="form-group">
							<label class="control-label" for="">Nama Bank</label>
							<span class="help-block"></span>
							<input type="text" class="form-control" name="nama_bank">
						</div>
					</div>
					<div class="input-field"> 
						<div class="form-group">
							<label class="control-label" for="">Nama Rekening</label>
							<span class="help-block"></span>
							<input type="text" class="form-control" name="nama_rekening">
						</div>
					</div>
					<div class="input-field"> 
						<div class="form-group">
							<label class="control-label" for="">Rekening</label>
							<span class="help-block"></span>
							<input type="number" class="form-control" name="rekening">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="waves-effect waves-green btn-flat modal-action modal-close">Add</button>
				</div>
			</form>
		</div>
		<?php if (!empty($bank)): ?>
		<table>
			<thead>
				<tr>
					<th data-field="id">ID Bank</th>
					<th data-field="nama-bank">Nama Bank</th>
					<th data-field="nama-rek">Nama Rekening</th>
					<th data-field="rekening">Nomor Rekening</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>
		
			<tbody>
				<?php foreach ($bank as $key => $value): ?>
				<tr>
					<td><?= $value->id_bank ?></td>
					<td><?= $value->nama_bank ?></td>
					<td><?= $value->nama_rekening ?></td>
					<td><?= $value->rekening ?></td>
					<td>
						<a href="<?= baseurl('editbank.php?id_bank=' . $value->id_bank) ?>" class="waves-effect waves-shadow btn yellow darken-2"><i class="material-icons">edit</i></a>
						<a href="<?= baseurl('lib/deletebank.php?id_bank=' . $value->id_bank) ?>" class="waves-effect waves-shadow btn red delete-btn"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php endif;
		if (empty($bank)): ?>
			<h4 class="center mt3">No data found</h4>
		<?php endif; ?>
	</div>

</div>