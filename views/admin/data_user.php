
<div class="row content">
	<div class="col s12">
		<table>
			<thead>
				<tr>
					<th data-field="photo">Foto</th>
					<th data-field="username">Username</th>
					<th data-field="name">Name</th>
					<th data-field="jk">JK</th>
					<th data-field="address">Alamat</th>
					<th data-field="action">Action</th>
				</tr>
			</thead>
		
			<tbody>
				<?php foreach ($user as $key => $value): ?>
				<tr>
					<?php if (!$value->foto) $value->foto = 'default.jpg'; ?>
					<td><img src="<?= baseurl('assets/images/user/' . $value->foto) ?>" class="image-user"></td>
					<td><?= $value->username ?></td>
					<td><?= $value->nama ?></td>
					<td><?= $value->jk ?></td>
					<td><?= $value->alamat ?></td>
					<td>
						<a href="<?= baseurl('edituser.php?id_user=' . $value->id_user) ?>" class="waves-effect waves-shadow btn yellow darken-2"><i class="fa fa-pencil"></i></a>
						<a href="<?= baseurl('lib/deleteuser.php?id_user=' . $value->id_user) ?>" class="waves-effect waves-shadow btn red"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>