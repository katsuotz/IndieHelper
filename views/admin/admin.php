
<div class="row content">
	<div id="dashboard" class="col s12">Test 1</div>
	<div id="user" class="col s12">
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
					<td><img src="<?= baseurl('assets/images/user/' . $value->foto) ?>" class="image-user"></td>
					<td><?= $value->username ?></td>
					<td><?= $value->nama ?></td>
					<td><?= $value->jk ?></td>
					<td><?= $value->alamat ?></td>
					<td>
						<a href="<?= baseurl('edituser?id_akun=' . $value->id_akun) ?>" class="waves-effect waves-shadow btn yellow darken-2"><i class="fa fa-pencil"></i></a>
						<a href="<?= baseurl('deleteuser?id_akun=' . $value->id_akun) ?>" class="waves-effect waves-shadow btn red"><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
	<div id="project" class="col s12">Test 3</div>
	<div id="bank" class="col s12">Test 4</div>
	<div id="donasi" class="col s12">Test 5</div>

</div>