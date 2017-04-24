
<div class="row content">
	<div class="col s12">
		<table>
			<thead>
				<tr>
					<th data-field="id-donasi">ID Donasi</th>
					<th data-field="id-project">ID Project</th>
					<th data-field="id-bank">ID Bank</th>
					<th data-field="name">Name</th>
					<th data-field="total">Total</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($donasi as $key => $value): ?>
				<tr>
					<td>
						<?php if ($value->status == 'Sudah'): ?>
						<a class="btn yellow"> href="<?= baseurl('lib/changeStatusdonasi/?id_donasi=' . $value->id_donasi . '&status=0') ?>"><i class="material-icons">clear</i></a>
						<?php endif; ?>
						<?php if ($value->status == 'Belum'): ?>
						<a class="btn green"> href="<?= baseurl('lib/changestatusdonasi/?id_donasi=' . $value->id_donasi . '&status=1') ?>"><i class="material-icons">done</i></a>
						<?php endif; ?>
						<a class="btn red"> href="<?= baseurl('lib/deletedonasi/?id_donasi=' . $value->id_donasi) ?>"><i class="material-icons">delete</i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>