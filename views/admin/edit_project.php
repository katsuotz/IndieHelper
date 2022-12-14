<div class="container-fluid mt1">
	<div class="row content">
		<form action="<?= baseurl('lib/actionEditProject.php?id_project=' . $project->id_project) ?>" method="POST" id="edit-project-admin">
			<legend>Form title</legend>
			<div class="input-field">
				<div class="form-group">
					<label class="control-label" for="">Nama Project</label>
					<span class="help-block"></span>
					<input type="text" class="form-control" name="nama" value="<?= $project->nama ?>">
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
                <select name="id_kategori">
                    <option value="" disabled>Choose your option</option>
                    <?php for ($i = 0; $i < count($kategori); $i++): ?>
                    <option value="<?= $kategori[$i]->id_kategori ?>" <?php if ($kategori[$i]->id_kategori == $project->id_kategori) { echo 'selected'; } ?>><?= $kategori[$i]->nama_kategori ?></option>
                    <?php endfor; ?>
                </select>
                <label>Select Category</label>
            </div>
            <div class="input-field">
				<div class="form-group">
					<label class="control-label" for="">Target</label>
					<span class="help-block"></span>
					<input type="text" class="form-control" name="target" placeholder="Input field" value="<?= $project->target ?>">
				</div>
			</div>
			<div class="input-field"> 
				<div class="form-group">
					<textarea id="textarea1" class="materialize-textarea" name="deskripsi"><?= $project->deskripsi ?></textarea>
	          		<label for="textarea1">Deskripsi Project</label>
				</div>
			</div>
			<div class="right-align">				
				<button type="submit" class="btn">Submit</button>
			</div>
		</form>
	</div>
</div>