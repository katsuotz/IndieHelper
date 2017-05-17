<!-- Modal Trigger -->

<div class="parallax-container parallax-top white-text">
    <div class="parallax">
        <img src="<?=baseurl('assets/images/template/bg.jpg')?>">
        <div class="back-overlay"></div>
    </div>
    <div class="container-fluid">
        <div class="row pt3" style="margin-top: 18vh">
            <div class="parallax-title">
                <h2 class="center-align">Start your project with IndieHelper</h2>
            </div>
        </div>
    </div>

</div>

<div class="content container" style="width: 85%">
    <div class="row pt1">
        <div class="col s12 py1">
            <span class="font-title">Latest Project</span>
            <!-- <div class="right data-colec">
            </div> -->
        </div>
        <div class="content-card pt2">
            <div class="row">

                <?php $i = 0; foreach ($data as $key => $value){ ?>
                <div class="col s12 xl4 p0 ">
                    <div class="col s12">
                        <div class="card grey lighten-5 z-depth-1"">
                            <div class="carousel carousel-slider">
                                <?php
                                    for ($j=0; $j < count($foto[$i]); $j++) { 
                                ?>
                                <a class="carousel-item" href="<?=$fotohref[$j]?>"><div class="image" style="background-image: url('<?=baseurl('assets/images/project/').$foto[$i][$j]?>')"></div></a>
                                <?php } ?>
                            </div>
                            <div class="row mb0" style="padding-left:24px; padding-right: 24px; padding-top: 8px">
                                <div class="col s12">
                                    <p class="font24"><?=$value->nama_project?></p>
                                </div>
                                <div class="col s12">
                                    <div class="row valign-wrapper">
                                        <div class="col s2">
                                            <img src="<?=baseurl('assets/images/user/').$value->foto_user?>" alt="" class="circle responsive-img">
                                        </div>
                                        <div class="col s10">
                                            <a href="<?= baseurl('profile.php?id=' . $value->id_user) ?>">
                                                <span class="black-text font17"><?= $value->nama ?></span>
                                                <p class="m0 font12"><?= $value->alamat ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row valign-wrapper mb0 custom-padding">

                                <div class="col s12">

                                    <h3 class="card-title font20"><?=money($value->income) . ' / ' . money($value->target)?></h3>
                                    <div class="progress">
                                        <div class="determinate deep-orange darken-1" style="width: <?=percent($value->income,$value->target)?>%"></div>
                                    </div>
                                    <div class="col s12 my1">
                                        <a href="detailproject.php?id=<?=$value->id_project?>"><button type="button" class="full-width waves-effect deep-orange darken-1 waves-light btn">Contribute</button></a>
                                    </div>
                                </div>

                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
        <div class="content-explore">
            <div class="row pt1">
                <div class="col s12 py1">
                    <span class="font-title">Category Explore</span>
                </div>
                <?php 
                    $color = array('red', 'indigo', 'deep-orange', 'deep-purple', 'blue', 'green', 'brown');
                    shuffle($color);
                ?>
                <?php $i = 0; foreach ($kategori as $key => $value): ?>
                <div class="col l3 pl1 pr1">
                    <a href="explore.php?ktg=<?= $value->id_kategori ?>">
                        <div class="card <?= $color[$i] ?>">
                            <div class="card-image card-image-explore">
                                <div class="back-overlay"></div>
                                <div class="card-title center-align pt4" style="top: 0; right: 0;">
                                    <div class="title pt1">
                                        <span><?= $value->nama_kategori ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php 
                    if ($i == (count($kategori) - 1)) {
                        $i = 0;
                        shuffle($color);
                    }
                    $i++; endforeach; 
                ?>
            </div>
        </div>
    </div>
</div>
<div class="parallax-container parallax-footer">
    <div class="parallax">
        <img src="<?=baseurl('assets/images/template/bg.jpg')?>">
        <div class="back-overlay"></div>
    </div>
    <div class="parallax-content py3">
        <div class="container white-text">
            <div class="row center-align" style="margin-top: 13vh">
                <h3 class="mb2">Let us hear your brilliant Ideas</h3>
                <a href="formproject.php" class="waves-effect waves-light btn indigo darken-1">Start your project</a>
            </div>
        </div>
    </div>

</div>
