<div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Donation</h4>
        <form action="<?=baseurl('lib/ActionDonation.php?id_project=').$input->get('id')?>" method="POST" id="projectdonation">
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


<div class="content my2">
    <div class="container" style="width: 85%">
        <div class="row m0">
            <div class="col s12">

                <div class="col s12">
                    <span class="fontsize2"><?=$data->nama_project?></span>
                </div>
            </div>
            <div class="col s12">
                <div class="col s12 x8 l8 relative">
                    <img class="responsive-img image-project" src="<?=baseurl('assets/images/project/').$foto[0][0]?>">
                    <div class="absolute other-images pl6">
                        <div class="row">
                            <?php for ($k=0; $k < count($foto[0]); $k++){?>
                            <div class="col s2">
                                <div class="kotak">
                                    <div class="img-other" get-image="<?=baseurl('assets/images/project/').$foto[0][$k]?>" style="background-image: url('<?=baseurl('assets/images/project/').$foto[0][$k]?>')"></div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col s12 x4 l4">
                    <div class="col s12">
                        <div class="card mb1">
                            <div class="card-content black-text" style="padding: 21px 0px 1px">
                                <div class="row">
                                    <div class="col s12 valign-wrapper">
                                        <img src="<?=baseurl('assets/images/user/').$data->foto_user?>" alt="" class="margin-center circle responsive-img">
                                    </div>
                                    <div class="col s12 center-align">
                                        <span class="black-text font17"><?=$data->nama?></span>
                                        <p class="m0 font12">
                                            <?=$data->alamat?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 x12">
                        <div class="collection">
                            <a href="#!" class="collection-item">
                                <div class="row m0">
                                    <div class="col s6">
                                        <span>Target</span>
                                    </div>
                                    <div class="col s6">
                                        <span><?= money($data->target)?></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="collection-item">
                                <div class="row m0">
                                    <div class="col s6">
                                        <span>Income</span>
                                    </div>
                                    <div class="col s6">
                                        <span><?=money($data->income)?></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="collection-item">
                                <div class="row m0">
                                    <div class="col s6">
                                        <span>Date</span>
                                    </div>
                                    <div class="col s6">
                                        <span><?=substr("$data->tgl",0,10)?></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#!" class="collection-item">
                                <div class="row m0">
                                    <div class="col s6">Category</div>
                                    <div class="col s6">
                                        <span class="new badge left ml0" data-badge-caption="<?=$data->nama_kategori?>"></span></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="progress">
                            <div class="determinate" style="width:<?= percent($data->income,$data->target) ?>%"></div>
                        </div>
                    </div>
                    <div class="col s12">
                        <?php if(!empty($session->get_session('ID')) ){ ?>
                            <?php if($session->get_session('ID') == $data->id_user){ ?>
                            <a class="waves-effect waves-light btn btn-large" disabled style="width: 100%">CONTRIBUTE</a>
                            <?php }else{ ?>
                        <a class="waves-effect waves-light btn btn-large modal-trigger" href="#modal1" style="width: 100%">CONTRIBUTE</a>
                        <?php } }else{ ?>
                        <a class="waves-effect waves-light btn btn-large" href="login.php" style="width: 100%">CONTRIBUTE</a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card">
                        <div class="card-content black-text">
                            <span class="card-title">Description</span>
                            <p>
                                <?=$data->deskripsi?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card">
                        <div class="card-content black-text">
                            <span class="card-title">Contributions</span>
                            <div class="row">
                                <?php foreach ($donasi as $key => $value):?>
                                <div class="col s2">
                                    <div class="col s12 valign-wrapper">
                                        <img src="<?=baseurl('assets/images/user/').$value->foto?>" alt="" class="margin-center circle responsive-img">
                                    </div>
                                    <div class="col s12 center-align">
                                        <span class="black-text font17"><?=$value->nama?></span>
                                        <p class="m0 font12">
                                            <?=money($value->jumlah)?>
                                        </p>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
