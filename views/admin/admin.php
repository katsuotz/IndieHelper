
<div class="row content p1">
	<div class="col s12">
		<div class="card">
			<div class="card-content">
				<p>Welcome Admin, <?=$session->get_session('NAMA')?></p>
			</div>
		</div>
	</div>
	<div class="col s12 p0">
		<div class="col l4 x4 s12">
			<div class="card">
				<div class="card-content">
					<div class="center-align">
					<p class="card-title">Statistics Project</p>
					<div class="divider"></div>
						<h4><?=$project->hitung?></h4>
						<p>Project</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col l4 x4 s12">
			<div class="card">
				<div class="card-content">
					<div class="center-align">
					<p class="card-title">Users Active</p>
					<div class="divider"></div>
						<h4><?=$user->hitung?></h4>
						<p>Users</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col l4 x4 s12">
			<div class="card">
				<div class="card-content">
					<div class="center-align">
					<p class="card-title">Statistics Donation</p>
					<div class="divider"></div>
						<h4><?=$donasi->hitung?></h4>
						<p>Donation</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>