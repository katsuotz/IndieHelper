
<div class="row content">
	<div class="col table-data">
		<table class="highlight">
			<thead>
				<tr>
					<th data-field="id">ID</th>
					<th data-field="name">Name</th>
					<th data-field="tgl">Date</th>
					<th data-field="target">Target</th>
					<th data-field="income">Income</th>
					<th data-field="progress">progress</th>
					<th data-field="ktg">Category</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>
		
			<tbody>
				<?php foreach ($project as $key => $value): ?>
				<tr>
					<td><?= $value->id_project ?></td>
					<td><?= $value->nama ?></td>
					<td><?= substr($value->tgl, 0, 10) ?></td>
					<td><?= money($value->target) ?></td>
					<td><?= money($value->income) ?></td>
					<td><?= percent($value->income,$value->target)?>%</td>
					<td><?= $value->nama_kategori ?></td>
					<td>
						<a href="<?= baseurl('editprojectadmin.php?id_project=' . $value->id_project) ?>" class="waves-effect waves-shadow btn yellow darken-2"><i class="fa fa-pencil"></i></a>
						<a href="<?= baseurl('lib/deleteproject.php?id_project=' . $value->id_project) ?>" class="waves-effect waves-shadow btn red delete-btn"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>