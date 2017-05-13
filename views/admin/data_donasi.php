
<div class="row content">
	<div class="col s12">
		<table>
			<thead>
				<tr>
					<th data-field="id-donasi">ID Donasi</th>
					<th data-field="id-project">ID Project</th>
					<th data-field="id-bank">ID Bank</th>
					<th data-field="name">Feddback</th>
					<th data-field="total">Total</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($donasi as $key => $value): ?>
				<tr>
				<td><?=$value->id_donasi?></td>
				<td><?=$value->id_project?></td>
				<td><?=$value->id_bank?></td>
				<td><?=$value->feedback?></td>
				<td><?=money($value->jumlah)?></td>
					<td>
						<?php if ($value->status == 'Sudah'){ ?>
						<a class="btn" style="width: 52%;" href="<?= baseurl('lib/changeStatusdonasi.php?id_donasi=' . $value->id_donasi . '&status=0') ?>">Sudah</a>
						<?php } elseif ($value->status == 'Belum'){ ?>
						<a class="btn green" href="<?= baseurl('lib/changestatusdonasi.php?id_donasi=' . $value->id_donasi . '&status=1') ?>"><i class="material-icons">done</i></a>
						<a class="btn red" href="<?= baseurl('lib/deletedonasi/?id_donasi=' . $value->id_donasi) ?>"><i class="material-icons">delete</i></a>
						<?php } ?>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>