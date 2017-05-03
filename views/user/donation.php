<div class="wrapper">
	
	<div class="container-fluid col s12">
		<div class="row">
			<div class="col m12 xl8">
				
				<div class="card ">
					<div class="card-content black-text">
						<span class="card-title">Project Donations</span>
						<form action="<?=baseurl('lib/ActionDonation.php?id_project=').$idproject?>" method="POST" id="projectdonation">
							<div class="input-field">
								<div class="form-group">
									<input name="jumlah" type="number" required class="form-control">
									<label>Donations</label>
								</div>
							</div>
							<div class="input-field">
								<div class="form-group">
									<textarea name="feedback" required class="materialize-textarea" id="textarea1"></textarea>
									<label>Feedback</label>
								</div>
							</div>
							<div class="input-field">
	                            <select name="bank" required>
	                                <option disabled selected>Bank</option>
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
			<div class="col m12 xl4">
				<div class="card">
					<div class="card-image">
					<div class="materialboxed" data-caption="<?= $datas->nama ?>" style="background-image: url('<?= baseurl('assets/images/project/').$foto[0][0]; ?>');"></div>
						 
					</div>
					<div class="card-content">
					<span class="card-title"><?=$datas->nama?></span>
						<p class="font12 title-category"><?=$datas->deskripsi?></p>
					</div>
					<div class="card-action">
						<h3 class="card-title">RP. <?=$datas->target?></h3>
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