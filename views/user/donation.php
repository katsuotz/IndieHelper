<div class="wrapper">
	
	<div class="container-fluid col s12">
		<div class="row">
			<div class="col s8">
				
				<div class="card ">
					<div class="card-content black-text">
						<span class="card-title">Judul Project Donasi</span>
						<form action="" method="POST">
							<div class="input-field">
								<div class="form-group">
									<input name="jumlah" type="number" class="form-control">
									<label>Jumlah Donasi</label>
								</div>
							</div>
							<div class="input-field">
								<div class="form-group">
									<textarea name="feedback" class="materialize-textarea" id="textarea1"></textarea>
									<label>Feedback</label>
								</div>
							</div>
							<div class="input-field">
	                            <select name="jk" required>
	                                <option disabled selected>Pilih Bank</option>
	                                <?php foreach ($bank as $key => $value): ?>
	                                <option value="<?= $value->id_bank ?>"><?= $value->nama_bank ?></option>
									<?php endforeach; ?>
	                            </select>
	                            <label>Bank</label>
	                        </div>

							<button type="submit" class="btn">submit</button>
						</form>
					</div>
					
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image"> <img src="<?= baseurl('assets/images/login/banner.jpg')?>"> </div>
					<div class="card-content">
						<div class="font14 title-category">Travel</div> <span class="card-title">nama Project</span>
						<p>Lorem Ipsum Dolor Sit Amet</p>
					</div>
					<div class="card-action">
						<h3 class="card-title">RP. 900000</h3>
						<div class="progress">
							<div class="determinate" style="width: 70%"></div>
						</div>
						<div class="row m0 py0 pl0 pr1">
							<div class="col s4 center-align"> <span>80</span> <span>Backer</span> </div>
							<div class="col s4 center-align"> <span>80</span> <span>Backer</span> </div>
							<div class="col s4 center-align"> <span>80</span> <span>Backer</span> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>