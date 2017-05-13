
<div class="row content">
	<div class="col table-data">
		<table>
			<thead>
				<tr>
					<th data-field="id">ID</th>
					<th data-field="name">Nama</th>
					<th data-field="tgl">Tanggal</th>
					<th data-field="target">Target</th>
					<th data-field="income">Income</th>
					<th data-field="ktg">Kategori</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>
		
			<tbody>
				<?php foreach ($project as $key => $value): ?>
				<tr>
					<td><?= $value->id_project ?></td>
					<td><?= $value->nama ?></td>
					<td><?= substr($value->tgl, 0, 10) ?></td>
					<td>$<?= $value->target ?></td>
					<td>$<?= $value->income ?></td>
					<td><?= $value->nama_kategori ?></td>
					<td>
						<a href="<?= baseurl('editprojectadmin.php?id_project=' . $value->id_project) ?>" class="waves-effect waves-shadow btn yellow darken-2"><i class="fa fa-pencil"></i></a>
						<a href="<?= baseurl('lib/deleteproject.php?id_project=' . $value->id_project) ?>" class="waves-effect waves-shadow btn red"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>