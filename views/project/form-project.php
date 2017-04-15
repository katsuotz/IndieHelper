
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card white black-text">
                    <form action="<?= baseurl('lib/addproject.php') ?>" method="POST" id="form-project">
                        <div class="card-content black-text">
                            <span class="card-title">Form Project</span>
                            <legend>ID Project</legend>
                            <div class="input-field"> 
                                <div class="form-group">
                                    <label class="control-label" for="">Nama Project</label>
                                    <span class="help-block"></span>
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <a href="#" class="btn" id="addFile"><i class="fa fa-plus"></i></a>
                            <div class="file-group">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="project-image1" class="project-image1 project-image">
                                    </div>
                                    <div class="file-path-wrapper" id="textFile1">
                                        <input class="file-path validate" type="text" placeholder="ggwp">
                                    </div>
                                </div>
                            </div>
                            <img src="#" id="uploaded">
                            <div class="input-field">
                                <select name="id_kategori">
                                    <option value="" disabled selected>Choose your option</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                                <label>Materialize Multiple Select</label>
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
                                    <textarea name="desc" class="materialize-textarea" id="textarea1">aa</textarea>
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
    