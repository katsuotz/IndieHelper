<div class="parallax-container absolute">
	<div class="parallax"><img src="<?= baseurl('assets/images/template/plx-bg.jpg') ?>"></div>
</div>
<div class="content container">
	<div class="row pt3">
		<div class="col s12 mt3">
			<div class="card">
				<div class="card-content purple lighten-1 white-text">
					<h3 class="center-align">Project</h3>
			</div>
				<div class="card-content py2">
                    <form action="<?=baseurl('lib/EditProject.php?id_project='.$id)?>" method="POST" id="update-project">
				        <div class="container-fluid">
					       <div class="row">
					<div class="input-field">
                            <div class="form-group">
                                <input id="nama_prefix" type="text" class="validate" name="nama" value="<?=$datas->nama?>">
                                <label for="icon_prefix">Nama</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input id="desc_prefix" type="text" class="validate" name="desc" value="<?=$datas->deskripsi?>">
                                <label for="icon_prefix">deskripsi</label>
                            </div>
                        </div>
                        <div class="file-group">
                            <div class="row">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="col s2">
                        <div class="card white no-shadow">
                            <div class="card-image">
                                <?php if (empty($img_project[$i - 1])) { $img_project[$i - 1] = 'default-project.jpg'; } ?>
                                <img src="<?= baseurl('assets/images/project/' . $img_project[$i - 1]) ?>" id="uploaded-project-image<?= $i ?>" class="uploaded-project-image">
                                <span class="card-title"></span>
                                <a class="btn-floating halfway-fab waves-effect waves-light red choose-file right0 bottom0 square no-shadow" id="choose-file<?= $i ?>"><i class="fa <?php if ($img_project[$i - 1] != 'default-project.jpg') { echo 'fa-remove'; } else echo 'fa-plus'; ?> font14"></i></a>
                            </div>
                            <div class="card-content hidden">
                                <div class="file-field input-field m0 p0" id="file-field<?= $i ?>">
                                    <input type="file" name="project-image<?= $i ?>" class="hidden project-image<?= $i ?> project-image" id="project-image<?= $i ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input type="number" class="validate" name="donation" value="<?= $datas->target ?>">
                                <label for="icon_prefix">Targer Donasi</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <select name="id_kategori" required>
                                    <option value="" disabled>Choose your option</option>
                                    <?php for ($i = 0; $i < count($kategori); $i++): ?>
                                    <option <?php if($datas->nama_kategori == $kategori[$i]->nama_kategori) echo 'selected' ?> value="<?= $kategori[$i]->nama_kategori ?>"><?= $kategori[$i]->nama_kategori ?></option>
                                    <?php endfor; ?>
                                </select>
                                <label>Select Category</label>
                        </div>
                        <div class="input-field">
                            <div class="chips chips-initial"></div>
                            <label for="icon_prefix">Tags</label>
                        </div>
					</div>
				        </div>
                            <button type="submit" class="update waves-light waves-effect btn" name="update">Update</button>
                    </form>
				</div>
		</div>
	</div>
</div>
</div>
<script>
    var datatags = <?=($tags_js) ?>;
</script>