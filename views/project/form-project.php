<div class="back-project purple darken-3">
    
</div>
    <div class="container mt2">
        <div class="row">
            <div class="col s12">
                <div class="card white black-text">
                    <form action="<?= baseurl('lib/addproject.php') ?>" method="POST" id="form-project">
                        <div class="card-content black-text">
                            <span class="card-title">Add Project</span>
                            <legend>ID Project</legend>
                            <div class="input-field"> 
                                <div class="form-group">
                                    <label class="control-label" for="">Nama Project</label>
                                    <span class="help-block"></span>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>

                            <div class="file-group">
                                <div class="row">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <div class="col s2">
                                        <div class="card white no-shadow">
                                            <div class="card-image">
                                                <img src="<?= baseurl('assets/images/login/banner1.jpg') ?>" id="uploaded-project-image<?= $i ?>" class="uploaded-project-image">
                                                <span class="card-title"></span>
                                                <a class="btn-floating halfway-fab waves-effect waves-light red choose-file right0 bottom0 square no-shadow" id="choose-file<?= $i ?>"><i class="fa fa-plus font14"></i></a>
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
<!--

                            <div class="file-group">
                                <div class="row">
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <div class="col s2">
                                        <div class="card white p0 m0">
                                            <div class="card-content white-text p0 m0">
                                                <div class="file-field input-field m0 p0" id="file-field<?= $i ?>">
                                                    <div class="square btn-flat purple white-text waves-effect waves-shadow col s12 center-align">
                                                        <span><i class="fa fa-plus"></i></span>
                                                        <input type="file" name="project-image<?= $i ?>" class="project-image<?= $i ?> project-image" id="project-image<?= $i ?>">
                                                    </div>
                                                </div>
                                                <img src="" id="uploaded-project-image<?= $i ?>" class="uploaded-project-image hidden m0">
                                            </div>
                                            <div class="card-action p0 m0">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php endfor; ?>
                                </div>
                            </div>

                                    <div class="file-field input-field px1 left" id="file-field<?= $i ?>">
                                        <div class="btn purple waves-effect waves-shadow">
                                            <span><i class="fa fa-plus"></i></span>
                                            <input type="file" name="project-image<?= $i ?>" class="project-image<?= $i ?> project-image">
                                        </div>
                                    </div>
-->
                            <div class="row">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                <img src="" id="uploaded-project-image<?= $i ?>" class="col s2 uploaded-project-image hidden">
                                <?php endfor; ?>
                            </div>
                            <div class="input-field">
                                <select name="id_kategori">
                                    <option value="" disabled selected>Choose your option</option>
                                    <?php for ($i = 0; $i < count($kategori); $i++): ?>
                                    <option value="<?= $kategori->id_kategori ?>"><?= $kategori->nama_kategori ?></option>
                                    <?php endfor; ?>
                                </select>
                                <label>Select Category</label>
                            </div>
                            <div class="input-field">
                                <div class="chips chips-initial"></div>
                                <label>Tags</label>
                            </div>
                            <div class="input-field">
                                <div class="form-group">
                                    <label class="control-label">Target</label>
                                    <span class="help-block"></span>
                                    <input type="number" class="form-control" name="jumlah">
                                </div>
                            </div>
                            <div class="input-field"> 
                                <div class="form-group">
                                    <label class="control-label" for="textarea1">Deskripsi Project</label>
                                    <span class="help-block"></span>
                                    <textarea name="deskripsi" class="materialize-textarea" id="textarea1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-action right-align">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    