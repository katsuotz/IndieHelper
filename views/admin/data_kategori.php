
<div class="row content">
	<div class="col s12">
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
						<a href="<?= baseurl('lib/deletekategori.php?id_kategori=' . $value->id_kategori) ?>" class="waves-effect waves-shadow btn red"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>