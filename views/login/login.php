<div class="row p0">
    <div class="col s4 offset-s4 mt3">
        <div class="card">
            <div class="card-image center-align"> 
              <img class="activator" src="<?= baseurl('assets/images/login/banner.jpg')?>"> 
              <span class="card-title center col s12 top50">IndieHelper</span>
            </div>
            <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                    <li class="tab"><a href="#register" class="purple-text">Sign up</a></li>
                    <li class="tab"><a class="active purple-text" href="#login">Log in</a></li>
                </ul>
            </div>
            <div class="card-content white lighten-4">
                <div id="login">
                    <form action="" method="POST">
                        <div class="input-field">
                            <div class="form-group">
                                <input id="username_prefix" type="text" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input id="password_prefix" type="password" class="validate">
                                <label for="icon_prefix">Password</label>
                            </div>
                        </div>
                        <div class="right-align">
                            <button type="submit" class="btn waves-effect waves-light purple lighten-1">Submit</button>
                        </div>
                    </form>
                </div>
                <div id="register">
                    <form action="" method="POST">
                        <div class="input-field">
                            <div class="form-group">
                                <input id="username_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nama</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <div class="file-field input-field">
                                    <div class="btn purple lighten-1"> <span>File</span>
                                        <input type="file" multiple> </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Upload Foto"> </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input id="username_prefix" type="text" class="validate">
                                <label for="icon_prefix">Username</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input id="username_prefix" type="password" class="validate">
                                <label for="icon_prefix">Password</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Alamat</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <select style="">
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            <label>Jenis Kelamin</label>
                        </div>
                        <div class="right-align">
                            <button type="submit" class="btn waves-effect waves-light purple lighten-1">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>