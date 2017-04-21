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
				<div class="container-fluid">
					<div class="row">
					<div class="input-field">
                            <div class="form-group">
                                <input id="password_prefix" type="text" class="validate" name="nama">
                                <label for="icon_prefix">Nama</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input id="password_prefix" type="password" class="validate" name="dsk">
                                <label for="icon_prefix">deskripsi</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <div class="form-group">
                                <input type="date" class="datepicker" name="date">
                                <label for="icon_prefix">Tanggal Pembuatan</label>
                            </div>
                        </div>	
                        <div class="input-field">
                            <div class="form-group">
                                <input type="number" class="validate" name="target">
                                <label for="icon_prefix">Targer Donasi</label>
                            </div>
                        </div>
                        <div class="input-field">
                            <select name="id_kategori">
                                    <option value="" disabled selected>Choose your option</option>
                                    <?php for ($i = 0; $i < count($kategori); $i++): ?>
                                    <option value="<?= $kategori[$i]->id_kategori ?>"><?= $kategori[$i]->nama_kategori ?></option>
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
					
				</div>
		</div>
	</div>
</div>
</div>