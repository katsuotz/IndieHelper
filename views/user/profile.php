<div class="parallax-container absolute">
    <div class="parallax"><img src="<?= baseurl('assets/images/template/plx-bg.jpg') ?>"></div>
</div>


<?php if ($id_user == $session->get_session('ID')): ?>
<form action="lib/updateprofile.php" method="post">
<?php endif ?>

<div class="content container">
    <div class="row pt3">
        <div class="col s12 mt3">
            <div class="card profile-card white mt3">
                <div class="card-content teal lighten-1 white-text col s12">
                    <div class="center-align col s4">
                        <?php if($session->get_session('STATUS') == 'user'){ ?>

                        <span class="card-image-profile"><img src="<?= baseurl('assets/images/user/').$session->get_session('FOTO') ?>" class="circle my1"></span>

                        <?php }else{ ?>

                        <span class="card-image-profile"><img src="<?= baseurl('assets/images/admin/').$session->get_session('FOTO') ?>" class="circle my1"></span>
                        <?php } ?>
                    </div>
                    <div class="left-align col s8 pt2 mt2">
                        <div class="row m0 py0 pl0 pr1">
                            <?php if ($id_user == $session->get_session('ID')) { ?>
                                <span class="card-title left m0"><input type="text" value="<?= $data->nama_user ?>" name="nama"></span>    
                            <?php } else { ?>
                            <span class="card-title left m0"><?=$data->nama_user ?> </span>
                            <?php } ?>
                            <button type="submit" class="waves-effect waves-shadow btn right grey lighten-3 black-text">Update</button>
                        </div>
                        <div class="row m0 pb1">
                            <p class="m0 font12">
                                <?php if ($id_user == $session->get_session('ID')) { ?>
                                <input type="text" value="<?= $data->alamat ?>" name="alamat">    
                                <?php } else { ?>
                                <?=$data->email ?>
                                <?php } ?>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="card-tabs">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab col s3"><a class="purple-text active" href="#test1">Profile</a></li>
                        <li class="tab col s3"><a class="purple-text" href="#test2">Contributions</a></li>
                        <li class="tab col s3"><a class="purple-text" href="#test3">Project</a></li>
                    </ul>
                </div>
                <div class="card-content py2">
                    <div id="test1" class="container">

                        <div class="row pb1 m0">
                            <div class="col s4"><b>Email</b></div>
                            <div class="col s8">
                                <?php if ($id_user == $session->get_session('ID')) { ?>
                                <input type="text" value="<?= $data->email ?>" name="email">
                                <?php } else { ?>
                                <?=$data->email ?>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row pb1 m0">
                            <div class="col s4"><b>About</b></div>
                            <div class="col s8">
                                <p class="justify-align">
                                <?php if ($id_user == $session->get_session('ID')) { ?>
                                <input type="text" name="deskripsi" placeholder="Deskripsi" value="<?= $data->desk_user ?>">
                                <?php } else { ?>
                                <?=$data->desk_user ?>
                                <?php } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="test2" class="container-fluid contribution">
                        <div class="row">
                            <div class="col s12">
                                <?php foreach ($donasi as $donation) {?>
                                <div class="col s6">
                                    <div class="collection">
                                        <a href="#!" class="collection-item">
                                            <div class="row m0">
                                                <div class="col s6">
                                                    <span>Name Project</span>
                                                </div>
                                                <div class="col s6">
                                                    <span><?= $donation->nama ?></span>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#!" class="collection-item">
                                            <div class="row m0">
                                                <div class="col s6">
                                                    <span>Donations</span>
                                                </div>
                                                <div class="col s6">
                                                    <span><?=money($donation->jumlah)?></span>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="collection-item">
                                            <div class="row m0">
                                                <div class="col s6">status</div>
                                                <div class="col s6">
                                                    <span class="new badge left ml0 <?php if($donation->status == 'Belum') echo " red "; ?>" data-badge-caption="<?=$donation->status?>"></span></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div id="test3" class="container-fluid my-project">
                        <div class="row">
                            <?php $i = 0; foreach ($project as $value) {?>
                            <div class="col s12 xl6 p0 ">
                                <div class="col s12">
                                    <div class="card ">
                                        <div class="carousel carousel-slider ">
                                            <?php
                                        for ($j=0; $j < count($foto[$i]); $j++) { 
                                    ?>
                                                <a class="carousel-item " href="<?=$fotohref[$j]?>">
                                        <div class="image" style="background-image: url('<?=baseurl('assets/images/project/').$foto[$i][$j]?>')"></div>
                                        </a>
                                                <?php } ?>
                                        </div>
                                        <div class="row mb0" style="padding-left:24px; padding-right: 24px; padding-top: 8px">
                                            <div class="col s12">
                                                <p class="font24">
                                                    <?=$value->nama_project?>
                                                </p>
                                            </div>
                                            <div class="col s12">
                                                <div class="row valign-wrapper">
                                                    <div class="col s2">
                                                        <img src="<?=baseurl('assets/images/user/').$value->foto_user?>" alt="" class="circle responsive-img">
                                                    </div>
                                                    <div class="col s10">
                                                        <span class="black-text font17"><?= $value->nama ?></span>
                                                        <p class="m0 font12">
                                                            <?= $value->alamat ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row valign-wrapper mb0 custom-padding">

                                            <div class="col s12">

                                                <h3 class="card-title">
                                                    <?=money($value->target)?>
                                                </h3>
                                                <div class="progress">
                                                    <div class="determinate" style="width: <?=percent($value->income,$value->target)?>%"></div>
                                                </div>
                                                <div class="col s12 my1">
                                                    <a href="detailproject.php?id=<?=$value->id_project?>"><button type="button" class="full-width waves-effect darken-1 waves-light btn">Views</button></a>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                            <?php $i++;} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($id_user == $session->get_session('ID')): ?>
</form>
<?php endif ?>
